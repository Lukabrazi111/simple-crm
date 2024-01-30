<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function create()
    {
        return view('reset-password.create');
    }

    /**
     * Reset password functionality
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        $request->validated();

        $user = User::whereEmail($request->email)->first();
        $token = $this->storeUserToken($user);

        Mail::to($user)->send(new ResetPasswordMail($token));

        return redirect()->back()->with('success', __('passwords.sent'));
    }

    /**
     * Store user token in password resets table
     *
     * @param $user
     * @return \Illuminate\Http\RedirectResponse|string
     */
    private function storeUserToken($user)
    {
        // TODO: need to fix email exists if statement.
        $emailExists = DB::table('password_reset_tokens')->whereEmail($user->email)->exists();

        if ($emailExists) {
            return redirect()->back()->with('error', __('passwords.already_sent'));
        }

        $token = Str::random(60);

        DB::table('password_reset_tokens')->insert([
            'email' => $user->email,
            'token' => $token,
        ]);

        return $token;
    }
}

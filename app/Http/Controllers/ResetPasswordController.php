<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\SendResetPasswordRequest;
use App\Mail\ResetPasswordMail;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    /**
     * Reset password functionality
     */
    public function sendResetPassword(SendResetPasswordRequest $request)
    {
        $request->validated();

        $user = User::whereEmail($request->email)->first();

        $token = $this->storeUserToken($user);

        if (is_null($token)) {
            return redirect()->back()->with('error', __('passwords.already_sent'));
        }

        Mail::to($user)->send(new ResetPasswordMail($token));

        return redirect()->back()->with('success', __('passwords.sent'));
    }

    /**
     * Save and get token inside reset password table
     *
     * @param $user
     * @return string|null
     */
    private function storeUserToken($user)
    {
        $emailExists = ResetPassword::whereEmail($user->email)->exists();

        if ($emailExists) {
            return null;
        }

        $token = Str::random(60);

        ResetPassword::create([
            'email' => $user->email,
            'token' => $token,
        ]);

        return $token;
    }

    /**
     * Display a listing of the resource
     */
    public function create()
    {
        return view('reset-password.create');
    }

    /**
     * Reset password with token
     *
     * @param ResetPasswordRequest $request
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(ResetPasswordRequest $request, $token)
    {
        $request->validated();

        $user = $this->getUserByToken($token);

        $user->update([
            'password' => bcrypt($request->password),
        ]);

        $this->deleteResetPasswordData($token);

        return redirect()->route('login')->with('success', __('passwords.reset', ['email' => $user->email]));
    }

    /**
     * Get user by token
     *
     * @param $token
     * @return User|\Illuminate\Http\RedirectResponse
     */
    private function getUserByToken($token)
    {
        $userToken = ResetPassword::whereToken($token)->first();

        if (!$userToken) {
            return redirect()->back()->with('error', __('passwords.token'));
        }

        return User::whereEmail($userToken->email)->first();
    }

    private function deleteResetPasswordData($token)
    {
        return ResetPassword::whereToken($token)->delete();
    }

    public function resetPasswordCreate($token)
    {
        return view('reset-password.update', ['token' => $token]);
    }

}

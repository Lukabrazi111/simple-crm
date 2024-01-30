<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        return view('login.index');
    }

    /**
     * Authorize user in the system
     */
    public function login(AuthRequest $request)
    {
        $request->validated();

        if (!Auth::attempt($request->validated())) {
            return redirect()->back()->with('error', __('auth.failed'));
        }

        $user = User::whereEmail($request->email)->first();

        $user->createToken('crm-token')->plainTextToken;

        return redirect()->route('home');
    }

    /**
     * Logout user from the system
     */
    public function logout()
    {
        Auth::user()->tokens()->delete();
        Auth::guard('web')->logout();

        return redirect()->route('login')->with('success', __('auth.logout'));
    }
}

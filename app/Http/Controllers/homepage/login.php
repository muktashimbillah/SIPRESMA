<?php

namespace App\Http\Controllers\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class login extends Controller
{
    public function index()
    {
        return view('homepage.login');
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect()
            ->back()
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'These credentials do not match our records.',
                'password' => 'Invalid password provided.',
            ]);
    }

    public function lupasandi()
    {
        return 0;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('homepage');
    }
}

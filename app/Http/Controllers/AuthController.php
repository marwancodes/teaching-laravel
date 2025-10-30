<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister() {
        return view('auth.register');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function register(StoreUserRequest $request) {

        $user = User::create($request->validated());

        Auth::login($user);

        return redirect()->route('developers.index');
    }

    public function login(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('developers.index');
        }

        throw ValidationException::withMessages([
            'credentials' => 'Sorry, incorrect credentials provided.',
        ]);
    }

    public function logout (Request $request) {
       
        Auth::logout();

        return redirect()->route('auth.login');
    }
}



// if (Auth::attempt($validated)) {
//             $request->session()->regenerate();

//             return redirect()->intended('developers.index');
//         }
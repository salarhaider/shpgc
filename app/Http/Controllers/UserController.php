<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => [
                'required',
                'string',
                'alpha_num',
                'min:4',           // Minimum length
                'max:20',          // Maximum length
                'unique:users',    // Ensure the username is unique in the users table
                'not_in:admin,root,superuser,username', // Example: Reserve some words (optional)
            ],
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }
    }

    public function login_user(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            return redirect()->route('dashboard');

        } else {
            $message = "Invalid Email or Password";
            return redirect()->route('login')->with('message', $message);
        }
    }

    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect()->route('login');

        }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}

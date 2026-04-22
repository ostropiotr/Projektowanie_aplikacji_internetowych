<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin() { 
        return view('auth.login'); 
    }

    public function showRegister() { 
        return view('auth.register'); 
    }

    public function login(Request $request) {
        $login = $request->input('login');
        $pass  = $request->input('password');

        if ($login === 'admin' && $pass === 'admin123') {
            session([
                'role' => 'admin', 
                'user' => 'Administrator'
            ]);
            return redirect()->route('calc.index');
        }

        if (Auth::attempt(['email' => $login, 'password' => $pass])) {
            $user = Auth::user();
            session([
                'role' => 'guest', 
                'user' => $user->name
            ]);
            return redirect()->route('calc.index');
        }

        return back()->withErrors(['login_error' => 'Błędny login lub hasło']);
    }

    public function register(Request $request) {
		$messages = [
			'login.unique'   => 'Ten login jest już zajęty przez kogoś innego',
			'password.required' => 'Hasło jest wymagane',
			'password.min'      => 'Hasło musi mieć co najmniej 6 znaków',
			'password.confirmed' => 'Hasła w obu polach muszą być identyczne',
		];

		$request->validate([
			'login' => 'required|string|max:255|unique:users,email',
			'password' => 'required|string|min:6|confirmed',
		], $messages);

		User::create([
			'name' => $request->login,
			'email' => $request->login,
			'password' => Hash::make($request->password),
		]);

		return redirect()->route('login')->with('success', 'Konto utworzone, możesz się zalogować');
	}

    public function logout() {
        Auth::logout();
        session()->forget(['role', 'user']);
        return redirect()->route('login');
    }
}
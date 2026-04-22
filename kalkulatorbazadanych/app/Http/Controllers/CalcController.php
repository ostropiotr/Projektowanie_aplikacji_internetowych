<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{

    public function loginAdmin(Request $request) {
		$hardcoded_login = "admin";
		$hardcoded_pass  = "admin";

		$login = $request->input('login');
		$pass  = $request->input('password');

		if ($login === $hardcoded_login && $pass === $hardcoded_pass) {
			session(['role' => 'admin', 'user' => 'Administrator']);
			return redirect()->route('calc.index');
		}

		return back()->withErrors(['login_error' => 'Błędny login lub hasło']);
	}

    public function loginGuest() {
        session(['role' => 'guest', 'user' => 'Gość']);
        return redirect()->route('calc.index');
    }

    public function logout() {
        session()->forget(['role', 'user']);
        return redirect()->route('login');
    }

    public function index() {
        return view('calc', [
            'kwota' => null, 
            'procent' => null, 
            'lata' => null, 
            'wynik' => null
        ]);
    }

    public function calculate(Request $request) {
        $messages = [
            'kwota.required'   => 'Proszę podać kwotę kredytu.',
            'kwota.numeric'    => 'Wartość kwoty musi być liczbą.',
            'kwota.min'        => 'Kwota musi być większa od zera.',
            
            'lata.required'    => 'Proszę podać liczbę lat.',
            'lata.numeric'     => 'Lata muszą być liczbą.',
            'lata.min'         => 'Okres musi wynosić przynajmniej :min rok.',
            
            'procent.required' => 'Proszę podać oprocentowanie.',
            'procent.numeric'  => 'Oprocentowanie musi być liczbą.',
            'procent.min'      => 'Oprocentowanie nie może być ujemne.',
        ];

        $request->validate([
            'kwota'   => 'required|numeric|min:1',
            'procent' => 'required|numeric|min:0',
            'lata'    => 'required|numeric|min:1',
        ], $messages);

        $kwota   = $request->kwota;
        $procent = $request->procent;
        $lata    = $request->lata;

        if (session('role') === 'guest' && $kwota > 10000) {
            return back()->withErrors([
                'kwota' => 'Jako Gość możesz obliczać raty tylko dla kwot do 10 000 zł.'
            ])->withInput(); 
        }

        $k1 = (($procent * $lata) / 100) * $kwota;
        $k2 = $kwota + $k1;
        $wynik = $k2 / ($lata * 12);
		
        return redirect()->route('calc.index')->with(['wynik' => $wynik]);
    }
}
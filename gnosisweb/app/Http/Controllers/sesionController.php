<?php
namespace App\Http\Controllers;

use App\Models\proyrcrems;
use Illuminate\Http\Request;


class SesionController extends Controller
    {
        public function index()
        {
            return view('iniciosesion');
        }

        public function login(Request $request)
        {
            // Validar las credenciales de entrada
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Autenticación exitosa
                return redirect()->route('decision');
            }

            // Autenticación fallida
            return redirect()->route('login')->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }

        public function decision()
        {
            return view('decision');
        }
    }

?>
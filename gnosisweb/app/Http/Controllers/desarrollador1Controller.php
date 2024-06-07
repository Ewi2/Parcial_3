<?php
namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class desarrollador1Controller extends Controller{
    public function index() {
        return view('desarrollador1');
    }
    public function mostrar()
    {
        $equipos = equipo::all();
        return view('desarrollador1', compact('equipos'));
    }

    public function desarrollador1()
    {
        $equipo = equipo::find(4);

        if ($equipo) {
            return view('desarrollador1', compact('equipo'));
        } else {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }
    }
}
<?php
namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class desarrollador3Controller extends Controller{
    public function index() {
        return view('desarrollador3');
    }
    public function mostrar()
    {
        $equipos = equipo::all(); 
        return view('desarrollador3', compact('equipos'));
    }
    public function mostrarEquipo2()
    {
        $equipo = equipo::find(6);

        if ($equipo) {
            return view('equipoDetalle', compact('equipo'));
        } else {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }
    }
}
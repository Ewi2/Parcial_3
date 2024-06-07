<?php
namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class desarrollador4Controller extends Controller{
    public function index() {
        return view('desarrollador4');
    }
    public function mostrar()
    {
        $equipos = equipo::all(); 
        return view('desarrollador4', compact('equipos'));
    }
    public function mostrarEquipo2()
    {
        $equipo = equipo::find(7);

        if ($equipo) {
            return view('equipoDetalle', compact('equipo'));
        } else {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }
    }
}
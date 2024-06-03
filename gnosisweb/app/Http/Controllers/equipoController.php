<?php 
namespace App\Http\Controllers;

use App\Models\equipo;
use Illuminate\Http\Request;

class equipoController extends Controller
{
    public function index(){
        return view('desarrollador');
    }

    public function guardar(Request $request){
        equipo::create($request->all());
        return redirect('/desarrollador');
    }

    public function mostrar()
    {
        $equipos = equipo::all(); 
        return view('ver_info', compact('equipos'));
    }
}
?>
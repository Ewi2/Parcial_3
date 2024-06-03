<?php 
namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;

class proyectoController extends Controller
{
    public function index(){
        return view('proyecto');
    }

    public function guardar(Request $request){
        proyectos::create($request->all());
        return redirect('/proyecto');
    }

    public function mostrar()
    {
        $proyectos = Proyectos::all(); // si no estoy mal de aqui se estan extrayendo los datos del 'modelo o tabla'
        return view('/pagina_1', compact('proyectos'));// Y aqui lo que se hace es pasar los proyectos a la 'vista o html'
    }
}
?>
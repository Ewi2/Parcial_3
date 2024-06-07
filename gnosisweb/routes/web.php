<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proyectoController;
use App\Http\Controllers\equipoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\desarrollador1Controller;
use App\Http\Controllers\desarrollador2Controller;
use App\Http\Controllers\desarrollador3Controller;
use App\Http\Controllers\desarrollador4Controller;

Route::get('/', function () {
    return view('pag_principal');
});


require __DIR__.'/auth.php';
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/controles', function(){
    return view('controles');
});

Route::get('/mundo', function(){
    return view('mundoYniveles');
});

Route::get('/decision', function(){
    return view('decision');
});

Route::get('/desarrollador', function(){
    return view('desarrollador');
});

Route::get('/quienesSomos', function(){
    return view('quienes');
});

Route::get('/personajes', function(){
    return view('personajes');
});

Route::get('/inicioSesion', function(){
    return view('iniciosesion');
});

Route::get('/desarrollador1', function(){
    return view('desarrollador1');
});
Route::get('/desarrollador1', [desarrollador1Controller::class, 'index']);
Route::get('/desarrollador1/mostrar', [desarrollador1Controller::class, 'mostrar']);

Route::get('/desarrollador2', function(){
    return view('desarrollador2');
});
Route::get('/desarrollador2', [desarrollador2Controller::class, 'index']);
Route::get('/desarrollador2/mostrar', [desarrollador2Controller::class, 'mostrar']);

Route::get('/desarrollador3', function(){
    return view('desarrollador3');
});
Route::get('/desarrollador3', [desarrollador3Controller::class, 'index']);
Route::get('/desarrollador3/mostrar', [desarrollador3Controller::class, 'mostrar']);

Route::get('/desarrollador4', function(){
    return view('desarrollador4');
});
Route::get('/desarrollador4', [desarrollador4Controller::class, 'index']);
Route::get('/desarrollador4/mostrar', [desarrollador4Controller::class, 'mostrar']);

Route::get('/pagina1', function(){
    return view('pagina_1');
});

Route::get('/infoGeneral', function(){
    return view('informacionGeneral');
});

Route::get('/proyecto', function(){
    return view('proyecto');
});
Route::get('/ver_info',function(){
    return view('ver_info');
});
Route::get('/proyecto',[proyectoController::class,'index']);
Route::post('/proyecto',[proyectoController::class,'guardar']);
Route::get('/proyectos', [ProyectoController::class, 'mostrar']); // es la ruta en la que se mostrara en este caso es http://127.0.0.1:8000/proyectos

Route::get('/equipo', [equipoController::class, 'mostrar']);
Route::post('/desarrollador', [equipoController::class, 'guardar']);
Route::get('/desarrollador', [equipoController::class, 'index']);

Route::get('/verInfo', function(){
    return view('ver_info');
});

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    protected $guarded = array();
    use HasFactory;

    protected $Fillable=[
        'tipo_tarea',
        'desc_encargados',
        'herramientas_utilizadas',
        'descripcion',
        'imagen',
        'tiempo_empleado'
    ];
}
?>
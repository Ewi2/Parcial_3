<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    protected $guarded = array();
    use HasFactory;

    protected $Fillable=[
        'area',
        'rol',
        'nomb_desarrollador',
        'info_personal',
        'proyecto_trabajado'
    ];
}
?>
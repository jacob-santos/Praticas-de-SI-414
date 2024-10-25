<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    use HasFactory;

    protected $table = 'smartphones'; 

    protected $fillable = [
        'marca', 
        'modelo', 
        'sistema_operativo', 
        'capacidad_almacenamiento'
    ];
}

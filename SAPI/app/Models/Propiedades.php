<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;
    protected $table = 'propiedades';
    protected $fillable = [
        'direccion', 
        'tipo', 
        'tamaño', 
        'numero_habitaciones', 
        'precio', 
        'estado',
        
    ];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

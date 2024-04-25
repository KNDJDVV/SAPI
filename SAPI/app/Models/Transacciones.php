<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    use HasFactory;
    protected $table = 'transacciones';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 
        'propiedad_id', 
        'cliente_id', 
        'tipo_transaccion', 
        'fecha_transaccion', 
        'monto_transaccion',
    ];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'created_at',
        'updated_at'
    ];
}
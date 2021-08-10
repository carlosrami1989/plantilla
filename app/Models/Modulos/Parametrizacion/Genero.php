<?php

namespace App\Models\Modulos\Parametrizacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $table = 'tbgenero';
    /**
     * @var string
     */
   
    public $timestamps = false;
    protected $fillable = [
        'codigo', 'descripcion', 'abreviatura', 'status' 
    ];
}

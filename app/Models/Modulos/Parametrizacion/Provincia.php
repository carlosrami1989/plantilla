<?php

namespace App\Models\Modulos\Parametrizacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'tbprovincia';
    /**
     * @var string
     */
   
    public $timestamps = false;
    protected $fillable = [
        'codigo', 'pais', 'descripcion', 'abreviatura', 'cliprovincia'
    ];
 
}

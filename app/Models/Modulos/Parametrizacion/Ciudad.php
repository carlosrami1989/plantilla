<?php

namespace App\Models\Modulos\Parametrizacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'tbciudad';
    /**
     * @var string
     */
   
    public $timestamps = false;
    protected $fillable = [
       'codigo','pais','provincia','descripcion','abreviatura' 
    ];
 
}

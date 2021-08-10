<?php

namespace App\Models\Modulos\Administracion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'tbPaciente';
    /**
     * @var string
     */
   
    public $timestamps = false;

    protected $fillable = [
        'id', 'cedula', 'primer_nombre', 'segundo_nombre', 'apellido_paterno', 'apellido_materno', 'genero', 
        'fecha_nacimiento', 'lugar_nacimiento', 'ocupacion', 
        'estado_civil', 'direccion', 'des_campo2', 'pais', 'celular', 
        'etnico', 'cedula_titular', 'apellido_pat_afi', 'apellido_mat_afi',
         'nombre_pri_afi', 'nombre_seg_afi', 'direccion_afi', 'telefono_afi', 
         'usuario_ingreso', 'fecha_ingreso', 'usuario_modificacion', 'fecha_modificacion', 'pcname', 
         'status', 'tipo_sangre', 'nacionalidad', 'provincia', 'ciudad', 'telefono', 'otro', 
         'observacion', 'lugar_trabajo', 'tipo_parentesco', 'tipo_beneficiario', 'tipo_seguro',
          'des_campo1', 'des_campo3', 'status_discapacidad', 'carnet_conadis', 'status_otro_seguro', 
          'tipo_seguro_iess', 'descripcion_otro_seguro', 'tipo_identificacion'
    ];
    protected $appends = [
          'FULLNAME' 
    ];
    public function getFULLNAMEattribute()
    {
        $nombres =  $this->apellido_paterno.' '.$this->apellido_materno.' '.$this->primer_nombre.' '.$this->segundo_nombre;

        return $nombres;
    }

}

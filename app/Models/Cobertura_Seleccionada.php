<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobertura_Seleccionada extends Model
{
    use HasFactory;
   public $fillable = ['clase_de_riesgo', 'porcentaje_poliza', 'valor_asegurado', 'vigencia_pol', 'estado','iva','tipo_de_poliza','order_nombre'];
}

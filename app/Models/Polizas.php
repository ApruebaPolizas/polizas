<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polizas extends Model
{
    use HasFactory;
    public $fillable = ['clase_de_riesgo', 'porcentaje_amparo', 'valor_asegurado', 'vigencia_pol','vigencia' ,'estado','iva','tipo_de_poliza','origen'];
}

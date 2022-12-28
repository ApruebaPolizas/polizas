<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliza_Coberturas extends Model
{
    use HasFactory;
    public $fillable = ['clase_de_riesgo', 'porcentaje_amparo', 'valor_asegurado', 'vigencia_pol','iva','tipo_de_poliza','order_number','id_aseguradora','vigencia','origen'];
}

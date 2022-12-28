<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IVA extends Model
{
    use HasFactory;
    public $fillable = ['impuseto_name','porcentaje_valor'];
}

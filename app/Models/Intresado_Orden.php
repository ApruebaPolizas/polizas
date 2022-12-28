<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intresado_Orden extends Model
{
    use HasFactory;
    public $fillable = ['order_number ', 'id_user_interesado', 'email_interesado ', ' id_user_last_editor',];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Orden extends Model
{
    use HasFactory;
    public $fillable = ['order_number', 'id_user',
    'comentario '];
}

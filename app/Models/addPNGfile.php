<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addPNGfile extends Model
{
    use HasFactory;
    protected $table = 'add_p_n_gfiles';

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'size'
    ];
}

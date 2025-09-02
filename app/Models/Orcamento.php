<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
        'id_user',
        'id_servvico',
        'obs',
        'data'
    ];
}

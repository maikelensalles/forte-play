<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{

    protected $table = 'afiliados'; 

    protected $fillable = [
        'id', 'nome', 'telefone', 'created_at'
    ];
}

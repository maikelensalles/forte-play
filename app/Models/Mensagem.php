<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table = 'mensagens'; 

    protected $fillable = [
        'titulo', 'alerta', 'status'
    ];
}

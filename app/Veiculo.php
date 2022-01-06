<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [ // Trata-se de um modelo para criar registros em massa (exige uma configuração)
        'titulo', 'descricao', 'valor','imagem','publicado'
    ];
}

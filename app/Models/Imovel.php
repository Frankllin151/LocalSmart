<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imoveis';

    protected $fillable = [
        'titulo',
        'foto1',
        'foto2',
        'foto3',
        'descricao',
        'localizacao',
        'proximidade',
        'transporte_publico',
        'quartos',
        'banheiros',
        'price',
    ];
}
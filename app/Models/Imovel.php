<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inquilinos;
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
        'status', 
        'numero_ap'
    ];

public function inquilinos()
{
    return $this->hasMany(Inquilinos::class , 'imovel_id');
}


}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquilinos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'inquilinos';

    protected $fillable = [
      'id',
      'user_id', 
      'imovel_id',
      'data_inicio_contrato', 
      'data_fim_contrato',
      'status',
      'contrato_pdf',
      'pagamento_recente'
    ];


    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function imovel()
{
    return $this->belongsTo(Imovel::class, 'imovel_id');
}



}
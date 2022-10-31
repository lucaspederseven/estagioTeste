<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'doces';
    protected $fillable = [
        'nome_produto',
        'preco_produto',
        'peso',
        'descricao',
        'data'
    ];
    protected $guarded =[];
    public $timestamps = false;
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    // Defina o nome da chave primária
    protected $primaryKey = 'i_a';

    // Indique que a chave primária não é incrementada automaticamente
    public $incrementing = true;

    // Defina o tipo da chave primária como inteiro
    protected $keyType = 'int';

    // Defina os atributos que podem ser preenchidos
    protected $fillable = ['Titulo', 'Descricao', 'Status', 'Data_Criacao', 'Data_atualizacao'];
}

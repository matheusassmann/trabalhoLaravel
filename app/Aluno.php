<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'disciplina', 'data_matricula', 'nota'];
    protected $guarded = ['id'];
    protected $table = 'aluno';
}

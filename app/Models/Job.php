<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    // Indicar o nome da tabela
    protected $table = 'jobs';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['queue', 'payload', 'attempts'];
}

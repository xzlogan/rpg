<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predador extends Model
{
    use HasFactory;
    protected $table = 'predadores';
    protected $fillable = [
        'titulo',
        'apelido',
        'descricao',
        'vantagem',
        'caca',
    ];
}

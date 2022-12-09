<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cla extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'apelido',
        'descricao',
        'tipo',
        'mascara',
        'ressonancia',
        'quemSao',
        'arquetipos',
        'primaria',
        'secundaria',
        'terciaria',
        'fraqueza',
        'organizacao',

        
    ];
}

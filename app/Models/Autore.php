<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'posicao', 'abreviacao', 'livros_de_fisicas_id'];
}

<?php

namespace App\Models;

use App\Http\Controllers\AutorController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'posicao', 'abreviacao', 'livros_de_fisicas_id'];

    // Pega o livro
    public function livros()
    {
        return $this->belongsTo(Livros_de_fisica::class);
    }
}

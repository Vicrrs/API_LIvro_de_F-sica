<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros_de_fisica extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    // Pegar todos os autores vinculados
    public function autores()
    {
        return $this->hasMany(Autore::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;

    protected $fillable = ['capitulo', 'conteudo', 'texto', 'autores_id'];

    // Pega o autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}

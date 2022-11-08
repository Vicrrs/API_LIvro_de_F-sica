<?php

namespace App\Http\Controllers;

use App\Models\Livros_de_fisica;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    
    public function index()
    {
        return Livros_de_fisica::all();
    }


    public function store(Request $request)
    {
        // dd('teste');
        if (Livros_de_fisica::create($request->all())) {
            return response()->json([
                'message' => 'Livro cadastrado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao cadastrar o Livro'
        ], 404);
    }

    
    public function show($livros)
    {
        $livros = Livros_de_fisica::find($livros);
        if ($livros) {
            return $livros;
        }
        return response()->json([
            'message' => 'Erro ao pesquisar o livro'
        ], 404);
    }

    
    public function update(Request $request, $livros)
    {
        $Livro = Livros_de_fisica::findOrFail($livros);
        if ($Livro) {
            $Livro->update($request->all());
            return $Livro;
        }
        return response()->json([
            'message' => 'Erro ao atualizar o Livro'
        ], 404);
    }

    
    public function destroy($livros)
    {
        if (Livros_de_fisica::destroy($livros)) {
            return response()->json([
                'message' => 'Livro deletado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar o Livro'
        ], 404);
    }
}

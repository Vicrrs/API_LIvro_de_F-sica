<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autore;

class AutorController extends Controller
{

    public function index()
    {
        return Autore::all();
    }


    public function store(Request $request)
    {
        if (Autore::create($request->all())) {
            return response()->json([
                'message' => 'Autor cadastrado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao cadastrar o Autor'
        ], 404);
    }


    public function show($autor)
    {
        $autor = Autore::find($autor);
        if ($autor) {
            return $autor;
        }
        return response()->json([
            'message' => 'Erro ao pesquisar o Autor'
        ], 404);
    }


    public function update(Request $request, $autor)
    {
        $autor = Autore::find($autor);
        if ($autor) {
            $autor->update($request->all());
            return $autor;
        }
        return response()->json([
            'message' => 'Erro ao atualizar o Autor'
        ], 404);
        
    }

    
    public function destroy($autor)
    {
        if (Autore::destroy($autor)) {
            return response()->json([
                'message' => 'Autor deletado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar o Autor'
        ], 404);
    }
}

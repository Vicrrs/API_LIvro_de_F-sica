<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use Illuminate\Http\Request;

class ConteudoController extends Controller
{

    public function index()
    {
        return Conteudo::all();
    }

    
    public function store(Request $request)
    {
        if (Conteudo::create($request->all())) {
            return response()->json([
                'message' => 'Conteudo cadastrado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao cadastrar o Conteudo'
        ], 404);
    }


    public function show($conteudo)
    {
        $conteudo = Conteudo::find($conteudo);
        if ($conteudo) {
            return $conteudo;
        }
        return response()->json([
            'message' => 'Erro ao pesquisar o Conteudo'
        ], 404);
    }


    public function update(Request $request, $conteudo)
    {
        $conteudo = Conteudo::find($conteudo);
        if ($conteudo) {
            $conteudo->update($request->all());
            return $conteudo;
        }
        return response()->json([
            'message' => 'Erro ao atualizar o Conteudo'
        ], 404);
    }


    public function destroy($conteudo)
    {
        if (Conteudo::destroy($conteudo)) {
            return response()->json([
                'message' => 'Conteudo deletado com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao deletar o Conteudo'
        ], 404);
    }
}

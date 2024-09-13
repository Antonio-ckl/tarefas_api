<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService
{

    public function create(array $tarefa)
    {
        $dados = Tarefa::create([
            "titulo" => $tarefa['titulo'],
            "descricao" => $tarefa['descricao'],
            "status" => 'Em aberto'
        ]);

        return $dados;
    }

    public function findByid($id)
    {
        $tarefa = Tarefa::find($id);   

        if($tarefa==null){
            return [
                'status'=>false,
                'message'=> 'Tarefa não encontrada'
            ];
        }
        return [
            'status' => true,
            'message'=> 'Pesquisa realizada com sucesso',
            'data'=>$tarefa
        ];
    }

    public function getALL()
    {
        $tarefas= Tarefa::all();

        return [
            'status'=>true,
            'message'=>'PesquisaRealizada COm Sucesso',
            'data'=> $tarefas
        ];
        }
    }
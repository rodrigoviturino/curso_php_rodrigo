<?php

    class tarefa{

        public $id;
        public $nome;
        public $descricao;
        public $status;

        public function incluir(){

        }

        public function listar(){
            
        }

        public function alterar(){
            
        }

        public function alterarStatus(){
            
        }

        public function apagar(){

        }
    }

    $tarefa = new tarefa();

    $tarefa->id=1;
    $tarefa->nome = "teste";
    $tarefa->status=1;

    echo $tarefa->id . "<br>";
    echo $tarefa->nome;

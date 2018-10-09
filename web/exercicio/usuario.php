<?php

    class Usuario{

        public $nomeCompleto;
        public $idade;
        public $cpf;
        public $nacionalidade;
        public $estudante;

    }

    // Instanciar Classe
    $usuarioJudas = new Usuario();

    // Atribuindo valor no ATRIBUTO da CLASSE
    $usuarioJudas->nomeCompleto = "Judas Silva";

    
    echo "Nome: " . $usuarioJudas->nomeCompleto . "<br>";
    echo "Idade:" . $usuarioJudas->idade = 20 . "<br>";
    echo "CPF:" . $usuarioJudas->cpf = 1231231434 . "<br>";
    echo "Nacionalidade: " . $usuarioJudas->nacionalidade = "br"  . "<br>";
    echo "Estudante: " . $usuarioJudas->estudante = true;
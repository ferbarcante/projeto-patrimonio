<?php

class Pessoa{
    private $id;
    private $cpf;
    private $nome;

    public function __construct($id, $cpf, $nome){
        $this->id = $id;
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}
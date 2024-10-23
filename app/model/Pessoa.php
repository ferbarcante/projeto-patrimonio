<?php

namespace App\Model;

class Pessoa{
    private $id;
    private $cpf;
    private $nome;

    public function getId()
    {
        return $this->id;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
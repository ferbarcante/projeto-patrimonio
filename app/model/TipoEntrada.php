<?php

namespace app\model;

class TipoEntrada 
{
    private $id;
    private $nome;

    public function getId()
    {
        return $this->id;
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
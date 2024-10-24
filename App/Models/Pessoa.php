<?php

namespace App\Model;

class Pessoa{
    private $idPessoa;
    private $cpfPessoa;
    private $nmPessoa;
    
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    public function getCpfPessoa()
    {
        return $this->cpfPessoa;
    }

    public function setCpfPessoa($cpfPessoa)
    {
        $this->cpfPessoa = $cpfPessoa;
    }

    public function setNmPessoa($nmPessoa)
    {
        $this->nmPessoa = $nmPessoa;
    }

    public function getNmPessoa()
    {
        return $this->nmPessoa;
    }


}
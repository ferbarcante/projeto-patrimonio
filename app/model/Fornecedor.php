<?php

class Fornecedor 
{
    private $id;
    private $nome;
    private $cnpjcpf;

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCnpjCpf($cnpjcpf){
        $this->cnpjcpf = $cnpjcpf;
    }

    public function getCnpjCpf(){
        return $this->cnpjcpf;
    }

}
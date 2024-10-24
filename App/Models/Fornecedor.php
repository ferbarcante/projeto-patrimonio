<?php

namespace App\Model;

class Fornecedor 
{
    private $idFonecedor;
    private $nmFornecedor;
    private $sgCnpjcpf;
    private $db;

    public function getIdFonecedor()
    {
        return $this->idFonecedor;
    }

    public function setIdFonecedor($idFonecedor)
    {
        $this->idFonecedor = $idFonecedor;
    }

    public function getNmFornecedor()
    {
        return $this->nmFornecedor;
    }

    public function setNmFornecedor($nmFornecedor)
    {
        $this->nmFornecedor = $nmFornecedor;
    }

    public function getSgCnpjcpf()
    {
        return $this->sgCnpjcpf;
    }

    public function setSgCnpjcpf($sgCnpjcpf)
    {
        $this->sgCnpjcpf = $sgCnpjcpf;
    }



}
<?php

namespace App\Model;

class Setor
{
    private $idSetor;
    private $cdSetor;
    private $nmSetor;
    private $dsEndereco;
    private Pessoa $pessoa;

    public function getIdSetor()
    {
        return $this->idSetor;
    }

    public function setIdSetor($idSetor)
    {
        $this->idSetor = $idSetor;
    }

    public function getCdSetor()
    {
        return $this->cdSetor;
    }

    public function setCdSetor($cdSetor)
    {
        $this->cdSetor = $cdSetor;
    }

    public function getNmSetor()
    {
        return $this->nmSetor;
    }

    public function setNmSetor($nmSetor)
    {
        $this->nmSetor = $nmSetor;
    }

    public function getDsEndereco()
    {
        return $this->dsEndereco;
    }

    public function setDsEndereco($dsEndereco)
    {
        $this->dsEndereco = $dsEndereco;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }

    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }


}
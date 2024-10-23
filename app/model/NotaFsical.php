<?php

namespace App\Model;

class NotaFiscal 
{
    private $idNotaFiscal;
    private Patrimonio $patrimonio;
    private $nmNotaFiscal;
    private $sgUf;
    private $dtEmissao;
    private $nmSerie;
    private Fornecedor $fornecedor;

    public function getId()
    {
        return $this->idNotaFiscal;
    }

    public function setNmNotaFiscal($nmNotaFiscal)
    {
        $this->nmNotaFiscal = $nmNotaFiscal;
    }

    public function getNmNotaFiscal()
    {
        return $this->nmNotaFiscal;
    }

    public function setPatrimonio($patrimonio)
    {
        $this->patrimonio = $patrimonio;
    }

    public function getPatrimonio()
    {
        return $this->patrimonio;
    }

    public function setFornecedor($fornecedor)
    {
        $this->patrimonio = $fornecedor;
    }

    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    public function setSgUf($sgUf)
    {
        $this->sgUf = $sgUf;
    }

    public function getgUf()
    {
        return $this->sgUf;
    }

    public function setDtEmissao($dtEmissao)
    {
        $this->dtEmissao = $dtEmissao;
    }

    public function getDtEmissao()
    {
        return $this->dtEmissao;
    }

    public function setNmSerie($nmSerie)
    {
        $this->nmSerie = $nmSerie;
    }

    public function getNmSerie()
    {
        return $this->nmSerie;
    }



}
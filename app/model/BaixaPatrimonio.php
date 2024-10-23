<?php

namespace App\model;

class BaixaPatrimonio
{
    private $idBaixaPatrimonio;
    private $cdBaixa;
    private $dtBaixa;
    private $vlTotalBaixa;
    private $dsObservacao;

    public function getIdBaixaPatrimonio()
    {
        return $this->idBaixaPatrimonio;
    }

    public function setIdBaixaPatrimonio($idBaixaPatrimonio): void
    {
        $this->idBaixaPatrimonio = $idBaixaPatrimonio;
    }

    public function getCdBaixa()
    {
        return $this->cdBaixa;
    }

    public function setCdBaixa($cdBaixa): void
    {
        $this->cdBaixa = $cdBaixa;
    }

    public function getDtBaixa()
    {
        return $this->dtBaixa;
    }

    public function setDtBaixa($dtBaixa): void
    {
        $this->dtBaixa = $dtBaixa;
    }

    public function getVlTotalBaixa()
    {
        return $this->vlTotalBaixa;
    }

    public function setVlTotalBaixa($vlTotalBaixa): void
    {
        $this->vlTotalBaixa = $vlTotalBaixa;
    }

    public function getDsObservacao()
    {
        return $this->dsObservacao;
    }

    public function setDsObservacao($dsObservacao): void
    {
        $this->dsObservacao = $dsObservacao;
    }



}
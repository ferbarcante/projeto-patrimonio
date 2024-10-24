<?php

namespace App\model;

class BaixaPatrimonioDetalhe
{
    private $idBaixaPatrimonioDetalhe;
    private BaixaPatrimonio $baixaPatrimonio;
    private Patrimonio $patrimonio;
 
    
    public function getIdBaixaPatrimonioDetalhe()
    {
        return $this->idBaixaPatrimonioDetalhe;
    }

    public function getPatrimonio(): Patrimonio
    {
        return $this->patrimonio;
    }

    public function setPatrimonio(Patrimonio $patrimonio): void
    {
        $this->patrimonio = $patrimonio;
    }
   
    public function setBaixaPatrimonio(BaixaPatrimonio $baixaPatrimonio)
    {
        $this->baixaPatrimonio = $baixaPatrimonio;
    }

    public function getBaixaPatrimonio()
    {
        return $this->baixaPatrimonio;
    }

}
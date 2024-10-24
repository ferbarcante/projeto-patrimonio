<?php

namespace app\model;

class TipoEntrada 
{
    private $idTipoEntrada;
    private $nmTipoEntrada;

    public function getNmTipoEntrada()
    {
        return $this->nmTipoEntrada;
    }

    public function setNmTipoEntrada($nmTipoEntrada)
    {
        $this->nmTipoEntrada = $nmTipoEntrada;
    }

    public function getIdTipoEntrada()
    {
        return $this->idTipoEntrada;
    }

    public function setIdTipoEntrada($idTipoEntrada)
    {
        $this->idTipoEntrada = $idTipoEntrada;
    }


}
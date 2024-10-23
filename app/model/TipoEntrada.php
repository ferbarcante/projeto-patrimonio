<?php

namespace app\model;

class TipoEntrada 
{
    private $idTipoEntrada;
    private $nmTipoEntrada;

    public function getId()
    {
        return $this->idTipoEntrada;
    }

    public function setNome($nmTipoEntrada)
    {
        $this->nmTipoEntrada = $nmTipoEntrada;
    }

    public function getNome()
    {
        return $this->nmTipoEntrada;
    }
}
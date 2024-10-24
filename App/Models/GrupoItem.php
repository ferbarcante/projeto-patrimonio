<?php

namespace App\model;

class GrupoItem
{
    private $idGrupoItem;
    private $cdGrupoItem;
    private $nmGrupoItem;
    private $dsGrupoItem;

    public function getIdGrupoItem()
    {
        return $this->idGrupoItem;
    }

    public function setIdGrupoItem($idGrupoItem)
    {
        $this->idGrupoItem = $idGrupoItem;
    }

    public function getDsGrupoItem()
    {
        return $this->dsGrupoItem;
    }

    public function setDsGrupoItem($dsGrupoItem)
    {
        $this->dsGrupoItem = $dsGrupoItem;
    }

    public function getNmGrupoItem()
    {
        return $this->nmGrupoItem;
    }


    public function setNmGrupoItem($nmGrupoItem)
    {
        $this->nmGrupoItem = $nmGrupoItem;
    }

    /**
     * @return mixed
     */
    public function getCdGrupoItem()
    {
        return $this->cdGrupoItem;
    }

    public function setCdGrupoItem($cdGrupoItem)
    {
        $this->cdGrupoItem = $cdGrupoItem;
    }


}
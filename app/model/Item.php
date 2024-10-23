<?php

namespace App\Model;

class Item 
{
   private $idItem;
   private $cdItem;
   private $nmItem;
   private $vlUnidadeMedida;
   private GrupoItem $grupoItem;

    /**
     * @return mixed
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * @param mixed $idItem
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;
    }

    /**
     * @return GrupoItem
     */
    public function getGrupoItem()
    {
        return $this->grupoItem;
    }

    /**
     * @param GrupoItem $grupoItem
     */
    public function setGrupoItem($grupoItem)
    {
        $this->grupoItem = $grupoItem;
    }

    /**
     * @return mixed
     */
    public function getVlUnidadeMedida()
    {
        return $this->vlUnidadeMedida;
    }

    /**
     * @param mixed $vlUnidadeMedida
     */
    public function setVlUnidadeMedida($vlUnidadeMedida)
    {
        $this->vlUnidadeMedida = $vlUnidadeMedida;
    }

    /**
     * @return mixed
     */
    public function getNmItem()
    {
        return $this->nmItem;
    }

    /**
     * @param mixed $nmItem
     */
    public function setNmItem($nmItem)
    {
        $this->nmItem = $nmItem;
    }

    /**
     * @return mixed
     */
    public function getCdItem()
    {
        return $this->cdItem;
    }

    /**
     * @param mixed $cdItem
     */
    public function setCdItem($cdItem)
    {
        $this->cdItem = $cdItem;
    }


}
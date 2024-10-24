<?php

namespace App\model;

class GrupoItem
{
    private $idGrupoItem;
    private $cdGrupoItem;
    private $nmGrupoItem;
    private $dsGrupoItem;

    private $db;

    public function __construct(\PDO $db)
    {
        $this->$db = $db;

    }

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

    public function getCdGrupoItem()
    {
        return $this->cdGrupoItem;
    }

    public function setCdGrupoItem($cdGrupoItem)
    {
        $this->cdGrupoItem = $cdGrupoItem;
    }

    public function cadastrarGrupoBem()
    {
        $query = "
            INSERT INTO grupo_bem(cd_grupoitem, nm_grupoitem)
                VALEUS(:cd_grupoitem, :nm_grupoitem, :ds_grupitem);
        ";

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(":cd_grupoitem", $this->getCdGrupoItem());
        $stmt->bindValue(":nm_grupoitem", $this->getNmGrupoItem());
        $stmt->bindValue(":ds_grupoitem", $this->getDsGrupoItem());

        $stmt->execute();

    }


}
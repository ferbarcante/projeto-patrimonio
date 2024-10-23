<?php

namespace App\Model

class Item 
{
   private $id;
   private $codigo;
   private $nome;
   private $valorUnidadeMedida;
   private $idGrupoItem;

   public function __construct($idItem,$codigoItem,$nomeItem,$valorUnidadeMedida,$idGrupoItem)
   {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valorUnidadeMedida = $valorUnidadeMedida;
        $this->idGrupo = $idGrupo;
   }

   public function getId()
   {
        return $this->id;
   }

   public function setCodigo($codigo)
   {
        $this->codigo = $codigo;
   }

   public function getCodigo()
   {
        return $this->codigo;
   }

   public function setNomeItem($nomeItem)
   {
        $this->nome = $nome;
   }

   public function getNome(){
        return $this->nome;
   }

   public function setValorUnidadeMedida($valorUnidadeMedida)
   {
        $this-valorUnidadeMedida = $valorUnidadeMedida;
   }

   public function getValorUnidadeMedida()
   {
        return $this->valorUnidadeMedida;
   }
   public function getIdGrupo()
   {
        return $this->idgrupo;
   }
}
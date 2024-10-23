<?php

namespace app\model;
namespace app\model\TipoEntrada;
namespace app\model\Item;
namespace app\model\Setor;

    class Patrimonio 
    {
        private $idPatrimonio;
        private $numeroPlaqueta;
        private Item $item;
        private $dataAquisicao;
        private TipoEntrada $tipoEntrada;
        private $valorItem;
        private $observacao;
        private Setor $setor;
        private $situacao;

        public function getId()
        {
            return $this->idPatrimonio;
        }

        public function setNumeroPlaqueta($numeroPlaqueta)
        {
            $this->numeroPlaqueta = $numeroPlaqueta;
        }

        public function getNumeroPlaqueta()
        {
            return $this->numeroPlaqueta;
        }

        public function setItem($item)
        {
            $this->item = $item;
        }

        public function getItem()
        {
            return $this->item;
        }

        public function setDataAquisicao($dataAquisicao)
        {
            $this->dataAquisicao = $dataAquisicao;
        }

        public function getDataAquisicao()
        {
            return $this->dataAquisicao;
        }

        public function setTipoEntrada($tipoEntrada)
        {
            $this->tipoEntrada = $tipoEntrada;
        }

        public function getTipoEntrada()
        {
            return $this->tipoEntrada;
        }

        public function setValorItem($valorItem)
        {
            $this->valorItem;
        }

        public function getValorItem()
        {
            return $this->valorItem;
        }

        public function setObservacao($observacao)
        {
            $this->observacao = $observacao;
        }

        public function getObservacao()
        {
            return $this->observacao;

        }

        public function setSetor($setor)
        {
            $this->setor = $setor;
        }

        public function getSetor()
        {
            return $this->setor;
        }

        public function setSituacao($situacao)
        {
            $this->situacao = $situacao;
        }  
    }
<?php

namespace app\model;


    class Patrimonio 
    {
        private $idPatrimonio;
        private $nmPlaqueta;
        private Item $item;
        private $dtAquisicao;
        private TipoEntrada $tipoEntrada;
        private $vlItem;
        private $dsObservacao;
        private Setor $setor;
        private $flSituacao;

        /**
         * @return mixed
         */
        public function getIdPatrimonio()
        {
            return $this->idPatrimonio;
        }

        /**
         * @param mixed $idPatrimonio
         */
        public function setIdPatrimonio($idPatrimonio)
        {
            $this->idPatrimonio = $idPatrimonio;
        }

        /**
         * @return mixed
         */
        public function getNmPlaqueta()
        {
            return $this->nmPlaqueta;
        }

        /**
         * @param mixed $nmPlaqueta
         */
        public function setNmPlaqueta($nmPlaqueta)
        {
            $this->nmPlaqueta = $nmPlaqueta;
        }

        /**
         * @return Item
         */
        public function getItem()
        {
            return $this->item;
        }

        /**
         * @param Item $item
         */
        public function setItem($item)
        {
            $this->item = $item;
        }

        /**
         * @return mixed
         */
        public function getDtAquisicao()
        {
            return $this->dtAquisicao;
        }

        /**
         * @param mixed $dtAquisicao
         */
        public function setDtAquisicao($dtAquisicao)
        {
            $this->dtAquisicao = $dtAquisicao;
        }

        /**
         * @return TipoEntrada
         */
        public function getTipoEntrada()
        {
            return $this->tipoEntrada;
        }

        /**
         * @param TipoEntrada $tipoEntrada
         */
        public function setTipoEntrada($tipoEntrada)
        {
            $this->tipoEntrada = $tipoEntrada;
        }

        /**
         * @return mixed
         */
        public function getVlItem()
        {
            return $this->vlItem;
        }

        /**
         * @param mixed $vlItem
         */
        public function setVlItem($vlItem)
        {
            $this->vlItem = $vlItem;
        }

        /**
         * @return mixed
         */
        public function getDsObservacao()
        {
            return $this->dsObservacao;
        }

        /**
         * @param mixed $dsObservacao
         */
        public function setDsObservacao($dsObservacao)
        {
            $this->dsObservacao = $dsObservacao;
        }

        /**
         * @return Setor
         */
        public function getSetor()
        {
            return $this->setor;
        }

        /**
         * @param Setor $setor
         */
        public function setSetor($setor)
        {
            $this->setor = $setor;
        }

        /**
         * @return mixed
         */
        public function getFlSituacao()
        {
            return $this->flSituacao;
        }

        public function setFlSituacao($flSituacao)
        {
            $this->flSituacao = $flSituacao;
        }


    }
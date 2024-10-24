<?php

namespace App\Model;

    class TransferenciaDetalhe
    {
        private $idTransferenciaPatrimonioDetalhe;
        private TransferenciaPatrimonio $idTransferenciaPatrimonio;
        private Patrimonio $idPatrimonio;
        private $idSetorDestino;

        public function getIdTransferenciaPatrimonioDetalhe()
        {
            return $this->idTransferenciaPatrimonioDetalhe;
        }

        public function getIdTransferenciaPatrimonio()
        {
            return $this->idTransferenciaPatrimonio;
        }

        public function getIdPatrimonio()
        {
            return $this->idPatrimonio;
        }

        public function getIdSetorOrigem()
        {
            return $this->idSetorDestino;
        }
    }
<?php

namespace App\Model;

    class TransferenciaDetalhe
    {
        private $idTransferenciaPatrimonioDetalhe;
        private TransferenciaPatrimonio $idTransferenciaPatrimonio;
        private Patrimonio $idPatrimonio;
        private $idSetorDestino;

        public getIdTransferenciaPatrimonioDetalhe()
        {
            return $this->idTransferenciaPatrimonioDetalhe;
        }

        public getIdTransferenciaPatrimonio()
        {
            return $idTransferenciaPatrimonio;
        }

        public getIdPatrimonio()
        {
            return $this->idPatrimonio;
        }

        public getIdSetorOrigem()
        {
            return $this->idSetorOrigem;
        }
    }
<?php

namespace App\Model;

    class TransferenciaPatrimonio 
    {
        private $idTransferenciaPatrimonio;
        private $cdTransferencia;
        private $dtTransferencia;
        private Setor $idSetorOrigem;
        private $vlTotalTransferencia;

        public function getIdTransferenciaPatrimonio()
        {
            return $this->idTransferenciaPatrimonio;
        }

        public function setCdTransferencia($cdTransferencia)
        {
            $this->cdTransferencia = $cdTransferencia;
        }

        public function getCdTransferencia()
        {
            return $this->cdTransferencia;
        }

        public function setDtTransferencia($dtTransferencia)
        {
            $this->dtTransferencia = $dtTransferencia;
        }

        public function getDtTransferencia()
        {
            return $this->dtTransferencia;
        }

        public function setIdSetorOrigem($idSetorOrigem)
        {
            $this->idSetorOrigem = $idSetorOrigem;
        }

        public function getIdSetorOrigem()
        {
            return $this->idSetorOrigem;
        }

        public function setVlTotalTransferencia($vlTotalTransferencia)
        {
            $this->vlTotalTransferencia = $vlTotalTransferencia;
        }

        public function getVlTotalTransferencia()
        {
            return $this->vlTotalTransferencia;
        }
    }
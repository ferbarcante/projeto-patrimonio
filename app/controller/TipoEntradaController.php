<?php 

use app\model;
use app\model\TipoEntrada;

class TipoEntradaController 
{
    public function index()
    {
        
    }

    public function create(TipoEntrada $tipoEntrada){
        $sql = "INSERT INTO tipo_entrada (nome, descricao) VALUES (?)";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute([$tipoEntrada->getNmTipoEntrada()]);

    }

    
}
<?php

use App\Conexao;

    require_once "../vendor/autoload.php";

    $route = new \App\Route;

    $conn = new Conexao();
    $conn->conectar();
?>
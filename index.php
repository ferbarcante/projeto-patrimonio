<?php

require_once 'app/Routes.php';
require_once 'app/controller/HomeController.php';


use app\Route;

echo "Iniciando aplicação...<br>";

try {
    $route = new Route();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
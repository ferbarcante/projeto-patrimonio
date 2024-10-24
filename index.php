<?php

require_once 'app/Routes.php';
require_once 'app/controller/HomeController.php';

use app\Route;
use app\controller\HomeController;

echo "Iniciando aplicação...<br>";

try {
    $route = new Route(); // Se você tiver alguma lógica de rotas aqui, certifique-se de que esteja correta.

    // Instanciando o controlador
    $controller = new HomeController();
    $controller->index();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
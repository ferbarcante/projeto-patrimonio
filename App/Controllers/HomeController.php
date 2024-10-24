<?php

namespace App\Controllers;

use App\Connection;

class HomeController
{

    public function index()
    {
        require_once "../App/Views/home.php";

    }
}
<?php

namespace app\controller;


class HomeController
{

    public function index()
    {
        include __DIR__ . '/../views/home.php';
    }
}
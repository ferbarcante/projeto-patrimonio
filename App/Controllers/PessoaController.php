<?php

namespace App\Controllers;

use App\Model\Pessoa;

class PessoaController
{

    private $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function index()
    {
        $pessoa = $this->pessoa->getAll();

        require_once "../App/Views/Pessoa/listar_pessoa.php";
    }

    
}
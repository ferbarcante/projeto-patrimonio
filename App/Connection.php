<?php

namespace App;

class Connection {
    private $host = 'localhost'; // ou o IP do servidor
    private $port = '5432'; // porta do PostgreSQL
    private $dbname = 'projeto-patrimonio'; // nome do banco de dados
    private $user = 'postgres'; // usuário do banco
    private $password = '123'; // senha do banco
    private $connection;

    // Método para abrir a conexão
    public function connect() {
        $connectionString = "host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->password}";

        $this->connection = pg_connect($connectionString);
        
        if (!$this->connection) {
            echo "Erro na conexão: " . pg_last_error();
            return null;
        }

        echo 'conectado';

        return $this->connection;
    }

    // Método para fechar a conexão
    public function close() {
        if ($this->connection) {
            pg_close($this->connection);
        }
    }
}
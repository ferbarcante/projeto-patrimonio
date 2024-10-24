<?php

namespace App;
use PDO;

class Connection {
    private $host = 'localhost'; 
    private $port = '5432'; 
    private $dbname = 'projetoPatrimonio'; 
    private $user = 'postgres';
    private $password = '123456'; 
    private $connection;

    // Método para abrir a conexão
    public function connect() {
        try {
            
            $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname};user={$this->user};password={$this->password}";
            $this->connection = new PDO($dsn);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->connection;

        } catch (\PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
            return null;
        }
    }
    
    public function close() {
        $this->connection = null; 
    }
}
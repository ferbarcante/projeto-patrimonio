<?php

namespace App\Model;

use PDO;

class Pessoa{
    private $idPessoa;
    private $cpfPessoa;
    private $nmPessoa;
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }
    
    
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    public function getCpfPessoa()
    {
        return $this->cpfPessoa;
    }

    public function setCpfPessoa($cpfPessoa)
    {
        $this->cpfPessoa = $cpfPessoa;
    }

    public function setNmPessoa($nmPessoa)
    {
        $this->nmPessoa = $nmPessoa;
    }

    public function getNmPessoa()
    {
        return $this->nmPessoa;
    }

    // crud 
    
    public function create() {
        $stmt = $this->db->prepare("INSERT INTO pessoa (, ) VALUES (?, ?)");
        return $stmt->execute([$this->nmPessoa, $this->cpfPessoa]);
    }
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM pessoa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM pessoa WHERE idPessoa = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update() {
        $stmt = $this->db->prepare("UPDATE pessoa SET nmPessoa = ?, cpfPessoa = ? WHERE idPessoa = ?");
        return $stmt->execute([$this->nmPessoa, $this->cpfPessoa, $this->idPessoa]);
    }
    
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM pessoa WHERE idPessoa = ?");
        return $stmt->execute([$id]);
    }
    

}
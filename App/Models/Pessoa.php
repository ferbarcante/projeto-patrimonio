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

    public function create() {
        $stmt = $this->db->prepare("INSERT INTO fornecedores (, ) VALUES (?, ?)");
        return $stmt->execute([$this->nmPessoa, $this->cpfPessoa]);
    }
    
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM fornecedores");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM fornecedores WHERE id_fornecedor = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update() {
        $stmt = $this->db->prepare("UPDATE fornecedores SET nm_fornecedor = ?, sg_cnpjcpf = ? WHERE id_fornecedor = ?");
        return $stmt->execute([$this->nmFornecedor, $this->sgCnpjcpf, $this->idFornecedor]);
    }
    
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM fornecedores WHERE id_fornecedor = ?");
        return $stmt->execute([$id]);
    }
    

}
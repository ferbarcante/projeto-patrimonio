<?php 

    namespace App;
    use PDO;
    use PDOException;

class Conexao
{
    private $host = "localhost";
    private $db = "projetoPatrimonio";
    private $user = "postgres";
    private $psw = "123456";

    public function conectar()
    {
        try
        {
            $conexao = new PDO(
                "pgsql:host=$this->host;dbname=$this->db", 
                "$this->user",
                "$this->psw"
            );

            echo "Conectou";

        }catch(PDOException $e)
        {
            echo "Erro: " . $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }
}

?>
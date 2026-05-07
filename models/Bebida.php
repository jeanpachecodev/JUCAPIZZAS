<?php

class Bebida
{
    private $conn;
    private $tabela = "bebidas";
    public $idBebida;
    public $nome;
    public $tipo;
    public $valor;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function get()
    {
        $query = "SELECT idbebida, nome, tipo, valor FROM " . $this->tabela . " WHERE idbebida = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->idBebida, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $this->idBebida = $row['idbebida'];
            $this->nome = $row['nome'];
            $this->tipo = $row['tipo'];
            $this->valor = $row['valor'];
            return true;
        }

        return false;
    }

    public function getAll()
    {
        $query = "SELECT idbebida, nome, tipo, valor FROM " . $this->tabela;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

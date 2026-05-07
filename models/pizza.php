<?php

class pizza
{

    private $conn;
    private $tabela = "pizzas";
    public $idpizza;
    public $nome;
    public $ingredientes;
    public $valor;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getall(){
        //Salvando a querry em SQL uma variável
        $query = "SELECT idpizza, nome, ingredientes, valor FROM " . $this->tabela;

        //preparando a quarry para ser executada, ou seja, vinculando ela à conexão
        $stmt = $this->conn->prepare($query);

        $stmt->execute(); //Executando a query no BD

        return $stmt;
    }
}

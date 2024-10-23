<?php

class Conexao{

    private $conn;

    public function __construct(){

        $this->conn = new mysqli(SERVER, LOGIN, SENHA, BD_NAME);
        
        if($this->conn->connect_error){

            die("Erro de conexão: ".$this->conn->connect_error);

        }

        $this->conn->set_charset("utf8");

    }

    public function getConexao(){

        return $this->conn;

    }

}
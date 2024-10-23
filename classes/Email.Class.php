<?php

class Email{

    private $conn;

    public $id;
    public $email;

    public function __construct($classeConexao){

        $this->conn = $classeConexao->getConexao();

    }

    public function setEmail($email){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            $this->email = $email;

        }else{

            return false;

        }

    }

    /* Verifica se o email já existe na base de dados */
    private function verifica_se_existe(){

        try {

            $conexao = $this->conn->prepare(

                "SELECT * FROM email
                WHERE email=?"
    
            );

            if($conexao === false){

                throw new Exception("Erro de conexão: ".$this->conn->error);

            }

            $conexao->bind_param("s", $this->email);

            if(!$conexao->execute()){

                throw new Exception("Erro de execução: ".$conexao->error);

            }

            $sql = $conexao->get_result();

            if($sql->num_rows < 1){

                return true;

            }else{

                return false;

            }
            
        } catch (Exception $e) {

            echo $e->getMessage();

            return false;
            
        }

    }

    /* Cadastra um novo email no banco */
    public function cadastrar_email(){

        try {

            if($this->verifica_se_existe() == false){

                throw new Exception("Esse e-mail já está cadastrado");

            }

            $conexao = $this->conn->prepare(

                "INSERT INTO email
                (email)
                VALUES (?)"

            );

            if($conexao === false){

                throw new Exception("Erro de conexão: ".$this->conn->error);

            }

            $conexao->bind_param("s", $this->email);

            if(!$conexao->execute()){

                throw new Exception("Erro de execução: ".$conexao->error);

            }

            return ["", true];
            
        } catch (Exception $e) {

            $msg = $e->getMessage();

            return [$msg, false];
            
        }

    }

}
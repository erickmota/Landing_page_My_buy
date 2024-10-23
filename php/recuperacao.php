<?php

require_once "../config.php";

require_once "../classes/Conexao.Class.php";
$classeConexao = new Conexao();

require_once "../classes/Email.Class.php";
$classeEmail = new Email($classeConexao);

if(isset($_POST["email"])){

    $email = $_POST["email"];

    $classeEmail->setEmail($email);
    
    if($classeEmail->cadastrar_email()[1] != true){
    
        $retorno_cadastro_msg = $classeEmail->cadastrar_email()[0];
    
        echo "<script>window.alert('$retorno_cadastro_msg'); window.location='../#pg_informacoes'</script>";
    
    }else{
    
        echo "<script>window.alert('Seu e-mail foi cadastrado com sucesso!'); window.location='../'</script>";
    
    }

}else{

    header("Location: ../");

}

?>
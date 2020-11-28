<?php

include_once('conexao.php');

$email = $_POST['email_login'];
$senha = $_POST['senha_login'];
$logado = false;

try{
    $query = $conn->prepare("select * from tb_user where email = :email and senha = :senha");
    $query->bindParam(':email', $email);
    $query->bindParam(':senha', $senha);
    $query->execute();

    $retorno = $query->fetchAll();
    if(count($retorno) > 0){
        header('Location: index.html');
        $logado = true;
    }else{
        header('Location: login.html');
    }
    
}catch(PDOException $e){
    echo 'Erro PDO' . $e-> getMessage();
}catch(Exception $e){
    echo 'Erro' . $e->getMessage();
}

?>
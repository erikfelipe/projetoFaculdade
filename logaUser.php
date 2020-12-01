<?php
session_start();
include_once('conexao.php');

$email = $_POST['email_login'];
$senha = $_POST['senha_login'];

try{
    $query = $conn->prepare("select * from tb_user where email = :email and senha = :senha");
    $query->bindParam(':email', $email);
    $query->bindParam(':senha', $senha);
    $query->execute();

    $retorno = $query->fetchAll();
    if(count($retorno) > 0){
        $email_logado = $email;
        $_SESSION['email_logado'] = $email_logado;
        header('Location: index.html');
    }else{
        header('Location: login.html');
    }
    
}catch(PDOException $e){
    echo 'Erro PDO' . $e-> getMessage();
}catch(Exception $e){
    echo 'Erro' . $e->getMessage();
}

?>
<?php
include_once  'conexao.php';

$nome = $_POST['nome_cadastro'];
$email = $_POST['email_cadastro'];
$senha = $_POST['senha_cadastro'];
$numero = $_POST['numero_cadastro'];
$estado = $_POST['estado_cadastro'];

try{
    $smt = $conn->prepare("insert into tb_user(nome, email, senha, numero, estado) values (:nome, :email, :senha, :numero, :estado);");
    $smt->bindParam(':nome',$nome);
    $smt->bindParam(':email',$email);
    $smt->bindParam(':senha',$senha);
    $smt->bindParam(':numero',$numero);
    $smt->bindParam(':estado',$estado);
    $smt->execute();
    echo '<h1>Cadastro OK</h1>';
}catch(PDOException $e){
    echo 'Erro PDO' . $e-> getMessage();
}catch(Exception $e){
    echo 'Erro' . $e->getMessage();
}
?>
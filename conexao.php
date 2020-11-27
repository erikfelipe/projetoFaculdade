<?php
$user = '3624018_hubcar';
$password = 'devweb#g2';
try{
    $conn = new PDO("mysql:host=fdb29.awardspace.net;dbname=3624018_hubcar", $user, $password);
    $conn->exec("set names utf-8"); 
    echo '<h1>Sucesso</h1><br>';
}catch(PDOException $e){
    echo 'Erro de PDO' . $e->getMessage();
}catch(Exception $e){
    echo 'ERRO' . $e->getMessage();
}
?>
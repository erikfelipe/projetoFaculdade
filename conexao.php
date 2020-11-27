<?php

try{

$proj = new PDO("mysql:host=localhost; dbname=projeto","root", "");
$proj->exec("set names utf-8");
echo "Conexão ok";
}catch(PDOException $e){
    echo "Erro do PDO" .$e->getMessage();
}catch (Exception $e){
    echo "Erro".$e->getMessage();
}    
?>

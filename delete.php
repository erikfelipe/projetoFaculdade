<?php
include_once 'conexao.php';
$email = $_GET['email'];
$sql = "delete from tb_user where email = :email";
$smt = $conn->prepare($sql);
$smt->bindParam(':email',$email);
$smt->execute();
$conn = null;
Header("Location: usuarioDados.php");
?>

<?php
session_start();
include_once 'conexao.php';
$email = $_GET['email'];
echo $email;
$email_logado = $_SESSION['email_logado'];
$sql = "select * from tb_user where email = '" . $email_logado . "';";
$query = $conn->prepare($sql);
$query->execute(array($email));
$data = $query->fetch(PDO::FETCH_ASSOC);
$nome = $data['inputNome'];
$numero = $data['inputTel'];
$email = $data['inputEmail'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>  <meta charset="UTF-8">    <title>Document</title> </head>
<body>
<form action="atualizar.php?email=<?php echo $email ?>" method="GET">
        email: <input type ="text" name = "inputEmail" value=<?php echo $email; ?>><br>
        Digite o nome: <input type="text" name = "inputNome" value="<?php echo $nome; ?>"><br>
        Selecione o telefone: <input type="text" name="inputTel" value="<?php echo $numero; ?>"><br>
        <br>
        <br>
        <input type="submit" value="Gravar"> 
</body> </html>

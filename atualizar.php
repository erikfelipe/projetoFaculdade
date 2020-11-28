<?php
include_once 'conexao.php';
$email = $_GET['email'];
echo $email;
$sql = "SELECT * FROM tb_user where email = ?";
$query = $conn->prepare($sql);
$query->execute(array($email));
$data = $query->fetch(PDO::FETCH_ASSOC);
$nome = $data['nome'];
$numero = $data['numero'];
$email = $data['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>  <meta charset="UTF-8">    <title>Document</title> </head>
<body>
<form action="update.php?email=<?php echo $email ?>" method="POST">
        email: <input type ="text" name = "inputEmail" value=<?php echo $email; ?>><br>
        Digite o nome: <input type="text" name = "inputNome" value="<?php echo $nome; ?>"><br>
        Selecione o telefone: <input type="text" name="inputTel" value="<?php echo $numero; ?>"><br>
        <br>
        <br>
        <input type="submit" value="Gravar"> 
</body> </html>

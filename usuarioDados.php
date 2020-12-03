<?php
session_start();
include_once('conexao.php');
?>

<!DOCtYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
        <nav>
            <div class="navbar">
                <a href="index.html"><img src="img/logo.jpg" alt="logo" width="300px"></a>
                <button id="btn-login"><a href="login.html">Login</a></button>
                <button id="btn-cadastro"><a href="cadastro.html">Cadastre-se</a></button>
                <button id="btn-conta"><a href="usuarioDados.php">Minha Conta</a></button>
            </div>
        </nav>

        <div id="sub-menu">
            <ul>
                <li><a href="index.html" class="links">Home</a></li>
                <li><a href="servicos.html" class="links">Serviços</a></li>
                <li><a href="contato.html" class="links">Contato</a></li>
                <li><a href="sobre.html" class="links">Sobre</a></li>
            </ul>   
        </div>

        <table class='table table-md table-bordered table-hover'>
            <thead class='thead-dark'>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>

            <tr>
            <?php
                $email_logado = $_SESSION['email_logado'];
                $sql = "SELECT nome, numero, email, estado FROM tb_user where email = '" . $email_logado . "';";
                    
                foreach ($conn->query($sql) as $row) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row['nome'] . "</td>";
                    echo "<td>".$row['numero'] . "</td>";
                    echo "<td>".$row['email'] . "</td>";
                    echo "<td>".$row['estado'] . "</td>";
                    echo "<td><a href='delete.php?email=".$row['email']."'"."> Deletar</a></td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";
                $conn = null;
            ?>
            <input type="button" value = "cadastrar" onclick="window.location.href='cadastro.html';">
            <input type="button" value = "Desconectar" onclick="<?php $_SESSION['email_logado'] = "";?> window.location.href='usuarioDados.php';">

            </body>
            </html>

            </tr>
        </table>
    </body>

</html>
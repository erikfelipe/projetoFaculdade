function ValidarCadastro(){
    var email_cad = document.getElementById("inputEmail_cad").value;
    var senha_cad = document.getElementById("inputSenha_cad").value;
    var nome_cad = document.getElementById("inputNome").value;
    var numero_cad = document.getElementById("inputNumero").value;

    if(email_cad == "" || senha_cad == "" || nome_cad == "" || numero_cad == ""){
        alert("Campos não podem ficar vazios")
    }else{
        alert("Cadastro Concluido");
        window.location.reload();
    }
}

function entraUser(){
    alert("Login realizado com sucesso!");
}

function erroUser(){
    alert("Senha ou usuário incorreta!!");
}
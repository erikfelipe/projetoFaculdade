function ValidarCadastro(){
    email_cad = document.getElementById("inputEmail_cad").value;
    senha_cad = document.getElementById("inputSenha_cad").value;
    nome_cad = document.getElementById("inputNome").value;
    numero_cad = document.getElementById("inputNumero").value;
    estado_cad = document.getElementById("inputEstado").value;

    if(email_cad == "" || senha_cad == "" || nome_cad == "" || numero_cad == ""){
        alert("Campos não podem ficar vazios")
    }else{
        alert("Cadastro Concluido");
        window.location.reload();
    }
}

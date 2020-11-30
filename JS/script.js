function ValidarCadastro(form){
    var email_cad = form.email_cadastro.value;
    var senha_cad = form.senha_cadastro.value;
    var nome_cad = form.nome_cadastro.value;
    var numero_cad = form.numero_cadastro.value;

    var letras = /^[A-Za-z]+$/;
    var tel = "[0-9()-]";

    if(nome_cad == "" || senha_cad == "" || email_cad == "" || numero_cad == ""){
        alert("Campos em branco não são permitidos");
        return false;
    }else{
        alert('Cadastro Concluido!');
        return true;
    }
}

function mascara(numero_cad){
    var letras = /^[A-Za-z]+$/;
    var numero_cad = document.getElementById("inputNumero");
    if(numero_cad.value.length == 0){
        numero_cad.value = '(' + numero_cad.value;
    }
    if(numero_cad.value.length == 3){
        numero_cad.value = numero_cad.value + ') '; 
    }
    if(numero_cad.value.length == 10){
        numero_cad.value = numero_cad.value + '-';
    }
}
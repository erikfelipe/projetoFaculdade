var olho_cadastro = document.getElementById('olho_cadastro');
var senha_cad = document.getElementById('inputSenha_cad');

olho_cadastro.addEventListener('mousedown', function(){
    senha_cad.type = 'text';
    olho_cadastro.src = 'img/olho_senha.png';
})
olho_cadastro.addEventListener('mouseup', function(){
    senha_cad.type = 'password';
    olho_cadastro.src = 'img/olhofechado.webp';  
})
olho_cadastro.addEventListener('mousemove',function(){
    senha_cad.type = 'password';
})
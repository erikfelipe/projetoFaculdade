var olho_login = document.getElementById('olho_login');
var senha_log = document.getElementById('inputSenha_log');

olho_login.addEventListener('mousedown', function(){
    senha_log.type = 'text';
    olho_login.src = 'img/olho_senha.png';
})
olho_login.addEventListener('mouseup', function(){
    senha_log.type = 'password';
    olho_login.src = 'img/olhofechado.webp';  
})
olho_login.addEventListener('mousemove',function(){
    senha_log.type = 'password';
})
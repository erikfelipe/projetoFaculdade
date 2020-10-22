var olho = document.getElementById('olho');
var senha = document.getElementById('inputSenha');

olho.addEventListener('mousedown', function(){
    senha.type = 'text';
    olho.src = 'img/olho_senha.png';
})
olho.addEventListener('mouseup', function(){
    senha.type = 'password';
    olho.src = 'img/olhofechado.webp';
    
})
olho.addEventListener('mousemove',function(){
    senha.type = 'password';
})
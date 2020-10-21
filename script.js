const btn = document.getElementById('btn');
var txt_btn = document.getElementById('txt_btn');

var valorIMC = 15.7;

btn.addEventListener('click', function botao_apertado(){
    btn.classList.add('clicado');

    txt_btn.innerHTML = valorIMC;

    if (valorIMC > 20){
        btn.classList.add('bom');
        btn.classList.remove('nao-clicado')
    }
    else{
        btn.classList.add('ruim');
        btn.classList.remove('nao-clicado')
    }
})


const params = new URLSearchParams(window.location.search);

if(params.get('login')){
    const popUp = document.getElementById('mensagemBox');
    popUp.classList.remove('popUpDesabilitado');
    popUp.classList.add('popUpCorDeErro');

    const popUpMensagem = document.getElementById('mensagemTexto');
    popUpMensagem.innerHTML = 'Usuario ou senha invalido';
}

if(params.get('mensagem')){
    const popUp = document.getElementById('mensagemBox');
    popUp.classList.remove('popUpDesabilitado');

    const popUpMensagem = document.getElementById('mensagemTexto');
    popUpMensagem.innerHTML = params.get('mensagem');
}
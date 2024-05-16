function verificaSenhasIguais(){
    const senha = document.getElementById('password').value;
    const senha2 = document.getElementById('password-repeat').value;
    const btnRedefinir = document.getElementById('login-button')
    const textoSenhaDiferente = document.getElementById('textoRedefinirDiferente')
    if(senha === senha2){
        btnRedefinir.disabled = false;
        textoSenhaDiferente.classList.add('popUpDesabilitado');
    }else{
        btnRedefinir.disabled = true;
        textoSenhaDiferente.classList.remove('popUpDesabilitado');
    }
}
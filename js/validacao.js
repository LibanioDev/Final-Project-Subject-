//Validação de formulário em uma página da web

function isUsuarioValid() {
    const usuario = document.getElementById("usuario").value;
    if (!usuario) {
        return false;
    }
    return validateUsuario(usuario);
}

function isPasswordValid() {
    const password = document.getElementById('password').value;
    if (!password) {
        return false;
    }
    return true;
}

function validateUsuario(usuario) {
    return /\S+@\S+\.\S+/.test(usuario);
}
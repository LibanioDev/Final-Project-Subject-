function validateFields() {
    const usuarioValid = isUsuarioValid();
    document.getElementById('recover-password-button').disabled = !usuarioValid;

    const passwordValid = isPasswordValid();
    document.getElementById('login-button').disabled = !usuarioValid || !passwordValid;
}

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
function iniciar() {

    var texto;
    texto = "";
    iniciarpartecomun();

    if (location.pathname.toUpperCase() == "/SITEMAP/REGISTRO.PHP") {

        if (document.getElementById("formularioregistro")) {

            document.getElementById("formularioregistro").onsubmit = validarformularioregistro;
        }

    } else if (location.pathname.toUpperCase() == "/SITEMAP/IDENTIFICACION.PHP") {

        if (document.getElementById("formularioidentificacion")) {

            document.getElementById("formularioidentificacion").onsubmit = validarformularioformularioidentificacion;
        }

        if (document.getElementById("registrarusuario")) {

            document.getElementById("registrarusuario").onclick = validarformularioformularioidentificacion;
        }
        if (document.getElementById("recuperarcontrasena")) {

            document.getElementById("recuperarcontrasena").onclick = validarformularioformularioidentificacion;
        }


    } else if (location.pathname.toUpperCase() == "/SITEMAP/RECUPERARCONTRASENA.PHP") {

        if (document.getElementById("formulariorecuperarcontrasena")) {

            document.getElementById("formulariorecuperarcontrasena").onsubmit = validarformulariorecuperarcontrasena;
        }
    } else if (location.pathname.toUpperCase() == "/SITEMAP/JUMBOTRON.PHP") {

        if (document.getElementById("textojumbotron")) {

            texto = texto + "Nombre: " + sessionStorage.getItem('nombre') + "<br>";
            texto = texto + "Apellidos: " + sessionStorage.getItem('apellidos') + "<br>";
            texto = texto + "Sexo: " + sessionStorage.getItem('sexo') + "<br>";
            texto = texto + "Usuario: " + sessionStorage.getItem('usuario') + "<br>";
            texto = texto + "Correo electronico: " + sessionStorage.getItem('correo') + "<br>";
            texto = texto + "Contraseña: " + sessionStorage.getItem('pwd') + "<br>";
            texto = texto + "Repetir Contraseña: " + sessionStorage.getItem('pwd2') + "<br>";
            document.getElementById("textojumbotron").innerHTML = texto;
        }
    }





}



function iniciarpartecomun() {

    if (document.getElementById("btnregistro")) {

        document.getElementById("btnregistro").onclick = iraregistro;
    }

    if (document.getElementById("btnacceso")) {

        document.getElementById("btnacceso").onclick = iraidentificacion;
    }


}


function iraregistro() {


    location.href = "registro.php";
}


function iraidentificacion() {

    location.href = "identificacion.php";
}
function irarecuperarcontrasena() {

    location.href = "recuperarcontrasena.php";
}


function validarformularioregistro() {

    var retval;
    retval = true;
    document.getElementById("nombre").className = "form-control";
    document.getElementById("apellidos").className = "form-control";
    document.getElementById("sexo").className = "form-control";
    document.getElementById("usuario").className = "form-control";
    document.getElementById("correo").className = "form-control";
    document.getElementById("pwd").className = "form-control";
    document.getElementById("pwd2").className = "form-control";
    if (document.getElementById("nombre").validity.valid) {
        document.getElementById("nombre").className = document.getElementById("nombre").className + " validado";
        document.getElementById("nombreerror").innerHTML = "";
    } else {
        document.getElementById("nombre").className = document.getElementById("nombre").className + " novalidado";
        document.getElementById("nombreerror").innerHTML = "No has especificado un nombre válido";
        retval = false;
    }
    if (document.getElementById("apellidos").validity.valid) {
        document.getElementById("apellidos").className = document.getElementById("apellidos").className + " validado";
        document.getElementById("apellidoserror").innerHTML = "";
    } else {
        document.getElementById("apellidos").className = document.getElementById("apellidos").className + " novalidado";
        document.getElementById("apellidoserror").innerHTML = "No has especificado unos apellidos válido";
        retval = false;
    }
    
     if (document.getElementById("sexo").validity.valid) {
        document.getElementById("sexo").className = document.getElementById("sexo").className + " validado";
        document.getElementById("sexoerror").innerHTML = "";
    } else {
        document.getElementById("sexo").className = document.getElementById("sexo").className + " novalidado";
        document.getElementById("sexoerror").innerHTML = "No has especificado un sexo válido";
        retval = false;
    }
    
    
    if (document.getElementById("usuario").validity.valid) {
        document.getElementById("usuario").className = document.getElementById("usuario").className + " validado";
        document.getElementById("usuarioerror").innerHTML = "";
    } else {
        document.getElementById("usuario").className = document.getElementById("usuario").className + " novalidado";
        document.getElementById("usuarioerror").innerHTML = "No has especificado un usuario válido";
        retval = false;
    }
    if (document.getElementById("correo").validity.valid) {
        document.getElementById("correo").className = document.getElementById("correo").className + " validado";
        document.getElementById("correoerror").innerHTML = "";
    } else {
        document.getElementById("correo").className = document.getElementById("correo").className + " novalidado";
        document.getElementById("correoerror").innerHTML = "No has especificado un correo válido";
        retval = false;
    }
    if (document.getElementById("pwd").validity.valid == false) {
        document.getElementById("pwd").className = document.getElementById("pwd").className + " novalidado";
        document.getElementById("pwderror").innerHTML = "No has especificado una contraseña válida";
        retval = false;
    } else if (document.getElementById("pwd2").validity.valid == false) {
        document.getElementById("pwd2").className = document.getElementById("pwd2").className + " novalidado";
        document.getElementById("pwd2error").innerHTML = "No has especificado una contraseña válida";
        retval = false;
    } else if (document.getElementById("pwd").value != document.getElementById("pwd2").value) {

        document.getElementById("pwd2").className = document.getElementById("pwd2").className + " novalidado";
        document.getElementById("pwderror").innerHTML = "Las contraseñas no coinciden";
        document.getElementById("pwd2error").innerHTML = "Las contraseñas no coinciden";
        retval = false;

    }


    if (retval == true) {

        sessionStorage.setItem('nombre', document.getElementById("nombre").value);
        sessionStorage.setItem('apellidos', document.getElementById("apellidos").value);
        sessionStorage.setItem('sexo', document.getElementById("sexo").value);
        sessionStorage.setItem('usuario', document.getElementById("usuario").value);
        sessionStorage.setItem('correo', document.getElementById("correo").value);
        sessionStorage.setItem('pwd', document.getElementById("pwd").value);
        sessionStorage.setItem('pwd2', document.getElementById("pwd2").value);
    }


    return retval;
}


function validarformularioformularioidentificacion() {
    var retval;
    retval = true;
    if (this.id == "formularioidentificacion") {

        document.getElementById("usuario").className = "form-control";
        document.getElementById("pwd").className = "form-control";
        if (document.getElementById("usuario").validity.valid) {
            document.getElementById("usuario").className = document.getElementById("usuario").className + " validado";
            document.getElementById("usuarioerror").innerHTML = "";
        } else {
            document.getElementById("usuario").className = document.getElementById("usuario").className + " novalidado";
            document.getElementById("usuarioerror").innerHTML = "No has especificado un usuario válido";
            retval = false;
        }

        if (document.getElementById("pwd").validity.valid) {
            document.getElementById("pwd").className = document.getElementById("pwd").className + " validado";
            document.getElementById("pwderror").innerHTML = "";
        } else {
            document.getElementById("pwd").className = document.getElementById("pwd").className + " novalidado";
            document.getElementById("pwderror").innerHTML = "No has especificado una contraseña válida";
            retval = false;
        }

    } else if (this.id == "registrarusuario") {

        if (this.checked == true) {

            iraregistro();
        }

    } else if (this.id == "recuperarcontrasena") {

        if (this.checked == true) {

            irarecuperarcontrasena();
        }

    }

    return retval;
}

function validarformulariorecuperarcontrasena() {

    var retval;
    retval = true;
    document.getElementById("correo").className = "form-control";
    if (document.getElementById("correo").validity.valid) {
        document.getElementById("correo").className = document.getElementById("correo").className + " validado";
        document.getElementById("correoerror").innerHTML = "";
    } else {
        document.getElementById("correo").className = document.getElementById("correo").className + " novalidado";
        document.getElementById("correoerror").innerHTML = "No has especificado un correo válido";
        retval = false;
    }
  

    return retval;
}

window.addEventListener("load", iniciar);



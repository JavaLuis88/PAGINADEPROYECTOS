//Parte comun

function iniciar() {

    var partes;
    partes = location.pathname.split("/");



    if (partes[partes.length - 1].toUpperCase() == "INDEX.PHP") {



        if (document.getElementById("formulariologin") != null) {


            document.getElementById("formulariologin").onsubmit = guardacredenciales;
        }

        if (localStorage.getItem("username") != null && localStorage.getItem("password") != null) {

            document.getElementById("username").value = localStorage.getItem("username");
            document.getElementById("password").value = localStorage.getItem("password");
            document.getElementById("salvar").checked = true;
            document.getElementById("formulariologin").submit();
        }







    }







}


function guardacredenciales() {

    if (document.getElementById("salvar").checked == true) {
        localStorage.setItem("username", document.getElementById("username").value);
        localStorage.setItem("password", document.getElementById("password").value);
    }
    return true;
}


window.addEventListener("load", iniciar, true);


//Parte comun
//Parte publica



//Parte publica
//Parte intranet






//Parte intranet





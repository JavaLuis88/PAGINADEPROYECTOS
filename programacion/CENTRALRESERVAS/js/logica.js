//Parte comun
var fecha;
var idrecinto;

function decodificar(cadena) {

    var retval
    retval = cadena.split("+").join(" ");
    retval = unescape(retval);
    return retval;
}

function getAjax() {

    var ajaxobj;
    ajaxobj = null;
    if (window.XMLHttpRequest) {
        ajaxobj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        ajaxobj = new ActiveXObject("Microsoft.XMLHTTP");
    }

    return ajaxobj;
}

function procesarmensajesformularioreservas() {


    var fechaentrada;
    var fechasalida;
    var hoy;
    var caparesultados;
    var mensajes;
    var cadenaconsulta;
    var ajaxurl;
    var ajaxobj;
    cadenaconsulta = "";
    ajaxurl = new AJAXURL();
    ajaxobj = null;
    caparesultados = document.getElementById("resultados");
    mensajes = document.getElementById("mensajesformularioreservas");

    fechaentrada = new Date(document.getElementById("fechaentrada").value);
    fechasalida = new Date(document.getElementById("fechasalida").value);
    hoy = new Date();
    caparesultados.innerHTML = "";
    mensajes.innerHTML = "";
    if (fechaentrada.getTime() >= fechasalida.getTime()) {

        mensajes.className = "text-danger pt-2";
        mensajes.innerHTML = "La fecha de entrada no puede ser posterior a la de salida";
    } else if (fechaentrada.getTime() <= hoy.getTime() || fechaentrada.getTime() <= hoy.getTime()) {

        mensajes.className = "text-danger pt-2";
        mensajes.innerHTML = "La fecha de entrada y salida no pueden ser anteriores a la fecha de hoy";
    } else {


        ajaxobj = getAjax();
        cadenaconsulta = "fechaentrada=" + escape(document.getElementById("fechaentrada").value) + "&fechasalida=" + escape(document.getElementById("fechasalida").value);
        console.log(ajaxurl.VERACASASINRESERVAS + "?" + cadenaconsulta);
        if (DEPURACION == true) {

            ajaxobj.open("GET", ajaxurl.VERACASASINRESERVAS + "?" + cadenaconsulta, true);
            ajaxobj.send(null);
        } else {

            ajaxobj.open("POST", ajaxurl.VERACASASINRESERVAS, true);
            ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajaxobj.send(cadenaconsulta);
        }

        ajaxobj.onreadystatechange = function () {

            var fila
            var columna;
            var fila2
            var columna2;
            var elemento;
            var elemento2;
            var elemento3;
            var texto;
            var texto2;
            var texto3;
            var cuenta;
            var registros;
            if (ajaxobj.readyState == 4) {

                if (ajaxobj.status == 200) {
                    registros = JSON.parse(ajaxobj.responseText);
                    if (registros.codigo == 0) {
                        cuenta = 0;
                        registros = registros.resultado;
                        texto = "";

                        if (registros.length >= 1) {

                            sessionStorage.setItem("fechaentrada", document.getElementById("fechaentrada").value)
                            sessionStorage.setItem("fechasalida", document.getElementById("fechasalida").value)

                            for (var i = 0; i < registros.length; i++) {


                                texto = texto + "<article class=\"container-fluid pt-3\">\n";
                                texto = texto + "  <header class=\"bg-light\">\n";
                                texto = texto + "    <h1 class=\"bg-light cabeceraoferta\">\n";
                                texto = texto + "    <strong class=\"bold\">\n";
                                texto = texto + decodificar(registros[i].nombrecinto);
                                texto = texto + "    </strong>\n";
                                texto = texto + "    </h1>\n";
                                texto = texto + "  </header>\n";

                                texto = texto + "    <figure>\n";
                                if (registros[i].imagenes.length >= 1) {


                                    texto = texto + "<picture class=\"float-left2\">\n";
                                    texto = texto + "<source srcset=\"img/" + decodificar(registros[i].imagenes[0].ruta) + "-movilxs." + decodificar(registros[i].imagenes[0].extension) + "\" media=\"(max-width: 575px)\">\n";
                                    texto = texto + "<source srcset=\"img/" + decodificar(registros[i].imagenes[0].ruta) + "-movil." + decodificar(registros[i].imagenes[0].extension) + "\" media=\"(min-width: 576px) and (max-width: 767px)\">\n";


                                    texto = texto + "<source srcset=\"img/" + decodificar(registros[i].imagenes[0].ruta) + "-tablet." + decodificar(registros[i].imagenes[0].extension) + "\" media=\"(min-width: 768px) and (max-width: 991px)\">\n";
                                    texto = texto + "<source srcset=\"img/" + decodificar(registros[i].imagenes[0].ruta) + "-large." + decodificar(registros[i].imagenes[0].extension) + "\" media=\"(min-width: 992px) and (max-width: 1199px)\">\n";
                                    texto = texto + "<source srcset=\"img/" + decodificar(registros[i].imagenes[0].ruta) + "-tv." + decodificar(registros[i].imagenes[0].extension) + "\" media=\"(min-width: 1200px)\">\n";
                                    texto = texto + "<img src=\"img/" + decodificar(registros[i].imagenes[0].ruta) + "-movilxs." + decodificar(registros[i].imagenes[0].extension) + "\" alt=\"" + decodificar(registros[i].nombrecinto) + "\" class=\"img-fluid rounded mx-auto d-block\">\n";
                                    texto = texto + "</picture>\n";
                                    texto = texto + "    <figcaption>\n";
                                } else {

                                    texto = texto + "<picture class=\"float-left2\">\n";
                                    texto = texto + "<source srcset=\"img/casagenerica-movilxs.png\" media=\"(max-width: 575px)\">\n";
                                    texto = texto + "<source srcset=\"img/casagenerica-movil.png\" media=\"(min-width: 576px) and (max-width: 767px)\">\n";

                                    texto = texto + "<source srcset=\"img/casagenerica-tablet.png\" media=\"(min-width: 768px) and (max-width: 991px)\">\n";
                                    texto = texto + "<source srcset=\"img/casagenerica-large.png\" media=\"(min-width: 992px) and (max-width: 1199px)\">\n";
                                    texto = texto + "<source srcset=\"img/casagenerica-tv.png\" media=\"(min-width: 1200px)\">\n";
                                    texto = texto + "<img src=\"img/casagenerica-movil.png\" alt=\"" + decodificar(registros[i].nombrecinto) + "\" class=\"img-fluid rounded mx-auto d-block\">\n";
                                    texto = texto + "</picture>\n";
                                    texto = texto + "    <figcaption>\n";

                                }

                                texto = texto + "    </figcaption>\n";
                                texto = texto + "    </figure>\n";

                                texto = texto + "    </article>\n";
                                texto = texto + "<article class=\"container-fluid pt-3 pl-4 bg-light textodescripcioncasarural\">\n";

                                texto = texto + "<strong class=\"bold\">Dirección:</strong> " + decodificar(registros[i].direccion) + "<br>\n";
                                texto = texto + "<strong class=\"bold\">Ciudad:</strong> " + decodificar(registros[i].ciudad) + "<br>\n";
                                texto = texto + "<strong class=\"bold\">Precio habitual:</strong> " + decodificar(registros[i].precioahabitual) + " Euros/noche<br>\n";

                                texto = texto + "<p class=\"pt-2 pb-4\">\n";
                                texto = texto + "<a href=\"descripcion.php?c=" + decodificar(registros[i].id) + "\" class=\"btn btn-success\">Reservar</a>\n";
                                texto = texto + "</p>\n";



                                texto = texto + "</article>\n";











                            }



                        } else {

                            texto = texto + "<article class=\"jumbotron jumbotron-fluid coloresprimarios text-white mt-2\">\n";
                            texto = texto + "  <header class=\"text-center\">\n";
                            texto = texto + "    <h1>\n";
                            texto = texto + "    <strong class=\"bold\">\n";
                            texto = texto + "No se han encontrado resultados"
                            texto = texto + "    </strong>\n";
                            texto = texto + "    </h1>\n";
                            texto = texto + "  </header>\n";
                            texto = texto + "  <p class=\"text-center\">\n";
                            texto = texto + "No hay casas rurales disponibles en las fechas seleccionadas\n";
                            texto = texto + "  </p>\n";

                            texto = texto + "</article>\n";

                        }

                        caparesultados.innerHTML = "";
                        caparesultados.innerHTML = texto;


                    } else {

                        mensajes.className = "text-danger pt-2";
                        mensajes.innerHTML = "Error al realizar la consulta";
                    }



                }


            }

        }

    }






    return false;
}


function showCalendar(month, year, idrecinto) {

    var fecha;
    var fecha2;
    var ajaxobj;
    var diasemana;
    var calendario;
    var capa;
    var capa2;
    var tabla;
    var fila;
    var columna;
    var cabeceracuerpotabla;
    var enlace;
    var texto;
    var lenguaje
    var meses;
    var diasconoferta;
    var preciosdias;
    var hoy;
    var cuenta;

    diasconoferta = new Array();
    hoy = new Date()
    cuenta = 0;




    meses = new Array();
    meses[0] = "Enero";
    meses[1] = "Febrero";
    meses[2] = "Marzo";
    meses[3] = "Abril";
    meses[4] = "Mayo";
    meses[5] = "Junio";
    meses[6] = "Julio";
    meses[7] = "Agosto";
    meses[8] = "Septiembre";
    meses[9] = "Octubre";
    meses[10] = "Noviembre";
    meses[11] = "Diciembre";



    ajaxobj = getAjax();
    calendario = document.getElementById("calendario");

    fecha = new Date(year, month - 1, 1);

    diasemana = fecha.getDay();
    if (diasemana == 0) {
        diasemana = 7;
    }

    capa = document.createElement("div");





    document.getElementById("mesmostrado").innerHTML = "";
    document.getElementById("mesmostrado").innerHTML = meses[month - 1] + " - " + year




    capa2 = document.createElement("div");
    capa2.className = "table-resposive table-resposive-sm table-resposive-md table-resposive-lg table-resposive-xl";

    tabla = document.createElement("table");
    tabla.setAttribute("border", "2");
    tabla.className = "table";

    cabeceracuerpotabla = document.createElement("thead");
    fila = document.createElement("tr");
    columna = document.createElement("th");
    columna.className = "text-center";
    texto = document.createTextNode("L");

    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("M");


    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("X");


    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("J");


    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("V");

    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("S");

    columna.appendChild(texto);
    fila.appendChild(columna);
    columna = document.createElement("th");
    columna.className = "text-center";

    texto = document.createTextNode("D");

    columna.appendChild(texto);
    fila.appendChild(columna);
    cabeceracuerpotabla.appendChild(fila);
    tabla.appendChild(cabeceracuerpotabla);
    cabeceracuerpotabla = document.createElement("tbody");
    fila = document.createElement("tr");

    for (var i = 1; i < diasemana; i++) {
        columna = document.createElement("td");
        columna.className = "text-center bg-white text-white";
        texto = document.createTextNode("");
        columna.appendChild(texto);
        fila.appendChild(columna);
    }
    columna = document.createElement("td");
    columna.id = "celdacalendario1";
    columna.className = "textocalendario";

    diasconoferta = getMothOfferDays(month, year, idrecinto)
    preciosdias = getPreciosMes(month, year, idrecinto);
    if (diasconoferta != null && preciosdias != null) {

        fecha2 = new Date(year, month - 1, 1);
        if (hoy > fecha2) {
            columna.className = "text-center bg-white text-white";
            texto = document.createTextNode("1");
            columna.appendChild(texto);

        } else if (diasconoferta[1] == 1) {



            columna.className = "text-center bg-success text-white";
            enlace = document.createElement("a");
            enlace.setAttribute("href", "javascript:void(0);");
            enlace.setAttribute("data-fecha", year + month + "-1");
            enlace.setAttribute("data-toggle", "tooltip");
            enlace.setAttribute("title", decodificar(preciosdias[1].precio) + " Euros " + decodificar(preciosdias[1].motivooferta));
            enlace.setAttribute("data-html", "true");


            enlace.onclick = establecerdiaseleccionado;
            texto = document.createTextNode("1");
            enlace.appendChild(texto);
            columna.appendChild(enlace);
        } else if (diasconoferta[1] == 2) {


            columna.className = "text-center bg-danger text-white";
            texto = document.createTextNode("1");
            columna.appendChild(texto);
        } else {
            columna.className = "text-center bg-white text-black";
            enlace = document.createElement("a");
            enlace.setAttribute("href", "javascript:void(0);");
            enlace.setAttribute("data-fecha", year + month + "-1");
            enlace.setAttribute("data-toggle", "tooltip");
            enlace.setAttribute("title", decodificar(preciosdias[1].precio) + " Euros " + decodificar(preciosdias[1].motivooferta));
            enlace.setAttribute("data-html", "true");

            enlace.onclick = establecerdiaseleccionado;
            texto = document.createTextNode("1");
            enlace.appendChild(texto);
            columna.appendChild(enlace);

        }


        fila.appendChild(columna);
        if (diasemana == 7) {
            diasemana = 0;
            cabeceracuerpotabla.appendChild(fila);
        }
        fecha = new Date(year, month, 0)
        for (var i = 2; i <= fecha.getDate(); i++) {
            diasemana++;
            if (diasemana == 1) {
                fila = document.createElement("tr");
            }

            columna = document.createElement("td");
            columna.id = "celdacalendario" + i
            columna.className = "textocalendario";

            fecha2 = new Date(year, month - 1, i);
            if (hoy > fecha2) {
                columna.className = "text-center bg-white text-white";
                texto = document.createTextNode("" + i);
                columna.appendChild(texto);

            } else if (diasconoferta[i] == 1) {


                columna.className = "text-center bg-success text-white";
                enlace = document.createElement("a");
                enlace.setAttribute("href", "javascript:void(0);");
                enlace.setAttribute("data-fecha", year + month + "-" + i);
                enlace.setAttribute("data-toggle", "tooltip");
                enlace.setAttribute("title", decodificar(preciosdias[i].precio) + " Euros " + decodificar(preciosdias[i].motivooferta));
                enlace.setAttribute("data-html", "true");

                enlace.onclick = establecerdiaseleccionado
                texto = document.createTextNode("" + i);
                enlace.appendChild(texto);
                columna.appendChild(enlace);
            } else if (diasconoferta[i] == 2) {


                columna.className = "text-center bg-danger text-white";
                texto = document.createTextNode("" + i);
                columna.appendChild(texto);
            } else {
                columna.className = "text-center bg-white text-black";
                enlace = document.createElement("a");
                enlace.setAttribute("href", "javascript:void(0);");
                enlace.setAttribute("data-fecha", year + month + "-" + i);
                enlace.setAttribute("data-toggle", "tooltip");
                enlace.setAttribute("title", decodificar(preciosdias[i].precio) + " Euros " + decodificar(preciosdias[i].motivooferta));
                enlace.setAttribute("data-html", "true");

                enlace.onclick = establecerdiaseleccionado;
                texto = document.createTextNode("" + i);
                enlace.appendChild(texto);
                columna.appendChild(enlace);

            }

            fila.appendChild(columna);
            if (diasemana == 7) {
                diasemana = 0;
                cabeceracuerpotabla.appendChild(fila);
            }


        }


        if (diasemana != 0 && diasemana < 7) {
            for (var i = diasemana; i < 7; i++) {
                columna = document.createElement("td");
                columna.className = "text-center bg-white text-black";
                texto = document.createTextNode("");
                columna.appendChild(texto);
                fila.appendChild(columna);
            }
            diasemana = 0;
            cabeceracuerpotabla.appendChild(fila);
        }


        tabla.appendChild(cabeceracuerpotabla);
        capa2.appendChild(tabla);
        capa.appendChild(capa2);
        calendario.innerHTML = "";

        calendario.appendChild(capa);
    } else {
        columna = document.createElement("div");

        calendario.innerHTML = "";
        columna.className = "text-center text-danger";
        texto = document.createTextNode("se ha producido un error inesperado");
        columna.appendChild(texto);
        calendario.appendChild(columna);
    }

}



function getMothOfferDays(month, year, idrecinto) {
    var ajaxurl;
    var cadenaenvio;
    var datos;
    var ajaxobj;
    var retval;

    retval = true;


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.month = month;
    datos.year = year;
    datos.idrecinto = idrecinto;


    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.DIASCONOFERTA + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.DIASCONOFERTA + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.DIASCONOFERTA, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio);

    return retval;
}

function getPreciosMes(month, year, idrecinto) {
    var ajaxurl;
    var cadenaenvio;
    var datos;
    var ajaxobj;
    var retval;

    retval = true;


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.month = month;
    datos.year = year;
    datos.idrecinto = idrecinto;


    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.PRECIOSMES + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.PRECIOSMES + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.PRECIOSMES, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio);

    return retval;
}





function mostrarmesanterior() {

    var fecha2;
    var month;
    var year;
    fecha.setMonth(fecha.getMonth() - 1);
    month = fecha.getMonth() + 1;
    year = fecha.getFullYear();




    fecha2 = new Date();

    if (fecha <= fecha2) {

        document.getElementById("anteriormes").disabled = true;




    } else {
        document.getElementById("anteriormes").disabled = false;



    }


    fecha2 = new Date(9999, 11, 1);


    if (fecha >= fecha2) {
        document.getElementById("siguientemes").disabled = true;


    } else {

        document.getElementById("siguientemes").disabled = false;


    }

    showCalendar(month, year, idrecinto);

}


function mostrarmessiguiente() {
    var fecha2
    var month;
    var year;

    fecha.setMonth(fecha.getMonth() + 1);
    month = fecha.getMonth() + 1;
    year = fecha.getFullYear();



    fecha2 = new Date();

    if (fecha <= fecha2) {

        document.getElementById("anteriormes").disabled = true;




    } else {
        document.getElementById("anteriormes").disabled = false;
    }



    fecha2 = new Date(9999, 11, 1);


    if (fecha >= fecha2) {
        document.getElementById("siguientemes").disabled = true;


    } else {
        document.getElementById("siguientemes").disabled = false;


    }

    showCalendar(month, year, idrecinto);

}








function estableceerfechaentrada() {
    var preciodias = 0;
    var fecha2;
    var fecha3;
    var partes;

    document.getElementById("mensajescaledario").innerHTML = "";


    if (document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha") != null && document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha").trim() != "") {

        partes = document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha").split("-");
        fecha2 = new Date(partes[0], partes[1], partes[2])

        partes = document.getElementById("fechaseleccionada").getAttribute("data-fecha").split("-");
        fecha3 = new Date(partes[0], partes[1], partes[2])

        if (document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha") == document.getElementById("fechaseleccionada").getAttribute("data-fecha")) {

            document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
            document.getElementById("mensajescaledario").innerHTML = "";
            document.getElementById("mensajescaledario").innerHTML = "La fecha de entrada no puede ser la misma que la de salida";
            document.getElementById("reservarcasa").disabled = true;
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";


        } else if (fecha2 <= fecha3) {
            document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
            document.getElementById("mensajescaledario").innerHTML = "";
            document.getElementById("mensajescaledario").innerHTML = "La fecha de salida no puede ser anterior a la de entrada";
            document.getElementById("reservarcasa").disabled = true;
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";

        } else {
            preciodias = obtenerprecioinstacia(document.getElementById("fechaseleccionada").getAttribute("data-fecha"), document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha"), idrecinto);
            if (preciodias == null) {

                document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
                document.getElementById("mensajescaledario").innerHTML = "Error inesperado";
                document.getElementById("reservarcasa").disabled = true;
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";



            } else if (preciodias <= 0) {

                document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
                document.getElementById("mensajescaledario").innerHTML = "Los días seleccionados no son válidos";
                document.getElementById("reservarcasa").disabled = true;
                showCalendar(fecha.getMonth() + 1, fecha.getFullYear(), idrecinto)
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";


            } else {

                document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2";
                document.getElementById("mensajescaledario").innerHTML = "Precio: " + preciodias + " Euros";
                document.getElementById("reservarcasa").disabled = false;
                document.getElementById("fechaentradaseleccionada").innerHTML = "<strong class='bold'>Fecha entrada:&nbsp; </strong> " + document.getElementById("fechaseleccionada").getAttribute("data-fecha2")
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", document.getElementById("fechaseleccionada").getAttribute("data-fecha"));
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", document.getElementById("fechaseleccionada").getAttribute("data-fecha2"));
                document.getElementById("txtfechaentrada").value = document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha");
                document.getElementById("txtfechasalida").value = document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha");
                document.getElementById("txtidcasa").value = idrecinto;

            }

        }

    } else {
        document.getElementById("fechaentradaseleccionada").innerHTML = "<strong class='bold'>Fecha entrada:&nbsp; </strong> " + document.getElementById("fechaseleccionada").getAttribute("data-fecha2")
        document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", document.getElementById("fechaseleccionada").getAttribute("data-fecha"));
        document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", document.getElementById("fechaseleccionada").getAttribute("data-fecha2"));
        document.getElementById("reservarcasa").disabled = true;


    }


}

function estableceerfechasalida() {
    var preciodias = 0;
    var fecha2;
    var fecha3;
    var partes;

    document.getElementById("mensajescaledario").innerHTML = "";


    if (document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha") != null && document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha").trim() != "") {
        partes = document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha").split("-");
        fecha2 = new Date(partes[0], partes[1], partes[2])

        partes = document.getElementById("fechaseleccionada").getAttribute("data-fecha").split("-");
        fecha3 = new Date(partes[0], partes[1], partes[2])


        if (document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha") == document.getElementById("fechaseleccionada").getAttribute("data-fecha")) {

            document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
            document.getElementById("mensajescaledario").innerHTML = "";
            document.getElementById("mensajescaledario").innerHTML = "La fecha de entrada no puede ser la misma que la de salida";
            document.getElementById("reservarcasa").disabled = true;
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";


        } else if (fecha2 >= fecha3) {
            document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
            document.getElementById("mensajescaledario").innerHTML = "";
            document.getElementById("mensajescaledario").innerHTML = "La fecha de entrada no puede ser posterior a la de salida";
            document.getElementById("reservarcasa").disabled = true;
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
            document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
            document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";


        } else {
            preciodias = obtenerprecioinstacia(document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha"), document.getElementById("fechaseleccionada").getAttribute("data-fecha"), idrecinto);
            if (preciodias == null) {
                document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
                document.getElementById("mensajescaledario").innerHTML = "";
                document.getElementById("mensajescaledario").innerHTML = "Error inesperado";
                document.getElementById("reservarcasa").disabled = true;
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";



            } else if (preciodias <= 0) {
                document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2 text-danger";
                document.getElementById("mensajescaledario").innerHTML = "";
                document.getElementById("mensajescaledario").innerHTML = "Los días seleccionados no son válidos";
                document.getElementById("reservarcasa").disabled = true;
                showCalendar(fecha.getMonth() + 1, fecha.getFullYear(), idrecinto)
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechaentradaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechaentradaseleccionada").innerHTML = "Fecha  entrada ";
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", "");
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", "");
                document.getElementById("fechasalidaseleccionada").innerHTML = "Fecha salida ";



            } else {

                document.getElementById("mensajescaledario").className = "form-label ml-2 mr-2";
                document.getElementById("mensajescaledario").innerHTML = "";
                document.getElementById("mensajescaledario").innerHTML = "<strong class='bold coloresprimarios text-white'>Precio: " + preciodias + " Euros </strong>";
                document.getElementById("reservarcasa").disabled = false;
                document.getElementById("fechasalidaseleccionada").innerHTML = "<strong class='bold'>Fecha salida: &nbsp; </strong> " + document.getElementById("fechaseleccionada").getAttribute("data-fecha2")
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", document.getElementById("fechaseleccionada").getAttribute("data-fecha"));
                document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", document.getElementById("fechaseleccionada").getAttribute("data-fecha2"));
                document.getElementById("txtfechaentrada").value = document.getElementById("fechaentradaseleccionada").getAttribute("data-fecha");
                document.getElementById("txtfechasalida").value = document.getElementById("fechasalidaseleccionada").getAttribute("data-fecha");
                document.getElementById("txtidacasa").value = idrecinto;



            }
        }

    } else {
        document.getElementById("fechasalidaseleccionada").innerHTML = "<strong class='bold'>Fecha salida: &nbsp; </strong> " + document.getElementById("fechaseleccionada").getAttribute("data-fecha2")
        document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha", document.getElementById("fechaseleccionada").getAttribute("data-fecha"));
        document.getElementById("fechasalidaseleccionada").setAttribute("data-fecha2", document.getElementById("fechaseleccionada").getAttribute("data-fecha2"));
        document.getElementById("fechasalidaseleccionada").disabled = true;


    }

}

function establecerdiaseleccionado() {

    var cadenafecha;
    var cadenafecha2;

    cadenafecha = "/" + fecha.getFullYear();
    cadenafecha2 = fecha.getFullYear() + "-";



    if ((fecha.getMonth() + 1) < 10) {
        cadenafecha = "/" + "0" + (fecha.getMonth() + 1) + cadenafecha;
        cadenafecha2 = cadenafecha2 + "0" + (fecha.getMonth() + 1) + "-";
    } else {
        cadenafecha = "/" + (fecha.getMonth() + 1);
        cadenafecha2 = cadenafecha2 + (fecha.getMonth() + 1) + "-";


    }

    if (parseInt(this.innerHTML, 10) < 10) {

        cadenafecha = "0" + this.innerHTML + cadenafecha;
        cadenafecha2 = cadenafecha2 + "0" + this.innerHTML;

    } else {

        cadenafecha = this.innerHTML + cadenafecha;
        cadenafecha2 = cadenafecha2 + this.innerHTML;


    }





    console.log(cadenafecha);
    console.log(cadenafecha2);

    document.getElementById("fechaseleccionada").innerHTML = "<strong class=\"bold\">Fecha seleccionada:&nbsp; </strong> " + cadenafecha;
    document.getElementById("fechaseleccionada").setAttribute("data-fecha", cadenafecha2);
    document.getElementById("fechaseleccionada").setAttribute("data-fecha2", cadenafecha);

    if (document.getElementById("fechaseleccionada").getAttribute("data-fecha") != null && document.getElementById("fechaseleccionada").getAttribute("data-fecha").trim() != "") {

        document.getElementById("fijarfechaentrada").disabled = false;
        document.getElementById("fijarfechasalida").disabled = false;
    } else {


        document.getElementById("fijarfechaentrada").disabled = true;
        document.getElementById("fijarfechasalida").disabled = true;


    }


}


function obtenerprecioinstacia(fechaentrada, fechasalida, idrecinto) {

    console.log("fecha entrada: " + fechaentrada);
    console.log("fecha salida: " + fechasalida);
    console.log("Id recinto: " + idrecinto);
    var ajaxurl;
    var cadenaenvio;
    var datos;
    var ajaxobj;
    var retval;

    retval = true;


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.fechaentrada = fechaentrada;
    datos.fechasalida = fechasalida;
    datos.idrecinto = idrecinto;


    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.PRECIODIASSELECIONADOS + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.PRECIODIASSELECIONADOS + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.PRECIODIASSELECIONADOS, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio);

    return retval;

}

function mostrarformularioregistro() {

    document.getElementById("capafrmregistro").className = "container";
    document.getElementById("capafrmregistro2").className = "container";
    document.getElementById("alerta").className = "container theme-showcase d-none";
    document.getElementById("capafrmidentificacion").className = "container theme-showcase d-none";
    document.getElementById("capafrmcapafrmidentificacion2").className = "container theme-showcase d-none";
    document.getElementById("alerta2").className = "container theme-showcase d-none";
    document.getElementById("titulomodal").innerHTML = "Registrase";


}

function procesarformularioregistro() {
    var capaformulario;
    var capaformulario2;
    var capaalerta;
    var capaalertamensaje;
    var ajaxurl;
    var datos;
    var cadenaenvio;
    var partes;
    var retval;

    retval = "";

    capaformulario = document.getElementById("capafrmregistro");
    capaformulario2 = document.getElementById("capafrmregistro2");
    capaalerta = document.getElementById("alerta");
    capaalertamensaje = document.getElementById("mensajealerta");

    capaalerta.className = "container theme-showcase d-none";
    if (document.getElementById("contrasena").value.trim() != document.getElementById("recontrasena").value.trim()) {

        capaalertamensaje.innerHTML = "<h2 class=\"text-center\">La contraseñas introducidas no coinciden</h2>";
        capaalerta.className = "container theme-showcase d-block";

    } else {

        ajaxurl = new AJAXURL();

        datos = new Object();
        datos.nombre = document.getElementById("nombre").value.trim();
        datos.apellidos = document.getElementById("apellidos").value.trim();
        datos.telefono = document.getElementById("telefono").value.trim();
        datos.correo = document.getElementById("correo").value.trim();
        datos.contrasena = document.getElementById("contrasena").value.trim();



        cadenaenvio = "datos=" + escape(JSON.stringify(datos));
        ajaxobj = new getAjax();

        if (DEPURACION == true) {

            console.log(ajaxurl.REGISTRARUSUARIO + "?" + cadenaenvio);
            ajaxobj.open("GET", ajaxurl.REGISTRARUSUARIO + "?" + cadenaenvio, false);
            ajaxobj.send(null);
        } else {

            ajaxobj.open("POST", ajaxurl.REGISTRARUSUARIO, false);
            ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajaxobj.send(cadenaenvio);
        }



        cadenaenvio = ajaxobj.responseText;
        retval = JSON.parse(cadenaenvio)



        if (retval.trim() == "") {
            partes = location.pathname.split("/");

            if (partes[partes.length - 1].toUpperCase() == "REGISTARSE.PHP") {

                capaformulario2.className = "container theme-showcase d-none";
                capaalertamensaje.innerHTML = "<h2 class=\"text-center\">Usuario Registrado</h2>";
                capaalerta.className = "container theme-showcase d-block coloresprimarios text-white";
                window.setTimeout(rediridirinicio, 3000);

            } else if (partes[partes.length - 1].toUpperCase() == "DESCRIPCION.PHP") {

                $("#modalformularios").modal("hide");
                document.getElementById("formularioreservarcasa").submit();
            }

        } else {

            capaalertamensaje.innerHTML = "<h2 class=\"text-center\">" + retval + "</h2>";
            capaalerta.className = "container theme-showcase d-block coloresprimarios text-white";

        }
    }
    return false;
}



function mostrarformularioidentificacion() {

    document.getElementById("capafrmregistro").className = "container d-none";
    document.getElementById("capafrmregistro2").className = "container d-none";
    document.getElementById("alerta").className = "container theme-showcase d-none";
    document.getElementById("capafrmidentificacion").className = "container d-block";
    document.getElementById("capafrmcapafrmidentificacion2").className = "container d-block";
    document.getElementById("alerta2").className = "container theme-showcase d-none";
    document.getElementById("titulomodal").innerHTML = "Identificarse";

}

function procesarformularioidentificacacion() {

    var capaformulario;
    var capaformulario2;
    var capaalerta;
    var capaalertamensaje;
    var ajaxurl;
    var datos;
    var cadenaenvio;
    var partes;
    var retval;

    retval = "";

    capaformulario = document.getElementById("capafrmidentificacion");
    capaformulario2 = document.getElementById("capafrmcapafrmidentificacion2");
    capaalerta = document.getElementById("alerta2");
    capaalertamensaje = document.getElementById("mensajealerta2");
    capaalerta.className = "container theme-showcase d-none";


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.correo = document.getElementById("correoidentificacion").value.trim();
    datos.contrasena = document.getElementById("contrasenaidentificaacion").value.trim();



    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.IDENTIFICARUSUARIO + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.IDENTIFICARUSUARIO + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.IDENTIFICARUSUARIO, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio)



    if (retval.trim() == "") {
        partes = location.pathname.split("/");

        if (partes[partes.length - 1].toUpperCase() == "IDENTIFICARSE.PHP") {



            capaformulario2.className = "container theme-showcase d-none";
            capaalertamensaje.innerHTML = "<h2 class=\"text-center\">Usuario Identificado</h2>";
            capaalerta.className = "container theme-showcase d-block";
            window.setTimeout(rediridirinicio, 3000);

        } else if (partes[partes.length - 1].toUpperCase() == "DESCRIPCION.PHP") {

            $("#modalformularios").modal("hide");
            document.getElementById("formularioreservarcasa").submit();

        }

    } else {

        capaalertamensaje.innerHTML = "<h2 class=\"text-center\">" + retval + "</h2>";
        capaalerta.className = "container theme-showcase d-block";

    }

    return false;

}



function rediridirinicio() {

    location.href = "index.php"
}


function  procesarformularioreservarcasa() {

    var ajaxurl;
    var ajaxobj;
    var retval;

    ajaxurl = new AJAXURL();
    ajaxobj = getAjax();
    console.log(ajaxurl.COMPROBARSESION);
    if (DEPURACION == true) {

        ajaxobj.open("GET", ajaxurl.COMPROBARSESION, true);
        ajaxobj.send(null);
    } else {
        ajaxobj.open("POST", ajaxurl.COMPROBARSESION, true);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(null);
    }

    ajaxobj.onreadystatechange = function () {
        if (ajaxobj.readyState == 4) {

            if (ajaxobj.status == 200) {
                retval = JSON.parse(ajaxobj.responseText);
                if (retval == true) {

                    document.getElementById("formularioreservarcasa").submit();
                } else {


                    document.getElementById("capafrmregistro").className = "container";
                    document.getElementById("capafrmregistro2").className = "container";
                    document.getElementById("alerta").className = "container theme-showcase d-none";
                    document.getElementById("capafrmidentificacion").className = "container d-none";
                    document.getElementById("capafrmcapafrmidentificacion2").className = "container d-none";
                    document.getElementById("alerta2").className = "container theme-showcase d-none";
                    document.getElementById("titulomodal").innerHTML = "Registrarse";

                    $("#modalformularios").modal("show");

                }
            }
        }

    }

}

function recupearacontrasenausauario() {

    var capaformulario;
    var capaformulario2;
    var capaalerta;
    var capaalertamensaje;
    var ajaxurl;
    var datos;
    var cadenaenvio;
    var partes;
    var retval;

    retval = "";

    capaformulario = document.getElementById("capafrmrecuperar");
    capaformulario2 = document.getElementById("capafrmrecuperar");
    capaalerta = document.getElementById("alerta");
    capaalertamensaje = document.getElementById("mensajealerta");
    capaalerta.className = "container theme-showcase d-none";


    ajaxurl = new AJAXURL();

    datos = new Object();
    datos.correo = document.getElementById("correoidentificacion").value.trim();



    cadenaenvio = "datos=" + escape(JSON.stringify(datos));
    ajaxobj = new getAjax();

    if (DEPURACION == true) {

        console.log(ajaxurl.RECUPERARCONTRASENA + "?" + cadenaenvio);
        ajaxobj.open("GET", ajaxurl.RECUPERARCONTRASENA + "?" + cadenaenvio, false);
        ajaxobj.send(null);
    } else {

        ajaxobj.open("POST", ajaxurl.RECUPERARCONTRASENA, false);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaenvio);
    }



    cadenaenvio = ajaxobj.responseText;
    retval = JSON.parse(cadenaenvio)



    if (retval.trim() == "") {





        capaformulario2.className = "container theme-showcase d-block";
        capaalertamensaje.innerHTML = "<h2 class=\"text-center\">Hemos enviado un correo electrónico con la contraseña</h2>";
        capaalerta.className = "container theme-showcase d-block";


    } else {

        capaalertamensaje.innerHTML = "<h2 class=\"text-center\">" + retval + "</h2>";
        capaalerta.className = "container theme-showcase d-block";

    }

    return false;

}



function  mostrarreservasusuario(mostrarjumbotron) {
    var ajaxurl;
    var ajaxobj;
    var capaalerta;
    var capamesaje;
    var capalistareservas;
    var capalistareservas2;
    var capa;
    var capa2;
    var capa3;
    var cabecera;
    var cabecera2;
    var elemento;
    var elemento2;
    var texto;


    var retval;


    capaalerta = document.getElementById("alerta");
    capamesaje = document.getElementById("mensajealerta");
    capalistareservas = document.getElementById("listareservas");
    capalistareservas2 = document.getElementById("listareservas2");

    if (mostrarjumbotron == false) {
        capaalerta.className = "container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2 d-none";
    }
    capalistareservas.className = "d-none";
    capalistareservas2.innerHTML = "";

    ajaxurl = new AJAXURL();
    ajaxobj = getAjax();
    console.log("../" + ajaxurl.RESERVASUSUARIO);
    if (DEPURACION == true) {

        ajaxobj.open("GET", "../" + ajaxurl.RESERVASUSUARIO, true);
        ajaxobj.send(null);
    } else {
        ajaxobj.open("POST", "../" + ajaxurl.RESERVASUSUARIO, true);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(null);
    }

    ajaxobj.onreadystatechange = function () {
        if (ajaxobj.readyState == 4) {

            if (ajaxobj.status == 200) {
                retval = JSON.parse(ajaxobj.responseText);
                if (retval != null) {


                    capa = document.createElement("article");
                    capa.className = "row  d-flex justify-content-center";




                    for (var i = 0; i < retval.length; i++) {
                        capa2 = document.createElement("article");
                        capa2.className = "col-10 col-sm-10 col-md-5 col-lg-5  col-xl-3 bg-light mr-2 ml-2 mt-2 mb-2";

                        cabecera = document.createElement("header");
                        cabecera2 = document.createElement("h1");
                        cabecera2.className = "text-center cabeceraoferta";
                        elemento = document.createElement("a");
                        elemento.href = "../decripcion.php?c=" + escape(retval[i].idrecinto);
                        texto = document.createTextNode(decodificar(retval[i].nombrerecinto));
                        elemento.appendChild(texto);

                        cabecera2.appendChild(elemento);
                        cabecera.appendChild(cabecera2);
                        capa2.appendChild(cabecera)


                        capa3 = document.createElement("div");


                        elemento = document.createElement("strong");
                        texto = document.createTextNode("Estado de la transacción: ");
                        elemento.appendChild(texto);
                        capa3.appendChild(elemento);
                        texto = document.createTextNode(decodificar(retval[i].estadotransaccion));
                        capa3.appendChild(texto);
                        elemento = document.createElement("br");
                        capa3.appendChild(elemento);

                        elemento = document.createElement("strong");
                        texto = document.createTextNode("Estado de la reserva: ");
                        elemento.appendChild(texto);
                        capa3.appendChild(elemento);
                        texto = document.createTextNode(decodificar(retval[i].estadoreserva));
                        capa3.appendChild(texto);
                        elemento = document.createElement("br");
                        capa3.appendChild(elemento);

                        elemento = document.createElement("strong");
                        texto = document.createTextNode("Fecha entrada: ");
                        elemento.appendChild(texto);
                        capa3.appendChild(elemento);
                        texto = document.createTextNode(formatearfecha(decodificar(retval[i].fechaentrada)));
                        capa3.appendChild(texto);
                        elemento = document.createElement("br");
                        capa3.appendChild(elemento);


                        elemento = document.createElement("strong");
                        texto = document.createTextNode("Fecha salida: ");
                        elemento.appendChild(texto);
                        capa3.appendChild(elemento);
                        texto = document.createTextNode(formatearfecha(decodificar(retval[i].fechasalida)));
                        capa3.appendChild(texto);
                        elemento = document.createElement("br");
                        capa3.appendChild(elemento);


                        elemento = document.createElement("strong");
                        texto = document.createTextNode("Precio: ");
                        elemento.appendChild(texto);
                        capa3.appendChild(elemento);
                        texto = document.createTextNode(retval[i].precio);
                        capa3.appendChild(texto);
                        texto = document.createTextNode(" Euros");
                        capa3.appendChild(texto);
                        elemento = document.createElement("br");
                        capa3.appendChild(elemento);
                        if (decodificar(retval[i].estadoreserva) == "Activa") {
                            elemento = document.createElement("p");
                            elemento.className = "text-center";
                            elemento2 = document.createElement("a");
                            elemento2.href = "javascript:void(0);"
                            elemento2.setAttribute("data-reserva", retval[i].idreserva);
                            elemento2.onclick = cancelarreserva;
                            elemento2.className = "btn btn-danger mt-1";
                            texto = document.createTextNode("Cancelar");
                            elemento2.appendChild(texto);
                            elemento.appendChild(elemento2);
                            capa3.appendChild(elemento);


                        }
                        capa2.appendChild(capa3);
                        capa.appendChild(capa2);
                    }






                    capalistareservas2.appendChild(capa);
                    capalistareservas.className = "d-block";

                } else {

                    capamesaje.innerHTML = "<h1 class=\"text-center\">Se ha producido un error inesperado</h1>";
                    capaalerta.className = "container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2 d-block";

                }


            }

        }
    }

}


function cancelarreserva() {


    var ajaxurl;
    var ajaxobj;
    var capaalerta;
    var capamesaje;
    var capalistareservas;
    var capalistareservas2;
    var cadenaconsulta;


    var retval;


    capaalerta = document.getElementById("alerta");
    capamesaje = document.getElementById("mensajealerta");
    capalistareservas = document.getElementById("listareservas");
    capalistareservas2 = document.getElementById("listareservas2");
    capalistareservas.className = "d-none";
    capalistareservas2.innerHTML = "";

    ajaxurl = new AJAXURL();
    ajaxobj = getAjax();
    cadenaconsulta = "idreserva=" + escape(this.getAttribute("data-reserva"));
    console.log("../" + ajaxurl.BORRARESERVA + "?" + cadenaconsulta);
    if (DEPURACION == true) {

        ajaxobj.open("GET", "../" + ajaxurl.BORRARESERVA + "?" + cadenaconsulta, true);
        ajaxobj.send(null);
    } else {
        ajaxobj.open("POST", "../" + ajaxurl.BORRARESERVA, true);
        ajaxobj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajaxobj.send(cadenaconsulta);
    }

    ajaxobj.onreadystatechange = function () {

        if (ajaxobj.readyState == 4) {

            if (ajaxobj.status == 200) {
                0
                console.log(ajaxobj.responseText);
                retval = JSON.parse(ajaxobj.responseText);
                if (retval == true) {
                    capamesaje.innerHTML = "<h1 class=\"text-center\">Se ha producido un error inesperado</h1>";
                    capaalerta.className = "container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2 d-block";

                    mostrarreservasusuario(false);
                } else {

                    capamesaje.innerHTML = "<h1 class=\"text-center\">Se ha producido un error inesperado</h1>";
                    capaalerta.className = "container theme-showcase  coloresprimarios text-white pb-2 pt-2 mt-2 d-block";


                }
            }
        }


    }
}


function formatearfecha(fecha) {


    var partes;

    partes = fecha.split("-");
    fecha = partes[2] + "/" + partes[1] + "/" + partes[0];

    return fecha;
}

function iniciar() {

    var fecha2;
    var partes;
    var partes2;
    var partes3;
    var fecha2;
    var month;
    var year;


    partes = location.search;

    if (partes.charAt(0) == "?") {


        partes = partes.substr(1);

    }

    partes = partes.split("+").join(" ");
    partes = partes.split("&");
    for (var i = 0; i < partes.length; i++) {

        partes2 = partes[i].split("=");
        partes3 = new Array();

        partes3[unescape(partes2[0])] = unescape(partes2[1]);


    }

    idrecinto = partes3["c"];


    partes = location.pathname.split("/");
    if (partes[partes.length - 1].toUpperCase() == "RESERVAR.PHP") {


        document.getElementById("formularioreservas").onsubmit = procesarmensajesformularioreservas;
        if (sessionStorage.getItem("fechaentrada") != null && sessionStorage.getItem("fechasalida") != null) {

            document.getElementById("fechaentrada").value = sessionStorage.getItem("fechaentrada");
            document.getElementById("fechasalida").value = sessionStorage.getItem("fechasalida");
            procesarmensajesformularioreservas();
        }





    } else if (partes[partes.length - 1].toUpperCase() == "REGISTARSE.PHP") {

        if (document.getElementById("formularioregistro") != null) {

            document.getElementById("formularioregistro").onsubmit = procesarformularioregistro;


        }




    } else if (partes[partes.length - 1].toUpperCase() == "DESCRIPCION.PHP") {




        fecha = new Date();
        month = fecha.getMonth() + 1;
        year = fecha.getFullYear();
        if (document.getElementById("anteriormes") != null) {
            document.getElementById("anteriormes").onclick = mostrarmesanterior;
        }

        fecha2 = new Date();
        if (fecha <= fecha2) {

            document.getElementById("anteriormes").disabled = true;




        } else {
            document.getElementById("anteriormes").disabled = false;

        }





        if (document.getElementById("siguientemes") != null) {

            document.getElementById("siguientemes").onclick = mostrarmessiguiente;

            fecha2 = new Date(9999, 11, 1);
            if (fecha >= fecha2) {
                document.getElementById("siguientemes").disabled = true;


            } else {
                document.getElementById("siguientemes").disabled = false;


            }

        }


        if (document.getElementById("fijarfechaentrada") != null) {
            document.getElementById("fijarfechaentrada").onclick = estableceerfechaentrada;
        }
        if (document.getElementById("fijarfechasalida") != null) {
            document.getElementById("fijarfechasalida").onclick = estableceerfechasalida;
        }



        if (document.getElementById("fechaseleccionada") != null) {
            if (document.getElementById("fechaseleccionada").getAttribute("data-fecha") != null && document.getElementById("fechaseleccionada").getAttribute("data-fecha").trim() != "") {

                document.getElementById("fijarfechaentrada").disabled = false;
                document.getElementById("fijarfechasalida").disabled = false;
            } else {


                document.getElementById("fijarfechaentrada").disabled = true;
                document.getElementById("fijarfechasalida").disabled = true;


            }
        }



        if (document.getElementById("calendario") != null) {
            showCalendar(month, year, idrecinto);

        }

        if (document.getElementById("formularioregistro") != null) {

            document.getElementById("formularioregistro").onsubmit = procesarformularioregistro;


        }

        if (document.getElementById("enlaceidentificacion") != null) {

            document.getElementById("enlaceidentificacion").onclick = mostrarformularioidentificacion;


        }


        if (document.getElementById("formularioidentificarse") != null) {

            document.getElementById("formularioidentificarse").onsubmit = procesarformularioidentificacacion;


        }

        if (document.getElementById("enlaceregistro") != null) {

            document.getElementById("enlaceregistro").onclick = mostrarformularioregistro;


        }


        if (document.getElementById("reservarcasa") != null) {

            document.getElementById("reservarcasa").onclick = procesarformularioreservarcasa;



        }


    } else if (partes[partes.length - 1].toUpperCase() == "IDENTIFICARSE.PHP") {

        if (document.getElementById("formularioidentificarse") != null) {

            document.getElementById("formularioidentificarse").onsubmit = procesarformularioidentificacacion;


        }


    } else if (partes[partes.length - 1].toUpperCase() == "RESERVARCASA.PHP") {


        if (document.getElementById("caparegistroexito") != null) {



        }


    } else if (partes[partes.length - 1].toUpperCase() == "RECUPERARCONTRASENA.PHP") {


        if (document.getElementById("formulariorecuperarcontrasena") != null) {

            document.getElementById("formulariorecuperarcontrasena").onsubmit = recupearacontrasenausauario

        }


    } else if (partes[partes.length - 1].toUpperCase() == "RESERVAS.PHP") {


        mostrarreservasusuario(false);

    } else if (partes[partes.length - 1].toUpperCase() == "DONDEESTAMOS.PHP") {
        var options = {
            zoom: 14
            , center: new google.maps.LatLng(41.67018702503799, -3.68990421295166)
            , mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map'), options);
    }


    if (partes[partes.length - 1].toUpperCase() !== "RESERVAR.PHP" && partes[partes.length - 1].toUpperCase() !== "DESCRIPCION.PHP") {

        if (sessionStorage.getItem("fechaentrada") != null && sessionStorage.getItem("fechasalida") != null) {

            sessionStorage.removeItem("fechaentrada");
            sessionStorage.removeItem("fechasalida");


        }


    }

}










window.addEventListener("load", iniciar, true);
//Parte comun
//Parte publica



//Parte publica
//Parte intranet






//Parte intranet





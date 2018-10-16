<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Ayuda consultas";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Ayuda de consultas";
$_PARAMETERS['keywords'] = "Ayuda, Consultas, Habitáculos, Proveedores";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
//$_PARAMETERS['clasemenuamoayudaaltas'] = "active";
$_PARAMETERS['clasemenuamoayudaconsultas'] = "active";
//$_PARAMETERS['clasemenuamoayudamodificaciones'] = "active";
//$_PARAMETERS['clasemenuayudaacercade'] = "active";
//$_PARAMETERS['clasemenuamoayudavolver'] = "active";




include_once 'plantilla/ayudaheader.php';
?>
<section id="seccionparteintranet">




    <article class="container-fluid">
        <header>
            <h2 class="text-center">

                <strong>Ayuda</strong>

            </h2>

        </header>
        <article class="d-fex justify-content-center pt-2">
            <article class="container">
                <header>
                    <h3 class="text-center"><strong>Ayuda de consultas</strong></h3>
                </header>


                <p>Seleccione el tipo de consulta que desea realizar desde el menú de la izquierda</p>
                <ul>
                    <li>Por habitáculo:  
                        Elija la sala de la que desea ver los objetos. Puede seleccionarla desde un menú desplegable en el que aparecen todas las salas posibles o entrar en el mapa interactivo ("ir a gráfico") y hacer click sobre el aula.<br/>
                        Una vez ha llegado a sacar el listado por pantalla puede generar un PDF con los datos para imprimirlo o guardarlo.</li>

                    <li>Por características: elija la sala de la que desea ver los objetos
                        <ul>
                            <li>tipo  
                                Dentro del tipo puede ser: Equipo(EQ), Herramienta(HE), Maquinaria(MA), Material deportivo(MD), Mobiliario(MO) o Software(SO)</li>
                            <li>descripción  
                                Introduzca una descripción para el producto, p.e. "monitor". La búsqueda devolverá los objetos que sean un monitor</li>
                            <li>número de serie  
                                Introduzca el número de serie exacto del producto a buscar.</li>
                            <li>código barras  
                                Introduzca el código de barras exacto del producto a buscar.</li>
                            <li>departamento  
                                Seleccione el departamento del cuál quiere listar los objetos.</li>
                            <li>fecha alta  
                                Introduzca la fecha de alta con el formato AAAA-MM-DD. En caso de que el objeto existiese antes de Febrero de 2014 esta consulta de fecha podría no funcionar. Recomendamos probar DD/MM/AAAA, DD-MM-AAAA, Mes-AAAA... Hay fechas en múltiples formatos, así que la búsqueda no está asegurada.</li>
                        </ul>
                    </li>

                    <li>Personalizada:  
                        Haga la consulta SQL. Ésta es una consulta avanzada y sólo debería de ser usada en casos muy específicos para ver información acerca de un objeto, ya que no ofrece la capacidad de sacar un listado  
                        Primero seleccione los campos que quiere listar de la columna de la izquierda.  
                        A continuación seleccione los filtros en la columna de la derecha y ejecute la consulta</li>
                </ul>
            




            </article>

        </article>
    </article>
</section>





<?php

include_once 'plantilla/ayudafooter.php';
?>
   
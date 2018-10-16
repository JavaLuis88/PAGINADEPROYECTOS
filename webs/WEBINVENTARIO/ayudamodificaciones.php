<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Ayuda modificaciones";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Ayuda de modificaciones";
$_PARAMETERS['keywords'] = "Ayuda, Modificaciones, Habitáculos, Proveedores";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
//$_PARAMETERS['clasemenuamoayudaaltas'] = "active";
//$_PARAMETERS['clasemenuamoayudaconsultas'] = "active";
$_PARAMETERS['clasemenuamoayudamodificaciones'] = "active";
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
                    <h3 class="text-center"><strong>Ayuda de Modificaciones</strong></h3>
                </header>

                <p>Seleccione el tipo de modificación que desea realizar desde el menú de la izquierda</p>
                <ul>
                    <li>Objeto:  
                        Seleccione el parámetro por el que desea buscar el objeto a modificar  
                        <ul>
                            <li>Descripción  
                                Introduzca una descripción para localizar el objeto</li>
                            <li>Numero de Serie  
                                Introduzca el número de serie que identifica el objeto</li>
                            <li>Código de barras  
                                Introduzca el código de barras en caso de que el objeto lo tenga</li>
                        </ul>
                    </li>

                    <li>Tipo:  
                        Para modificar los diferentes tipos  
                        <ul>
                            <li>Nombre del Tipo  
                                Introduzca el nombre del tipo a modificar.</li>


                        </ul>
                    </li>

                    <li>Proveedor:  
                        Seleccione el parámetro por el que desea modificar el proveedor  
                        <ul>
                            <li>Nombre  
                                Introduzca el nombre del proveedor a modificar.</li>
                            <li>CIF  
                                Introduzca el CIF del proveedor que desea buscar</li>
                        </ul>
                    </li>


                </ul>
                <p><b><u>Una vez encontrado el parámetro a buscar hacemos click sobre el objeto y nos lleva a un formulario donde modificar los datos</u></b></p>

            </article>

        </article>
    </article>
</section>





<?php

include_once 'plantilla/ayudafooter.php';
?>
   
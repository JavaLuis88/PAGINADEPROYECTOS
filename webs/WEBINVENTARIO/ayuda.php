<?php

$_PARAMETERS['language'] = "es";
$_PARAMETERS['title'] = "C.I.F.P Santa Catalina-Ayuda altas";
$_PARAMETERS['charset'] = "utf-8";
$_PARAMETERS['description'] = "Ayuda de altas";
$_PARAMETERS['keywords'] = "Ayuda, Altas, Habitáculos, Proveedores";
$_PARAMETERS['author'] = "Super Eñe";
$_PARAMETERS['robots'] = "NOINDEX, NOFOLLOW, NOARCHIVE, NOODP, NOYDIR";
$_PARAMETERS['clasemenuamoayudaaltas'] = "active";
//$_PARAMETERS['clasemenuamoayudaconsultas'] = "active";
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
                    <h3 class="text-center"><strong>Ayuda de Altas</strong></h3>
                </header>

                <p>Seleccione el tipo de alta que desea realizar desde el menú de la izquierda</p>
                <ul class="list-unstyled">
                    <li>Por objeto:  
                        Se introducen los datos relacionados con un nuevo objeto. Existen campos obligatorios y campos opcionales. Podrá ser modificada la información en el apartado Modificaciones<br/>
                        <ul>
                            <li>Proveedor  
                                Seleccionamos un proveedor de la lista desplegable. En caso de ser un nuevo proveedor y no aparecer debemos introducirlo anteriormente en Alta Proveedor(Menú Izquierda), y retornar a este apartado</li>
                            <li>Departamento  
                                Seleccione el departamento en el cuál quiere dar de alta el objeto.</li>
                            <li>Sala  
                                Seleccione la sala donde daremos de alta el objeto.</li>						
                            <li>Tipo
                                Dentro del tipo puede ser: Equipo(EQ), Herramienta(HE), Maquinaria(MA), Material deportivo(MD), Mobiliario(MO) o Software(SO)</li>
                            <li>Elemento  
                                Introduzca el nombre del nuevo objeto, p.e "Ordenador".</li>						
                            <li>Descripción  
                                Introduzca una descripción para el producto, p.e. "monitor".</li>
                            <li>Número de serie  
                                Introduzca el número de serie exacto del producto a dar de alta.</li>
                            <li>Unidades  
                                Introduzca la cantidad exacta de objetos de el mismo tipo que da de alta a la vez.</li>		
                            <li>Cuenta gestión  
                                Seleccione la cuenta gestión en la que damos de alta el producto</li>
                            <li>Cuenta gestión  
                                Seleccione la cuenta gestión en la que damos de alta el producto</li>
                            <li>Nº Factura  
                                Introduzca el número de factura exacto del producto</li>
                            <li>Observaciones  
                                Introduzca en caso de que se desee algún tipo de observación relacionada con el nuevo objeto.</li>
                        </ul>
                    </li>

                    <li>Tipo:  
                        Introduzca un nuevo tipo en caso de que sea necesario para dar de alta un nuevo producto  
                        <ul>
                            <li>Nombre del Tipo  
                                Introduzca el nombre completo del nuevo tipo</li>
                            <li>Abreviatura del  tipo  
                                Introduzca las siglas, de 3 caracteres como máximo que estén relacionadas con el nombre del nuevo tipo. Estas siglas serán las que aparecerán en un código de barras.</li>

                        </ul>
                    </li>

                    <li>Proveedor:  
                        Para introducir un nuevo proveedor  
                        <ul>
                            <li>Nombre del Proveedor  
                                Introduzca el nombre completo del nuevo proveedor</li>
                            <li>Dirección  
                                Introduzca la dirección del nuevo proveedor.</li>
                            <li>Teléfono  
                                Introduzca el numero de teléfono del nuevo proveedor.</li>
                            <li>CIF  
                                Introduzca el CIF del proveedor. Se trata de un campo obligatorio para dar de alta un nuevo proveedor.</li>
                            <li>E-mail  
                                Introduzca la dirección de correo electrónico.</li>
                            <li>Descripción  
                                Introduzca una descripción opcional para el proveedor.</li>				
                        </ul>
                    </li>

                    <li>Habitáculo:  
                        Dar de alta un nuevo habitáculo  
                        <ul>
                            <li>Nombre del Habitaculo  
                                Introduzca el nombre completo del nuevo Habitaculo</li>
                            <li>Descripción  
                                Introduzca una descripción para el nuevo habitáculo.</li>			
                        </ul>
                    </li>	

                    <li>Altas de usuarios:  
                        Para la creación de un nuevo usuario.Es obligatorio rellenar todos los campos.  
                        Dichos campos son:<br/>
                        <ul>
                            <li>Username  
                                Nombre del usuario.</li>
                            <li>Passsword  
                                Contraseña.</li>
                            <li>Departamento  
                                Departamento al que pertenece el usuario.  
                                Los departamentos están codificados por las tres primeras letras.  
                                Los departamentos admiten los valores:INF, ELE,ADM,AFD...</li>
                            <li>Permisos  
                                Se debe elegir entre permisos de solo lectura o todos los permisos.</li>
                        </ul>
                    </li>
                </ul>


            </article>

        </article>
    </article>
</section>





<?php

include_once 'plantilla/ayudafooter.php';
?>
   
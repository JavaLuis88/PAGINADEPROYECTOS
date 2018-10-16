<?php
session_start();
include 'funcionesA.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Inventario Santa Catalina</title>
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <style type="text/css">
                body {
                    background-color: #003c00;
                }
                #contenido {
                    background-color: #1B9E02;
                    color: white;
                    overflow: scroll;
                }
                #altas, #modificaciones {
                    padding-top: 40px;
                    padding-left: 50px;
                    padding-bottom: 20px;
                }
                #consultas, #acercade, #inicio {
                    padding-top: 90px;
                    padding-left: 50px;
                    background-color: #003c00;
                    padding-bottom: 20px;
                }
                #navegador {
                    position: fixed;
                    width: 885px;
                }
                hr {
                    margin: 0px;
                }

            </style>
            <link rel="stylesheet" type="text/css" href="inventario.css" title="style" />
    </head>

    <body>
        <?php
        hayLogin();
        ?>
        <div id="contenedor">
            <div id="header">
                <img src="images/logo.gif" width="80" height="80" alt="logo" />
                <p>Inventario C.I.F.P. Santa Catalina</p>
            </div>
            <div id="contenido" class="content">
                <nav id="navegador" class="navbar navbar-default" role="navigation">
                    <div class="navbar-header" style="height: 50px;">
                        <a class="navbar-brand">Ayuda Inventario C.I.F.P. Santa Catalina</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#inicio">Inicio</a></li>
                        <li><a href="#altas">Altas</a></li>
                        <li><a href="#consultas">Consultas</a></li>
                        <li><a href="#modificaciones">Modificaciones</a></li>
                        <li><a href="#acercade">Acerca de</a></li>
                        <li><a href="index.html">Atr&aacute;s</a></li>
                    </ul>
                </nav>

                <div id="inicio">
                    <h1>Bienvenido a la ayuda del Inventario de C.I.F.P. Santa Catalina</h1>
                </div>
                <hr />

                <div id="altas">
                    <h3>Ayuda de Altas</h3>
                    <p>Seleccione el tipo de alta que desea realizar desde el menú de la izquierda</p>
                    <ul>
                        <li>Por objeto:<br />
                            Se introducen los datos relacionados con un nuevo objeto. Existen campos obligatorios y campos opcionales. Podrá ser modificada la información en el apartado Modificaciones<br/>
                            <ul>
                                <li>Proveedor<br />
                                    Seleccionamos un proveedor de la lista desplegable. En caso de ser un nuevo proveedor y no aparecer debemos introducirlo anteriormente en Alta Proveedor(Menú Izquierda), y retornar a este apartado</li>
                                <li>Departamento<br />
                                    Seleccione el departamento en el cuál quiere dar de alta el objeto.</li>
                                <li>Sala<br />
                                    Seleccione la sala donde daremos de alta el objeto.</li>						
                                <li>Tipo</br>
                                    Dentro del tipo puede ser: Equipo(EQ), Herramienta(HE), Maquinaria(MA), Material deportivo(MD), Mobiliario(MO) o Software(SO)</li>
                                <li>Elemento<br />
                                    Introduzca el nombre del nuevo objeto, p.e "Ordenador".</li>						
                                <li>Descripción<br />
                                    Introduzca una descripción para el producto, p.e. "monitor".</li>
                                <li>Número de serie<br />
                                    Introduzca el número de serie exacto del producto a dar de alta.</li>
                                <li>Unidades<br />
                                    Introduzca la cantidad exacta de objetos de el mismo tipo que da de alta a la vez.</li>		
                                <li>Cuenta gestión<br />
                                    Seleccione la cuenta gestión en la que damos de alta el producto</li>
                                <li>Cuenta gestión<br />
                                    Seleccione la cuenta gestión en la que damos de alta el producto</li>
                                <li>Nº Factura<br />
                                    Introduzca el número de factura exacto del producto</li>
                                <li>Observaciones<br />
                                    Introduzca en caso de que se desee algún tipo de observación relacionada con el nuevo objeto.</li>
                            </ul>
                        </li>
                        <br />
                        <li>Tipo:<br />
                            Introduzca un nuevo tipo en caso de que sea necesario para dar de alta un nuevo producto<br />
                            <ul>
                                <li>Nombre del Tipo<br />
                                    Introduzca el nombre completo del nuevo tipo</li>
                                <li>Abreviatura del  tipo<br />
                                    Introduzca las siglas, de 3 caracteres como máximo que estén relacionadas con el nombre del nuevo tipo. Estas siglas serán las que aparecerán en un código de barras.</li>

                            </ul>
                        </li>
                        <br />
                        <li>Proveedor:<br />
                            Para introducir un nuevo proveedor<br />
                            <ul>
                                <li>Nombre del Proveedor<br />
                                    Introduzca el nombre completo del nuevo proveedor</li>
                                <li>Dirección<br />
                                    Introduzca la dirección del nuevo proveedor.</li>
                                <li>Teléfono<br />
                                    Introduzca el numero de teléfono del nuevo proveedor.</li>
                                <li>CIF<br />
                                    Introduzca el CIF del proveedor. Se trata de un campo obligatorio para dar de alta un nuevo proveedor.</li>
                                <li>E-mail<br />
                                    Introduzca la dirección de correo electrónico.</li>
                                <li>Descripción<br />
                                    Introduzca una descripción opcional para el proveedor.</li>				
                            </ul>
                        </li>
                        <br />
                        <li>Habitáculo:<br />
                            Dar de alta un nuevo habitáculo<br />
                            <ul>
                                <li>Nombre del Habitaculo<br />
                                    Introduzca el nombre completo del nuevo Habitaculo</li>
                                <li>Descripción<br />
                                    Introduzca una descripción para el nuevo habitáculo.</li></li>			
                    </ul>
                    </li>	
                    <br />
                    <li>Altas de usuarios:<br />
                        Para la creación de un nuevo usuario.Es obligatorio rellenar todos los campos.<br />
                        Dichos campos son:<br/>
                        <ul>
                            <li>Username<br />
                                Nombre del usuario.</li>
                            <li>Passsword<br />
                                Contraseña.</li>
                            <li>Departamento<br />
                                Departamento al que pertenece el usuario.<br />
                                Los departamentos están codificados por las tres primeras letras.<br />
                                Los departamentos admiten los valores:INF, ELE,ADM,AFD...</li>
                            <li>Permisos<br />
                                Se debe elegir entre permisos de solo lectura o todos los permisos.</li>
                        </ul>
                </div>
                <hr />

                <div id="consultas">
                    <h3>Ayuda de consultas</h3>
                    <p>Seleccione el tipo de consulta que desea realizar desde el menú de la izquierda</p>
                    <ul>
                        <li>Por habitáculo:<br />
                            Elija la sala de la que desea ver los objetos. Puede seleccionarla desde un menú desplegable en el que aparecen todas las salas posibles o entrar en el mapa interactivo ("ir a gráfico") y hacer click sobre el aula.<br/>
                            Una vez ha llegado a sacar el listado por pantalla puede generar un PDF con los datos para imprimirlo o guardarlo.</li>
                        <br />
                        <li>Por características: elija la sala de la que desea ver los objetos
                            <ul>
                                <li>tipo<br />
                                    Dentro del tipo puede ser: Equipo(EQ), Herramienta(HE), Maquinaria(MA), Material deportivo(MD), Mobiliario(MO) o Software(SO)</li>
                                <li>descripción<br />
                                    Introduzca una descripción para el producto, p.e. "monitor". La búsqueda devolverá los objetos que sean un monitor</li>
                                <li>número de serie<br />
                                    Introduzca el número de serie exacto del producto a buscar.</li>
                                <li>código barras<br />
                                    Introduzca el código de barras exacto del producto a buscar.</li>
                                <li>departamento<br />
                                    Seleccione el departamento del cuál quiere listar los objetos.</li>
                                <li>fecha alta<br />
                                    Introduzca la fecha de alta con el formato AAAA-MM-DD. En caso de que el objeto existiese antes de Febrero de 2014 esta consulta de fecha podría no funcionar. Recomendamos probar DD/MM/AAAA, DD-MM-AAAA, Mes-AAAA... Hay fechas en múltiples formatos, así que la búsqueda no está asegurada.</li>
                            </ul>
                        </li>
                        <br />
                        <li>Personalizada:<br />
                            Haga la consulta SQL. Ésta es una consulta avanzada y sólo debería de ser usada en casos muy específicos para ver información acerca de un objeto, ya que no ofrece la capacidad de sacar un listado<br />
                            Primero seleccione los campos que quiere listar de la columna de la izquierda.<br />
                            A continuación seleccione los filtros en la columna de la derecha y ejecute la consulta</li>
                    </ul>
                </div>
                <hr />


                <div id="modificaciones">
                    <h3>Ayuda de Modificaciones</h3>
                    <p>Seleccione el tipo de modificación que desea realizar desde el menú de la izquierda</p>
                    <ul>
                        <li>Objeto:<br />
                            Seleccione el parámetro por el que desea buscar el objeto a modificar<br />
                            <ul>
                                <li>Descripción<br />
                                    Introduzca una descripción para localizar el objeto</li>
                                <li>Numero de Serie<br />
                                    Introduzca el número de serie que identifica el objeto</li>
                                <li>Código de barras<br />
                                    Introduzca el código de barras en caso de que el objeto lo tenga</li>
                            </ul>
                        </li>
                        <br />
                        <li>Tipo:<br />
                            Para modificar los diferentes tipos<br />
                            <ul>
                                <li>Nombre del Tipo<br />
                                    Introduzca el nombre del tipo a modificar.</li>


                            </ul>
                        </li>
                        <br />
                        <li>Proveedor:<br />
                            Seleccione el parámetro por el que desea modificar el proveedor<br />
                            <ul>
                                <li>Nombre<br />
                                    Introduzca el nombre del proveedor a modificar.</li>
                                <li>CIF<br />
                                    Introduzca el CIF del proveedor que desea buscar</li>
                            </ul>
                        </li>
                        <br/>
                        <p><b><u>Una vez encontrado el parámetro a buscar hacemos click sobre el objeto y nos lleva a un formulario donde modificar los datos</b></u></p>

                    </ul>
                </div>
                <hr />



                <div id="acercade">
                    <h3>Acerca de</h3>
                    <p>Inventario C.I.F.P. Santa Catalina:</p>
                    <p>Programado por:</p>
                    <p>Alumnos DAM 2</p>
                    <ul>
                        <li>C&eacute;sar Segundo</li>
                        <li>Mario Mart&iacute;n</li>
                        <li>Efr&eacute;n Sanz</li>
                        <li>M&oacute;nica Frutos</li>
                        <li>Sonia Frutos</li>
                    </ul>
                    <p>Tutor</p>
                    <ul>
                        <li>Luis Guillermo Carranza</li>
                    </ul>
                </div>
            </div>
            <hr />
            <!--<div id="footer"></div>-->
        </div>
    </body>
</html>

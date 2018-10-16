

    <div id="capafrmidentificacion" class="container" >
    


        <div id="alerta2" class="container theme-showcase d-none coloresprimarios text-white">
            <div id="mensajealerta2" class="jumbotron-fluid coloresprimarios mt-2 text-white">
                
            </div>
        </div>

            <div class="container mt-2 mb-4 text-center">
                Por favor, rellena el siguiente formulario y nos pondremos en contacto contigo lo antes posible.
            </div>

        <div id="capafrmcapafrmcontacto" class="container">
            <form action="contacto.php" method="POST" name="formulariocontacto" id="formulariocontacto" class="">

                <div class="form-group">
                    <label  for="nombrecontacto">Nombre</label>
                    <input name="nombre" id="nombrecontacto" type="text" class="form-control" maxlength="28" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label  for="apellidoscontacto">Apellidos</label>
                    <input name="apellidos" id="apellidoscontacto" type="text" class="form-control" maxlength="28" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                    <label  for="correocontacto">Correo Electrónico</label>
                    <input name="correo" id="correocontacto" type="email" class="form-control" maxlength="48" placeholder="Correo Electrónico" required>
                </div>
                <div class="form-group">
                    <label  for="mensajecontacto">Mensaje</label>
                    <textarea name="mensaje" id="mensajecontacto" class="form-control" placeholder="Mensaje" required>
                    </textarea>
                </div>



                <button name="identificarusuario" id="identificarusuario" type="submit" class="btn btn-primary mb-2">Identificarse</button>



            </form>

            <?php
            if ($ruta == "/identificarse.php") {
                ?>
                <a href="registarse.php">Registrarse</a> &nbsp; &nbsp; <a href="recuperarcontrasena.php">Recuperar Contraseña</a>

                <?php
            } else if ($ruta == "/descripcion.php") {
                ?>


                <a href="javascript:void(0);" id="enlaceregistro">Registrase</a>



                <?php
            }
            ?>

        </div>

    </div>
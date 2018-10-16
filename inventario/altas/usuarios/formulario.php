
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="inventario.css" title="style" />
        <style>
            body {
                font-family: Verdana;
                color: white;
            }
        </style>

    </head>
    <body>
    <center><h1>Tabla <br>
            Formulario de alta de usuarios<br></h1></center> 
    <center><h1> Introduce los datos del nuevo usuario <br>
            en el siguiente formulario</h1></center> 
    <form name="consultas" method="POST" action="usnuevo.php"> 
        <table bgcolor="#339933" align=center border=4> 
            <td align="right">	Username: </td> 
            <td align="left"> <input type="text" name="pv1" value="" size=15></td><tr> 
                <td align="right">Password: </td> 
                <td align="left"> <input type="password" name="pv2" value="" size=15 ></td><tr> 
                <td align="right">Departamento: </td> 
                <td align="left"> <!-- <input type="text" name="pv3" value="" size=15 ></td><tr> -->
                    <select name="pv3">
                        <option name="pv3" value="AFD">AFD</option> 
                        <option name="pv3" value="ELE">ELE</option> 
                        <option name="pv3" value="INF">INF</option>
                        <option name="pv3" value="FOL">FOL</option> 
                        <option name="pv3" value="CU-FOL">CU-FOL</option>
                        <option name="pv3" value="ADM">ADM</option>
                        <option name="pv3" value="BIB">BIB</option>
                        <option name="pv3" value="CEN">CEN</option>
                    </select>

                </td><tr>
                <td align="right">Permisos de acceso: </td> 
                <td align="left"> <input type="radio" name="pv4" value="1"  size=15 > Total <input type="radio" name="pv4" value="0" checked size=15 > S&oacute;lo lectura </td><tr>
                <!--colocamos los botones de enviar y borrar //--> 
                <td align=center><input type=submit value="Enviar"></td> 
                <td align=center><input type=reset value="Borrar"></td> 
        </table>

    </form>

</body>
</html>

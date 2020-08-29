<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h2>Error!</h2>";
            switch ($_REQUEST['codigo']) {
                    case -1:
                            echo "Solo se permiten cuentas del dominio gmail.com";
                            break;
                    case -2:
                            echo "La confirmacion del email no es valida";
                            break;
            }
            echo "<br />";
            echo "<a href='formularioalumno.php'>Regresar</a>";
        ?>
    </body>
</html>

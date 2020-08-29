<?php
    // coneccion al servidor de base de datos
    require 'database.php';
 ?>
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
        <h2>
            Listado de alumnos:
        </h2>
        
        <?php
            $q = "SELECT codigo, nombre1, apellido1, telefono, email, DATE_FORMAT(fechanacimiento, '%d/%m/%Y') as fechanac FROM alumnos "
                    . "where codigodepto = " . htmlentities($_GET["listadeptos"])
                    . " order by apellido1";
            
            // echo $q;
            // enviando el comando SQL
            $alumnos = mysqli_query($conn, $q);
            
            if (mysqli_num_rows($alumnos) < 1) {
                echo "<br>No hay alumnos registrados para el departamento " 
                        . htmlentities($_GET["listadeptos"]);
                echo "<br>";
            } else {
                echo "<table border='1'>\n";
                echo "<th>Codigo</th>\n";
                echo "<th>Nombre</th>\n";
                echo "<th>Apellido</th>\n";
                echo "<th>Telefono</th>\n";
                echo "<th>eMail</th>\n";
                echo "<th>Fecha de Nacimiento</th>\n";

                while ($row = mysqli_fetch_array($alumnos)) {
                    echo "<tr>";
                            echo "<td>" . $row['codigo'] . "</td>";
                            echo "<td>" . $row['nombre1'] . "</td>";
                            echo "<td>" . $row['apellido1'] . "</td>";
                            echo "<td>" . $row['telefono'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['fechanac'] . "</td>";
                    echo "</tr>";
                }
                echo '</table>';
                // cerrando la conexion a la BDD
                //mysqli_free_result($deptos);
                mysqli_close($conn);
            }            
        ?>
        <br>
        <a href="formularioalumno.php">Agregar nuevo</a>
    </body>
</html>

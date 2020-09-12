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
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <header>
            <?php require './menu.php'; ?>ul>
        </nav>
    </header>
    <section>
        <?php
        require './database.php';
        $q = "SELECT codigo, nombre1, apellido1, telefono, email, DATE_FORMAT(fechanacimiento, '%d/%m/%Y') as fechanac FROM alumnos "
                . " order by codigo";

        // echo $q;
        // enviando el comando SQL
        $alumnos = mysqli_query($conn, $q);

        if (mysqli_num_rows($alumnos) < 1) {
            echo "<br>No hay alumnos registrados para el departamento "
            . htmlentities($_GET["listadeptos"]);
            echo "<br>";
        } else {
            echo "<table>\n";
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
    </section>
    <footer>
        <?php require './Footer.php'; ?>
    </footer>
</body>
</html>

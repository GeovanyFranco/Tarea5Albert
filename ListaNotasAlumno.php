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
            <?php require './menu.php'; ?>
        </header>
        <article>
            <section>
                <?php
                require './database.php';
                $nota = "select * from notas where codigoalumno = " . $_POST['codigo'];
                $notas = mysqli_query($conn, $nota);
                if (mysqli_num_rows($notas) < 1) {
                    echo "<br>No hay alumnos registrados para el departamento "
                    . htmlentities($_GET["listadeptos"]);
                    echo "<br>";
                } else {
                    echo "<table >\n";
                    echo "<th>Codigo alumno</th>\n";
                    echo "<th>Codigo curso</th>\n";
                    echo "<th>Nota</th>\n";
                    echo "<th>Fecha de aprobacion</th>\n";

                    while ($row = mysqli_fetch_array($notas)) {
                        echo "<tr>";
                        echo "<td>" . $row['codigoalumno'] . "</td>";
                        echo "<td>" . $row['codigocurso'] . "</td>";
                        echo "<td>" . $row['nota'] . "</td>";
                        echo "<td>" . $row['fechaaprobacion'] . "</td>";
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

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

function verificardatos() {
    $verifica = 0;  // todo OK
    // busca una cadena de caracteres dentro de otra
    $dominio = strstr($_POST['email'], "@");

    // compara dos cadenas de caracteres
    if (strcmp($dominio, "@gmail.com") != 0) {
        // dominio no permitido
        $verifica = -1;
    } else if (strcmp($_POST['email'], $_POST['email2']) != 0) {
        // confirmacion de email no valida
        $verifica = -2;
    }

    return $verifica;
}

function insertar() {
    require 'database.php';

    //echo $_POST['fechanac'];
    $anio = date('Y', strtotime($_POST['fechanac']));
    $mes = date('m', strtotime($_POST['fechanac']));
    $dia = date('d', strtotime($_POST['fechanac']));

    //generando fecha en formato 'yyyy-mm-dd' para ser almacenada en la base de datos
    $fecha = $anio . "-" . $mes . "-" . $dia;

    $q = "INSERT INTO Alumnos (NOMBRE1, APELLIDO1, EMAIL, TELEFONO, GENERO, FECHANACIMIENTO, CODIGODEPTO)"
            . " values ('" . $_POST['nombre1'] . "','" . $_POST['apellido1'] . "','"
            . $_POST['email'] . "','" . $_POST['telefono'] . "','" . $_POST['genero']
            . "',STR_TO_DATE('" . $fecha . "', '%Y-%m-%d')," . $_POST['deptos'] . ")";

    echo $q;
    $s = mysqli_query($conn, $q);

    //mysqli_free_result($s);
    mysqli_close($conn);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <header>
            <nav>
                <h1>Menu de navegacion</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Alumnos.php">Alumnos</a></li>
                    <li><a href="TodosAlumnos.php">Alumnos por departamento</a></li>
                    <li><a href="ModificarAlumno.php">Modificar alumno</a></li>
                    <li><a href="NuevoAlumno.php">Nuevo alumno</a></li>
                    <li><a href="Departamentos.php">Nuevo departamentos</a></li>
                    <li><a href="EliminarAlumno.php">Eliminar alumno</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <?php
            $r = verificardatos();
            if ($r == 0) {
                insertar();
                echo "<br>Registro grabado!<br>";
                echo "<a href='Alumnos.php'>Ver alumnos</a>";
            } else {
                // redireccionar a pagina de error
                header('Location: http://localhost/Tarea5/error.php?codigo=' . $r);
            }
            ?>
        </section>
        <footer>
                <h2>Desarrollo web</h2>
                <p>
                    <strong>CARNET:</strong> 1390-12-18169<br>
                    <strong>NOMBRE:</strong> Carolin Gabriela Cetino Sian<br>
                    <strong>TAREA 5</strong>
                </p>
            </footer>
    </body>
</html>

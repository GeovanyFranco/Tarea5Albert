<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

function insertNotas() {
    require './database.php';
    $insert = "INSERT INTO notas (codigoalumno ,codigocurso, nota, fechaaprobacion) "
            . "VALUES (" . $_POST['id_alumno'] . "," . $_POST['id_curso'] . ", " . $_POST['punteo'] . ", '" . $_POST['date'] . "');";
    echo '<br>' . $insert;
    $s = mysqli_query($conn, $insert);
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
            <?php require './menu.php'; ?>
        </header>
        <section>
            <?php
            insertNotas();
            echo "<br><a href='Notas.php'>Ingresar otro</a>";
            ?>
        </section>
        <footer>
            <?php require './Footer.php'; ?>
        </footer>
    </body>
</html>


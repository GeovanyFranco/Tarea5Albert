<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

function insertDepartamento() {
    require './database.php';
    $insert = "INSERT INTO departamento (nombre) VALUES ('" . $dep = $_POST['departamento'] . "')";
    echo $insert;
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
            insertDepartamento();
            echo "<a href='TodosAlumnos.php'>Ver alumnos</a>";
            ?>
        </section>
        <footer>
            <?php require './Footer.php'; ?>
        </footer>
    </body>
</html>


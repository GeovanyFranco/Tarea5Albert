<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

function insertar() {
    require 'database.php';

    $q = "DELETE FROM alumnos WHERE codigo = " . $_POST['codigo'];
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
            <?php require './menu.php'; ?>
        </header>
        <section>
            <?php
            try {
                insertar();
                echo "<br>Registro grabado!<br>";
                echo "<a href='Alumnos.php'>Ver alumnos</a>";
            } catch (Exception $ex) {
                echo 'Excepción capturada: ', $ex->getMessage(), "\n";
            }
            ?>
        </section>
        <footer>
            <?php require './Footer.php'; ?>
        </footer>
    </body>
</html>

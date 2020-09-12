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
        <section>
            <h2>Ingresar notas de alumno:</h2><br>
            <form action="InsertNotas.php" method="post">
                <table class="formulario">
                    <tr>
                        <td>Codigo de alumno:</td>
                        <td><input type="number" name="id_alumno" size="50" required></td>
                    </tr>
                    <tr>
                        <td>Codigo de curso:</td>
                        <td><input type="number" name="id_curso" size="50" required></td>
                    </tr>
                    <tr>
                        <td>Punteo:</td>
                        <td><input type="text" name="punteo" size="50" required></td>
                    </tr>
                    <tr>
                        <td>Fecha de aprobacion:</td>
                        <td><input type="date" name="date" size="50" required></td>
                    </tr>
                </table>
                <input class="btn-enviar" type="submit" value="Siguiente">
                <input class="btn-limpiar" type="reset" value="Limpiar">
            </form>
        </section>
        <footer>
            <?php require './Footer.php'; ?>                
        </footer>
    </body>
</html>

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
            <h2>Eliminar alumno:</h2><br>
            <form action="DeleteAlumno.php" method="POST">
                <table class="formulario">
                    <tr>
                        <td>Codigo:</td>
                        <td><input type="text" name="codigo" size="50" required></td>
                    </tr>
                </table>
                <input class="btn-enviar" type="submit" value="Grabar">
                <input class="btn-limpiar" type="reset" value="Limpiar">
            </form>
        </section>
        <footer>
            <?php require './Footer.php'; ?>
        </footer>
    </body>
</html>

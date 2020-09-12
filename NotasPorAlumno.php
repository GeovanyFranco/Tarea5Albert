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
            <h2>Nuevo Alumno:</h2><br>
            <form action="ListaNotasAlumno.php" method="post">
                <table class="formulario">
                    <tr>
                        <td>Codigo de alumno:</td>
                        <td><input type="number" name="codigo" size="50" required></td>
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

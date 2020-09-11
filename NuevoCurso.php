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
            <section>
                <h2>Nuevo curso:</h2><br>
                <form action="InsertCurso.php" method="post">
                    <table class="formulario">
                        <tr>
                            <td>Curso:</td>
                            <td><input type="text" name="nombre" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Creditos:</td>
                            <td><input type="number" name="creditos" size="50" required></td>
                        </tr>
                        <tr>
                            <td>Nota minima:</td>
                            <td><input type="number" name="notaminima" maxlength="8" size="20"></td>
                        </tr>
                        <tr>
                            <td>Profesor:</td>
                            <td><input type="text" name="profesor" size="40" required><br></td>
                    </table>
                    <input class="btn-enviar" type="submit" value="Grabar">
                    <input class="btn-limpiar" type="reset" value="Limpiar">
                </form>
            </section>
        </header>
        <footer>
            <?php require './Footer.php';?>
        </footer>
    </body>
</html>

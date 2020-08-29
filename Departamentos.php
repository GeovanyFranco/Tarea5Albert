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
            <nav>
                <h1>Menu de navegacion</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Alumnos.php">Alumnos</a></li>
                    <li><a href="TodosAlumnos.php">Alumnos por departamento</a></li>
                    <li><a href="">Modificar alumno</a></li>
                    <li><a href="NuevoAlumno.php">Nuevo alumno</a></li>
                    <li><a href="Departamentos.php">Nuevo departamentos</a></li>
                    <li><a href="">Eliminar alumno</a></li>
                </ul>
            </nav>
            <section>
                <h2>Nuevo Departamento:</h2><br>
                <form action="InsertDepartamento.php" method="post">
                    <table class="formulario">
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="departamento" size="50" required></td>
                        </tr>
                    </table>
                    <input class="btn-enviar" type="submit" value="Grabar">
                    <input class="btn-limpiar" type="reset" value="Limpiar">
                </form>
            </section>
        </header>
        <footer>…</footer>
    </body>
</html>

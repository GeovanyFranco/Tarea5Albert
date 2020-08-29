<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

function llenardeptos() {
    require 'database.php';
    // enviando el comando SQL
    $deptos = mysqli_query($conn, "SELECT codigo, nombre FROM departamento order by nombre");
    if (mysqli_num_rows($deptos) < 1) {
        exit("No hay departamentos registrados!");
    }

    echo "<select name='deptos'>";
    while ($row = mysqli_fetch_array($deptos)) {
        echo "<option value=" . $row['codigo'] . ">" . $row['nombre'];
        echo "</option>";
    }
    echo "</select>";
    // cerrando la conexion a la BDD
    mysqli_free_result($deptos);
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
                    <li><a href="">Modificar alumno</a></li>
                    <li><a href="NuevoAlumno.php">Nuevo alumno</a></li>
                    <li><a href="Departamentos.php">Nuevo departamentos</a></li>
                    <li><a href="EliminarAlumno.php">Eliminar alumno</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h2>Modificar Alumno:</h2><br>
            <form action="UpdateAlumno.php" method="post">
                <table class="formulario">
                    <tr>
                        <td>Codigo:</td>
                        <td><input type="text" name="codigo" required></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre1" size="50" required></td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td><input type="text" name="apellido1" size="50" required></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td><input type="numer" name="telefono" maxlength="8" size="20"></td>
                    </tr>
                    <tr>
                        <td>EMail:</td>
                        <td><input type="email" name="email" size="40" required><br></td>
                    </tr>
                    <tr>
                        <td>Confirmar Email:</td>
                        <td><input type="email" name="email2" size="40" required></td>
                    </tr>
                    <tr>
                        <td>Genero:</td>
                        <td>
                            <input type="radio" name="genero" value="M">Masculino<br>
                            <input type="radio" name="genero" value="F">Femenino
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento:</td>
                        <td><input type="date" name="fechanac" required></td>
                    </tr>
                    <tr>
                        <td>Departamento:</td>
                        <td><input type="text" name="CodDep" size="40" ></td>
                    </tr>
                    <td colspan="2">

                    </td>
                </table>
                <input class="btn-enviar" type="submit" value="Grabar">
                <input class="btn-limpiar" type="reset" value="Limpiar">
            </form>
        </section>
        <footer>…</footer>
    </body>
</html>

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
        <title>Registro de alumnos</title>
    </head>
    <body>
        <h2>Nuevo Alumno:</h2><br>
        <form action="crearalumno.php" method="post">
            <table border = "0" >
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
                    <td><?php llenardeptos(); ?></td>
                </tr>
            </table>
            <input type="submit" value="Grabar">
            <input type="reset" value="Limpiar">
        </form>
    </body>
</html>

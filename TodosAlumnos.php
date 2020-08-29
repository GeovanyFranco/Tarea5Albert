<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require './database.php';
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
                    <li><a href="ModificarAlumno.php">Modificar alumno</a></li>
                    <li><a href="NuevoAlumno.php">Nuevo alumno</a></li>
                    <li><a href="Departamentos.php">Nuevo departamentos</a></li>
                    <li><a href="EliminarAlumno.php">Eliminar alumno</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <section>
                Seleccione un departamento:
                <?php
                // enviando el comando SQL
                $deptos = mysqli_query($conn, "SELECT codigo, nombre FROM departamento order by nombre");
                if (mysqli_num_rows($deptos) < 1) {
                    exit("No hay departamentos registrados!");
                }
                ?>

                <form action="ListaPorDepto.php" method="POST">
                    <select name='listadeptos'>
                        <option>seleccione una opcion</option>
                        <?php
                        //llenando el combo con los registros devueltos por el comando SQL
                        while ($row = mysqli_fetch_array($deptos)) {
                            ?>
                            <option value="<?php echo $row['codigo']; ?>">
                                <?php echo $row['nombre']; ?>
                            </option>
                            <?php
                        }
                        // cerrando la conexion a la BDD
                        mysqli_free_result($deptos);
                        mysqli_close($conn);
                        ?>       
                    </select>   
                    <br>
                    <input type="submit" value="Listado">
                </form>
            </section>
            <footer>
                <h2>Desarrollo web</h2>
                <p>
                    <strong>CARNET:</strong> 1390-12-18169<br>
                    <strong>NOMBRE:</strong> Carolin Gabriela Cetino Sian<br>
                    <strong>TAREA 5</strong>
                </p>
            </footer>
    </body>
</html>

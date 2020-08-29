<?php
    // coneccion al servidor de base de datos
    require 'database.php';
 ?>       
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta por Departamento</title>
    </head>
    <body>
        Seleccione un departamento:
        <?php
        // enviando el comando SQL
        $deptos = mysqli_query($conn, "SELECT codigo, nombre FROM departamento order by nombre");
        if (mysqli_num_rows($deptos) < 1) {
            exit("No hay departamentos registrados!");
        }
        ?>
        
        <form action="listadopordepto.php" method="get">
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
    </body>
</html>

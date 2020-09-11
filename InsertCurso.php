<?php

function CrearCurso() {
    require 'database.php';

    $q = "INSERT INTO curso"
            . "(nombre, creditos, notaminima, nombreprofesor) "
            . "VALUES ('". $_POST['nombre'] . "',"
            . $_POST['creditos'] . ",". $_POST['notaminima'] . ",'"
            . $_POST['profesor'] . "');";

    try {
        $ejecucion = mysqli_query($conn, $q);
        mysqli_close($conn);
    } catch (Exception $ex) {
        echo $ex->getTraceAsString();
    }
}

try {
    CrearCurso();
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>
<a href="NuevoCurso.php">Ingresar otro</a>

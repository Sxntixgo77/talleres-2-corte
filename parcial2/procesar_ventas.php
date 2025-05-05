<?php
//paso 1
require "conex.php";

//paso 2: capturar variables
$_habitacion = $_POST["habitaciones"];

//paso 3: armar el sql
$sql = "UPDATE habitaciones

SET
estado=1
WHERE
id =".$_habitacion." ";

//paso 4: ejecutar el sql
if($dbh->query($sql))

{
    echo "actualizacion correcta";
}else
{
    "error actualizacion";
}
?>
<?php

    $nombre = $_POST['txt_nombre'];
    $identificacion = $_POST['identificacion'];
    $numero_identi = $_POST['numero_identi'];
    $habitacion = $_POST['habitacion'];
    $acompa = $_POST['acompa'];
    $seleccion_acompa = $_POST['seleccion_acompa'];
    
    
    $precio_habitacion_general = 100000;
    $precio_acompanante = 30000;
    $porcentaje_suite = 0.10; 
    
    
    if ($habitacion == "General") { 
        $costo_habitacion = $precio_habitacion_general;
    } elseif ($habitacion == "Suite") { 
        $costo_habitacion = $precio_habitacion_general * (1 + $porcentaje_suite);
    } else {
        echo "Tipo de habitación no válido.";
        exit;
    }
    
    $costo_acompanantes = $seleccion_acompa * $precio_acompanante;
    $total_pagar = $costo_habitacion + $costo_acompanantes;
    
    echo "La persona  cuyo nombre es$nombre, con tipo de identificacion de $identificacion $numero_identi <br><br> Ha realizado una reserva en la habitacion $habitacion con un numero de acompañantes = $seleccion_acompa <br><br> Total = $$total_pagar<br><br> Ha sido exitosa"
    
    ?>




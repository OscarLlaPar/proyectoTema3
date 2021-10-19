<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        //Modo 1
        $oFechaHoraActual = new DateTime(); //objeto de la fecha
        $oZona = new DateTimeZone("Europe/Madrid"); //objeto que establece la zona horaria
        $oFechaHoraActual->setTimezone($oZona); //asignación de la zona a la fecha
        
        
        /*Cambio a España (no funciona)
         * setlocale(LC_ALL, 'es_ES');*/
        
        echo "La fecha en Benavente (España) es: ".$oFechaHoraActual->format("d-m-Y").", y la hora es: ".$oFechaHoraActual->format("h:i:s a").". ";
        echo "<br>";
        echo "<p>Otros formatos: </p>";
        echo $oFechaHoraActual->format("d/m/Y");
        echo "<br>";
        echo "Año: ".$oFechaHoraActual->format("Y");
        echo "<br>";
        echo $oFechaHoraActual->format("Y--m--d");
        echo "<br>";
        echo "Dia de la semana: ".$oFechaHoraActual->format("l");
        echo "<br>";
        echo "Mes: ".$oFechaHoraActual->format("F");
        echo "<br>";
        echo "El \"timestamp\" es: ".$oFechaHoraActual->getTimestamp();
        echo "<br>";
        echo "<br>";
        echo "Mañana es ".$oFechaHoraActual->add(new DateInterval("P1D"))->format("d/m/Y");
        echo "<br>";
        echo "Dentro de 60 días es ".$oFechaHoraActual->add(new DateInterval("P60D"))->format("d/m/Y");
        echo "<br>";
        echo "El timestamp 1234567890 equivale a la fecha ".$oFechaHoraActual->setTimestamp(1234567890)->format("d-m-Y h:i:s");
        ?>
    </body>
</html>
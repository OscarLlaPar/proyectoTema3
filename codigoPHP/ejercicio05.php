<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 05</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            /*
            * Ejercicio 05
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * @version 1.0
            * Última modificación: 19/10/2021
            */
            $oFechaHora = new DateTime(); //Creación del objeto DateTime para la fecha y la hora
            $oFechaHora->setTimestamp(1234567890); //Asignación de un timestamp (int) al objeto DateTime
            
            //Mostrado de la fecha convertida en el formato especificado
            echo "<p>El timestamp 1234567890 equivale a la fecha ".$oFechaHora->format("d-m-Y h:i:s a")."</p>";
         ?>
    </body>
</html>
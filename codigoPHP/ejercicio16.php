<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OLP-DWES - Ejercicio 16</title>
        <style>
            table, td,th{
                border: solid black 1px;
            }
            table{
                border-collapse: collapse;
            }
            th{
                background-color: grey;
            }
        </style>
    </head>
    <body>
        
        <?php
            /*
            * Ejercicio 22
            * @author Óscar Llamas Parra - oscar.llapar@educa.jcyl.es - https://github.com/OscarLlaPar
            * @version 1.0
            * Última modificación: 21/10/2021
            */
            //declaración e inicialización del array
            $aSueldoPorDias=[
                "lunes"=>100, 
                "martes"=>200, 
                "miercoles"=>300, 
                "jueves"=>400, 
                "viernes"=>500, 
                "sabado"=>600, 
                "domingo"=>2
            ];
            echo "<h1>Sueldo por días</h1>";
            echo "<h2>Con funciones</h2>";
            //garantía de que el puntero está al principio del array
            reset($aSueldoPorDias);
            //tabla para ver datos
            echo "<table>";
            //uso del while y la función each para mostrar el array
            while(current($aSueldoPorDias)!=null){
                echo "<tr>";
                echo "<th>". key($aSueldoPorDias)."</th>";
                printf("<td>%.2f€</td>", current($aSueldoPorDias));
                echo "</tr>";
                next($aSueldoPorDias);
            }
            echo "</table>";
        ?>
    </body>
</html>

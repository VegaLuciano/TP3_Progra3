<?php

$jsonString = file_get_contents('peliculas.json');

$JsonObj = json_decode($jsonString, true);

echo '<tbody>';

foreach ($JsonObj as $item) {
    if(isset($item['data'])) {
        foreach ($item['data'] as $detalle) {                        
            echo '<tr>';
            echo '<td>' . $detalle['id'] . '</td>';
            echo '<td>' . $detalle['nombre'] . '</td>';
            echo '<td>' . $detalle['duracion'] . '</td>';
            echo '<td>' . $detalle['genero'] . '</td>';
            if($detalle['idioma'] == "espanol")  
                echo '<td>' . "español". '</td>';
            else 
                echo '<td>' . $detalle['idioma'] . '</td>';
            echo '</tr>';
        }
    }
}

echo '<tbody>';

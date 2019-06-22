<?php

    $contador = 0;

    while ($contador <= 10) {

        $contador = $contador + 1 ;

        if ($contador % 2 == 0 ) {
                continue;
        }

        echo $contador . "<br>";
        
    }
    
?>
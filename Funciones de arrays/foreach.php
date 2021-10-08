//Escribe un script en PHP que muestre un array de colores como una lista desordenada.
<?php

	$colores = ['azul', 'verde', 'rojo', 'negro'];
    
    shuffle($colores);
    
    echo "<ul>";
    
	foreach ($colores as $color){
    	echo "<li>" . $color . "</li>";		
    }

	echo "</ul>";
?>
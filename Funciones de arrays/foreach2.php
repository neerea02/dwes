//Escribe un script en PHP que muestre un array de colores como una lista desordenada y con un enlace a la página indicada en el valor.
<?php

	$colores = ['blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html'];
    
    echo "<ul>";
    
	foreach ($colores as $color => $valor){
    	echo "<li href = '". $valor."' >" . $color . "</li>";		
    }

	echo "</ul>";
?>
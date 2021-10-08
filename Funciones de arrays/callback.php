//Escribe un script php que calcule la longitud máxima y mínima de las cadenas de un array. 
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];
    
    $longitud = array_map('strlen', $nombres);
    
    echo ("La longitud maxima es: ");
    
    echo max($longitud);
    
    echo "<br>";
    
    echo ("La longitud minima es: ");
    
	echo min($longitud);
?>
//Escribe función partlist que devuelva todas las formas de dividir una lista (array) de al menos dos elementos en dos partes no vacías que contengan todos los elementos.
<?php

	$array = ["Seguro", "que", "apruebo", "esta", "asignatura"];
    
	function partlist($frase){
    	$array1 = [];
        
        for ($i = 0; $i < count($frase) - 1; $i++){ 
        	$array1[] = [implode(" ", (array_slice($frase, 0, $i+1))), implode(" ", (array_slice($frase, $i+1)))];
        }   
      
      	return $array1;
    }
    
    print_r(partlist($array));
  		
?>
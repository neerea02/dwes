//Crea una función que genere un password aleatorio.
<?php
    function contrasenya_aleatoria($upper, $lower, $numeric, $other){
	    $array_contrasenya = array_merge(aleatorio($upper, 65, 90), aleatorio($lower, 97, 122), 		aleatorio($numeric, 48, 57), aleatorio($other, 32, 47));
        shuffle ($array_contrasenya);
        return $array_contrasenya;
    }
        
    function aleatorio ($longitud, $minimo, $maximo){
    	for ($i = 0; $i < $longitud; $i++){
        	$array[$i] = chr(rand($minimo, $maximo));
        }
        
        return $array;
	}

    echo implode(contrasenya_aleatoria(1, 5, 3, 2));
?>
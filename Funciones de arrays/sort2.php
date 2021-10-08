//A partir de una cadena con las temperaturas de un mes, realiza la media e imprime las 5 temperaturas mínimas y las 5 máximas
<?php

	$temperaturas  = "15 24 21 18 20 22 17 23 25 19 14 16";
    
	$temperatura = explode(" ", $temperaturas);
    
    $suma = array_sum($temperatura);

	$total_temperaturas = count($temperatura);

	$media = $suma/$total_temperaturas;
    
    echo "La media de temperaturas de todo el mes son: " . $media . " grados" . "<br>";
    
    asort ($temperatura);
    
    $temperaturas_minimas = array_slice ($temperatura, 0, 5);
    
    echo "Las cinco temperaturas minimas son: ";
    print_r ($temperaturas_minimas);
    
    echo "<br>";
    
    $temperaturas_maximas = array_slice ($temperatura, 6, 11);
    
    echo "Las cinco temperaturas maximas son: ";
    print_r ($temperaturas_maximas);

?>
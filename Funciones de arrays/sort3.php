//Realiza un script php que ordene el array por la longitud de la descripción.
<?php

	$alumnos = [
    	'Nerea' => 'nnn',
        'Raquel' => 'rrrr',
        'Pau' => 'pp',
    ];
    
    function comparar($a, $b) {
    	if (strlen ($a) == strlen ($b)) {
        	return 0;
    	}
    	return (strlen ($a) < strlen($b)) ? -1 : 1;
	}

	uasort ($alumnos, 'comparar');

	print_r ($alumnos);

?>
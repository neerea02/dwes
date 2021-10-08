//Crea un array llamado nombres que contenga varios nombres.
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];

?>

//Muestra el número de elementos que tiene el array (función count)
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];
    
    echo count($nombres);

?>

//Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode)
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];
    
    $separado_por_espacio = implode(" ", $nombres);
    
    echo $separado_por_espacio;

?>

//Muestra el array ordenado alfabéticamente (función asort)
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];
    
    asort($nombres);

   	$separado_por_espacio = implode(" ", $nombres);
    
    echo $separado_por_espacio;
	
?>

//Muestra el array en el orden inverso al que se creó (función array_reverse)
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];
    
	$reves = array_reverse($nombres);
	
    print_r($reves);
?>
    
//Muestra la posición que tiene tu nombre en el array (función array_search)
<?php

	$nombres = ['Nerea', 'Raquel', 'Pau'];
    
	$minombre = array_search('Nerea', $nombres);
    
    echo $minombre;
?>

//Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
<?php

    $alumnos = [
        'Nerea' => ['nombre' =>'Nerea', 'edad' => 18, 'id' => 111],
        'Raquel' => ['nombre' =>'Raquel', 'edad' => 20, 'id' => 222],
        'Pau' => ['nombre' =>'Pau', 'edad' => 22, 'id' => 333],
    ];

    echo $alumnos['Nerea']['nombre'];
?>

//Crea una tabla html en la que se muestren todos los datos de los alumnos.
<?php

	$alumnos = [
    	'Nerea' => ['nombre' =>'Nerea', 'edad' => 18, 'id' => 111],
        'Raquel' => ['nombre' =>'Raquel', 'edad' => 20, 'id' => 222],
        'Pau' => ['nombre' =>'Pau', 'edad' => 22, 'id' => 333],
    ];
    
	$tabla = '<table border="1">';
		foreach ($alumnos as $alumno) {
        	$tabla .= '<tr>';
            
        foreach ($alumno as $alumn) {
        	$tabla .= '<td>' . $alumn . '</td>';
        }
        
        $tabla .= '</tr>';
	}
    
	$tabla .= '</table>';
    
	echo $tabla;
?>

//Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla.
<?php

	$alumnos = [
    	'Nerea' => ['nombre' =>'Nerea', 'edad' => 18, 'id' => 111],
        'Raquel' => ['nombre' =>'Raquel', 'edad' => 20, 'id' => 222],
        'Pau' => ['nombre' =>'Pau', 'edad' => 22, 'id' => 333],
    ];
    
	$nombres = array_column($alumnos, 'nombre');
    
    print_r ($nombres);
    
?>

//Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.
<?php

	$numeros = [2, 4, 6, 7, 1, 3, 9, 11, 8, 32];
    
	echo "Suma: " . array_sum($numeros);
?>
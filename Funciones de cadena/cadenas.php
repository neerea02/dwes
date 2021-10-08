//Muestra el valor de un parámetro llamado nombre recibido por querystring eliminando los caracteres '/' del principio y el final si los hubiera (función trim). Si no se pasa un parámetro nombre se utilizará tu nombre de pila.
<?php

	$nombre = $_GET["nombre"] ?? "/Nerea/";
    
    $resultado = trim($nombre, "/");
	echo($resultado);
    
?>

//Muestra la longitud del parámetro nombre (función strlen)
<?php

	$nombre = "Nerea";
    
	$resultado = strlen($nombre);
	echo($resultado);
    
?>

//Muestra el nombre en mayúsculas (función strtoupper)
<?php
	
	$nombre = "Nerea";
    
	$resultado = strtoupper($nombre);
	echo($resultado);
    
?>

//Muestra el nombre en minúsculas (función strtolower)
<?php

	$nombre = "Nerea";
    
    $resultado = strtolower($nombre);
	echo($resultado);
    
?>

//Pasa un segundo parámetro por querystring llamado prefijo (para pasar más de un parámetro por la querystring debes separarlos utilizando el carácter &). Después indica si el nombre comienza por el prefijo pasado o no (función strpos), se distinguirá entre mayúsculas y minúsculas. Si no se pasa el prefijo no se realizará esta operación.
<?php
	
	$nombre = $_GET["nombre"] ?? "Nerea";
	$prefijo = $_GET["prefijo"] ?? "N";
    
	$resultado = strpos($nombre, $prefijo);

	if ($resultado === false) {
    		echo "La cadena '$prefijo' no fue encontrada en la cadena '$nombre'";
	} else {
    		echo "La cadena '$prefijo' fue encontrada en la cadena '$nombre'";
	}
?>

//Muestra el número de veces que aparece la letra a (mayúscula o minúscula) en el parámetro nombre (funciones substr_count + (strtoupper o strtolower)).
<?php

	$nombre = "Nerea";
    
    $minusculas = strtolower($nombre);
    
    $resultado = substr_count($minusculas, 'a');
    
	echo($resultado);
?>

//Muestra la posición de la primera a existente en el nombre (sea mayúscula o minúscula). Si no hay ninguna mostrará un texto indicándolo (función stripos).
<?php

	$nombre = "Nerea";
    
    $minusculas = strtolower($nombre);
    
    $resultado = stripos($minusculas, 'a');
    
	echo($resultado);
?>

//Muestra el nombre sustituyendo las letras ‘o’ por el número cero (sea mayúscula o minúscula) (función str_ireplace).
<?php

	$nombre = "Morraja";
    
    $minusculas = strtolower($nombre);
    
    $resultado = str_ireplace('o', '0', $minusculas);
    
	echo($resultado);
?>

//Utiliza la función parse_url para extraer y mostrar por pantalla las siguientes partes de la variable url del ejemplo:

    //El protocolo utilizado (en el ejemplo http).
<?php

	$url = 'http://username:password@hostname:9090/path?arg=value';
		
	$protocolo = (parse_url($url, PHP_URL_SCHEME));

	echo($protocolo);
?>

    //El nombre de usuario (en el ejemplo username).
<?php

	$url = 'http://username:password@hostname:9090/path?arg=value';

	$usuario = (parse_url($url, PHP_URL_USER));

	echo($usuario);
?>

    //El path de la url (en el ejemplo /path)
<?php

	$url = 'http://username:password@hostname:9090/path?arg=value';

	$path = (parse_url($url, PHP_URL_PATH));

	echo($path);
?>
    //El querystring de la url (en el ejemplo arg=value)
<?php

	$url = 'http://username:password@hostname:9090/path?arg=value';

	$query = (parse_url($url, PHP_URL_QUERY));

	echo($query);
?>
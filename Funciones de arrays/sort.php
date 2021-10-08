//Escribe un script PHP para ordenar un array asociativo. 
<?php

	$edades = ["Juan" => "31", "María" => "41", "Andrés" => "39", "Berta" => "40"];
    
    asort ($edades);
   	print_r ($edades);
    
    echo "<br>";
    
    ksort ($edades);
    print_r ($edades);
    
    echo "<br>";
    
    arsort ($edades);
    print_r ($edades);
    
    echo "<br>";
    
    krsort ($edades);
    print_r ($edades);
    
    
?>
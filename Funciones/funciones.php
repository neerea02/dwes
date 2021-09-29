//Ejercicio 1

<?php

    $tabla = "alumnos";

    $campos = array("nombre" => "Juan", "apellidos" => "Martínez");
    
    function insert ($tabla, array $campos){
        
        $resultado = "insert into " . $tabla . " (";
        
        $separado_por_comas = implode(", ", array_keys($campos));
        
        $resultado .= $separado_por_comas;
        
        $separado_por_puntos = implode(", :", array_keys($campos));
        
        $resultado1 = ") " . "values (" . ":" . $separado_por_puntos . ")";
 
        return $resultado . $resultado1;
    
    }
    
    echo (insert($tabla, $campos));
    
//insert into alumnos (nombre, apellidos) values (:nombre, :apellidos)

?>

//Ejercicio 2

<?php

    $tabla = "alumnos";

    $campos = array("nombre" => "Juan", "apellidos" => "Martínez");
    
    function insertReferencia ($tabla, array $campos){

            $resultado = "insert into " . $tabla . " (";
            
            $separado_por_comas = implode(", ", array_keys($campos));
        
            $resultado .= $separado_por_comas;
        
            $resultado1 = ") " . "values (";
            
            foreach ($campos as $campo => $valor){                  
                $resultado1 .= $valor . ", ";
            }
        
            $resultado1 = substr($resultado1, 0, -2);
            return $resultado . $resultado1 . ")";
            
    }
    
    echo (insertReferencia($tabla, $campos));
    
//insert into alumnos (nombre, apellidos) values (Juan, Martínez)

?>

//Ejercicio 3

<?php

	$tabla = "alumnos";

	$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");
    
    function update ($tabla, array $campos){

            $resultado = "UPDATE " . $tabla . " SET ";
            
            if ($campos == 'Juan') {
                echo key($campos);
            }

			$nombre = array_keys($campos)[1] . "=:" . array_keys($campos)[1];
            
            $apellidos = array_keys($campos)[2] . "=:" . array_keys($campos)[2];
           
            $id = array_keys($campos)[0] . "=:" . array_keys($campos)[0];
   
            $resultado1 = $nombre . ", " . $apellidos . " WHERE " . $id;
       
            return $resultado . $resultado1;
            
    }
    
    echo (update($tabla, $campos));          
    
//UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos WHERE id = :id
    
?>

//Ejercicio 4

<?php

	$operaciones = function ($num1, $num2, $operacion){
    	switch ($operacion){
        	case '+':
            	$resultado = $num1 + $num2;
                $final = $num1 . " + " . $num2 . " = " . $resultado;
                break;
            case '-':
            	$resultado = $num1 - $num2;
                $final = $num1 . " - " . $num2 . " = " . $resultado;
                break;
            case '*':
            	$resultado = $num1 * $num2;
                $final = $num1 . " * " . $num2 . " = " . $resultado;
                break;
      		case '/':
            	$resultado = $num1 / $num2;
                $final = $num1 . " / " . $num2 . " = " . $resultado;
                break;
            
        
        }
        
        return $final;

    };
    
    echo ($operaciones ($num1, $num2 , " $operador "));
    // Por ejemplo:
    //echo ($operaciones (8, 2, "/"));
    
?>
<?php
$lista = array();
$fila = 0;
if(($gestor = fopen("products.csv","r")) !== FALSE){
    while(($datos = fgetcsv($gestor, 1000, ",") !== FALSE)){
        $numero = count($datos);
        $fila++;
		for($c=0; $c < $numero; $c++)
			$dato1 = $datos[$c++];
			$dato2 = $datos[$c++];
			$dato3 = $datos[$c++];
			$dato4 = $datos[$c++];
			$dato5 = $datos[$c++];
			echo $dato1 . " ". $dato2 ." ". $dato3 ." ". $dato4 ." ". $dato5 ." ". "\n";
		}
		fclose($gestor);
	}

?>
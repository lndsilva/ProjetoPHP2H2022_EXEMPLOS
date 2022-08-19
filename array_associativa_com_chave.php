<?php
  
	//Programa imprime valores usando indice
	//para uma array associtiva
	  
	//Declarando array associativa
	$assoc_array = array(
		"Geeks" => 30,
		"para" => 20,
		"geeks" => 10
	); 
	  
	//Usando função array_keys()
	$chave = array_keys($assoc_array);
	  
	//Calculando o tamanho do array
	$tam = sizeof($chave);
	  
	//Utilizando o loop para acessar os valores
	for( $i = 0; $i < $tam; $i++) {
		echo "${assoc_array[$chave[$i]]} <br>";
	}
	  
?>
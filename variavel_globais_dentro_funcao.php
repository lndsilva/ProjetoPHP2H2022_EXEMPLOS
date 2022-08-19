<?php 
	//Declarando variável global
	$x = " Geeks ";
	$y = " para ";
	$z = " Geeks ";
	$a = 5;
	$b = 10;
	  
	function concatena() {
		//Usando palavra chave global
		global $x, $y, $z;
		
		return $x.$y.$z;
	}
	  
	function adicionar() {
		//Usando GLOBALS['nome_variavel']
		$GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
	}
	  
	//Imprimindo resultado
	echo concatena();
	echo"\n";
	adicionar();
	echo $b;
?>
<?php
	$var = "Escopo global da variável";
	function body() {
		$var = "Escopo local da variável";
		echo '$var no escopo global: ' . $GLOBALS["var"] . "<br>";
		echo '$var no escopo local: ' . $var ;
	}

body();

?>
<?php

class Juego{

function __construct()
	{
		
	}
	// $frame1: array de que contiene el resultado de un frame, dos intentos, ej. [1,2]
	public function sumar($frame1){

		$sumaFrame = array_sum($frame1);
		return $sumaFrame;
	}

	public function verificarFrame($frameX){
		return $frameX;
	}




}





?>
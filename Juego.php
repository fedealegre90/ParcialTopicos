<?php

class Juego{

function __construct()
	{
		
	}
	// $frame1: array de que contiene el resultado de un frame, dos intentos, ej. [1,2]
	public function sumar($frame1){

		$sumaFrame = array_sum($frame1);
		if ($sumaFrame < 11){
			return $sumaFrame;
		}else{
			echo "\nLa suma de los numeros ingresados no deben superar 10\n";
		}

	}

	public function verificarFrame($frameX){
		if (count($frameX) > 2 ){
			echo "\nLa matriz debe contener solo dos elementos";
			return [0,0];
		}else{
		return $frameX;
		}
	}

	public function contarPuntaje($frame1,$frame2,$frame3,$frame4,$frame5,$frame6,$frame7,$frame8,$frame9,$frame10){
		
		$suma= array_sum($frame1)+ array_sum($frame2)+ array_sum($frame3)+ array_sum($frame4)+ array_sum($frame5)+ array_sum($frame6)+ array_sum($frame7)+ array_sum($frame8)+array_sum($frame9)+ array_sum($frame10);
		echo "\n$suma\n";
		return $suma;
		
	}




}





?>
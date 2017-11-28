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

	public function contarPuntaje($frame1,$frame2,$frame3,$frame4,$frame5,$frame6,$frame7,$frame8,$frame9,$frame10,$frame11){
		
		$array=[];
		$array[0][0]=$frame1[0];
		$array[0][1]=$frame1[1];
		$array[1][0]=$frame2[0];
		$array[1][1]=$frame2[1];
		$array[2][0]=$frame3[0];
		$array[2][1]=$frame3[1];
		$array[3][0]=$frame4[0];
		$array[3][1]=$frame4[1];
		$array[4][0]=$frame5[0];
		$array[4][1]=$frame5[1];
		$array[5][0]=$frame6[0];
		$array[5][1]=$frame6[1];
		$array[6][0]=$frame7[0];
		$array[6][1]=$frame7[1];
		$array[7][0]=$frame8[0];
		$array[7][1]=$frame8[1];
		$array[8][0]=$frame9[0];
		$array[8][1]=$frame9[1];
		$array[9][0]=$frame10[0];
		$array[9][1]=$frame10[1];
		$sumaFrame=0;
		$aux=10;
		//echo $array[7][1];
		for ($i=0; $i < 10; $i++) { 
		//print_r ($array[i][0]); 	
		if ($i<8){
		if ((($array[$i][0]+$array[$i][1])==$aux) and (($array[$i+1][0]+$array[$i+1][1])==$aux)) {
			
		$sumaFrame=$sumaFrame+$array[$i][0]+$array[$i+1][0]+$array[$i+2][0]+$array[$i+2][1];
			
		}elseif ((($array[$i][0]+$array[$i][1])==$aux) and (($array[$i+1][0]+$array[$i+1][1])<$aux)) {
			$sumaFrame=$sumaFrame+$array[$i][0]+$array[$i+1][0]+$array[$i+1][1];
		}else{
			$sumaFrame=$sumaFrame+$array[$i][0]+$array[$i][1];
		}	
		}elseif ($i==8){
		 	if((($array[$i][0]+$array[$i][1])==$aux) and (($array[$i+1][0]+$array[$i+1][1])<=$aux)) {
			$sumaFrame=$sumaFrame+$array[$i][0]+$array[$i+1][0]+$array[$i+1][1];
			}else{
			$sumaFrame=$sumaFrame+$array[$i][0]+$array[$i][1];	
			}
		}else{
			$sumaFrame=$sumaFrame+$array[$i][0]+$array[$i][1];	
		}
		}
		if (($frame10[0]==10) and ($frame9[0])==10) {
			$sumaFrame=$sumaFrame+$frame11[0]+$frame11[0]+$frame11[1];
		}elseif (($frame10[0]==10) and ($frame9[0])<10) {
			$sumaFrame=$sumaFrame+$frame11[0]+$frame11[1];
		}
		//$suma= array_sum($frame1)+ array_sum($frame2)+ array_sum($frame3)+ array_sum($frame4)+ array_sum($frame5)+ array_sum($frame6)+ array_sum($frame7)+ array_sum($frame8)+array_sum($frame9)+ array_sum($frame10);
		//echo "\n$sumaFrame\n";
		//print_r($array);
		return $sumaFrame;
		
	}

}





?>
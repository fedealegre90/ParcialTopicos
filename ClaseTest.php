<?php

use PHPUnit\Framework\TestCase;
use Juego as JU;

final class JuegoTest extends TestCase
{
	
	public function testCantidadFrame()
	{
		$totalFrame= new JU();
        $boolean;
        if ($totalFrame->sumar([4,7]) > 10){
               $boolean = false;
            }else{
                $boolean = true;
        }
		$this->assertEquals(true, $boolean);
	}

    public function testVerifElmentFrame()
    {
        $totalFrame= new JU();
        $this->assertCount(2, $totalFrame->verificarFrame([1,2,3]));
    }

    public function testverificarTotal(){
        $totalJuego = new JU();
        $pleno= [10,0];
        $this->assertEquals(114,$totalJuego->contarPuntaje([2,3],$pleno,$pleno,[4,5],[3,5],[5,4],[5,4],[6,3],[4,3],[5,5]));
    }
}
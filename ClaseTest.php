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
        //$pleno= [10,0];
        $this->assertEquals(114,$totalJuego->contarPuntaje([2,3],[10,0],[10,0],[4,5],[3,5],[5,4],[5,4],[6,3],[4,3],[5,5],null));
    }

    public function testPlenosContinuos(){
        $totalJuego = new JU();
        //$pleno= [10,0];
        $this->assertEquals(270,$totalJuego->contarPuntaje([10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],null));
    }

    public function testPlenosContinuosStrikeExtra(){
        $totalJuego = new JU();
        //$pleno= [10,0];
        $this->assertEquals(300,$totalJuego->contarPuntaje([10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,0],[10,10]));
    }
}
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


}
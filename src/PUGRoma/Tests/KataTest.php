<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $ghetter = new Kata();
        $inquisitore = $ghetter->BuzFizzer();

        $this->assertCount(100, $inquisitore);

        foreach($inquisitore as $posizione => $valore)
        {
            if (($posizione) % 3 == 0)
            {
                if (($posizione) % 5 == 0)
                {
                    $this->assertEquals($valore, 'BuzzFizz');
                }
                else {
                    $this->assertEquals($valore, 'Buzz');
                }
            }
            else if (($posizione) % 5 == 0)
            {
                $this->assertEquals($valore, 'Fizz');
            }
        }
    }
}

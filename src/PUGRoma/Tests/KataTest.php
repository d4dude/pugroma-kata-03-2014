<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $ghetter = new \Kata();
        $inquisitore = $ghetter->BuzFizzer();

        foreach($inquisitore as $posizione => $valore)
        {
            if (($posizione + 1) % 3 == 0)
            {
                if (($posizione + 1) % 5 == 0)
                {
                    $this->assertEquals($valore, 'FizzBuzz');
                }
                else {
                    $this->assertEquals($valore, 'Buzz');
                }
            }
            else if (($posizione + 1) % 5 == 0)
            {
                $this->assertEquals($valore, 'Fizz');
            }
        }
    }
}

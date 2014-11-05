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
                    $this->assertTrue($valore, 'FizzBuzz');
                }
                else {
                    $this->assertTrue($valore, 'Buzz');
                }
            }
            else if (($posizione + 1) % 5 == 0)
            {
                $this->assertTrue($valore, 'Fizz');
            }
        }
    }
}

<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $ghetter = new \Kata();
        $inquisitore = $ghetter->BuzFizzer();

        foreach(array($inquisitore) as $inquisito)
        {
            if ($inquisito % 3 == 0)
            {
            $this->assertTrue($inquisito,'Buzz');

                if ($inquisito % 5 == 0)
                {
                    $this->assertTrue($inquisito,'FizzBuzz');
                }

            }
            else if ($inquisito % 5 == 0)
            {
                $this->assertTrue($inquisito,'Fizz');
            }
        }
    }

}

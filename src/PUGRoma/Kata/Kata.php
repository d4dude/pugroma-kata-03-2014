<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
    public $coda[];

        for ($i = 1; $i < 101; $i++)
        {
            if ($i%3 = 0){
                if ($i%5 = 0) {
                    $coda[$i]= "FizzBuzz";
                }
                $coda[$i]= "Fizz";
            }

            if ($i%5 = 0) {
                $coda[$i]= "Buzz";
            }
            else $coda[$i]= $i;
        }
        return $coda;

    }
}


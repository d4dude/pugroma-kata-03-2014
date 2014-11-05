<?php

//namespace PUGRoma\Kata;

class Kata
{
    public function BuzFizzer()
    {
        for($i=1; $i <=100; $i++)
        {
            if ($i%3 == 0)
            {
                if ($i%5 == 0)
                {
                    $contenitore[$i]="BuzzFizz"."\n";
                }

                else $contenitore[$i]= "Buzz"."\n";
            }
            else if ($i%5 == 0)
            {
                $contenitore[$i]="Fizz"."\n";

            }
            else $contenitore[$i]= $i."\n";

        }

        return $contenitore;
    }
}

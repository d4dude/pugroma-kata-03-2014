<?php

namespace PUGRoma\Kata;

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
                    $contenitore[$i]="BuzzFizz";
                }

                else $contenitore[$i]="Buzz";
            }
            else if ($i%5 == 0)
            {
                $contenitore[$i]="Fizz";

            }
            else $contenitore[$i]= $i;

        }

        return $contenitore;
    }
}

//$risultato = new Kata();
//$vedi = $risultato->BuzFizzer();
//print_r ($vedi);
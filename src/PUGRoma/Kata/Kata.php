<?php

//namespace PUGRoma\Kata;

class Kata
{
    public function BuzFizzer()
    {
        for($i=0; $i <=100; $i++)
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

$risultato = new Kata();
$vedi = $risultato->BuzFizzer();
print_r ($vedi);
<?php

//namespace PUGRoma\Kata;

class Kata
{
    $contenitore = array();

    public function isReady()
    {
    for ($i = 1; $i<=100; $i++)
        {
        if ($i%3 == 0)
            {
             if ($i%5 == 0)
                {
                 $contenitore[$i]="FizzBuzz"."\n";
                }
            }

        else{$contenitore[$i]="Fizz"."\n";}

         if ($i%5 == 0)
         {$contenitore[$i]="Buzz"."\n";}

         else{$contenitore[$i]=$i."\n";}

        }//CHIUDE FOR

     return $contenitore;
    }

}

$smazzamelo = new Kata();

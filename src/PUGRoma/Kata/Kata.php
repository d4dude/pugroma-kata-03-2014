<?php

namespace PUGRoma\Kata;

class Kata
{

public  $container = array(1,100);

    public function Rover($container)
    {

        foreach ($container as $key => $value)
        {

            $container[$key] = $this->discriminator($value);

        }


    }

    public function discriminator($value)
    {
        if ($value % 3 == 0)
        {
            if ($value % 5 == 0){$this->BuzzFizzer($value);}

            else {$this->Buzzer($value);}
        }

        elseif ($value % 5 == 0){$this->Fizzer($value);}

        return $value;
    }

    public function Buzzer($value)
    {

        $this->value = "Buzz";
        return $value;

    }

    public function Fizzer($value)
    {

        $this->value = "Fizz";
        return $value;

    }

    public function BuzzFizzer($value)
    {

        $this->value = "BuzzFizz";
        return $value;

    }

    return $container;

}

//$risultato = new Kata();
//$vedi = $risultato->BuzFizzer();
//print_r ($vedi);
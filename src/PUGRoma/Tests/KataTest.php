<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $kata = new Kata();
        //$this->assertTrue($kata->isReady());

        $client = $kata->BuzFizzer();

        foreach ($client as $client)
        {
            $crawler = array_search('Buzz', $client);
            $crawler = array_search('Fizz', $client);
            $crawler = array_search('BuzzFizz', $client);

            if( isset ($crawler))
            {
             if ($crawler%3 != 0 || $crawler%5 != 0)
             {
                 echo "Sparo l'eccezzione";
             }
            }

        }
    }
}
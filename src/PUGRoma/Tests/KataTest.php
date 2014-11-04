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
            $crawler = array_search('Buzz',$client);
            if ($crawler%3 != 0)
            {
            
            }

        }

    }
}
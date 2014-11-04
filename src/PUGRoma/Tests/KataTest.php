<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $kata = new Kata();
        //$this->assertTrue($kata->isReady());

        // Però secondo il kata questa funzione dovrebbe tornare una stringa, non un array, o mi sbaglio?!?
        $results = $kata->BuzFizzer();

        foreach ($results as $result)
        {
            // Devi utilizzare variabili diverse senno sovrascrivi
            $buzzPosition     = array_search('Buzz', $result);
            $fizzPosition     = array_search('Fizz', $result);
            $buzzfizzPosition = array_search('BuzzFizz', $result);
            
            // Così testi solo i primi fizz, buzz e fizzbuzz, perché array_search torna la prima posizione
            // che trova... Questo va bene, non devi testare tutto il risultato, bastano i casi particolari
            // però devi esserne consapevole
            
            foreach (array($buzzPosition, $fizzPosition, $buzfizzPosition) as $position)
            {
                // Ecco come si utilizzano le asserzioni
                $this->assertTrue($position % 3 == 0 || $position % 5 == 0 || $position % 15 == 0);
                
                // Il test cmq non è corretto allo stato attuale, perché la logica testa solo che 
                // alle posizioni 3, 5, e 15 ci sia fizz buzz o fizzbuzz, ma passa pure se alla
                // posizione 3 c'è buzz  
            }
        }
    }
}

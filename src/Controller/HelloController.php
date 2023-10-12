<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/lucky/number")
     */	
    public function number() : Response 
    {
        $randomNumber = random_int(0,100);
        return new Response('<html><body>Lucky number: '.$randomNumber.'</body></html>');
    }
    /**
     * @Route("/add/{a}/{b}")
     */	
    public function addNumber(int $a = 0, int $b = 0) : Response 
    {
        return new Response('The Sum is: ' . ($a + $b));
    }
}

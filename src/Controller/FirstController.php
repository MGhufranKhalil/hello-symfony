<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
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

    /**
     * @Route("/print/variable")
     */	
    public function printVariable(){
        $name = 'Ghufran';
        return $this->render('learning/hello.html.twig',['name'=>$name]);
    }

    /**
     * @Route("/print/loop")
     */	
    public function printLoop(){
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
        return $this->render('learning/loop.html.twig',['tracks'=>$tracks]);
    }
}

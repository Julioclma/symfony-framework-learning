<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{

    
    public function index() : Response
    {
        return new Response('<h1>Olá!!!</h2>');
    }

    public function helloName($name) : Response
    {
        return new Response("<h1>Hello $name</h1>");
    }

}

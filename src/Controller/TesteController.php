<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TesteController extends AbstractController
{
    /**
     * @Route("/teste", name="teste")
     */
    public function index(): Response
    {
        return new Response('<h1>Página teste!</h1>');
    }


     /**
     * @Route("/teste/{name}", name="teste-name")
     */
    public function hello($name): Response
    {
        return new Response('<h1>Olá, '.$name.'</h1>');
    }
}

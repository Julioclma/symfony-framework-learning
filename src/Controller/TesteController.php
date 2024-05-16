<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TesteController extends AbstractController
{

    public $defaultMessage = 'Olá mundo';
 
    /**
     * @Route("/teste", name="teste")
     */
    public function index(): Response
    {
        $users = [
            ['id' => 1, 'name' => 'Julio', 'age' => 23, 'job' => 'BackEnd-Developer'],
            ['id' => 2, 'name' => 'Jamal', 'age' => 19, 'job' => 'FrontEnd-Developer']
        ];
        return $this->render('teste/index.html.twig', ['title' => 'Página de teste', 'content' => 'Olá, Página de teste', 'users' => $users, 'defaultMessage' => $this->defaultMessage]);
    }


    /**
     * @Route("/teste/detalhes/{id}", name="teste-name")
     */
    public function hello($id): Response
    {
        return $this->render('teste/detalhes.html.twig', ['id' => $id, 'title' => 'Detalhes', 'defaultMessage' => $this->defaultMessage]);
    }
}

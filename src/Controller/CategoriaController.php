<?php

namespace App\Controller;

use App\Entity\Categoria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriaController extends AbstractController
{
    /**
     * @Route("/categoria/cadastra", name="categoria")
     */
    public function index(EntityManagerInterface $em) : Response
    {
        $categoria = new Categoria();
        $categoria->setDescricaocategoria('Eletrônico');

        try {
            $em->persist($categoria);
            $em->flush();
            $msg = "Categoria: {$categoria->getDescricaocategoria()} cadastrada com sucesso";
        } catch (\Throwable $th) {
            $msg = "Error: {$th->getMessage()}";
        }

        return new Response("<h1>$msg</h1>");


    }
}

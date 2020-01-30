<?php

namespace App\Controller;

use App\Form\ProgramSearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index() :Response
    {
        $form = $this->createForm(ProgramSearchType::class,
            null,
            ['method' => Request::METHOD_GET]
        );
        return $this->render('homepage.html.twig', [
            'controller_name' => 'Bienvenue',
            'form' => $form->createView(),
        ]);
    }
}



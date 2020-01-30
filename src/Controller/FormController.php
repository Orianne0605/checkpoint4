<?php

namespace App\Controller;

use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     * @param Request $request
     * @return Response
     */
    public function form(Request $request) :Response
    {
        $form = $this->createForm(FormType::class);
        $form->handleRequest($request);

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}


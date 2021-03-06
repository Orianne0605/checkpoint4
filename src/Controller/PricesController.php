<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricesController extends AbstractController
{
    /**
     * @Route("/pricesLocal", name="PLB")
     * @return Response
     */
    public function PricesLocal() :Response
    {
        return $this->render('allPricesLocalBank.html.twig', [
            'clickTarifs' => 'Cliquez sur le logo pour consulter les tarifs',
        ]);
    }

    /**
     * @Route("/pricesOnline", name="POB")
     * @return Response
     */
    public function PricesOnline() :Response
    {
        return $this->render('allPricesOnlineBank.html.twig', [
            'clickTarifs' => 'Cliquez sur le logo pour consulter les tarifs',
        ]);
    }

    /**
     * @Route("/array", name="Array")
     * @return Response
     */
    public function Array() :Response
    {
        return $this->render('array.html.twig', [
            'clickTarifs' => 'Cliquez sur le logo pour consulter les tarifs',
        ]);
    }
}


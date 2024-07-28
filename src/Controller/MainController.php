<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $itemCount = 0;
        $mySite = [
            'name' => 'Philippe',
            'status' => 'En construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfItem' => $itemCount,
            'mySite' => $mySite,
        ]);
    }
}

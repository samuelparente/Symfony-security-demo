<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    # Homepage
    public function dash_public(): Response
    {
        return $this->render('main/dash_public.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #Dashboard when user authenticated
    public function dash_auth(): Response
        {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

            return $this->render('authenticated/dash_auth.html.twig', [
                'controller_name' => 'MainController',
            ]);
        }
}

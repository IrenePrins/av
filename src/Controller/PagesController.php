<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PagesController extends AbstractController
{
    /**
     * @Route("/home", name="app_index", methods="GET")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        return $this->render('pages/contact.html.twig');
    }
}

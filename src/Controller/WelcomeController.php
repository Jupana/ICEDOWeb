<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="home")
     */
    public function index()
    {
        return $this->render('welcome/home.html.twig');
    }
  
   
}

<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class MainController extends AbstractController
{

    #[Route('/', name: 'app_main')]
    public function test()
    {

        $name = "kiki";
        $age = 44;
        return $this->render('main.html.twig', [
            'name' => $name,
            'age' => $age
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
}

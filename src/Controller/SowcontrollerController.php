<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SowcontrollerController extends AbstractController{
    #[Route('/sowcontroller', name: 'app_sowcontroller')]
    public function index(): Response
    {
        return $this->render('sowcontroller/index.html.twig', [
            'controller_name' => 'Sur la page',
            
              ]);            
    }
    #[Route('blog/home', name: 'app_home')]
    Public function home() : response
    {
        return $this->render('sowcontroller/home.html.twig', [
           
        ]);
    }




    #[Route('blog/CV', name: 'app_CV')]
    Public function CV() : response
    {
        return $this->render('sowcontroller/CV.html.twig', [
           
        ]);
    }
   
}
    
        
           

   


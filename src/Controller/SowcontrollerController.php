<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SowcontrollerController extends AbstractController{
    #[Route('/', name: 'app_sowcontroller')]
    public function index(): Response
    {
        return $this->render('sowcontroller/index.html.twig', [
            'controller_name' => 'Sow',

              ]);                
    }
    #[Route('/monCV')]
    Public function CV() : response
    {
        return $this->render('sowcontroller/CV.html.twig', [
            'controller_name' => 'Sow',

        ]);
    }

    #[Route('Eportfolio', name: 'eportfolio')]
    Public function eportfolio(): Response
    {
        return $this->render('sowcontroller/Eportfolio.html.twig', [
            'controller_name' => 'Sow',

    
        ]);
    }
   

       
    #[Route('/Decouvrir')]
    public function Découvrir(): Response
    {


            return $this->render('sowcontroller/Decouvrir.html.twig', [
                'Découvrir_name' => 'Je vous présente mon cv'
            ]);
    }


    #[Route('/Formulaire', name: 'Formulaire')]
    public function Formulaire(): Response
    {
            
    
            return $this->render('sowcontroller/Formulaire.html.twig', [
                
            ]);
    } 
    #[Route('/Parc', name: 'Parc')]
    public function Parc(): Response
    {
            
    
            return $this->render('sowcontroller/Parc.html.twig', [
                
            ]);
    } 

    }
    
    
    


    

    
        
           

   


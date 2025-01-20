<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SowcontrollerController extends AbstractController{
    #[Route('/', name: 'app_sowcontroller')]
    public function index(): Response
    {
        return $this->render('sowcontroller/index.html.twig', [
            'controller_name' => 'Sow',
            
              ]);            
    }


    #[Route('blog/home', name: 'app_home')]
    Public function home() : response
    {
        return $this->render('sowcontroller/home.html.twig', [
           
        ]);
    }




    #[Route('/monCV')]
    Public function CV() : response
    {
        $CV = random_int(0, 100);

        return $this->render('sowcontroller/CV.html.twig', [
            'CV_name'=>'Je vous présente mon CV'
            

        ]);
    }



    #[Route('/Eportfolio', name: 'Eportfolio')]
    Public function Eportfolio() : response
    {
        $CV = random_int(0, 100);
        return $this->render('sowcontroller/Eportfolio.html.twig', [

           
        ]);
    }
   

       
    #[Route('/Decouvrir')]
    public function Découvrir(): Response
    {
            $CV = random_int(0, 100);
    
            return $this->render('sowcontroller/Decouvrir.html.twig', [
                'Découvrir_name' => 'Je vous présente mon cv'
            ]);
    }


    #[Route('/Formulaire', name: 'Formulaire')]
    public function Formulaire(): Response
    {
            $CV = random_int(0, 100);
    
            return $this->render('sowcontroller/Formulaire.html.twig', [
                'Formulaire_name' => 'Pour avoir mon cv remplissait les champs'
            ]);
    }


    #[Route('/cv2', name: 'cv2')]
    public function cv2(): Response
    {
            $CV = random_int(0, 100);
    
            return $this->render('sowcontroller/cv2.html.twig', [
                'Formulaire_name' => 'Pour avoir mon cv remplissait les champs'
            ]);
    }
       
    
    }
    
    
    


    

    
        
           

   


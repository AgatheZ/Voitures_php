<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/home", name="main")
     */
    public function index(): Response
    {
    return $this->render('main/index.html.twig', ['controller_name' => 'MainController',]);
    }
    

    public function view($id){
        return new response("Affichage de l'article :".$id);
        return $this->render('main/view.html.twig', [
        'identifiant' => $id ,
         ]);
    
    }
        /**
    * @Route("/mentions-legales", name="mentions-legales")
    */
    public function mentionsLegales()
    {
    // Nous générons la vue de la page des mentions légales
    return $this->render('main/mentions-legales.html.twig');
    }
    }
    
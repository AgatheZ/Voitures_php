<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilterFonctionController extends AbstractController
{
    /**
 * Page de test des filtres
 *
 * @Route("/filter", name="filter")
 */
 public function filter()
 {
 return(
 $this->render('filter_fonction/index.html.twig', [])
 );
 }
}



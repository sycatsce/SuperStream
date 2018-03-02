<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Film;
use AppBundle\Manager\FilmManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="/")
     */
    public function indexAction(FilmManager $filmManager)
    {
        $films = $filmManager->getFilms();
        return $this->render('accueil/accueil.html.twig', [
            'films' => $films
        ]);
    }
}

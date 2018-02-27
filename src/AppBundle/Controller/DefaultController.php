<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/netflix", name="homepage")
     */
    public function netflixAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/accueil.html.twig');
    }



    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/connexion.html.twig');
    }

    /**
     * @Route("/inscription", name="project_add")
     */
    public function addInscriptionAction()
    {
        $project = new Project();
        $form = $this->createFormBuilder($project)
            ->add('name', TextType:: class)
            ->add('description', TextareaType:: class)
            ->add('completion', NumberType:: class)
            ->add('save', SubmitType:: class, ['label' => 'Ajouter un projet'])
            ->getForm();
        return $this->render('project/inscription.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

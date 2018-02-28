<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Film;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('firstname', TextType:: class)
            ->add('lastname', TextType:: class)
            ->add('mail', EmailType:: class)
            ->add('createdAt', DateType:: class)
            ->add('password', TextType:: class)
            ->add('save', SubmitType:: class, ['label' => 'S inscrire'])
            ->getForm();
        return $this->render('default/inscription.html.twig', [
            'form' => $form->createView()
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $project = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('netflix');   }



    }

    /**
     * @Route("/films", name="films")
     */
    public function filmsAction(Request $request)
    {
        // replace this example code with whatever you need
        //return $this->render('default/films.html.twig');

        $em = $this->getDoctrine()->getManager();
        $films = $em->getRepository(Film:: class)
            ->findAll();
        return $this->render('default/films.html.twig', [
            'films' => $films        ]);
    }
}

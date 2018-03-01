<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\AddUserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InscriptionController extends Controller
{
    /**
     * @Route("/user/add", name="addUser")
     */
    public function addAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $dt = new \DateTime();
        $dt->format('Y-m-d H:i:s');
        $user->setCreatedAt( $dt );

        $form = $this->createForm(AddUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("/");
        }

        return $this->render('user/inscription.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

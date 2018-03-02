<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AccountController extends Controller
{

    /**
     * @Route("/account/{id}", name="account")
     * @Method("GET")
     */
    public function accountAction($id)
    {
        return $this->render('user/account.html.twig');
    }
}

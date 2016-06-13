<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{
    /**
     * @Route("login", name="login")
     */
    public function loginAction()
    {
        $authUtil = $this->get('security.authentication_utils');

        $error = $authUtil->getLastAuthenticationError();

        $lastUsername = $authUtil->getLastUsername();

        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();
        $posts = $this->getDoctrine()->getRepository("BlogBundle:Post")->findAllByDate();


        return $this->render('BlogBundle:Default:login.html.twig', array(
                'error' => $error,
                'last_username' => $lastUsername,
                'categories' => $categories,
                'posts' => $posts)
        );
    }

    /**
     * @Route("login_check", name="login_check")
     */
    public function loginCheck(){

    }

}

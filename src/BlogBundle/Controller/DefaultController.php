<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository;
use BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="blog_homepage")
     */
    public function indexAction()
    {

        $posts = $this->getDoctrine()->getRepository("BlogBundle:Post")->findAllByDate();

        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();

        
        return $this->render('BlogBundle:Default:index.html.twig', array
            ('posts' => $posts,
             'categories' => $categories,
            ));

        
    }
    

}

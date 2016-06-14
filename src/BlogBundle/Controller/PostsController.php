<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Doctrine\ORM\Query;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;


class PostsController extends Controller
{
    /**
     * @Route("/posts/{id}", name="show_post")
     * @Method("GET")
     */
    public function showPostAction($id)
    {
        $entry = $this->getDoctrine()->getRepository("BlogBundle:Post")->find($id);
        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();
        $arr = (array) $this->getUser();

        if(!empty($arr)) {

            $user = $this->getUser();
            $userId = $user->getId();
            return $this->render('BlogBundle:Default:showpost.html.twig', array(
                'entry' => $entry,
                'categories' => $categories,
                'user' => $userId
            ));
        }
        else {
            return $this->render('BlogBundle:Default:showpost.html.twig', array(
                'entry' => $entry,
                'categories' => $categories,
                'user' => 0
            ));
        }

    }

    /**
     * @Route("/category/{cat}", name="cat_show")
     */
    public function showByCategoryAction($cat)
    {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('
                SELECT p, c 
                FROM BlogBundle:Post p 
                JOIN p.category c 
                WHERE c.name = :cat
        ')->setParameter('cat', $cat);;
        $posts = $query->getResult();

        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();


        return $this->render('BlogBundle:Default:categoryshow.html.twig', array(
            'posts' => $posts,
            'categories' => $categories,
        ));
    }
}

<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminIndex()
    {
        $posts = $this->getDoctrine()->getRepository("BlogBundle:Post")->findAll();

        $user = $this->getDoctrine()->getRepository("BlogBundle:Users")->findAll();

        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();


        return $this->render('BlogBundle:Default:admin.html.twig', array
        ('posts' => $posts,
            'categories' => $categories,
        ));

    }

    /**
     * @Route("/posts/new", name="newpost")
     * @Method({"GET", "POST"})
     */
    public function addPostAction(Request $request)
    {
        $post = new Post();

        $post->setUser($this->getUser());
        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();

        $form = $this->createForm('BlogBundle\Form\PostType', $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('blog_homepage');
        }

        return $this->render('BlogBundle:Default:addpost.html.twig', array(
            'form' => $form->createView(),
            'categories' => $categories,
        ));
    }
    /**
     * @param Post $post The post object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function deleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    /**
     * @Route("/posts/{id}/edit", name="postedit")
     * @Method({"GET", "POST"})
     */
    public function editPostAction(Post $post, Request $request, $id)
    {
        $postgetauthor = $this->getDoctrine()->getRepository("BlogBundle:Post")->find($id);
        $postauthorid = $postgetauthor->getUser();

        $categories = $this->getDoctrine()->getRepository("BlogBundle:Category")->findAllAlphabetical();

        if ($this->getUser()->getId() === $postauthorid) {
            throw $this->createAccessDeniedException('Sorry, you can\'t edit this post');
        }
        
        $editForm = $this->createForm('BlogBundle\Form\PostType', $post);
        $deleteForm = $this->deleteForm($post);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('blog_homepage');
        }
        return $this->render('BlogBundle:Default:edit.html.twig', array(
            'post' => $post,
            'editform' => $editForm->createView(),
            'deleteform' => $deleteForm->createView(),
            'categories' => $categories,
        ));
    }

    /**
     * Deletes a Post entity.
     *
     * @Route("/{id}", name="post_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->deleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->remove($post);
            $entityManager->flush();

            $this->addFlash('success', 'post.deleted_successfully');
        }

        return $this->redirectToRoute('blog_homepage');
    }

}

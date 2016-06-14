<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'BlogBundle\\Controller\\AdminController::adminIndex',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/posts')) {
            // newpost
            if ($pathinfo === '/posts/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_newpost;
                }

                return array (  '_controller' => 'BlogBundle\\Controller\\AdminController::addPostAction',  '_route' => 'newpost',);
            }
            not_newpost:

            // postedit
            if (preg_match('#^/posts/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_postedit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'postedit')), array (  '_controller' => 'BlogBundle\\Controller\\AdminController::editPostAction',));
            }
            not_postedit:

        }

        // post_delete
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_post_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'BlogBundle\\Controller\\AdminController::deleteAction',));
        }
        not_post_delete:

        // blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_homepage');
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
        }

        // show_post
        if (0 === strpos($pathinfo, '/posts') && preg_match('#^/posts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_show_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_post')), array (  '_controller' => 'BlogBundle\\Controller\\PostsController::showPostAction',));
        }
        not_show_post:

        // cat_show
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_show')), array (  '_controller' => 'BlogBundle\\Controller\\PostsController::showByCategoryAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'BlogBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'BlogBundle\\Controller\\SecurityController::loginCheck',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

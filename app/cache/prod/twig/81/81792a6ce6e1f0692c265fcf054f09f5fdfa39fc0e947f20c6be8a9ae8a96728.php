<?php

/* @Blog/Default/edit.html.twig */
class __TwigTemplate_ba22bf9b9d6afd8ba53f1a390adc3c0e7f7e597d2369144b1a959a6e6777eda0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'posts' => array($this, 'block_posts'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Edit post";
    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>New Post</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editform"]) ? $context["editform"] : null), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editform"]) ? $context["editform"] : null), 'widget');
        echo "
    <input type=\"submit\" value=\"Add post.\" class=\"btn btn-primary\"/>
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editform"]) ? $context["editform"] : null), 'form_end');
        echo "

";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 14
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-user\"></span>
            Login</a>
    ";
        }
        // line 17
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["deleteform"]) ? $context["deleteform"] : null), 'form_start');
            echo "
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["deleteform"]) ? $context["deleteform"] : null), 'widget');
            echo "
       <button type=\"submit\" class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Delete post</button>
        ";
            // line 21
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["deleteform"]) ? $context["deleteform"] : null), 'form_end');
            echo "
        <br />
        <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-off\"></span>
            Logout</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Blog/Default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  85 => 21,  80 => 19,  75 => 18,  72 => 17,  65 => 14,  62 => 13,  59 => 12,  52 => 9,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Edit post{% endblock %}*/
/* {% block posts %}*/
/*     <h1>New Post</h1>*/
/* */
/*     {{ form_start(editform) }}*/
/*     {{ form_widget(editform) }}*/
/*     <input type="submit" value="Add post." class="btn btn-primary"/>*/
/*     {{ form_end(editform) }}*/
/* */
/* {% endblock %}*/
/* {% block sidebar %}*/
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') == false %}*/
/*         <a href="{{ path('login') }}" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-user"></span>*/
/*             Login</a>*/
/*     {% endif %}*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {{ form_start(deleteform) }}*/
/*         {{ form_widget(deleteform) }}*/
/*        <button type="submit" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete post</button>*/
/*         {{ form_end(deleteform) }}*/
/*         <br />*/
/*         <a href="{{ path('logout') }}" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-off"></span>*/
/*             Logout</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */

<?php

/* @Blog/Default/addpost.html.twig */
class __TwigTemplate_1b1f38f2846b511a211f2e1f12513e25b141ef38a0198467011c49b6ad63ca29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/addpost.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'posts' => array($this, 'block_posts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f01bec27530f4a2bbcc90c5d9216604076b63bcdb867826f49ab3f2745274fa = $this->env->getExtension("native_profiler");
        $__internal_3f01bec27530f4a2bbcc90c5d9216604076b63bcdb867826f49ab3f2745274fa->enter($__internal_3f01bec27530f4a2bbcc90c5d9216604076b63bcdb867826f49ab3f2745274fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/addpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f01bec27530f4a2bbcc90c5d9216604076b63bcdb867826f49ab3f2745274fa->leave($__internal_3f01bec27530f4a2bbcc90c5d9216604076b63bcdb867826f49ab3f2745274fa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_809dd4972d8c34d1672ca69c361d2376cb2ecaf5030c19d2b5881f6b71c63cc0 = $this->env->getExtension("native_profiler");
        $__internal_809dd4972d8c34d1672ca69c361d2376cb2ecaf5030c19d2b5881f6b71c63cc0->enter($__internal_809dd4972d8c34d1672ca69c361d2376cb2ecaf5030c19d2b5881f6b71c63cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add post";
        
        $__internal_809dd4972d8c34d1672ca69c361d2376cb2ecaf5030c19d2b5881f6b71c63cc0->leave($__internal_809dd4972d8c34d1672ca69c361d2376cb2ecaf5030c19d2b5881f6b71c63cc0_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_bb819f2dd7840a9a10973fbd25b7e287d988c011bc40bb97a4b7e1748befe451 = $this->env->getExtension("native_profiler");
        $__internal_bb819f2dd7840a9a10973fbd25b7e287d988c011bc40bb97a4b7e1748befe451->enter($__internal_bb819f2dd7840a9a10973fbd25b7e287d988c011bc40bb97a4b7e1748befe451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "        <h1>New Post</h1>

        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Add post.\" class=\"btn btn-primary\" />
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_bb819f2dd7840a9a10973fbd25b7e287d988c011bc40bb97a4b7e1748befe451->leave($__internal_bb819f2dd7840a9a10973fbd25b7e287d988c011bc40bb97a4b7e1748befe451_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/addpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Add post{% endblock %}*/
/* {% block posts %}*/
/*         <h1>New Post</h1>*/
/* */
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Add post." class="btn btn-primary" />*/
/*         {{ form_end(form) }}*/
/* */
/* {% endblock %}*/

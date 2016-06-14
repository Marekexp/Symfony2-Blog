<?php

/* @Blog/Default/addpost.html.twig */
class __TwigTemplate_dad63a736db3e9abdeb6f1ef5d0b3446c00a76d9b147a39fe0fa62c6450fc204 extends Twig_Template
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
        $__internal_4d416b76c37a4f00287bd555c3cfa7967bacb6c131f637bb4d0d56a139e822a8 = $this->env->getExtension("native_profiler");
        $__internal_4d416b76c37a4f00287bd555c3cfa7967bacb6c131f637bb4d0d56a139e822a8->enter($__internal_4d416b76c37a4f00287bd555c3cfa7967bacb6c131f637bb4d0d56a139e822a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/addpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d416b76c37a4f00287bd555c3cfa7967bacb6c131f637bb4d0d56a139e822a8->leave($__internal_4d416b76c37a4f00287bd555c3cfa7967bacb6c131f637bb4d0d56a139e822a8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c07d9e72b7338819822f40146c2791ecda5288fa8461611ee26f7b275534a436 = $this->env->getExtension("native_profiler");
        $__internal_c07d9e72b7338819822f40146c2791ecda5288fa8461611ee26f7b275534a436->enter($__internal_c07d9e72b7338819822f40146c2791ecda5288fa8461611ee26f7b275534a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add post";
        
        $__internal_c07d9e72b7338819822f40146c2791ecda5288fa8461611ee26f7b275534a436->leave($__internal_c07d9e72b7338819822f40146c2791ecda5288fa8461611ee26f7b275534a436_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_bc0fd6bac2893d783797b9e76efd33899b12a17673b6d4212c15f78932b3225c = $this->env->getExtension("native_profiler");
        $__internal_bc0fd6bac2893d783797b9e76efd33899b12a17673b6d4212c15f78932b3225c->enter($__internal_bc0fd6bac2893d783797b9e76efd33899b12a17673b6d4212c15f78932b3225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_bc0fd6bac2893d783797b9e76efd33899b12a17673b6d4212c15f78932b3225c->leave($__internal_bc0fd6bac2893d783797b9e76efd33899b12a17673b6d4212c15f78932b3225c_prof);

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

<?php

/* @Blog/Default/edit.html.twig */
class __TwigTemplate_7120c7476303757d739d5aa0a1b0c3c7e2eb33c8c6a17b5bf21b47440059023b extends Twig_Template
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
        $__internal_f1f46520d44efd450d347d6db386728120a18d0ee80574270904da7248ad4c1c = $this->env->getExtension("native_profiler");
        $__internal_f1f46520d44efd450d347d6db386728120a18d0ee80574270904da7248ad4c1c->enter($__internal_f1f46520d44efd450d347d6db386728120a18d0ee80574270904da7248ad4c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1f46520d44efd450d347d6db386728120a18d0ee80574270904da7248ad4c1c->leave($__internal_f1f46520d44efd450d347d6db386728120a18d0ee80574270904da7248ad4c1c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_51f1f7301968efc961dc914f41817c1162a3dde4ffabeda61d8d313ed40720f9 = $this->env->getExtension("native_profiler");
        $__internal_51f1f7301968efc961dc914f41817c1162a3dde4ffabeda61d8d313ed40720f9->enter($__internal_51f1f7301968efc961dc914f41817c1162a3dde4ffabeda61d8d313ed40720f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit post";
        
        $__internal_51f1f7301968efc961dc914f41817c1162a3dde4ffabeda61d8d313ed40720f9->leave($__internal_51f1f7301968efc961dc914f41817c1162a3dde4ffabeda61d8d313ed40720f9_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_939d04a199461706c1b8899e79adda9aa9a058d697c6e60be972663156bf76db = $this->env->getExtension("native_profiler");
        $__internal_939d04a199461706c1b8899e79adda9aa9a058d697c6e60be972663156bf76db->enter($__internal_939d04a199461706c1b8899e79adda9aa9a058d697c6e60be972663156bf76db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "    <h1>New Post</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editform"]) ? $context["editform"] : $this->getContext($context, "editform")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editform"]) ? $context["editform"] : $this->getContext($context, "editform")), 'widget');
        echo "
    <input type=\"submit\" value=\"Add post.\" class=\"btn btn-primary\"/>
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editform"]) ? $context["editform"] : $this->getContext($context, "editform")), 'form_end');
        echo "

";
        
        $__internal_939d04a199461706c1b8899e79adda9aa9a058d697c6e60be972663156bf76db->leave($__internal_939d04a199461706c1b8899e79adda9aa9a058d697c6e60be972663156bf76db_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_54d5679965300b24c0bc65689d64e808a7506dc834f8029682c9eeea04f8432c = $this->env->getExtension("native_profiler");
        $__internal_54d5679965300b24c0bc65689d64e808a7506dc834f8029682c9eeea04f8432c->enter($__internal_54d5679965300b24c0bc65689d64e808a7506dc834f8029682c9eeea04f8432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["deleteform"]) ? $context["deleteform"] : $this->getContext($context, "deleteform")), 'form_start');
            echo "
        ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["deleteform"]) ? $context["deleteform"] : $this->getContext($context, "deleteform")), 'widget');
            echo "
       <button type=\"submit\" class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> Delete post</button>
        ";
            // line 21
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["deleteform"]) ? $context["deleteform"] : $this->getContext($context, "deleteform")), 'form_end');
            echo "
        <br />
        <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-off\"></span>
            Logout</a>
    ";
        }
        
        $__internal_54d5679965300b24c0bc65689d64e808a7506dc834f8029682c9eeea04f8432c->leave($__internal_54d5679965300b24c0bc65689d64e808a7506dc834f8029682c9eeea04f8432c_prof);

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
        return array (  111 => 23,  106 => 21,  101 => 19,  96 => 18,  93 => 17,  86 => 14,  83 => 13,  77 => 12,  67 => 9,  62 => 7,  58 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
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

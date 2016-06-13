<?php

/* BlogBundle:Default:edit.html.twig */
class __TwigTemplate_939c9f0708abf819ab9d3e0d63ffce712a79bd7e6e36782d558e2acf4bf064c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:edit.html.twig", 1);
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
        $__internal_f05083dc616f7b4e84969cb89ccfc566b4efaf65c6991054c147d177ff35c652 = $this->env->getExtension("native_profiler");
        $__internal_f05083dc616f7b4e84969cb89ccfc566b4efaf65c6991054c147d177ff35c652->enter($__internal_f05083dc616f7b4e84969cb89ccfc566b4efaf65c6991054c147d177ff35c652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05083dc616f7b4e84969cb89ccfc566b4efaf65c6991054c147d177ff35c652->leave($__internal_f05083dc616f7b4e84969cb89ccfc566b4efaf65c6991054c147d177ff35c652_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1fd5f9f3e8a918d1240197927c3640ddc06533a60da8fe7f661c42b379ff998 = $this->env->getExtension("native_profiler");
        $__internal_a1fd5f9f3e8a918d1240197927c3640ddc06533a60da8fe7f661c42b379ff998->enter($__internal_a1fd5f9f3e8a918d1240197927c3640ddc06533a60da8fe7f661c42b379ff998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit post";
        
        $__internal_a1fd5f9f3e8a918d1240197927c3640ddc06533a60da8fe7f661c42b379ff998->leave($__internal_a1fd5f9f3e8a918d1240197927c3640ddc06533a60da8fe7f661c42b379ff998_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_c868cf7d1b43538fef496ad4af6f654d5c41ebece19215b9ec1b9e556bcdfc76 = $this->env->getExtension("native_profiler");
        $__internal_c868cf7d1b43538fef496ad4af6f654d5c41ebece19215b9ec1b9e556bcdfc76->enter($__internal_c868cf7d1b43538fef496ad4af6f654d5c41ebece19215b9ec1b9e556bcdfc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_c868cf7d1b43538fef496ad4af6f654d5c41ebece19215b9ec1b9e556bcdfc76->leave($__internal_c868cf7d1b43538fef496ad4af6f654d5c41ebece19215b9ec1b9e556bcdfc76_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ddcebaa88d8fa4916e9bb65a95bfb4cef572a4c2ab98703f76bb321e601136d3 = $this->env->getExtension("native_profiler");
        $__internal_ddcebaa88d8fa4916e9bb65a95bfb4cef572a4c2ab98703f76bb321e601136d3->enter($__internal_ddcebaa88d8fa4916e9bb65a95bfb4cef572a4c2ab98703f76bb321e601136d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_ddcebaa88d8fa4916e9bb65a95bfb4cef572a4c2ab98703f76bb321e601136d3->leave($__internal_ddcebaa88d8fa4916e9bb65a95bfb4cef572a4c2ab98703f76bb321e601136d3_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:edit.html.twig";
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

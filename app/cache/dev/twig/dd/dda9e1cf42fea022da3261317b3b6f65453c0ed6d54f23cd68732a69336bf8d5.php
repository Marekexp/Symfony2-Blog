<?php

/* @Blog/Default/edit.html.twig */
class __TwigTemplate_5b0cebbf65334c8d13bd65d611c6c3171831c06e331e63a550fea0a76a4eb707 extends Twig_Template
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
        $__internal_630a6a503f656cce32755772059ef4117201a3c85e9e21d7dc3ebfd8242eaca0 = $this->env->getExtension("native_profiler");
        $__internal_630a6a503f656cce32755772059ef4117201a3c85e9e21d7dc3ebfd8242eaca0->enter($__internal_630a6a503f656cce32755772059ef4117201a3c85e9e21d7dc3ebfd8242eaca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630a6a503f656cce32755772059ef4117201a3c85e9e21d7dc3ebfd8242eaca0->leave($__internal_630a6a503f656cce32755772059ef4117201a3c85e9e21d7dc3ebfd8242eaca0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a9fd2827378344b0eff7e03c526ddc07e962efd1b628b30de30b6e07eb4428c = $this->env->getExtension("native_profiler");
        $__internal_9a9fd2827378344b0eff7e03c526ddc07e962efd1b628b30de30b6e07eb4428c->enter($__internal_9a9fd2827378344b0eff7e03c526ddc07e962efd1b628b30de30b6e07eb4428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit post";
        
        $__internal_9a9fd2827378344b0eff7e03c526ddc07e962efd1b628b30de30b6e07eb4428c->leave($__internal_9a9fd2827378344b0eff7e03c526ddc07e962efd1b628b30de30b6e07eb4428c_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_d8b176d96b380a3164293b137ce6aa6f36d867b4a9a79983d64ad3b22d5a98aa = $this->env->getExtension("native_profiler");
        $__internal_d8b176d96b380a3164293b137ce6aa6f36d867b4a9a79983d64ad3b22d5a98aa->enter($__internal_d8b176d96b380a3164293b137ce6aa6f36d867b4a9a79983d64ad3b22d5a98aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_d8b176d96b380a3164293b137ce6aa6f36d867b4a9a79983d64ad3b22d5a98aa->leave($__internal_d8b176d96b380a3164293b137ce6aa6f36d867b4a9a79983d64ad3b22d5a98aa_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f1fb03f3a3580e80f5619e9d1161aa2073c7282028ba1ac1ce656989b9837606 = $this->env->getExtension("native_profiler");
        $__internal_f1fb03f3a3580e80f5619e9d1161aa2073c7282028ba1ac1ce656989b9837606->enter($__internal_f1fb03f3a3580e80f5619e9d1161aa2073c7282028ba1ac1ce656989b9837606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_f1fb03f3a3580e80f5619e9d1161aa2073c7282028ba1ac1ce656989b9837606->leave($__internal_f1fb03f3a3580e80f5619e9d1161aa2073c7282028ba1ac1ce656989b9837606_prof);

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

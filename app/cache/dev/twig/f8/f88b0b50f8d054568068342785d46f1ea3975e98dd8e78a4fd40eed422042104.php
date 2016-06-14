<?php

/* BlogBundle:Default:edit.html.twig */
class __TwigTemplate_b1eb31251e6f1c9e17e5e63d92b4cb46706d74915b9e9830a6968b5a1ec81897 extends Twig_Template
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
        $__internal_36628ad21cf412ab87f1e0336c66ab501458aef53f7eeeab65ed829f62ad5153 = $this->env->getExtension("native_profiler");
        $__internal_36628ad21cf412ab87f1e0336c66ab501458aef53f7eeeab65ed829f62ad5153->enter($__internal_36628ad21cf412ab87f1e0336c66ab501458aef53f7eeeab65ed829f62ad5153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36628ad21cf412ab87f1e0336c66ab501458aef53f7eeeab65ed829f62ad5153->leave($__internal_36628ad21cf412ab87f1e0336c66ab501458aef53f7eeeab65ed829f62ad5153_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_058dbb3fb2deb8b1d73fdbbbf3b05c7e86bae0fd1e86c6c7cf9d2b3b4e886120 = $this->env->getExtension("native_profiler");
        $__internal_058dbb3fb2deb8b1d73fdbbbf3b05c7e86bae0fd1e86c6c7cf9d2b3b4e886120->enter($__internal_058dbb3fb2deb8b1d73fdbbbf3b05c7e86bae0fd1e86c6c7cf9d2b3b4e886120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit post";
        
        $__internal_058dbb3fb2deb8b1d73fdbbbf3b05c7e86bae0fd1e86c6c7cf9d2b3b4e886120->leave($__internal_058dbb3fb2deb8b1d73fdbbbf3b05c7e86bae0fd1e86c6c7cf9d2b3b4e886120_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_15b9a125de359fa1f5efcefe7bcd6c91532224f4f8eab1552fad7b2858d3d826 = $this->env->getExtension("native_profiler");
        $__internal_15b9a125de359fa1f5efcefe7bcd6c91532224f4f8eab1552fad7b2858d3d826->enter($__internal_15b9a125de359fa1f5efcefe7bcd6c91532224f4f8eab1552fad7b2858d3d826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_15b9a125de359fa1f5efcefe7bcd6c91532224f4f8eab1552fad7b2858d3d826->leave($__internal_15b9a125de359fa1f5efcefe7bcd6c91532224f4f8eab1552fad7b2858d3d826_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b7b45bd44c1e06205ff9168f972479dacbb3629f80e7f430f27015d2745f4314 = $this->env->getExtension("native_profiler");
        $__internal_b7b45bd44c1e06205ff9168f972479dacbb3629f80e7f430f27015d2745f4314->enter($__internal_b7b45bd44c1e06205ff9168f972479dacbb3629f80e7f430f27015d2745f4314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_b7b45bd44c1e06205ff9168f972479dacbb3629f80e7f430f27015d2745f4314->leave($__internal_b7b45bd44c1e06205ff9168f972479dacbb3629f80e7f430f27015d2745f4314_prof);

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

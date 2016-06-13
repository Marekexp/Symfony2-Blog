<?php

/* @Blog/Default/showpost.html.twig */
class __TwigTemplate_5236b8ba8be796101617bc0e46d8bec3223115a65484787e363ca3c37244cdfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/showpost.html.twig", 1);
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
        $__internal_a4bc05e5e67e9e2d086cf5a6da4d86c9a7b01f00cd30cb670fbcab4da5084f9d = $this->env->getExtension("native_profiler");
        $__internal_a4bc05e5e67e9e2d086cf5a6da4d86c9a7b01f00cd30cb670fbcab4da5084f9d->enter($__internal_a4bc05e5e67e9e2d086cf5a6da4d86c9a7b01f00cd30cb670fbcab4da5084f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bc05e5e67e9e2d086cf5a6da4d86c9a7b01f00cd30cb670fbcab4da5084f9d->leave($__internal_a4bc05e5e67e9e2d086cf5a6da4d86c9a7b01f00cd30cb670fbcab4da5084f9d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca7f3d7325ca38b2ccfb49eb4d38c419577eba9e2b8284dbe0c610f2b292c0b8 = $this->env->getExtension("native_profiler");
        $__internal_ca7f3d7325ca38b2ccfb49eb4d38c419577eba9e2b8284dbe0c610f2b292c0b8->enter($__internal_ca7f3d7325ca38b2ccfb49eb4d38c419577eba9e2b8284dbe0c610f2b292c0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_ca7f3d7325ca38b2ccfb49eb4d38c419577eba9e2b8284dbe0c610f2b292c0b8->leave($__internal_ca7f3d7325ca38b2ccfb49eb4d38c419577eba9e2b8284dbe0c610f2b292c0b8_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_c7cdf73c91a482e46567c7851af86e3a79d03a74f2dfb7e4a8afcf753c4de93e = $this->env->getExtension("native_profiler");
        $__internal_c7cdf73c91a482e46567c7851af86e3a79d03a74f2dfb7e4a8afcf753c4de93e->enter($__internal_c7cdf73c91a482e46567c7851af86e3a79d03a74f2dfb7e4a8afcf753c4de93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "    <h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "</h2>
    <p class=\"small\">Author: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
    <p class=\"small\">Added: ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "added", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postcontent", array()), "html", null, true);
        echo "</p>
    ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
            // line 9
            echo "        <div class=\"pull-right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("postedit", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-lg btn-warning\"><span
                        class=\"glyphicon glyphicon-retweet\"></span> Edit post</a></div>
    ";
        }
        // line 12
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "        <div class=\"pull-right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("postedit", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-lg btn-warning\"><span
                        class=\"glyphicon glyphicon-retweet\"></span> Edit post</a></div>
    ";
        }
        
        $__internal_c7cdf73c91a482e46567c7851af86e3a79d03a74f2dfb7e4a8afcf753c4de93e->leave($__internal_c7cdf73c91a482e46567c7851af86e3a79d03a74f2dfb7e4a8afcf753c4de93e_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/showpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  79 => 12,  72 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Show post{% endblock %}*/
/* {% block posts %}*/
/*     <h2> {{ entry.title }}</h2>*/
/*     <p class="small">Author: {{ entry.user.username }}</p>*/
/*     <p class="small">Added: {{ entry.added|date('d-m-Y H:i:s') }}</p>*/
/*     <p>{{ entry.postcontent }}</p>*/
/*     {% if entry.user.username == app.user.username %}*/
/*         <div class="pull-right"><a href="{{ path('postedit', { id: entry.id }) }}" class="btn btn-lg btn-warning"><span*/
/*                         class="glyphicon glyphicon-retweet"></span> Edit post</a></div>*/
/*     {% endif %}*/
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*         <div class="pull-right"><a href="{{ path('postedit', { id: entry.id }) }}" class="btn btn-lg btn-warning"><span*/
/*                         class="glyphicon glyphicon-retweet"></span> Edit post</a></div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

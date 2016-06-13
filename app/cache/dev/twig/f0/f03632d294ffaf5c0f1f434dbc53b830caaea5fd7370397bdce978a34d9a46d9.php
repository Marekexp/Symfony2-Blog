<?php

/* BlogBundle:Default:showpost.html.twig */
class __TwigTemplate_a15a4ec7e9f5cfb6b61b18c91bb5723133d1dd38607d23d5ce8b15fc6ae26295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:showpost.html.twig", 1);
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
        $__internal_235dcd17090b54a7c2abca30b5666e52943cc536312507ac556de6724086ee8e = $this->env->getExtension("native_profiler");
        $__internal_235dcd17090b54a7c2abca30b5666e52943cc536312507ac556de6724086ee8e->enter($__internal_235dcd17090b54a7c2abca30b5666e52943cc536312507ac556de6724086ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235dcd17090b54a7c2abca30b5666e52943cc536312507ac556de6724086ee8e->leave($__internal_235dcd17090b54a7c2abca30b5666e52943cc536312507ac556de6724086ee8e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fcbc38ccce15d5c442c82f1b0af733c3919b8e896e9a545a3739cb76d3a9f0c = $this->env->getExtension("native_profiler");
        $__internal_5fcbc38ccce15d5c442c82f1b0af733c3919b8e896e9a545a3739cb76d3a9f0c->enter($__internal_5fcbc38ccce15d5c442c82f1b0af733c3919b8e896e9a545a3739cb76d3a9f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_5fcbc38ccce15d5c442c82f1b0af733c3919b8e896e9a545a3739cb76d3a9f0c->leave($__internal_5fcbc38ccce15d5c442c82f1b0af733c3919b8e896e9a545a3739cb76d3a9f0c_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_e5790376c9bbe5ad654474f76fd2fb1a0be39102027629003f5cee0515e54da2 = $this->env->getExtension("native_profiler");
        $__internal_e5790376c9bbe5ad654474f76fd2fb1a0be39102027629003f5cee0515e54da2->enter($__internal_e5790376c9bbe5ad654474f76fd2fb1a0be39102027629003f5cee0515e54da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        if ((($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 9
            echo "        <div class=\"pull-right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("postedit", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-lg btn-warning\"><span
                        class=\"glyphicon glyphicon-retweet\"></span> Edit post</a></div>
    ";
        }
        
        $__internal_e5790376c9bbe5ad654474f76fd2fb1a0be39102027629003f5cee0515e54da2->leave($__internal_e5790376c9bbe5ad654474f76fd2fb1a0be39102027629003f5cee0515e54da2_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:showpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Show post{% endblock %}*/
/* {% block posts %}*/
/*     <h2> {{ entry.title }}</h2>*/
/*     <p class="small">Author: {{ entry.user.username }}</p>*/
/*     <p class="small">Added: {{ entry.added|date('d-m-Y H:i:s') }}</p>*/
/*     <p>{{ entry.postcontent }}</p>*/
/*     {% if entry.user.username == app.user.username or is_granted('ROLE_ADMIN') %}*/
/*         <div class="pull-right"><a href="{{ path('postedit', { id: entry.id }) }}" class="btn btn-lg btn-warning"><span*/
/*                         class="glyphicon glyphicon-retweet"></span> Edit post</a></div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

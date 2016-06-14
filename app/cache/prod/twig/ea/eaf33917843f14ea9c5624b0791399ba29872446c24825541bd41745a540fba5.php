<?php

/* BlogBundle:Default:showpost.html.twig */
class __TwigTemplate_23e485667f5aee3a99782f0a78af8deec3652abafcabaecf24148a7c0bda9752 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Show post";
    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        // line 4
        echo "    <h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
        echo "</h2>
    <p class=\"small\">Author: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</p>
    <p class=\"small\">Added: ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "added", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postcontent", array()), "html", null, true);
        echo "</p>
    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 10
                echo "            <div class=\"pull-right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("postedit", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()))), "html", null, true);
                echo "\"
                                       class=\"btn btn-lg btn-warning\"><span
                            class=\"glyphicon glyphicon-retweet\"></span> Edit post</a></div>
        ";
            }
            // line 14
            echo "    ";
        }
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
        return array (  68 => 14,  60 => 10,  57 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Show post{% endblock %}*/
/* {% block posts %}*/
/*     <h2> {{ entry.title }}</h2>*/
/*     <p class="small">Author: {{ entry.user.username }}</p>*/
/*     <p class="small">Added: {{ entry.added|date('d-m-Y H:i:s') }}</p>*/
/*     <p>{{ entry.postcontent }}</p>*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {% if entry.user.username == app.user.username or is_granted('ROLE_ADMIN') %}*/
/*             <div class="pull-right"><a href="{{ path('postedit', { id: entry.id }) }}"*/
/*                                        class="btn btn-lg btn-warning"><span*/
/*                             class="glyphicon glyphicon-retweet"></span> Edit post</a></div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

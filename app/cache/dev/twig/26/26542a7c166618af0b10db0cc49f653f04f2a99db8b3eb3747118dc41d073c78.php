<?php

/* BlogBundle:Default:categoryshow.html.twig */
class __TwigTemplate_4605dd1c68c3118d60e5bd2c07b4e3d0d257f8c6b947607e338dc9d73c43a1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:categoryshow.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'posts' => array($this, 'block_posts'),
            'adminpanel' => array($this, 'block_adminpanel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c128323773fba39626884f6b17bd530e852c7f8b7d39afac48be44be22f0eeff = $this->env->getExtension("native_profiler");
        $__internal_c128323773fba39626884f6b17bd530e852c7f8b7d39afac48be44be22f0eeff->enter($__internal_c128323773fba39626884f6b17bd530e852c7f8b7d39afac48be44be22f0eeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:categoryshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c128323773fba39626884f6b17bd530e852c7f8b7d39afac48be44be22f0eeff->leave($__internal_c128323773fba39626884f6b17bd530e852c7f8b7d39afac48be44be22f0eeff_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_95726635244759e3de0ec154fc38d177d5146ebbed9124a059d0f525c9ef1931 = $this->env->getExtension("native_profiler");
        $__internal_95726635244759e3de0ec154fc38d177d5146ebbed9124a059d0f525c9ef1931->enter($__internal_95726635244759e3de0ec154fc38d177d5146ebbed9124a059d0f525c9ef1931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_95726635244759e3de0ec154fc38d177d5146ebbed9124a059d0f525c9ef1931->leave($__internal_95726635244759e3de0ec154fc38d177d5146ebbed9124a059d0f525c9ef1931_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_0a1827e0620159fb006f96b5953c7a9b86a2fc39b5c13169e3a833d1cab7b971 = $this->env->getExtension("native_profiler");
        $__internal_0a1827e0620159fb006f96b5953c7a9b86a2fc39b5c13169e3a833d1cab7b971->enter($__internal_0a1827e0620159fb006f96b5953c7a9b86a2fc39b5c13169e3a833d1cab7b971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_post", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">
            <h2> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</h2>
        </a>
        <p class=\"small\">Author: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
        <p class=\"small\">Added: ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "added", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</p>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "postcontent", array()), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        $this->displayBlock('adminpanel', $context, $blocks);
        
        $__internal_0a1827e0620159fb006f96b5953c7a9b86a2fc39b5c13169e3a833d1cab7b971->leave($__internal_0a1827e0620159fb006f96b5953c7a9b86a2fc39b5c13169e3a833d1cab7b971_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_8a39444d2477b8e507c9094d7db9f0887e92614944e9779ffbe9b56fed018ee8 = $this->env->getExtension("native_profiler");
        $__internal_8a39444d2477b8e507c9094d7db9f0887e92614944e9779ffbe9b56fed018ee8->enter($__internal_8a39444d2477b8e507c9094d7db9f0887e92614944e9779ffbe9b56fed018ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_8a39444d2477b8e507c9094d7db9f0887e92614944e9779ffbe9b56fed018ee8->leave($__internal_8a39444d2477b8e507c9094d7db9f0887e92614944e9779ffbe9b56fed018ee8_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:categoryshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  77 => 10,  73 => 9,  69 => 8,  64 => 6,  59 => 5,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Show post{% endblock %}*/
/* {% block posts %}*/
/*     {% for entry in posts %}*/
/*         <a href="{{ path('show_post', { id: entry.id }) }}">*/
/*             <h2> {{ entry.title }}</h2>*/
/*         </a>*/
/*         <p class="small">Author: {{ entry.user.username }}</p>*/
/*         <p class="small">Added: {{ entry.added|date('d-m-Y H:i:s') }}</p>*/
/*         <p>{{ entry.postcontent }}</p>*/
/*     {% endfor %}*/
/*     {% block adminpanel %}{% endblock %}*/
/* {% endblock %}*/
/* */

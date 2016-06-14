<?php

/* BlogBundle:Default:categoryshow.html.twig */
class __TwigTemplate_39fc10a6b830c4e783ccbe183b6b99b431700ebdba4bfb92941406f78f389fb1 extends Twig_Template
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
        $__internal_6b01f74727a88db13b1635b36ed0f5c01415dab1a368ec69e304bdf83c1a6892 = $this->env->getExtension("native_profiler");
        $__internal_6b01f74727a88db13b1635b36ed0f5c01415dab1a368ec69e304bdf83c1a6892->enter($__internal_6b01f74727a88db13b1635b36ed0f5c01415dab1a368ec69e304bdf83c1a6892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:categoryshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b01f74727a88db13b1635b36ed0f5c01415dab1a368ec69e304bdf83c1a6892->leave($__internal_6b01f74727a88db13b1635b36ed0f5c01415dab1a368ec69e304bdf83c1a6892_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ef9c16a00f8586d9633d436039779f29e7f91f5702dfe0b9a01846f0fc9290 = $this->env->getExtension("native_profiler");
        $__internal_a7ef9c16a00f8586d9633d436039779f29e7f91f5702dfe0b9a01846f0fc9290->enter($__internal_a7ef9c16a00f8586d9633d436039779f29e7f91f5702dfe0b9a01846f0fc9290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_a7ef9c16a00f8586d9633d436039779f29e7f91f5702dfe0b9a01846f0fc9290->leave($__internal_a7ef9c16a00f8586d9633d436039779f29e7f91f5702dfe0b9a01846f0fc9290_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_c76747dd53a694afa1d29e510acf163a4632686a2f0877ab70df37ba1b02156e = $this->env->getExtension("native_profiler");
        $__internal_c76747dd53a694afa1d29e510acf163a4632686a2f0877ab70df37ba1b02156e->enter($__internal_c76747dd53a694afa1d29e510acf163a4632686a2f0877ab70df37ba1b02156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_c76747dd53a694afa1d29e510acf163a4632686a2f0877ab70df37ba1b02156e->leave($__internal_c76747dd53a694afa1d29e510acf163a4632686a2f0877ab70df37ba1b02156e_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_f10d4454f57a394a24dab3d4de7bc2d7004f4d3be1d7ab12f9e36eca9626888e = $this->env->getExtension("native_profiler");
        $__internal_f10d4454f57a394a24dab3d4de7bc2d7004f4d3be1d7ab12f9e36eca9626888e->enter($__internal_f10d4454f57a394a24dab3d4de7bc2d7004f4d3be1d7ab12f9e36eca9626888e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_f10d4454f57a394a24dab3d4de7bc2d7004f4d3be1d7ab12f9e36eca9626888e->leave($__internal_f10d4454f57a394a24dab3d4de7bc2d7004f4d3be1d7ab12f9e36eca9626888e_prof);

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

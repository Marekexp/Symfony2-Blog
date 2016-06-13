<?php

/* @Blog/Default/categoryshow.html.twig */
class __TwigTemplate_9f93dfe0a20cd130115a589b02079163d9796fd07520fc6983457f9182e01d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/categoryshow.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
    }

    public function block_adminpanel($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@Blog/Default/categoryshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  62 => 10,  58 => 9,  54 => 8,  49 => 6,  44 => 5,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
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

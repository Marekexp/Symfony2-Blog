<?php

/* @Blog/Default/categoryshow.html.twig */
class __TwigTemplate_94c40900aa6c16a3468445e883662d3016554f165c91440674675d16e8891f2f extends Twig_Template
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
        $__internal_cee7f26952623e39613ccfa9f47767c567ccadc5bc877b9ce2f4474af069f0fc = $this->env->getExtension("native_profiler");
        $__internal_cee7f26952623e39613ccfa9f47767c567ccadc5bc877b9ce2f4474af069f0fc->enter($__internal_cee7f26952623e39613ccfa9f47767c567ccadc5bc877b9ce2f4474af069f0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/categoryshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee7f26952623e39613ccfa9f47767c567ccadc5bc877b9ce2f4474af069f0fc->leave($__internal_cee7f26952623e39613ccfa9f47767c567ccadc5bc877b9ce2f4474af069f0fc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c418e94df2c78aaa199748b8c07c5cfa081687155758944b3c3851955eb2706 = $this->env->getExtension("native_profiler");
        $__internal_5c418e94df2c78aaa199748b8c07c5cfa081687155758944b3c3851955eb2706->enter($__internal_5c418e94df2c78aaa199748b8c07c5cfa081687155758944b3c3851955eb2706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_5c418e94df2c78aaa199748b8c07c5cfa081687155758944b3c3851955eb2706->leave($__internal_5c418e94df2c78aaa199748b8c07c5cfa081687155758944b3c3851955eb2706_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_314d84a4007fb16250a25381e80e24d6148258c4fe2041e45586f080b634e3b1 = $this->env->getExtension("native_profiler");
        $__internal_314d84a4007fb16250a25381e80e24d6148258c4fe2041e45586f080b634e3b1->enter($__internal_314d84a4007fb16250a25381e80e24d6148258c4fe2041e45586f080b634e3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_314d84a4007fb16250a25381e80e24d6148258c4fe2041e45586f080b634e3b1->leave($__internal_314d84a4007fb16250a25381e80e24d6148258c4fe2041e45586f080b634e3b1_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_3185de72aaaf506ea7244d5e912054e2e22b1469eab62755fa21410f0dcca4ab = $this->env->getExtension("native_profiler");
        $__internal_3185de72aaaf506ea7244d5e912054e2e22b1469eab62755fa21410f0dcca4ab->enter($__internal_3185de72aaaf506ea7244d5e912054e2e22b1469eab62755fa21410f0dcca4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_3185de72aaaf506ea7244d5e912054e2e22b1469eab62755fa21410f0dcca4ab->leave($__internal_3185de72aaaf506ea7244d5e912054e2e22b1469eab62755fa21410f0dcca4ab_prof);

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

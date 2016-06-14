<?php

/* @Blog/Default/categoryshow.html.twig */
class __TwigTemplate_942d6305b8500756b458c6b835dd43e9a231dbf40205c6290e74f6fe22310148 extends Twig_Template
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
        $__internal_8123a7a2b050f739cc4b294597473bd4deaeae8cfd3256f6b1f915ab65837a94 = $this->env->getExtension("native_profiler");
        $__internal_8123a7a2b050f739cc4b294597473bd4deaeae8cfd3256f6b1f915ab65837a94->enter($__internal_8123a7a2b050f739cc4b294597473bd4deaeae8cfd3256f6b1f915ab65837a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/categoryshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8123a7a2b050f739cc4b294597473bd4deaeae8cfd3256f6b1f915ab65837a94->leave($__internal_8123a7a2b050f739cc4b294597473bd4deaeae8cfd3256f6b1f915ab65837a94_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2132e2c478c25d5218e6d8476eb02d0d170f8020156a1ef85da97d6dea52d00 = $this->env->getExtension("native_profiler");
        $__internal_f2132e2c478c25d5218e6d8476eb02d0d170f8020156a1ef85da97d6dea52d00->enter($__internal_f2132e2c478c25d5218e6d8476eb02d0d170f8020156a1ef85da97d6dea52d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_f2132e2c478c25d5218e6d8476eb02d0d170f8020156a1ef85da97d6dea52d00->leave($__internal_f2132e2c478c25d5218e6d8476eb02d0d170f8020156a1ef85da97d6dea52d00_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_b4f073cfd4b3c72e047912519cce41b2f5b3cd21602f86979e8fe2cb38c4a07b = $this->env->getExtension("native_profiler");
        $__internal_b4f073cfd4b3c72e047912519cce41b2f5b3cd21602f86979e8fe2cb38c4a07b->enter($__internal_b4f073cfd4b3c72e047912519cce41b2f5b3cd21602f86979e8fe2cb38c4a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_b4f073cfd4b3c72e047912519cce41b2f5b3cd21602f86979e8fe2cb38c4a07b->leave($__internal_b4f073cfd4b3c72e047912519cce41b2f5b3cd21602f86979e8fe2cb38c4a07b_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_2b1787d227d1021b4025b5a7ecc102c5e5d0ff7c56e8089aadb2e2a7e5532967 = $this->env->getExtension("native_profiler");
        $__internal_2b1787d227d1021b4025b5a7ecc102c5e5d0ff7c56e8089aadb2e2a7e5532967->enter($__internal_2b1787d227d1021b4025b5a7ecc102c5e5d0ff7c56e8089aadb2e2a7e5532967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_2b1787d227d1021b4025b5a7ecc102c5e5d0ff7c56e8089aadb2e2a7e5532967->leave($__internal_2b1787d227d1021b4025b5a7ecc102c5e5d0ff7c56e8089aadb2e2a7e5532967_prof);

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

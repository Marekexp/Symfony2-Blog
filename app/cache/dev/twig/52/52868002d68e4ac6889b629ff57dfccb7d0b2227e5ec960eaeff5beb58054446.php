<?php

/* @Blog/Default/index.html.twig */
class __TwigTemplate_64c7b4eaad79046f0eef72f68c4b2338f1409806962b2eb48b1f82ce17ebe013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34927759f2e90de4b4b454e47de3948505ef2f2a644299c3b7af10d302939df8 = $this->env->getExtension("native_profiler");
        $__internal_34927759f2e90de4b4b454e47de3948505ef2f2a644299c3b7af10d302939df8->enter($__internal_34927759f2e90de4b4b454e47de3948505ef2f2a644299c3b7af10d302939df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34927759f2e90de4b4b454e47de3948505ef2f2a644299c3b7af10d302939df8->leave($__internal_34927759f2e90de4b4b454e47de3948505ef2f2a644299c3b7af10d302939df8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_41665ebb20770c8f9e448b6b99ca3fb7d62f1c018f0621b38504a599d6074ba4 = $this->env->getExtension("native_profiler");
        $__internal_41665ebb20770c8f9e448b6b99ca3fb7d62f1c018f0621b38504a599d6074ba4->enter($__internal_41665ebb20770c8f9e448b6b99ca3fb7d62f1c018f0621b38504a599d6074ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_41665ebb20770c8f9e448b6b99ca3fb7d62f1c018f0621b38504a599d6074ba4->leave($__internal_41665ebb20770c8f9e448b6b99ca3fb7d62f1c018f0621b38504a599d6074ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Home{% endblock %}*/

<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_828d3a8190a29bd2d770b13f9fc4683052534ee5f0c50e8e7c9777b222129f52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:index.html.twig", 1);
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
        $__internal_5952cdabe6b76062c9348ec189c3d963cc2152428bb0d2949470890645cb5b45 = $this->env->getExtension("native_profiler");
        $__internal_5952cdabe6b76062c9348ec189c3d963cc2152428bb0d2949470890645cb5b45->enter($__internal_5952cdabe6b76062c9348ec189c3d963cc2152428bb0d2949470890645cb5b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5952cdabe6b76062c9348ec189c3d963cc2152428bb0d2949470890645cb5b45->leave($__internal_5952cdabe6b76062c9348ec189c3d963cc2152428bb0d2949470890645cb5b45_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a4c67447e39a68ba6ec7cca6cf986ba7b42209db83c11b5f1c92ba88280597a = $this->env->getExtension("native_profiler");
        $__internal_8a4c67447e39a68ba6ec7cca6cf986ba7b42209db83c11b5f1c92ba88280597a->enter($__internal_8a4c67447e39a68ba6ec7cca6cf986ba7b42209db83c11b5f1c92ba88280597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_8a4c67447e39a68ba6ec7cca6cf986ba7b42209db83c11b5f1c92ba88280597a->leave($__internal_8a4c67447e39a68ba6ec7cca6cf986ba7b42209db83c11b5f1c92ba88280597a_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
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

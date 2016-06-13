<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_4c33fba4ec0a5fa9ed62f6d4466e87f13be0f5756a417bd4f6f1ba46a07d86f0 extends Twig_Template
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
        $__internal_f1c0dfd7d0c35efe73ccba64633b9a9f8bc6d1c277dbf04954caf004636d2c97 = $this->env->getExtension("native_profiler");
        $__internal_f1c0dfd7d0c35efe73ccba64633b9a9f8bc6d1c277dbf04954caf004636d2c97->enter($__internal_f1c0dfd7d0c35efe73ccba64633b9a9f8bc6d1c277dbf04954caf004636d2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c0dfd7d0c35efe73ccba64633b9a9f8bc6d1c277dbf04954caf004636d2c97->leave($__internal_f1c0dfd7d0c35efe73ccba64633b9a9f8bc6d1c277dbf04954caf004636d2c97_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b180e8e9fbbbb746bbf007fd74a14e57355eb57d8e4f451d66f25358fae48c7a = $this->env->getExtension("native_profiler");
        $__internal_b180e8e9fbbbb746bbf007fd74a14e57355eb57d8e4f451d66f25358fae48c7a->enter($__internal_b180e8e9fbbbb746bbf007fd74a14e57355eb57d8e4f451d66f25358fae48c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_b180e8e9fbbbb746bbf007fd74a14e57355eb57d8e4f451d66f25358fae48c7a->leave($__internal_b180e8e9fbbbb746bbf007fd74a14e57355eb57d8e4f451d66f25358fae48c7a_prof);

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

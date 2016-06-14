<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d7cb0e6fcf4ea2dd294c43b77e5de19d6565625c941318eb09b79e5f4342326d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5ec5c4ffe21793570a9271262b4fc82b50d8b6c3f6575cfa432edc643372cfb = $this->env->getExtension("native_profiler");
        $__internal_a5ec5c4ffe21793570a9271262b4fc82b50d8b6c3f6575cfa432edc643372cfb->enter($__internal_a5ec5c4ffe21793570a9271262b4fc82b50d8b6c3f6575cfa432edc643372cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a5ec5c4ffe21793570a9271262b4fc82b50d8b6c3f6575cfa432edc643372cfb->leave($__internal_a5ec5c4ffe21793570a9271262b4fc82b50d8b6c3f6575cfa432edc643372cfb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

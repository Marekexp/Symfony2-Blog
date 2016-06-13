<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ae1ef8d26d0d372ab8c5fb35a0086b8314ef26f514f561c766b682108c69ab27 extends Twig_Template
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
        $__internal_0f61001a731e71cd3e5449f0d0e171b8603386b781e3657cae71b62abd92364d = $this->env->getExtension("native_profiler");
        $__internal_0f61001a731e71cd3e5449f0d0e171b8603386b781e3657cae71b62abd92364d->enter($__internal_0f61001a731e71cd3e5449f0d0e171b8603386b781e3657cae71b62abd92364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0f61001a731e71cd3e5449f0d0e171b8603386b781e3657cae71b62abd92364d->leave($__internal_0f61001a731e71cd3e5449f0d0e171b8603386b781e3657cae71b62abd92364d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

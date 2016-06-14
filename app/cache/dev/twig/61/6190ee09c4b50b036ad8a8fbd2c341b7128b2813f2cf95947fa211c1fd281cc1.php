<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6b4c52807c3f72e5534075e1dd52189fb685391d4aef6a4a7f2a31f50e62303a extends Twig_Template
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
        $__internal_21453ecafcfd03d08253695eeb143fa6c2c2a89b47d8712060459b4a26518f3a = $this->env->getExtension("native_profiler");
        $__internal_21453ecafcfd03d08253695eeb143fa6c2c2a89b47d8712060459b4a26518f3a->enter($__internal_21453ecafcfd03d08253695eeb143fa6c2c2a89b47d8712060459b4a26518f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_21453ecafcfd03d08253695eeb143fa6c2c2a89b47d8712060459b4a26518f3a->leave($__internal_21453ecafcfd03d08253695eeb143fa6c2c2a89b47d8712060459b4a26518f3a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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

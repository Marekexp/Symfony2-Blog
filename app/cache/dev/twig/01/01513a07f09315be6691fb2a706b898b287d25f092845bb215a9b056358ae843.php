<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_18a5bfb7b6e4a149158ead11ac815aefbd2d983a790f0bda2f982e682529abb7 extends Twig_Template
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
        $__internal_f935ba14dc0c6f3a0a29d20bc59c136a8229c9474f1312e3e328c6d02eeb454b = $this->env->getExtension("native_profiler");
        $__internal_f935ba14dc0c6f3a0a29d20bc59c136a8229c9474f1312e3e328c6d02eeb454b->enter($__internal_f935ba14dc0c6f3a0a29d20bc59c136a8229c9474f1312e3e328c6d02eeb454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f935ba14dc0c6f3a0a29d20bc59c136a8229c9474f1312e3e328c6d02eeb454b->leave($__internal_f935ba14dc0c6f3a0a29d20bc59c136a8229c9474f1312e3e328c6d02eeb454b_prof);

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

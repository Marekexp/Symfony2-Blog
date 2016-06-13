<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3e3af0a1ddd90499dea287d91ad811b4156cf1dc8a83abc286bc05908e37218a extends Twig_Template
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
        $__internal_3f3a0805a0aea051e9c5503f6738bb76b03ac461f7cc46864feb850f79d8a888 = $this->env->getExtension("native_profiler");
        $__internal_3f3a0805a0aea051e9c5503f6738bb76b03ac461f7cc46864feb850f79d8a888->enter($__internal_3f3a0805a0aea051e9c5503f6738bb76b03ac461f7cc46864feb850f79d8a888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3f3a0805a0aea051e9c5503f6738bb76b03ac461f7cc46864feb850f79d8a888->leave($__internal_3f3a0805a0aea051e9c5503f6738bb76b03ac461f7cc46864feb850f79d8a888_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

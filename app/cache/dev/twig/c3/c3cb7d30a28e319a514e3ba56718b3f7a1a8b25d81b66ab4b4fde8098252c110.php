<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d9d9857bbec61c2f90ac6ac2788aaf6d1f7f9c2c9c3d127393bd9982deb8903c extends Twig_Template
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
        $__internal_a00f23897d1da4a47f763aac2cf98996a41148f0aeba924da596a1038344e008 = $this->env->getExtension("native_profiler");
        $__internal_a00f23897d1da4a47f763aac2cf98996a41148f0aeba924da596a1038344e008->enter($__internal_a00f23897d1da4a47f763aac2cf98996a41148f0aeba924da596a1038344e008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a00f23897d1da4a47f763aac2cf98996a41148f0aeba924da596a1038344e008->leave($__internal_a00f23897d1da4a47f763aac2cf98996a41148f0aeba924da596a1038344e008_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
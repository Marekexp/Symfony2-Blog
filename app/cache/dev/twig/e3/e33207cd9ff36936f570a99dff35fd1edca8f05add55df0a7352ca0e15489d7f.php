<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d628c16e0fba315c87d304eff2f3a84f711eec5da7eb3b769d4a50cbcb1cb015 extends Twig_Template
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
        $__internal_5c158a46017e055f3644929ff487babee0464a4d481f1fad85cdce9eb9fb3a47 = $this->env->getExtension("native_profiler");
        $__internal_5c158a46017e055f3644929ff487babee0464a4d481f1fad85cdce9eb9fb3a47->enter($__internal_5c158a46017e055f3644929ff487babee0464a4d481f1fad85cdce9eb9fb3a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5c158a46017e055f3644929ff487babee0464a4d481f1fad85cdce9eb9fb3a47->leave($__internal_5c158a46017e055f3644929ff487babee0464a4d481f1fad85cdce9eb9fb3a47_prof);

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

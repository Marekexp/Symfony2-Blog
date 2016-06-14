<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5c15ac753a8c2e62276ee7c87f609a01757c2cd8711f013b6c0687448505cd20 extends Twig_Template
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
        $__internal_ae81c0c940977340f31a55a1057f7ccc942a73cbcfea74f84acb6af6cb475b73 = $this->env->getExtension("native_profiler");
        $__internal_ae81c0c940977340f31a55a1057f7ccc942a73cbcfea74f84acb6af6cb475b73->enter($__internal_ae81c0c940977340f31a55a1057f7ccc942a73cbcfea74f84acb6af6cb475b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ae81c0c940977340f31a55a1057f7ccc942a73cbcfea74f84acb6af6cb475b73->leave($__internal_ae81c0c940977340f31a55a1057f7ccc942a73cbcfea74f84acb6af6cb475b73_prof);

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

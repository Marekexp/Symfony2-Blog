<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9b379d7bd32f609435a318599ff4d57d6470898bc8b180c0005ae455b08e4940 extends Twig_Template
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
        $__internal_4cde7ddb41040aa7b6334d56ecbf9c2374680fdbd74d48f0733c443dc222054c = $this->env->getExtension("native_profiler");
        $__internal_4cde7ddb41040aa7b6334d56ecbf9c2374680fdbd74d48f0733c443dc222054c->enter($__internal_4cde7ddb41040aa7b6334d56ecbf9c2374680fdbd74d48f0733c443dc222054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4cde7ddb41040aa7b6334d56ecbf9c2374680fdbd74d48f0733c443dc222054c->leave($__internal_4cde7ddb41040aa7b6334d56ecbf9c2374680fdbd74d48f0733c443dc222054c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_13e0ea2461e2a83755dff1da60a1e6256adaa8b9ee172a8089b17f382710c821 extends Twig_Template
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
        $__internal_6b4d27c2af261cd7c2fdfb01d28ccb6e13701c85b02d1cdadc0c56654f21ce64 = $this->env->getExtension("native_profiler");
        $__internal_6b4d27c2af261cd7c2fdfb01d28ccb6e13701c85b02d1cdadc0c56654f21ce64->enter($__internal_6b4d27c2af261cd7c2fdfb01d28ccb6e13701c85b02d1cdadc0c56654f21ce64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6b4d27c2af261cd7c2fdfb01d28ccb6e13701c85b02d1cdadc0c56654f21ce64->leave($__internal_6b4d27c2af261cd7c2fdfb01d28ccb6e13701c85b02d1cdadc0c56654f21ce64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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

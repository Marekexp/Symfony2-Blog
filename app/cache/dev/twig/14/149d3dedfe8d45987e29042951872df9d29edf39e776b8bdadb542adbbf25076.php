<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_38b3caec0f2c96bcbabbdd8fdfa12a11ef5fa533fa801d028aa78c1a216a7553 extends Twig_Template
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
        $__internal_370a2c00809da34cbfd1226573ea544ab111f37ff05681b9b2c5412c0a18b801 = $this->env->getExtension("native_profiler");
        $__internal_370a2c00809da34cbfd1226573ea544ab111f37ff05681b9b2c5412c0a18b801->enter($__internal_370a2c00809da34cbfd1226573ea544ab111f37ff05681b9b2c5412c0a18b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_370a2c00809da34cbfd1226573ea544ab111f37ff05681b9b2c5412c0a18b801->leave($__internal_370a2c00809da34cbfd1226573ea544ab111f37ff05681b9b2c5412c0a18b801_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_998f9490acab875d5f2a4f5183681d39a41df7734d84d5cc1452034460d31757 extends Twig_Template
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
        $__internal_e5178b6dba9532476f1adb302590e0e61cbb0b0399db2caa3b0549690ee004d0 = $this->env->getExtension("native_profiler");
        $__internal_e5178b6dba9532476f1adb302590e0e61cbb0b0399db2caa3b0549690ee004d0->enter($__internal_e5178b6dba9532476f1adb302590e0e61cbb0b0399db2caa3b0549690ee004d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e5178b6dba9532476f1adb302590e0e61cbb0b0399db2caa3b0549690ee004d0->leave($__internal_e5178b6dba9532476f1adb302590e0e61cbb0b0399db2caa3b0549690ee004d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

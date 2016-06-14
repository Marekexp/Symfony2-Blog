<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0aa26e79d27f48ef11aced38857b5ebfb3f421fa76d08639b2f6a044d53f61a9 extends Twig_Template
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
        $__internal_6a50d0948b6c1f0be079a50f6a51421a0cc5b0ddb60e68c8e92331d7641ac50c = $this->env->getExtension("native_profiler");
        $__internal_6a50d0948b6c1f0be079a50f6a51421a0cc5b0ddb60e68c8e92331d7641ac50c->enter($__internal_6a50d0948b6c1f0be079a50f6a51421a0cc5b0ddb60e68c8e92331d7641ac50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6a50d0948b6c1f0be079a50f6a51421a0cc5b0ddb60e68c8e92331d7641ac50c->leave($__internal_6a50d0948b6c1f0be079a50f6a51421a0cc5b0ddb60e68c8e92331d7641ac50c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

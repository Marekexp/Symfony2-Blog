<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_62b053b01a72cb03230ee9c9f2f2bc43e974ef2ef6b9f62e0843793282f5db34 extends Twig_Template
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
        $__internal_36addb705f549f032cc40143cef8a2380a7b9d1ca917ba505c870861bf03fd48 = $this->env->getExtension("native_profiler");
        $__internal_36addb705f549f032cc40143cef8a2380a7b9d1ca917ba505c870861bf03fd48->enter($__internal_36addb705f549f032cc40143cef8a2380a7b9d1ca917ba505c870861bf03fd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_36addb705f549f032cc40143cef8a2380a7b9d1ca917ba505c870861bf03fd48->leave($__internal_36addb705f549f032cc40143cef8a2380a7b9d1ca917ba505c870861bf03fd48_prof);

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

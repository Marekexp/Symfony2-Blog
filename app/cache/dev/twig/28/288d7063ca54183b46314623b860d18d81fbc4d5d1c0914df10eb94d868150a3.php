<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5ab45ab9bdc9db30bb0ea67f4f182ca72a66faea3b1fac4bd68e32b76bc933cd extends Twig_Template
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
        $__internal_25033550a9a3e84cb64f139dabd481b7b232c6d0320574bc1d6868d0f1edbde2 = $this->env->getExtension("native_profiler");
        $__internal_25033550a9a3e84cb64f139dabd481b7b232c6d0320574bc1d6868d0f1edbde2->enter($__internal_25033550a9a3e84cb64f139dabd481b7b232c6d0320574bc1d6868d0f1edbde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_25033550a9a3e84cb64f139dabd481b7b232c6d0320574bc1d6868d0f1edbde2->leave($__internal_25033550a9a3e84cb64f139dabd481b7b232c6d0320574bc1d6868d0f1edbde2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c9fe7524d8da11693da9ba6bb14d6deb82d3b071b0d632aecb8279f43d90fa6c extends Twig_Template
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
        $__internal_a4eb9a4eca121d9c5c509f428831f91cb8425030326f082d86285e98ae9b81fe = $this->env->getExtension("native_profiler");
        $__internal_a4eb9a4eca121d9c5c509f428831f91cb8425030326f082d86285e98ae9b81fe->enter($__internal_a4eb9a4eca121d9c5c509f428831f91cb8425030326f082d86285e98ae9b81fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a4eb9a4eca121d9c5c509f428831f91cb8425030326f082d86285e98ae9b81fe->leave($__internal_a4eb9a4eca121d9c5c509f428831f91cb8425030326f082d86285e98ae9b81fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

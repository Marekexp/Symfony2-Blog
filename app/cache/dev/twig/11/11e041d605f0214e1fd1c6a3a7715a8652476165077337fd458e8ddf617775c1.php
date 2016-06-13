<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0d17f3b52bf96160e88e82ede2c37f9895b2e4530d2620f0cf63f0e4031aa159 extends Twig_Template
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
        $__internal_b4b8b4cd68792ec7a9d1173d075bf37b4654f62eab17dc863a473b9204ed0760 = $this->env->getExtension("native_profiler");
        $__internal_b4b8b4cd68792ec7a9d1173d075bf37b4654f62eab17dc863a473b9204ed0760->enter($__internal_b4b8b4cd68792ec7a9d1173d075bf37b4654f62eab17dc863a473b9204ed0760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b4b8b4cd68792ec7a9d1173d075bf37b4654f62eab17dc863a473b9204ed0760->leave($__internal_b4b8b4cd68792ec7a9d1173d075bf37b4654f62eab17dc863a473b9204ed0760_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

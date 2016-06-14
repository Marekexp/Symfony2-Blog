<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1d22ba64c7ed3ad037f6df90f3fcb080869510cb54d915a03f485769d2dcd160 extends Twig_Template
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
        $__internal_c8c9a5fa49052955a5e8abc315d73cf8c039c4530f4e3ae7f424bb7d7e540d91 = $this->env->getExtension("native_profiler");
        $__internal_c8c9a5fa49052955a5e8abc315d73cf8c039c4530f4e3ae7f424bb7d7e540d91->enter($__internal_c8c9a5fa49052955a5e8abc315d73cf8c039c4530f4e3ae7f424bb7d7e540d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c8c9a5fa49052955a5e8abc315d73cf8c039c4530f4e3ae7f424bb7d7e540d91->leave($__internal_c8c9a5fa49052955a5e8abc315d73cf8c039c4530f4e3ae7f424bb7d7e540d91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

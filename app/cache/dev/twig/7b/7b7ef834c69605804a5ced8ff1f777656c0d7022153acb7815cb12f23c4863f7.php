<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0ea575cd9bdeb42127d05f3cfcbb88c4b4e4ff5bfb283225fa49835fc5dd5349 extends Twig_Template
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
        $__internal_e507f48fdd5c3858267f97f1d734d2d69cead5038488b9d65bbf1065bb93d8e1 = $this->env->getExtension("native_profiler");
        $__internal_e507f48fdd5c3858267f97f1d734d2d69cead5038488b9d65bbf1065bb93d8e1->enter($__internal_e507f48fdd5c3858267f97f1d734d2d69cead5038488b9d65bbf1065bb93d8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e507f48fdd5c3858267f97f1d734d2d69cead5038488b9d65bbf1065bb93d8e1->leave($__internal_e507f48fdd5c3858267f97f1d734d2d69cead5038488b9d65bbf1065bb93d8e1_prof);

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

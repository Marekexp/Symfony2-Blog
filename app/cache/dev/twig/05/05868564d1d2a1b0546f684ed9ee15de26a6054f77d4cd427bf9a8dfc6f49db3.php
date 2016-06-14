<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_623a186fda3c5f0ba4eb357edd6e40a2a0057b953c0a1b4f8289feb45bdd4cac extends Twig_Template
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
        $__internal_22117ea0928c804f149626af4ceae774aaa9ac050f2f5cd432373cf43ea32e85 = $this->env->getExtension("native_profiler");
        $__internal_22117ea0928c804f149626af4ceae774aaa9ac050f2f5cd432373cf43ea32e85->enter($__internal_22117ea0928c804f149626af4ceae774aaa9ac050f2f5cd432373cf43ea32e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_22117ea0928c804f149626af4ceae774aaa9ac050f2f5cd432373cf43ea32e85->leave($__internal_22117ea0928c804f149626af4ceae774aaa9ac050f2f5cd432373cf43ea32e85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

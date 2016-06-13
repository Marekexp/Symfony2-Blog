<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e9915562fda76e2e6619f3487e46d4785617212390339f8dd9b62c097da3af72 extends Twig_Template
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
        $__internal_792d4416398c5193ed6ca6d7772a757afc09e8926745b6732f6107806c37f466 = $this->env->getExtension("native_profiler");
        $__internal_792d4416398c5193ed6ca6d7772a757afc09e8926745b6732f6107806c37f466->enter($__internal_792d4416398c5193ed6ca6d7772a757afc09e8926745b6732f6107806c37f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_792d4416398c5193ed6ca6d7772a757afc09e8926745b6732f6107806c37f466->leave($__internal_792d4416398c5193ed6ca6d7772a757afc09e8926745b6732f6107806c37f466_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

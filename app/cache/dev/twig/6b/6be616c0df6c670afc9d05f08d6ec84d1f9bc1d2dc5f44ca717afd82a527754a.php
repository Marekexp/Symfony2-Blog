<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3789bca6a7793ea28f873bed3ddd44b61fcb9ec9f75f12d4545f1b15c7b78a05 extends Twig_Template
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
        $__internal_dbcbdaea67ec82f9b5f991eba44d19c23f4ebda2ca6352d2c60a32c60c4f65ef = $this->env->getExtension("native_profiler");
        $__internal_dbcbdaea67ec82f9b5f991eba44d19c23f4ebda2ca6352d2c60a32c60c4f65ef->enter($__internal_dbcbdaea67ec82f9b5f991eba44d19c23f4ebda2ca6352d2c60a32c60c4f65ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dbcbdaea67ec82f9b5f991eba44d19c23f4ebda2ca6352d2c60a32c60c4f65ef->leave($__internal_dbcbdaea67ec82f9b5f991eba44d19c23f4ebda2ca6352d2c60a32c60c4f65ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

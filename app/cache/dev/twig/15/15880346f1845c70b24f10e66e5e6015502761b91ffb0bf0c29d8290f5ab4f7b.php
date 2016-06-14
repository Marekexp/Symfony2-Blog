<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ebb3ccfe97a3d2d46a6e11340393287f74874e649ef7749dd426b0ac87767d50 extends Twig_Template
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
        $__internal_4609248c18530f52afdbdea641942eef6257bad552e1326e471ebd8af002743f = $this->env->getExtension("native_profiler");
        $__internal_4609248c18530f52afdbdea641942eef6257bad552e1326e471ebd8af002743f->enter($__internal_4609248c18530f52afdbdea641942eef6257bad552e1326e471ebd8af002743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4609248c18530f52afdbdea641942eef6257bad552e1326e471ebd8af002743f->leave($__internal_4609248c18530f52afdbdea641942eef6257bad552e1326e471ebd8af002743f_prof);

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

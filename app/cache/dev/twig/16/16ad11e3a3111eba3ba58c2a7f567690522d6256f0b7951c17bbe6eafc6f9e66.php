<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ba7e3aa45afed5e45d000b587908442c7a7fedc26570a9e1e81731b73b62df96 extends Twig_Template
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
        $__internal_9c85fe8a216c09fdab6ebf236456c464d74914397ea8e4f76a4ae7193520d4fb = $this->env->getExtension("native_profiler");
        $__internal_9c85fe8a216c09fdab6ebf236456c464d74914397ea8e4f76a4ae7193520d4fb->enter($__internal_9c85fe8a216c09fdab6ebf236456c464d74914397ea8e4f76a4ae7193520d4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9c85fe8a216c09fdab6ebf236456c464d74914397ea8e4f76a4ae7193520d4fb->leave($__internal_9c85fe8a216c09fdab6ebf236456c464d74914397ea8e4f76a4ae7193520d4fb_prof);

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

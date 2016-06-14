<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_cad079316ed5c392430e72a8e86e88dc31e6bd70d137c9f3ebbb7d841a82024a extends Twig_Template
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
        $__internal_767490e7bf06f9a057cb6659127821ffc421fc45117f4e777c330425fa3898ff = $this->env->getExtension("native_profiler");
        $__internal_767490e7bf06f9a057cb6659127821ffc421fc45117f4e777c330425fa3898ff->enter($__internal_767490e7bf06f9a057cb6659127821ffc421fc45117f4e777c330425fa3898ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_767490e7bf06f9a057cb6659127821ffc421fc45117f4e777c330425fa3898ff->leave($__internal_767490e7bf06f9a057cb6659127821ffc421fc45117f4e777c330425fa3898ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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

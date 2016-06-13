<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a1b244ec637380b8e9a58a7d9614680c55ac1954156826dfc74a9b7105d68f0e extends Twig_Template
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
        $__internal_15574dddf14aa1362a944545f8bdcdedc508b17abc8e9dbc168bd3c897cb98a8 = $this->env->getExtension("native_profiler");
        $__internal_15574dddf14aa1362a944545f8bdcdedc508b17abc8e9dbc168bd3c897cb98a8->enter($__internal_15574dddf14aa1362a944545f8bdcdedc508b17abc8e9dbc168bd3c897cb98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_15574dddf14aa1362a944545f8bdcdedc508b17abc8e9dbc168bd3c897cb98a8->leave($__internal_15574dddf14aa1362a944545f8bdcdedc508b17abc8e9dbc168bd3c897cb98a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

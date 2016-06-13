<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2e3234ff27a447efcb115c270b6cfcf9cd460e588e6eb1ff2960fffd2d145080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66257cf8eaf1959d8272363a39f1a5062902badf85a81b3b7bc530ab5d15ade7 = $this->env->getExtension("native_profiler");
        $__internal_66257cf8eaf1959d8272363a39f1a5062902badf85a81b3b7bc530ab5d15ade7->enter($__internal_66257cf8eaf1959d8272363a39f1a5062902badf85a81b3b7bc530ab5d15ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_66257cf8eaf1959d8272363a39f1a5062902badf85a81b3b7bc530ab5d15ade7->leave($__internal_66257cf8eaf1959d8272363a39f1a5062902badf85a81b3b7bc530ab5d15ade7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc15f21f1dce93e4677cbeec1710530911fb723cb746f6bace972dfd1456fc27 = $this->env->getExtension("native_profiler");
        $__internal_cc15f21f1dce93e4677cbeec1710530911fb723cb746f6bace972dfd1456fc27->enter($__internal_cc15f21f1dce93e4677cbeec1710530911fb723cb746f6bace972dfd1456fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cc15f21f1dce93e4677cbeec1710530911fb723cb746f6bace972dfd1456fc27->leave($__internal_cc15f21f1dce93e4677cbeec1710530911fb723cb746f6bace972dfd1456fc27_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

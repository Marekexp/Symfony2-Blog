<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0e7a38cabf384dcf3bb67eb15e3a66756400284a36af675d70c601751de8b0f8 extends Twig_Template
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
        $__internal_e54f9c02b3a122421a1ffeba22ba7c0911419d5fbdfba79a974818373d17c62a = $this->env->getExtension("native_profiler");
        $__internal_e54f9c02b3a122421a1ffeba22ba7c0911419d5fbdfba79a974818373d17c62a->enter($__internal_e54f9c02b3a122421a1ffeba22ba7c0911419d5fbdfba79a974818373d17c62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e54f9c02b3a122421a1ffeba22ba7c0911419d5fbdfba79a974818373d17c62a->leave($__internal_e54f9c02b3a122421a1ffeba22ba7c0911419d5fbdfba79a974818373d17c62a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bd7da404934e4c4d029aff773fe5236b481800e58d3938208a1a96cbef85976 = $this->env->getExtension("native_profiler");
        $__internal_2bd7da404934e4c4d029aff773fe5236b481800e58d3938208a1a96cbef85976->enter($__internal_2bd7da404934e4c4d029aff773fe5236b481800e58d3938208a1a96cbef85976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2bd7da404934e4c4d029aff773fe5236b481800e58d3938208a1a96cbef85976->leave($__internal_2bd7da404934e4c4d029aff773fe5236b481800e58d3938208a1a96cbef85976_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

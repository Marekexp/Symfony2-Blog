<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_90d8cf9f058955bbca8b90843b3a828f222af77351ba8540987fc401e34be801 extends Twig_Template
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
        $__internal_bd8351ba9e43cbbc7612f33fecdc1d45a59357b8227dfcdfb88e9a4c83b6eb54 = $this->env->getExtension("native_profiler");
        $__internal_bd8351ba9e43cbbc7612f33fecdc1d45a59357b8227dfcdfb88e9a4c83b6eb54->enter($__internal_bd8351ba9e43cbbc7612f33fecdc1d45a59357b8227dfcdfb88e9a4c83b6eb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd8351ba9e43cbbc7612f33fecdc1d45a59357b8227dfcdfb88e9a4c83b6eb54->leave($__internal_bd8351ba9e43cbbc7612f33fecdc1d45a59357b8227dfcdfb88e9a4c83b6eb54_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33cf2df75a57cf2d4c149c5ce8fef990ec10bcacc36b7daf421e4f2cc62c005a = $this->env->getExtension("native_profiler");
        $__internal_33cf2df75a57cf2d4c149c5ce8fef990ec10bcacc36b7daf421e4f2cc62c005a->enter($__internal_33cf2df75a57cf2d4c149c5ce8fef990ec10bcacc36b7daf421e4f2cc62c005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33cf2df75a57cf2d4c149c5ce8fef990ec10bcacc36b7daf421e4f2cc62c005a->leave($__internal_33cf2df75a57cf2d4c149c5ce8fef990ec10bcacc36b7daf421e4f2cc62c005a_prof);

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

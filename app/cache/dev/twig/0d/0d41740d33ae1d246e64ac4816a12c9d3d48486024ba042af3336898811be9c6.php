<?php

/* @Blog/Default/index.html.twig */
class __TwigTemplate_b07f33c5d46692bf0c4c0adab5db1c6307084af4829081acd8d8e8557892a3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeeb4e495ee2fa1192e41dae4b1a82504afb617c314298822bad6a917a93bb0b = $this->env->getExtension("native_profiler");
        $__internal_aeeb4e495ee2fa1192e41dae4b1a82504afb617c314298822bad6a917a93bb0b->enter($__internal_aeeb4e495ee2fa1192e41dae4b1a82504afb617c314298822bad6a917a93bb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeeb4e495ee2fa1192e41dae4b1a82504afb617c314298822bad6a917a93bb0b->leave($__internal_aeeb4e495ee2fa1192e41dae4b1a82504afb617c314298822bad6a917a93bb0b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a47443146382e60c5404d499e95ee0e1fe8306abc31ab38338fa7ef51852ffa = $this->env->getExtension("native_profiler");
        $__internal_8a47443146382e60c5404d499e95ee0e1fe8306abc31ab38338fa7ef51852ffa->enter($__internal_8a47443146382e60c5404d499e95ee0e1fe8306abc31ab38338fa7ef51852ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_8a47443146382e60c5404d499e95ee0e1fe8306abc31ab38338fa7ef51852ffa->leave($__internal_8a47443146382e60c5404d499e95ee0e1fe8306abc31ab38338fa7ef51852ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Home{% endblock %}*/

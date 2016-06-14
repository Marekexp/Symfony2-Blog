<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8830fb44c98c45d0c6628537099b7a240df695fd1c11a65c570bf4f9633dffaf extends Twig_Template
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
        $__internal_5f5d6c27a6f2b580e912a53b071dec4953ded095dadd368a156411a6d48b5dae = $this->env->getExtension("native_profiler");
        $__internal_5f5d6c27a6f2b580e912a53b071dec4953ded095dadd368a156411a6d48b5dae->enter($__internal_5f5d6c27a6f2b580e912a53b071dec4953ded095dadd368a156411a6d48b5dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5f5d6c27a6f2b580e912a53b071dec4953ded095dadd368a156411a6d48b5dae->leave($__internal_5f5d6c27a6f2b580e912a53b071dec4953ded095dadd368a156411a6d48b5dae_prof);

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

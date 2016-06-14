<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_856ea0734d432565d6982cedcd31cf19e8d9911e39e185a97a3ea90250c77884 extends Twig_Template
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
        $__internal_654a1158608379680c1a615def5e0365a878bf7c6f8d9c3f86049ee5c865e39e = $this->env->getExtension("native_profiler");
        $__internal_654a1158608379680c1a615def5e0365a878bf7c6f8d9c3f86049ee5c865e39e->enter($__internal_654a1158608379680c1a615def5e0365a878bf7c6f8d9c3f86049ee5c865e39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_654a1158608379680c1a615def5e0365a878bf7c6f8d9c3f86049ee5c865e39e->leave($__internal_654a1158608379680c1a615def5e0365a878bf7c6f8d9c3f86049ee5c865e39e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

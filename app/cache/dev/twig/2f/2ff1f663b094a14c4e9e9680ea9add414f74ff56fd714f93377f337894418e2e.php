<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_89bb8d301d73b2d8caa9ed99416d03069079f1b89d4d1f0ad2fc7147278265e6 extends Twig_Template
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
        $__internal_719267cb378f1ae654d0ce37b513626c89c0128048553631d15e2b9202e7a8f5 = $this->env->getExtension("native_profiler");
        $__internal_719267cb378f1ae654d0ce37b513626c89c0128048553631d15e2b9202e7a8f5->enter($__internal_719267cb378f1ae654d0ce37b513626c89c0128048553631d15e2b9202e7a8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_719267cb378f1ae654d0ce37b513626c89c0128048553631d15e2b9202e7a8f5->leave($__internal_719267cb378f1ae654d0ce37b513626c89c0128048553631d15e2b9202e7a8f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

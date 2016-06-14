<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_941cda541102c6dd9e526304c9682c2b1df1107ebb388b65f5fa3f61d4d3759d extends Twig_Template
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
        $__internal_d751f6abfc4e68e00cbeaccd5cd2244a95c26c5d08dd4f81325fbcd98773bb77 = $this->env->getExtension("native_profiler");
        $__internal_d751f6abfc4e68e00cbeaccd5cd2244a95c26c5d08dd4f81325fbcd98773bb77->enter($__internal_d751f6abfc4e68e00cbeaccd5cd2244a95c26c5d08dd4f81325fbcd98773bb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d751f6abfc4e68e00cbeaccd5cd2244a95c26c5d08dd4f81325fbcd98773bb77->leave($__internal_d751f6abfc4e68e00cbeaccd5cd2244a95c26c5d08dd4f81325fbcd98773bb77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

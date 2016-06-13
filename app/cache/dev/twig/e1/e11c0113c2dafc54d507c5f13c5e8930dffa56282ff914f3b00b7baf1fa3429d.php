<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ffec59125998abb3b3ba6775b0e373932bc13a0d6894db4f9ba5496e915863b6 extends Twig_Template
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
        $__internal_53a6efb446c1969bd857db81ffc71233d4c263769bc87b57eda79c9ba94a8874 = $this->env->getExtension("native_profiler");
        $__internal_53a6efb446c1969bd857db81ffc71233d4c263769bc87b57eda79c9ba94a8874->enter($__internal_53a6efb446c1969bd857db81ffc71233d4c263769bc87b57eda79c9ba94a8874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_53a6efb446c1969bd857db81ffc71233d4c263769bc87b57eda79c9ba94a8874->leave($__internal_53a6efb446c1969bd857db81ffc71233d4c263769bc87b57eda79c9ba94a8874_prof);

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

<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fbedb152679bfc7d031918976dbd1325152ec51906d3eeb88317259e80753f2e extends Twig_Template
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
        $__internal_24aca1b99041f99782b8f3e52c2940278d103e204ec7fc456630ba0bd944f59c = $this->env->getExtension("native_profiler");
        $__internal_24aca1b99041f99782b8f3e52c2940278d103e204ec7fc456630ba0bd944f59c->enter($__internal_24aca1b99041f99782b8f3e52c2940278d103e204ec7fc456630ba0bd944f59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_24aca1b99041f99782b8f3e52c2940278d103e204ec7fc456630ba0bd944f59c->leave($__internal_24aca1b99041f99782b8f3e52c2940278d103e204ec7fc456630ba0bd944f59c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fdecf8299d715eec76dd44d59766ee46a6a093596aa00a07f2a27b96af4d1899 extends Twig_Template
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
        $__internal_26a3807f560a9327405495366d87407756b60455dc0e9936bd54c69dd93aa2cc = $this->env->getExtension("native_profiler");
        $__internal_26a3807f560a9327405495366d87407756b60455dc0e9936bd54c69dd93aa2cc->enter($__internal_26a3807f560a9327405495366d87407756b60455dc0e9936bd54c69dd93aa2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_26a3807f560a9327405495366d87407756b60455dc0e9936bd54c69dd93aa2cc->leave($__internal_26a3807f560a9327405495366d87407756b60455dc0e9936bd54c69dd93aa2cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b1441b7b689834f9b9a263387c894789892728eb0f80414a7268cb16e9396d7d extends Twig_Template
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
        $__internal_06708f508c8fa802996ed3257446d6983fff1f1b478e1ebc9f37c353b722a6f4 = $this->env->getExtension("native_profiler");
        $__internal_06708f508c8fa802996ed3257446d6983fff1f1b478e1ebc9f37c353b722a6f4->enter($__internal_06708f508c8fa802996ed3257446d6983fff1f1b478e1ebc9f37c353b722a6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_06708f508c8fa802996ed3257446d6983fff1f1b478e1ebc9f37c353b722a6f4->leave($__internal_06708f508c8fa802996ed3257446d6983fff1f1b478e1ebc9f37c353b722a6f4_prof);

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

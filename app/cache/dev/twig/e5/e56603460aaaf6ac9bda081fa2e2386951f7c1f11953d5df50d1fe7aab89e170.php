<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a1559fad262b7701a16a96147f4e4ab2fcf9b23f0e48a9839190d7538c967f4a extends Twig_Template
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
        $__internal_cef47254cc0f396aa2286d267c027920dba65fce709c57501f565651a0852139 = $this->env->getExtension("native_profiler");
        $__internal_cef47254cc0f396aa2286d267c027920dba65fce709c57501f565651a0852139->enter($__internal_cef47254cc0f396aa2286d267c027920dba65fce709c57501f565651a0852139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_cef47254cc0f396aa2286d267c027920dba65fce709c57501f565651a0852139->leave($__internal_cef47254cc0f396aa2286d267c027920dba65fce709c57501f565651a0852139_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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

<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_50420d77ab546815918c142a06399ac01c41fbb6f9fe120bc9608b1fb93b8ce1 extends Twig_Template
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
        $__internal_a2d1b3bbb5bb85a73ba2ccd54505a635282033e065e3135bf40beae42c7c90ed = $this->env->getExtension("native_profiler");
        $__internal_a2d1b3bbb5bb85a73ba2ccd54505a635282033e065e3135bf40beae42c7c90ed->enter($__internal_a2d1b3bbb5bb85a73ba2ccd54505a635282033e065e3135bf40beae42c7c90ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a2d1b3bbb5bb85a73ba2ccd54505a635282033e065e3135bf40beae42c7c90ed->leave($__internal_a2d1b3bbb5bb85a73ba2ccd54505a635282033e065e3135bf40beae42c7c90ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

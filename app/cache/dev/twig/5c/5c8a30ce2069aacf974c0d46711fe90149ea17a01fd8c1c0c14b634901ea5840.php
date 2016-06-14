<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a36936b5946e8ad2701a329a1deb7cae5d2e5aae306c25f426b6d2f249ad4fb0 extends Twig_Template
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
        $__internal_c393a7eeb849229f59e6b77e41705968a8590b40ce402ba494f02c580cb6f36e = $this->env->getExtension("native_profiler");
        $__internal_c393a7eeb849229f59e6b77e41705968a8590b40ce402ba494f02c580cb6f36e->enter($__internal_c393a7eeb849229f59e6b77e41705968a8590b40ce402ba494f02c580cb6f36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_c393a7eeb849229f59e6b77e41705968a8590b40ce402ba494f02c580cb6f36e->leave($__internal_c393a7eeb849229f59e6b77e41705968a8590b40ce402ba494f02c580cb6f36e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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

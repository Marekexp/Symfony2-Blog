<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f65e0b44c03e685e06894f7a87351473c5a17326f8ac2e76df9458c7f7e4505b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78d8d81d53cd104c360042ac43e1de28a0c7cdf11babd45c95711e9332ba146f = $this->env->getExtension("native_profiler");
        $__internal_78d8d81d53cd104c360042ac43e1de28a0c7cdf11babd45c95711e9332ba146f->enter($__internal_78d8d81d53cd104c360042ac43e1de28a0c7cdf11babd45c95711e9332ba146f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d8d81d53cd104c360042ac43e1de28a0c7cdf11babd45c95711e9332ba146f->leave($__internal_78d8d81d53cd104c360042ac43e1de28a0c7cdf11babd45c95711e9332ba146f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a82a2b4722f33f207a28f756c0aab0a616d18d6262e5f16589d3859efcc5b5f = $this->env->getExtension("native_profiler");
        $__internal_3a82a2b4722f33f207a28f756c0aab0a616d18d6262e5f16589d3859efcc5b5f->enter($__internal_3a82a2b4722f33f207a28f756c0aab0a616d18d6262e5f16589d3859efcc5b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3a82a2b4722f33f207a28f756c0aab0a616d18d6262e5f16589d3859efcc5b5f->leave($__internal_3a82a2b4722f33f207a28f756c0aab0a616d18d6262e5f16589d3859efcc5b5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f25c89c65fbc5a7825c5abbf5979e712e9cc2dfbe136e2c69a5a00892e7bb4 = $this->env->getExtension("native_profiler");
        $__internal_20f25c89c65fbc5a7825c5abbf5979e712e9cc2dfbe136e2c69a5a00892e7bb4->enter($__internal_20f25c89c65fbc5a7825c5abbf5979e712e9cc2dfbe136e2c69a5a00892e7bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_20f25c89c65fbc5a7825c5abbf5979e712e9cc2dfbe136e2c69a5a00892e7bb4->leave($__internal_20f25c89c65fbc5a7825c5abbf5979e712e9cc2dfbe136e2c69a5a00892e7bb4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

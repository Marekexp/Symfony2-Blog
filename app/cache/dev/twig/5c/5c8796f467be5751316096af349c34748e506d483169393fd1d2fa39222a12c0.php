<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3537ee5512793645170d52336cc19f6568c908006e8ee98d2fef4c735bba95fb extends Twig_Template
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
        $__internal_3bebfe3f103e2f957aa81a1cffe01fde4e9a6506efcc7d8a789432cdf4e31bd4 = $this->env->getExtension("native_profiler");
        $__internal_3bebfe3f103e2f957aa81a1cffe01fde4e9a6506efcc7d8a789432cdf4e31bd4->enter($__internal_3bebfe3f103e2f957aa81a1cffe01fde4e9a6506efcc7d8a789432cdf4e31bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bebfe3f103e2f957aa81a1cffe01fde4e9a6506efcc7d8a789432cdf4e31bd4->leave($__internal_3bebfe3f103e2f957aa81a1cffe01fde4e9a6506efcc7d8a789432cdf4e31bd4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1efff6768db1791383bf476a2dd7387e810b931eae50016e15e6c9e0017d4d81 = $this->env->getExtension("native_profiler");
        $__internal_1efff6768db1791383bf476a2dd7387e810b931eae50016e15e6c9e0017d4d81->enter($__internal_1efff6768db1791383bf476a2dd7387e810b931eae50016e15e6c9e0017d4d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1efff6768db1791383bf476a2dd7387e810b931eae50016e15e6c9e0017d4d81->leave($__internal_1efff6768db1791383bf476a2dd7387e810b931eae50016e15e6c9e0017d4d81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afd968b6505bbea9d746ba0390fee236e339619a91345a6e6dd88c515cbb8595 = $this->env->getExtension("native_profiler");
        $__internal_afd968b6505bbea9d746ba0390fee236e339619a91345a6e6dd88c515cbb8595->enter($__internal_afd968b6505bbea9d746ba0390fee236e339619a91345a6e6dd88c515cbb8595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afd968b6505bbea9d746ba0390fee236e339619a91345a6e6dd88c515cbb8595->leave($__internal_afd968b6505bbea9d746ba0390fee236e339619a91345a6e6dd88c515cbb8595_prof);

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

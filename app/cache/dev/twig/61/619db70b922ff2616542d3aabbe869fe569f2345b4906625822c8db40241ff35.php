<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b1d2c72b6eee74f4f740c5f68a48d258d647cc354c23c6f32dd3892906c6e903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_0fda4dca71f853681cbd2c4a5c80eba03599deb3be7d28e022101fd6ec383e38 = $this->env->getExtension("native_profiler");
        $__internal_0fda4dca71f853681cbd2c4a5c80eba03599deb3be7d28e022101fd6ec383e38->enter($__internal_0fda4dca71f853681cbd2c4a5c80eba03599deb3be7d28e022101fd6ec383e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fda4dca71f853681cbd2c4a5c80eba03599deb3be7d28e022101fd6ec383e38->leave($__internal_0fda4dca71f853681cbd2c4a5c80eba03599deb3be7d28e022101fd6ec383e38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef55547da814956f70f99dfd2e382fdef364674070765e7465f57be147fd6ec9 = $this->env->getExtension("native_profiler");
        $__internal_ef55547da814956f70f99dfd2e382fdef364674070765e7465f57be147fd6ec9->enter($__internal_ef55547da814956f70f99dfd2e382fdef364674070765e7465f57be147fd6ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef55547da814956f70f99dfd2e382fdef364674070765e7465f57be147fd6ec9->leave($__internal_ef55547da814956f70f99dfd2e382fdef364674070765e7465f57be147fd6ec9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f27cee9d653a6bd19ed38e926d74497ca989dc589ff7ff3a5f4a7a4b426d7fe = $this->env->getExtension("native_profiler");
        $__internal_8f27cee9d653a6bd19ed38e926d74497ca989dc589ff7ff3a5f4a7a4b426d7fe->enter($__internal_8f27cee9d653a6bd19ed38e926d74497ca989dc589ff7ff3a5f4a7a4b426d7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8f27cee9d653a6bd19ed38e926d74497ca989dc589ff7ff3a5f4a7a4b426d7fe->leave($__internal_8f27cee9d653a6bd19ed38e926d74497ca989dc589ff7ff3a5f4a7a4b426d7fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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

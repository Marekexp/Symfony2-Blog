<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6619fa705883ca344a52e56e423b59cb1aa1d3f2211c99be0249e3e4f36f9dbd extends Twig_Template
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
        $__internal_98b72e575f353846241481f10370ed58d0bd3b4d95d6c0be0b42b6b9c222778b = $this->env->getExtension("native_profiler");
        $__internal_98b72e575f353846241481f10370ed58d0bd3b4d95d6c0be0b42b6b9c222778b->enter($__internal_98b72e575f353846241481f10370ed58d0bd3b4d95d6c0be0b42b6b9c222778b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b72e575f353846241481f10370ed58d0bd3b4d95d6c0be0b42b6b9c222778b->leave($__internal_98b72e575f353846241481f10370ed58d0bd3b4d95d6c0be0b42b6b9c222778b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_643ae8b7254670c8dcbc89005307734af48bbd7afa862736406940ac647bbd02 = $this->env->getExtension("native_profiler");
        $__internal_643ae8b7254670c8dcbc89005307734af48bbd7afa862736406940ac647bbd02->enter($__internal_643ae8b7254670c8dcbc89005307734af48bbd7afa862736406940ac647bbd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_643ae8b7254670c8dcbc89005307734af48bbd7afa862736406940ac647bbd02->leave($__internal_643ae8b7254670c8dcbc89005307734af48bbd7afa862736406940ac647bbd02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eab862d631c0724de48b50e7f2a4f75080c8b74dd7422ea7e83b32034b53c1c = $this->env->getExtension("native_profiler");
        $__internal_2eab862d631c0724de48b50e7f2a4f75080c8b74dd7422ea7e83b32034b53c1c->enter($__internal_2eab862d631c0724de48b50e7f2a4f75080c8b74dd7422ea7e83b32034b53c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2eab862d631c0724de48b50e7f2a4f75080c8b74dd7422ea7e83b32034b53c1c->leave($__internal_2eab862d631c0724de48b50e7f2a4f75080c8b74dd7422ea7e83b32034b53c1c_prof);

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

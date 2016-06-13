<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_843470053a106f283b02ac6ae77fee1f5b1086ca08b5c44a954141ef03f0a876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a33c81638edf9d40c60dffe82b24f2da331295cca44794141bc0a3bfdc8474c = $this->env->getExtension("native_profiler");
        $__internal_4a33c81638edf9d40c60dffe82b24f2da331295cca44794141bc0a3bfdc8474c->enter($__internal_4a33c81638edf9d40c60dffe82b24f2da331295cca44794141bc0a3bfdc8474c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a33c81638edf9d40c60dffe82b24f2da331295cca44794141bc0a3bfdc8474c->leave($__internal_4a33c81638edf9d40c60dffe82b24f2da331295cca44794141bc0a3bfdc8474c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42b87a4ea53be3e5b36adee6939b68695ae34ef295a3e7ba3def7fc33ac75b68 = $this->env->getExtension("native_profiler");
        $__internal_42b87a4ea53be3e5b36adee6939b68695ae34ef295a3e7ba3def7fc33ac75b68->enter($__internal_42b87a4ea53be3e5b36adee6939b68695ae34ef295a3e7ba3def7fc33ac75b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42b87a4ea53be3e5b36adee6939b68695ae34ef295a3e7ba3def7fc33ac75b68->leave($__internal_42b87a4ea53be3e5b36adee6939b68695ae34ef295a3e7ba3def7fc33ac75b68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f77e25ea99b2c728d0ccb73d4078b72b49a6114e6f81d06dbf9a2763a79928a6 = $this->env->getExtension("native_profiler");
        $__internal_f77e25ea99b2c728d0ccb73d4078b72b49a6114e6f81d06dbf9a2763a79928a6->enter($__internal_f77e25ea99b2c728d0ccb73d4078b72b49a6114e6f81d06dbf9a2763a79928a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f77e25ea99b2c728d0ccb73d4078b72b49a6114e6f81d06dbf9a2763a79928a6->leave($__internal_f77e25ea99b2c728d0ccb73d4078b72b49a6114e6f81d06dbf9a2763a79928a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b748070bc407e26538b09ffb7cbb1c6acedc7150c7ccfc8299b2b7ca50957602 = $this->env->getExtension("native_profiler");
        $__internal_b748070bc407e26538b09ffb7cbb1c6acedc7150c7ccfc8299b2b7ca50957602->enter($__internal_b748070bc407e26538b09ffb7cbb1c6acedc7150c7ccfc8299b2b7ca50957602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b748070bc407e26538b09ffb7cbb1c6acedc7150c7ccfc8299b2b7ca50957602->leave($__internal_b748070bc407e26538b09ffb7cbb1c6acedc7150c7ccfc8299b2b7ca50957602_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

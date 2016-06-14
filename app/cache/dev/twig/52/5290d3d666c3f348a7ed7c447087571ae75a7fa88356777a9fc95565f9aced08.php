<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_96d083e3611769ca96a70609958aebae38142600dfe50a1439da2907f7bdee31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a59f42858ecf9fdb89d51b92db11867d45014ba04bee0d05e89a97d6450f0c5f = $this->env->getExtension("native_profiler");
        $__internal_a59f42858ecf9fdb89d51b92db11867d45014ba04bee0d05e89a97d6450f0c5f->enter($__internal_a59f42858ecf9fdb89d51b92db11867d45014ba04bee0d05e89a97d6450f0c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59f42858ecf9fdb89d51b92db11867d45014ba04bee0d05e89a97d6450f0c5f->leave($__internal_a59f42858ecf9fdb89d51b92db11867d45014ba04bee0d05e89a97d6450f0c5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd85f7eae8c5db4cd6b7af5bd809aca271c2cb3f1f00e3147645e69dee5dee1a = $this->env->getExtension("native_profiler");
        $__internal_dd85f7eae8c5db4cd6b7af5bd809aca271c2cb3f1f00e3147645e69dee5dee1a->enter($__internal_dd85f7eae8c5db4cd6b7af5bd809aca271c2cb3f1f00e3147645e69dee5dee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd85f7eae8c5db4cd6b7af5bd809aca271c2cb3f1f00e3147645e69dee5dee1a->leave($__internal_dd85f7eae8c5db4cd6b7af5bd809aca271c2cb3f1f00e3147645e69dee5dee1a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4b8ad03e9174857cc3ff489ef7ba66e56e867dcc622df7f2b68393ac9b8d3e8 = $this->env->getExtension("native_profiler");
        $__internal_b4b8ad03e9174857cc3ff489ef7ba66e56e867dcc622df7f2b68393ac9b8d3e8->enter($__internal_b4b8ad03e9174857cc3ff489ef7ba66e56e867dcc622df7f2b68393ac9b8d3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4b8ad03e9174857cc3ff489ef7ba66e56e867dcc622df7f2b68393ac9b8d3e8->leave($__internal_b4b8ad03e9174857cc3ff489ef7ba66e56e867dcc622df7f2b68393ac9b8d3e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dc0b8d86ed0255a24757978c3701ab7135d1aefe417c2d6f2e2e6e1b0650f4f = $this->env->getExtension("native_profiler");
        $__internal_3dc0b8d86ed0255a24757978c3701ab7135d1aefe417c2d6f2e2e6e1b0650f4f->enter($__internal_3dc0b8d86ed0255a24757978c3701ab7135d1aefe417c2d6f2e2e6e1b0650f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3dc0b8d86ed0255a24757978c3701ab7135d1aefe417c2d6f2e2e6e1b0650f4f->leave($__internal_3dc0b8d86ed0255a24757978c3701ab7135d1aefe417c2d6f2e2e6e1b0650f4f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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

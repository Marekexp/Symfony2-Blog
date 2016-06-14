<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6a948aabbfe400593201c1052dc724e9687a1ddf1cd2f1c8cb3d2ba95994465b extends Twig_Template
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
        $__internal_99e8a5aebfc21a9177caa0bc96f6120e7a1e3f8cd89815ddf01311379790f468 = $this->env->getExtension("native_profiler");
        $__internal_99e8a5aebfc21a9177caa0bc96f6120e7a1e3f8cd89815ddf01311379790f468->enter($__internal_99e8a5aebfc21a9177caa0bc96f6120e7a1e3f8cd89815ddf01311379790f468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e8a5aebfc21a9177caa0bc96f6120e7a1e3f8cd89815ddf01311379790f468->leave($__internal_99e8a5aebfc21a9177caa0bc96f6120e7a1e3f8cd89815ddf01311379790f468_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62910fe90a2428caa3c419a2185821c0e7aa3306f7319c4a99e5f52faaa90064 = $this->env->getExtension("native_profiler");
        $__internal_62910fe90a2428caa3c419a2185821c0e7aa3306f7319c4a99e5f52faaa90064->enter($__internal_62910fe90a2428caa3c419a2185821c0e7aa3306f7319c4a99e5f52faaa90064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62910fe90a2428caa3c419a2185821c0e7aa3306f7319c4a99e5f52faaa90064->leave($__internal_62910fe90a2428caa3c419a2185821c0e7aa3306f7319c4a99e5f52faaa90064_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_391b506824c4179aaca6622503eb82fd1341f9ad925e9a6fcb39ece3a49be288 = $this->env->getExtension("native_profiler");
        $__internal_391b506824c4179aaca6622503eb82fd1341f9ad925e9a6fcb39ece3a49be288->enter($__internal_391b506824c4179aaca6622503eb82fd1341f9ad925e9a6fcb39ece3a49be288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_391b506824c4179aaca6622503eb82fd1341f9ad925e9a6fcb39ece3a49be288->leave($__internal_391b506824c4179aaca6622503eb82fd1341f9ad925e9a6fcb39ece3a49be288_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a0375f678de9be3e940b8171a61497bcf30029ac189e2597e84d4a91112dac2 = $this->env->getExtension("native_profiler");
        $__internal_0a0375f678de9be3e940b8171a61497bcf30029ac189e2597e84d4a91112dac2->enter($__internal_0a0375f678de9be3e940b8171a61497bcf30029ac189e2597e84d4a91112dac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a0375f678de9be3e940b8171a61497bcf30029ac189e2597e84d4a91112dac2->leave($__internal_0a0375f678de9be3e940b8171a61497bcf30029ac189e2597e84d4a91112dac2_prof);

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

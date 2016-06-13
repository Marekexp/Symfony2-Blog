<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f27680a2d54ea604b0309ef76f39ae2732775bb4e96445d557a75b255a8cfa6e extends Twig_Template
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
        $__internal_9d4fcb365d41a1d4af855f5e15671f014132db282391522395a37f990edcb28f = $this->env->getExtension("native_profiler");
        $__internal_9d4fcb365d41a1d4af855f5e15671f014132db282391522395a37f990edcb28f->enter($__internal_9d4fcb365d41a1d4af855f5e15671f014132db282391522395a37f990edcb28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4fcb365d41a1d4af855f5e15671f014132db282391522395a37f990edcb28f->leave($__internal_9d4fcb365d41a1d4af855f5e15671f014132db282391522395a37f990edcb28f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4591085ce18c8c5feee041dbecb1692be8be1c1429100519fa36d6337ed6bc5e = $this->env->getExtension("native_profiler");
        $__internal_4591085ce18c8c5feee041dbecb1692be8be1c1429100519fa36d6337ed6bc5e->enter($__internal_4591085ce18c8c5feee041dbecb1692be8be1c1429100519fa36d6337ed6bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4591085ce18c8c5feee041dbecb1692be8be1c1429100519fa36d6337ed6bc5e->leave($__internal_4591085ce18c8c5feee041dbecb1692be8be1c1429100519fa36d6337ed6bc5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ac9381a826004130ee1724517eb918ea99b6cbfbd1891fd474f85b50a50bc77 = $this->env->getExtension("native_profiler");
        $__internal_0ac9381a826004130ee1724517eb918ea99b6cbfbd1891fd474f85b50a50bc77->enter($__internal_0ac9381a826004130ee1724517eb918ea99b6cbfbd1891fd474f85b50a50bc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ac9381a826004130ee1724517eb918ea99b6cbfbd1891fd474f85b50a50bc77->leave($__internal_0ac9381a826004130ee1724517eb918ea99b6cbfbd1891fd474f85b50a50bc77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_296ec2c9abb636f6ddf9eac7091071baaa3ed68cfe4d29381796d96164e6966e = $this->env->getExtension("native_profiler");
        $__internal_296ec2c9abb636f6ddf9eac7091071baaa3ed68cfe4d29381796d96164e6966e->enter($__internal_296ec2c9abb636f6ddf9eac7091071baaa3ed68cfe4d29381796d96164e6966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_296ec2c9abb636f6ddf9eac7091071baaa3ed68cfe4d29381796d96164e6966e->leave($__internal_296ec2c9abb636f6ddf9eac7091071baaa3ed68cfe4d29381796d96164e6966e_prof);

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

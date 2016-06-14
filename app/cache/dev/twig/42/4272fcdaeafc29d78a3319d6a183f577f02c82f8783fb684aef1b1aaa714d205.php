<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e9a82f631e492dadf04be0f4f084af66a1f176acc1ed4bdbccf7464b808b35e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9cb0b6e556abacf3578c01aed638b1a36221138ab23a9606a72e4e0d1eb55bb4 = $this->env->getExtension("native_profiler");
        $__internal_9cb0b6e556abacf3578c01aed638b1a36221138ab23a9606a72e4e0d1eb55bb4->enter($__internal_9cb0b6e556abacf3578c01aed638b1a36221138ab23a9606a72e4e0d1eb55bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb0b6e556abacf3578c01aed638b1a36221138ab23a9606a72e4e0d1eb55bb4->leave($__internal_9cb0b6e556abacf3578c01aed638b1a36221138ab23a9606a72e4e0d1eb55bb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_922974214d4d79e027b823e433ba9277d9d5ca66b90ac593aa602bebf9d5c7b4 = $this->env->getExtension("native_profiler");
        $__internal_922974214d4d79e027b823e433ba9277d9d5ca66b90ac593aa602bebf9d5c7b4->enter($__internal_922974214d4d79e027b823e433ba9277d9d5ca66b90ac593aa602bebf9d5c7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_922974214d4d79e027b823e433ba9277d9d5ca66b90ac593aa602bebf9d5c7b4->leave($__internal_922974214d4d79e027b823e433ba9277d9d5ca66b90ac593aa602bebf9d5c7b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c49cce54866505797e1af6fa628e09cce2dfe06d3287edda31cabb8120f577b = $this->env->getExtension("native_profiler");
        $__internal_5c49cce54866505797e1af6fa628e09cce2dfe06d3287edda31cabb8120f577b->enter($__internal_5c49cce54866505797e1af6fa628e09cce2dfe06d3287edda31cabb8120f577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c49cce54866505797e1af6fa628e09cce2dfe06d3287edda31cabb8120f577b->leave($__internal_5c49cce54866505797e1af6fa628e09cce2dfe06d3287edda31cabb8120f577b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6de8c173b613209c82ce86fef6db8a3f20102b4897381e611afdc54b247b2c = $this->env->getExtension("native_profiler");
        $__internal_3d6de8c173b613209c82ce86fef6db8a3f20102b4897381e611afdc54b247b2c->enter($__internal_3d6de8c173b613209c82ce86fef6db8a3f20102b4897381e611afdc54b247b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3d6de8c173b613209c82ce86fef6db8a3f20102b4897381e611afdc54b247b2c->leave($__internal_3d6de8c173b613209c82ce86fef6db8a3f20102b4897381e611afdc54b247b2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

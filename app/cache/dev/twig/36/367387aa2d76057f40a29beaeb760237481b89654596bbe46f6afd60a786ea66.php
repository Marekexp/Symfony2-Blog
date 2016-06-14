<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_25a684fda57b2779991a0699e34dceada5b04f3304d903f018a4d4bc9ea930a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f8274e84a2897a7b22a42631cfdac22080643d575b30f73bca3f6c4356f8aaa7 = $this->env->getExtension("native_profiler");
        $__internal_f8274e84a2897a7b22a42631cfdac22080643d575b30f73bca3f6c4356f8aaa7->enter($__internal_f8274e84a2897a7b22a42631cfdac22080643d575b30f73bca3f6c4356f8aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8274e84a2897a7b22a42631cfdac22080643d575b30f73bca3f6c4356f8aaa7->leave($__internal_f8274e84a2897a7b22a42631cfdac22080643d575b30f73bca3f6c4356f8aaa7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d13dd273ac2a1adbe141e8f97ee22e243d34cb95a3a8dd6ea82c365114179d90 = $this->env->getExtension("native_profiler");
        $__internal_d13dd273ac2a1adbe141e8f97ee22e243d34cb95a3a8dd6ea82c365114179d90->enter($__internal_d13dd273ac2a1adbe141e8f97ee22e243d34cb95a3a8dd6ea82c365114179d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d13dd273ac2a1adbe141e8f97ee22e243d34cb95a3a8dd6ea82c365114179d90->leave($__internal_d13dd273ac2a1adbe141e8f97ee22e243d34cb95a3a8dd6ea82c365114179d90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_166618b41a5a550e5ad7416d02d948c615e171567752a7bc4fbcd1c5beb10541 = $this->env->getExtension("native_profiler");
        $__internal_166618b41a5a550e5ad7416d02d948c615e171567752a7bc4fbcd1c5beb10541->enter($__internal_166618b41a5a550e5ad7416d02d948c615e171567752a7bc4fbcd1c5beb10541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_166618b41a5a550e5ad7416d02d948c615e171567752a7bc4fbcd1c5beb10541->leave($__internal_166618b41a5a550e5ad7416d02d948c615e171567752a7bc4fbcd1c5beb10541_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b299ed297fd39f6b715c7eb755eca5005866295dd64136d8a68ec86c7b7e2c = $this->env->getExtension("native_profiler");
        $__internal_d7b299ed297fd39f6b715c7eb755eca5005866295dd64136d8a68ec86c7b7e2c->enter($__internal_d7b299ed297fd39f6b715c7eb755eca5005866295dd64136d8a68ec86c7b7e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7b299ed297fd39f6b715c7eb755eca5005866295dd64136d8a68ec86c7b7e2c->leave($__internal_d7b299ed297fd39f6b715c7eb755eca5005866295dd64136d8a68ec86c7b7e2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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

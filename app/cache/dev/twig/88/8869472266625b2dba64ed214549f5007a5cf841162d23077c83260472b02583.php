<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa99d88c361e52aaee373ade6663d691279c9b626648c22ab006e19f9761fe15 extends Twig_Template
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
        $__internal_3c61a046abc165023ab1f954cc277f545557566c25c773054eef9eae71c7674b = $this->env->getExtension("native_profiler");
        $__internal_3c61a046abc165023ab1f954cc277f545557566c25c773054eef9eae71c7674b->enter($__internal_3c61a046abc165023ab1f954cc277f545557566c25c773054eef9eae71c7674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c61a046abc165023ab1f954cc277f545557566c25c773054eef9eae71c7674b->leave($__internal_3c61a046abc165023ab1f954cc277f545557566c25c773054eef9eae71c7674b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fc52a7440b5f2997106ddb002400c8a893302d645ee204ef8798efb7d33b9fb = $this->env->getExtension("native_profiler");
        $__internal_1fc52a7440b5f2997106ddb002400c8a893302d645ee204ef8798efb7d33b9fb->enter($__internal_1fc52a7440b5f2997106ddb002400c8a893302d645ee204ef8798efb7d33b9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1fc52a7440b5f2997106ddb002400c8a893302d645ee204ef8798efb7d33b9fb->leave($__internal_1fc52a7440b5f2997106ddb002400c8a893302d645ee204ef8798efb7d33b9fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82d02d956ed154b064ec6e2edfd5dbd8173e1a49347438a3c9efc915c76e0f35 = $this->env->getExtension("native_profiler");
        $__internal_82d02d956ed154b064ec6e2edfd5dbd8173e1a49347438a3c9efc915c76e0f35->enter($__internal_82d02d956ed154b064ec6e2edfd5dbd8173e1a49347438a3c9efc915c76e0f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82d02d956ed154b064ec6e2edfd5dbd8173e1a49347438a3c9efc915c76e0f35->leave($__internal_82d02d956ed154b064ec6e2edfd5dbd8173e1a49347438a3c9efc915c76e0f35_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89e1d9c3b9bb361d499a209690ccd10bb8617eaa03da4277fcc0c65504e5af9 = $this->env->getExtension("native_profiler");
        $__internal_d89e1d9c3b9bb361d499a209690ccd10bb8617eaa03da4277fcc0c65504e5af9->enter($__internal_d89e1d9c3b9bb361d499a209690ccd10bb8617eaa03da4277fcc0c65504e5af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d89e1d9c3b9bb361d499a209690ccd10bb8617eaa03da4277fcc0c65504e5af9->leave($__internal_d89e1d9c3b9bb361d499a209690ccd10bb8617eaa03da4277fcc0c65504e5af9_prof);

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

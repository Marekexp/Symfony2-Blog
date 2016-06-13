<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_40e2339d72e7253d826945e2b5671cb81b4559db35127141b49a85fb13d5afe3 extends Twig_Template
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
        $__internal_2a6e812120fe3f0b71eb99fbaea734997ab4288392cc50ad036e20a154dcd716 = $this->env->getExtension("native_profiler");
        $__internal_2a6e812120fe3f0b71eb99fbaea734997ab4288392cc50ad036e20a154dcd716->enter($__internal_2a6e812120fe3f0b71eb99fbaea734997ab4288392cc50ad036e20a154dcd716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6e812120fe3f0b71eb99fbaea734997ab4288392cc50ad036e20a154dcd716->leave($__internal_2a6e812120fe3f0b71eb99fbaea734997ab4288392cc50ad036e20a154dcd716_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe119028941ff535296a5cb7c9a555e097841ef8248ad8093cf3d8f3e8649f60 = $this->env->getExtension("native_profiler");
        $__internal_fe119028941ff535296a5cb7c9a555e097841ef8248ad8093cf3d8f3e8649f60->enter($__internal_fe119028941ff535296a5cb7c9a555e097841ef8248ad8093cf3d8f3e8649f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe119028941ff535296a5cb7c9a555e097841ef8248ad8093cf3d8f3e8649f60->leave($__internal_fe119028941ff535296a5cb7c9a555e097841ef8248ad8093cf3d8f3e8649f60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8e15ba96e1ada20dc746c3c7e8c8bc7df0e26ac146e5e1554ee70f985bbd1fc = $this->env->getExtension("native_profiler");
        $__internal_c8e15ba96e1ada20dc746c3c7e8c8bc7df0e26ac146e5e1554ee70f985bbd1fc->enter($__internal_c8e15ba96e1ada20dc746c3c7e8c8bc7df0e26ac146e5e1554ee70f985bbd1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8e15ba96e1ada20dc746c3c7e8c8bc7df0e26ac146e5e1554ee70f985bbd1fc->leave($__internal_c8e15ba96e1ada20dc746c3c7e8c8bc7df0e26ac146e5e1554ee70f985bbd1fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf816ff775bc8fb1ec75122a2ca9bebc2346c0c2294ba4f514d223f42485738 = $this->env->getExtension("native_profiler");
        $__internal_ecf816ff775bc8fb1ec75122a2ca9bebc2346c0c2294ba4f514d223f42485738->enter($__internal_ecf816ff775bc8fb1ec75122a2ca9bebc2346c0c2294ba4f514d223f42485738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ecf816ff775bc8fb1ec75122a2ca9bebc2346c0c2294ba4f514d223f42485738->leave($__internal_ecf816ff775bc8fb1ec75122a2ca9bebc2346c0c2294ba4f514d223f42485738_prof);

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

<?php

/* ::base.html.twig */
class __TwigTemplate_eb895239c2dd57c72f50ea19867e54130cd86b3453fb48e4a41855c268785c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c38143539d430ef66049c18be816ceccb31a63aa56527eaf9c4744159ae7600b = $this->env->getExtension("native_profiler");
        $__internal_c38143539d430ef66049c18be816ceccb31a63aa56527eaf9c4744159ae7600b->enter($__internal_c38143539d430ef66049c18be816ceccb31a63aa56527eaf9c4744159ae7600b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c38143539d430ef66049c18be816ceccb31a63aa56527eaf9c4744159ae7600b->leave($__internal_c38143539d430ef66049c18be816ceccb31a63aa56527eaf9c4744159ae7600b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4390677c98ca4142259dfc6e8cf3fa96da605419b9200f46746d7e85a2e221ca = $this->env->getExtension("native_profiler");
        $__internal_4390677c98ca4142259dfc6e8cf3fa96da605419b9200f46746d7e85a2e221ca->enter($__internal_4390677c98ca4142259dfc6e8cf3fa96da605419b9200f46746d7e85a2e221ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4390677c98ca4142259dfc6e8cf3fa96da605419b9200f46746d7e85a2e221ca->leave($__internal_4390677c98ca4142259dfc6e8cf3fa96da605419b9200f46746d7e85a2e221ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_220acbbbb5cc2bb310d5afa1720bf97a7862856425052dfdc51ac1cb7cc9625f = $this->env->getExtension("native_profiler");
        $__internal_220acbbbb5cc2bb310d5afa1720bf97a7862856425052dfdc51ac1cb7cc9625f->enter($__internal_220acbbbb5cc2bb310d5afa1720bf97a7862856425052dfdc51ac1cb7cc9625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_220acbbbb5cc2bb310d5afa1720bf97a7862856425052dfdc51ac1cb7cc9625f->leave($__internal_220acbbbb5cc2bb310d5afa1720bf97a7862856425052dfdc51ac1cb7cc9625f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad1e421335c612c1ab1d7f40a15386750e64643b56888cc70d6cc7980e64d42 = $this->env->getExtension("native_profiler");
        $__internal_1ad1e421335c612c1ab1d7f40a15386750e64643b56888cc70d6cc7980e64d42->enter($__internal_1ad1e421335c612c1ab1d7f40a15386750e64643b56888cc70d6cc7980e64d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ad1e421335c612c1ab1d7f40a15386750e64643b56888cc70d6cc7980e64d42->leave($__internal_1ad1e421335c612c1ab1d7f40a15386750e64643b56888cc70d6cc7980e64d42_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f344976671d0a45852114a76a54fa0e29d29aea5a1f3befd1bc0d93ea357506f = $this->env->getExtension("native_profiler");
        $__internal_f344976671d0a45852114a76a54fa0e29d29aea5a1f3befd1bc0d93ea357506f->enter($__internal_f344976671d0a45852114a76a54fa0e29d29aea5a1f3befd1bc0d93ea357506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f344976671d0a45852114a76a54fa0e29d29aea5a1f3befd1bc0d93ea357506f->leave($__internal_f344976671d0a45852114a76a54fa0e29d29aea5a1f3befd1bc0d93ea357506f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

<?php

/* ::base.html.twig */
class __TwigTemplate_3977e8bc0f026c4a4fc8c283a999009c02f81b42b4af5d5e022b46cdaf44330e extends Twig_Template
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
        $__internal_984352dfc614a1f2322e92e97f9117bef95c80444bfcad1aecc9f1e85cce6f06 = $this->env->getExtension("native_profiler");
        $__internal_984352dfc614a1f2322e92e97f9117bef95c80444bfcad1aecc9f1e85cce6f06->enter($__internal_984352dfc614a1f2322e92e97f9117bef95c80444bfcad1aecc9f1e85cce6f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_984352dfc614a1f2322e92e97f9117bef95c80444bfcad1aecc9f1e85cce6f06->leave($__internal_984352dfc614a1f2322e92e97f9117bef95c80444bfcad1aecc9f1e85cce6f06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_564ed7f85f519f7de27d118948fd957125db52b74a399bf974964e0807eeb297 = $this->env->getExtension("native_profiler");
        $__internal_564ed7f85f519f7de27d118948fd957125db52b74a399bf974964e0807eeb297->enter($__internal_564ed7f85f519f7de27d118948fd957125db52b74a399bf974964e0807eeb297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_564ed7f85f519f7de27d118948fd957125db52b74a399bf974964e0807eeb297->leave($__internal_564ed7f85f519f7de27d118948fd957125db52b74a399bf974964e0807eeb297_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa9067f1a925307c298d7e0db2e1e4410881d44a4bae5c59f016cbb9c4a827e3 = $this->env->getExtension("native_profiler");
        $__internal_fa9067f1a925307c298d7e0db2e1e4410881d44a4bae5c59f016cbb9c4a827e3->enter($__internal_fa9067f1a925307c298d7e0db2e1e4410881d44a4bae5c59f016cbb9c4a827e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa9067f1a925307c298d7e0db2e1e4410881d44a4bae5c59f016cbb9c4a827e3->leave($__internal_fa9067f1a925307c298d7e0db2e1e4410881d44a4bae5c59f016cbb9c4a827e3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbec504a56b20541f006bbbef2403ebcb33558f2f3644fae6377a477c0fb9d72 = $this->env->getExtension("native_profiler");
        $__internal_fbec504a56b20541f006bbbef2403ebcb33558f2f3644fae6377a477c0fb9d72->enter($__internal_fbec504a56b20541f006bbbef2403ebcb33558f2f3644fae6377a477c0fb9d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fbec504a56b20541f006bbbef2403ebcb33558f2f3644fae6377a477c0fb9d72->leave($__internal_fbec504a56b20541f006bbbef2403ebcb33558f2f3644fae6377a477c0fb9d72_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30a55b938d27cc26447777c581f885f217b7b5460bc075f6f42006fb08814bca = $this->env->getExtension("native_profiler");
        $__internal_30a55b938d27cc26447777c581f885f217b7b5460bc075f6f42006fb08814bca->enter($__internal_30a55b938d27cc26447777c581f885f217b7b5460bc075f6f42006fb08814bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30a55b938d27cc26447777c581f885f217b7b5460bc075f6f42006fb08814bca->leave($__internal_30a55b938d27cc26447777c581f885f217b7b5460bc075f6f42006fb08814bca_prof);

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

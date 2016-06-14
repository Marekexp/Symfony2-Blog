<?php

/* base.html.twig */
class __TwigTemplate_85973dac51472d82005ff50bacc83d1d31dc129768db0c7f55ebb6e34e569bdf extends Twig_Template
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
        $__internal_1cd57ad1cc9c2f4a46692e2fde4f1d6f0e20f53f9244ff484379c860819cbdfa = $this->env->getExtension("native_profiler");
        $__internal_1cd57ad1cc9c2f4a46692e2fde4f1d6f0e20f53f9244ff484379c860819cbdfa->enter($__internal_1cd57ad1cc9c2f4a46692e2fde4f1d6f0e20f53f9244ff484379c860819cbdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1cd57ad1cc9c2f4a46692e2fde4f1d6f0e20f53f9244ff484379c860819cbdfa->leave($__internal_1cd57ad1cc9c2f4a46692e2fde4f1d6f0e20f53f9244ff484379c860819cbdfa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe1f7871976cf753deff0a211a1503cd4757f934570a2036daf1146082ca308 = $this->env->getExtension("native_profiler");
        $__internal_1fe1f7871976cf753deff0a211a1503cd4757f934570a2036daf1146082ca308->enter($__internal_1fe1f7871976cf753deff0a211a1503cd4757f934570a2036daf1146082ca308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1fe1f7871976cf753deff0a211a1503cd4757f934570a2036daf1146082ca308->leave($__internal_1fe1f7871976cf753deff0a211a1503cd4757f934570a2036daf1146082ca308_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca348fa7811fbf94c3b8a19ab6644c1208d18368580ba0764bc4a43660a88eb3 = $this->env->getExtension("native_profiler");
        $__internal_ca348fa7811fbf94c3b8a19ab6644c1208d18368580ba0764bc4a43660a88eb3->enter($__internal_ca348fa7811fbf94c3b8a19ab6644c1208d18368580ba0764bc4a43660a88eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ca348fa7811fbf94c3b8a19ab6644c1208d18368580ba0764bc4a43660a88eb3->leave($__internal_ca348fa7811fbf94c3b8a19ab6644c1208d18368580ba0764bc4a43660a88eb3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_903ec30d81c85928ece5da6422e363cd74245b5948e079ebcb681fd4ae81ac75 = $this->env->getExtension("native_profiler");
        $__internal_903ec30d81c85928ece5da6422e363cd74245b5948e079ebcb681fd4ae81ac75->enter($__internal_903ec30d81c85928ece5da6422e363cd74245b5948e079ebcb681fd4ae81ac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_903ec30d81c85928ece5da6422e363cd74245b5948e079ebcb681fd4ae81ac75->leave($__internal_903ec30d81c85928ece5da6422e363cd74245b5948e079ebcb681fd4ae81ac75_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3daf4b69678949e584ded4cda1b30448a9b530e71c1bedb0c58a96d6efefb8d4 = $this->env->getExtension("native_profiler");
        $__internal_3daf4b69678949e584ded4cda1b30448a9b530e71c1bedb0c58a96d6efefb8d4->enter($__internal_3daf4b69678949e584ded4cda1b30448a9b530e71c1bedb0c58a96d6efefb8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3daf4b69678949e584ded4cda1b30448a9b530e71c1bedb0c58a96d6efefb8d4->leave($__internal_3daf4b69678949e584ded4cda1b30448a9b530e71c1bedb0c58a96d6efefb8d4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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

<?php

/* base.html.twig */
class __TwigTemplate_db6c09106b11f35d78b84cb3092b570f6aca3600a11358b7d3f1a1eb555834fa extends Twig_Template
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
        $__internal_426f37e5b5e5412ada6a5be8b49dcf623e9c213d676b9730204b54084c0b1e70 = $this->env->getExtension("native_profiler");
        $__internal_426f37e5b5e5412ada6a5be8b49dcf623e9c213d676b9730204b54084c0b1e70->enter($__internal_426f37e5b5e5412ada6a5be8b49dcf623e9c213d676b9730204b54084c0b1e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_426f37e5b5e5412ada6a5be8b49dcf623e9c213d676b9730204b54084c0b1e70->leave($__internal_426f37e5b5e5412ada6a5be8b49dcf623e9c213d676b9730204b54084c0b1e70_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b12de0d499fad7bc859d7ed3ea171325eeb1cc3e27866d4f48a49f40ba11d96 = $this->env->getExtension("native_profiler");
        $__internal_9b12de0d499fad7bc859d7ed3ea171325eeb1cc3e27866d4f48a49f40ba11d96->enter($__internal_9b12de0d499fad7bc859d7ed3ea171325eeb1cc3e27866d4f48a49f40ba11d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b12de0d499fad7bc859d7ed3ea171325eeb1cc3e27866d4f48a49f40ba11d96->leave($__internal_9b12de0d499fad7bc859d7ed3ea171325eeb1cc3e27866d4f48a49f40ba11d96_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_edd0b8044dc7350813cb5700c28280f1df673e6bca32a314d83ccbc75867a2d9 = $this->env->getExtension("native_profiler");
        $__internal_edd0b8044dc7350813cb5700c28280f1df673e6bca32a314d83ccbc75867a2d9->enter($__internal_edd0b8044dc7350813cb5700c28280f1df673e6bca32a314d83ccbc75867a2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_edd0b8044dc7350813cb5700c28280f1df673e6bca32a314d83ccbc75867a2d9->leave($__internal_edd0b8044dc7350813cb5700c28280f1df673e6bca32a314d83ccbc75867a2d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78f7e2a0b9ef8bd07c8341114442224a21792117de076b2484ccb4b187329f22 = $this->env->getExtension("native_profiler");
        $__internal_78f7e2a0b9ef8bd07c8341114442224a21792117de076b2484ccb4b187329f22->enter($__internal_78f7e2a0b9ef8bd07c8341114442224a21792117de076b2484ccb4b187329f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78f7e2a0b9ef8bd07c8341114442224a21792117de076b2484ccb4b187329f22->leave($__internal_78f7e2a0b9ef8bd07c8341114442224a21792117de076b2484ccb4b187329f22_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85fa877188ad20f470dd15b7a7de6d69703a6ca2f1ba987ae522d9533edc0a83 = $this->env->getExtension("native_profiler");
        $__internal_85fa877188ad20f470dd15b7a7de6d69703a6ca2f1ba987ae522d9533edc0a83->enter($__internal_85fa877188ad20f470dd15b7a7de6d69703a6ca2f1ba987ae522d9533edc0a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_85fa877188ad20f470dd15b7a7de6d69703a6ca2f1ba987ae522d9533edc0a83->leave($__internal_85fa877188ad20f470dd15b7a7de6d69703a6ca2f1ba987ae522d9533edc0a83_prof);

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

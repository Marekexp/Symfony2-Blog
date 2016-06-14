<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bac2840e631b2cf9ab3f0d4df1e568489202b5677831e54010eb2edfa1c1f93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a188c60eeba43bd1581ae964e9466a14e9ca88b6c906fe0cf3b939d88bdf922 = $this->env->getExtension("native_profiler");
        $__internal_2a188c60eeba43bd1581ae964e9466a14e9ca88b6c906fe0cf3b939d88bdf922->enter($__internal_2a188c60eeba43bd1581ae964e9466a14e9ca88b6c906fe0cf3b939d88bdf922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2a188c60eeba43bd1581ae964e9466a14e9ca88b6c906fe0cf3b939d88bdf922->leave($__internal_2a188c60eeba43bd1581ae964e9466a14e9ca88b6c906fe0cf3b939d88bdf922_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

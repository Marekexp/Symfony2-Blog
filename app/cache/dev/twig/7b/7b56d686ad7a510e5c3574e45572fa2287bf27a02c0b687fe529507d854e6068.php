<?php

/* BlogBundle:Default:login.html.twig */
class __TwigTemplate_cd0156671eadb48c1a35278150ff19d7c2ca2a74b16972ee08589c0ad5cbe27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268594d66ffafa6d50c024c15594df479de6768adc150853f77614ea88a91703 = $this->env->getExtension("native_profiler");
        $__internal_268594d66ffafa6d50c024c15594df479de6768adc150853f77614ea88a91703->enter($__internal_268594d66ffafa6d50c024c15594df479de6768adc150853f77614ea88a91703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268594d66ffafa6d50c024c15594df479de6768adc150853f77614ea88a91703->leave($__internal_268594d66ffafa6d50c024c15594df479de6768adc150853f77614ea88a91703_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_30e09ad0c60a3c953246a790bdf1e61d033f536da44a54d43886c852887dd399 = $this->env->getExtension("native_profiler");
        $__internal_30e09ad0c60a3c953246a790bdf1e61d033f536da44a54d43886c852887dd399->enter($__internal_30e09ad0c60a3c953246a790bdf1e61d033f536da44a54d43886c852887dd399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <head>
        <meta charset=\"utf-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Marek's Blog</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
    </head>
";
        
        $__internal_30e09ad0c60a3c953246a790bdf1e61d033f536da44a54d43886c852887dd399->leave($__internal_30e09ad0c60a3c953246a790bdf1e61d033f536da44a54d43886c852887dd399_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_1d983d34c3282636e811f5163e41ac8f75b5c5e99609a0fae02aa2866d83eaf3 = $this->env->getExtension("native_profiler");
        $__internal_1d983d34c3282636e811f5163e41ac8f75b5c5e99609a0fae02aa2866d83eaf3->enter($__internal_1d983d34c3282636e811f5163e41ac8f75b5c5e99609a0fae02aa2866d83eaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_1d983d34c3282636e811f5163e41ac8f75b5c5e99609a0fae02aa2866d83eaf3->leave($__internal_1d983d34c3282636e811f5163e41ac8f75b5c5e99609a0fae02aa2866d83eaf3_prof);

    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2e89bf0b6544018555241ba3508e249a056a3b5be0ebfb7846977d17302aca2e = $this->env->getExtension("native_profiler");
        $__internal_2e89bf0b6544018555241ba3508e249a056a3b5be0ebfb7846977d17302aca2e->enter($__internal_2e89bf0b6544018555241ba3508e249a056a3b5be0ebfb7846977d17302aca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_2e89bf0b6544018555241ba3508e249a056a3b5be0ebfb7846977d17302aca2e->leave($__internal_2e89bf0b6544018555241ba3508e249a056a3b5be0ebfb7846977d17302aca2e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_06c25b7fa10e902faee71671543a006313f6bd0c03c32bd5727ba28a52f4433b = $this->env->getExtension("native_profiler");
        $__internal_06c25b7fa10e902faee71671543a006313f6bd0c03c32bd5727ba28a52f4433b->enter($__internal_06c25b7fa10e902faee71671543a006313f6bd0c03c32bd5727ba28a52f4433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 16
        echo "    <div class=\"container vertical-center\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please Log In</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form role=\"form\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" id=\"username\" placeholder=\"Username\" name=\"_username\"
                                       type=\"text\"
                                       autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" id=\"password\" placeholder=\"Password\" name=\"_password\"
                                       type=\"password\"
                                       value=\"\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_06c25b7fa10e902faee71671543a006313f6bd0c03c32bd5727ba28a52f4433b->leave($__internal_06c25b7fa10e902faee71671543a006313f6bd0c03c32bd5727ba28a52f4433b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  97 => 16,  91 => 14,  88 => 13,  82 => 12,  71 => 11,  48 => 6,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block header %}*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Login{% endblock %} - Marek's Blog</title>*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/*     </head>*/
/* {% endblock %}*/
/* {% block navbar %}{% endblock %}*/
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div class="container vertical-center">*/
/*         <div class="row">*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <div class="login-panel panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title">Please Log In</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form role="form" action="{{ path('login_check') }}" method="post">*/
/*                             <div class="form-group">*/
/*                                 <input class="form-control" id="username" placeholder="Username" name="_username"*/
/*                                        type="text"*/
/*                                        autofocus>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <input class="form-control" id="password" placeholder="Password" name="_password"*/
/*                                        type="password"*/
/*                                        value="">*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

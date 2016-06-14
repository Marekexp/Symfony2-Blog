<?php

/* @Blog/Default/login.html.twig */
class __TwigTemplate_e78bf3bbdba2800712c02ea32aec5919f371886b407cc5409e654b73a2fe3323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "@Blog/Default/login.html.twig", 1);
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
        $__internal_e510f5225c07652eda6cdd0d80a72aa47e64c5513d8fbd3adf6eaf5db6abc571 = $this->env->getExtension("native_profiler");
        $__internal_e510f5225c07652eda6cdd0d80a72aa47e64c5513d8fbd3adf6eaf5db6abc571->enter($__internal_e510f5225c07652eda6cdd0d80a72aa47e64c5513d8fbd3adf6eaf5db6abc571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e510f5225c07652eda6cdd0d80a72aa47e64c5513d8fbd3adf6eaf5db6abc571->leave($__internal_e510f5225c07652eda6cdd0d80a72aa47e64c5513d8fbd3adf6eaf5db6abc571_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_81c0f0b27b54b64336aa2d9c5c69c8b77489bdd90261162c3a5f0d607c52764e = $this->env->getExtension("native_profiler");
        $__internal_81c0f0b27b54b64336aa2d9c5c69c8b77489bdd90261162c3a5f0d607c52764e->enter($__internal_81c0f0b27b54b64336aa2d9c5c69c8b77489bdd90261162c3a5f0d607c52764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_81c0f0b27b54b64336aa2d9c5c69c8b77489bdd90261162c3a5f0d607c52764e->leave($__internal_81c0f0b27b54b64336aa2d9c5c69c8b77489bdd90261162c3a5f0d607c52764e_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_137f38f2be1890d2c4c14e36b30b2b85c01962f4e2348cb15f6fbd5945b872cd = $this->env->getExtension("native_profiler");
        $__internal_137f38f2be1890d2c4c14e36b30b2b85c01962f4e2348cb15f6fbd5945b872cd->enter($__internal_137f38f2be1890d2c4c14e36b30b2b85c01962f4e2348cb15f6fbd5945b872cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_137f38f2be1890d2c4c14e36b30b2b85c01962f4e2348cb15f6fbd5945b872cd->leave($__internal_137f38f2be1890d2c4c14e36b30b2b85c01962f4e2348cb15f6fbd5945b872cd_prof);

    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_9fdd67f0325efd7c0d2921bcc1dd0902b65ca7ef63ae8ab62c00fc4a4a3d22b8 = $this->env->getExtension("native_profiler");
        $__internal_9fdd67f0325efd7c0d2921bcc1dd0902b65ca7ef63ae8ab62c00fc4a4a3d22b8->enter($__internal_9fdd67f0325efd7c0d2921bcc1dd0902b65ca7ef63ae8ab62c00fc4a4a3d22b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_9fdd67f0325efd7c0d2921bcc1dd0902b65ca7ef63ae8ab62c00fc4a4a3d22b8->leave($__internal_9fdd67f0325efd7c0d2921bcc1dd0902b65ca7ef63ae8ab62c00fc4a4a3d22b8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_da64b13e26feea61b7734e8ea396a7bf79f74ff2bda0f98bc52b189e7d119c16 = $this->env->getExtension("native_profiler");
        $__internal_da64b13e26feea61b7734e8ea396a7bf79f74ff2bda0f98bc52b189e7d119c16->enter($__internal_da64b13e26feea61b7734e8ea396a7bf79f74ff2bda0f98bc52b189e7d119c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da64b13e26feea61b7734e8ea396a7bf79f74ff2bda0f98bc52b189e7d119c16->leave($__internal_da64b13e26feea61b7734e8ea396a7bf79f74ff2bda0f98bc52b189e7d119c16_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/login.html.twig";
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

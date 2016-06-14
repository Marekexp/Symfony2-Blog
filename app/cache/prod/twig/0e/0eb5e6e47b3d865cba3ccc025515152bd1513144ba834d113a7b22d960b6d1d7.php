<?php

/* @Blog/Default/login.html.twig */
class __TwigTemplate_d0167ebd3b7dd1af00d2017d1438236b873caebf475466d17aafc16fc1c983e1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
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
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 11
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        return array (  80 => 24,  70 => 16,  64 => 14,  61 => 13,  58 => 12,  53 => 11,  39 => 6,  34 => 3,  31 => 2,  11 => 1,);
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

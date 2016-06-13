<?php

/* @Blog/Default/base.html.twig */
class __TwigTemplate_1e3274f0acfcae31609bb5ea346603decffb2e582d099509aad4452d23efc2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'posts' => array($this, 'block_posts'),
            'rightside' => array($this, 'block_rightside'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 18
        $this->displayBlock('navbar', $context, $blocks);
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "</div>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - Marek's Blog</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Marek's Blog</h1>
            <p>Where everything is made up and the points don't matter</p>
        </div>
    </div>
</head>
";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        // line 19
        echo "<body>
<nav class=\"navbar\">
    <div class=\"container\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Home</a></li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=>About
                    <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Author</a></li>
                    <li><a href=\"#\">Contact</a></li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Categories
                    <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 37
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cat_show", array("cat" => $this->getAttribute($context["cat"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </ul>
            </li>
        </ul>
    </div>
</nav>
";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"container-fluid\" id=\"content\">
            ";
        // line 50
        $this->displayBlock('posts', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
        ";
        // line 53
        $this->displayBlock('rightside', $context, $blocks);
        // line 77
        echo "        </div>
    </div>
";
    }

    // line 50
    public function block_posts($context, array $blocks = array())
    {
        $this->loadTemplate("BlogBundle:Default:posts.html.twig", "@Blog/Default/base.html.twig", 50)->display($context);
    }

    // line 53
    public function block_rightside($context, array $blocks = array())
    {
        // line 54
        echo "        <div class=\"col-md-4\">
            <div class=\"well\">
                <h4>Search on Blog</h4>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">
                                <span class=\"glyphicon glyphicon-search\"></span>
                        </button>
                        </span>
                </div>
               </div>
            ";
        // line 66
        $this->displayBlock('sidebar', $context, $blocks);
        // line 75
        echo "            </div>
        ";
    }

    // line 66
    public function block_sidebar($context, array $blocks = array())
    {
        // line 67
        echo "                ";
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 68
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" class=\"btn btn-lg btn-success\"><span class=\"glyphicon glyphicon-user\"></span> Login</a>
                ";
        }
        // line 70
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 71
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("newpost");
            echo "\" class=\"btn btn-lg btn-info\"><span class=\"glyphicon glyphicon-plus\"></span> Add post.</a>
                    <a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-lg btn-danger\"><span class=\"glyphicon glyphicon-off\"></span> Logout</a>
                ";
        }
        // line 74
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Blog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  193 => 72,  188 => 71,  185 => 70,  179 => 68,  176 => 67,  173 => 66,  168 => 75,  166 => 66,  152 => 54,  149 => 53,  143 => 50,  137 => 77,  135 => 53,  131 => 51,  129 => 50,  123 => 46,  120 => 45,  111 => 39,  100 => 37,  96 => 36,  80 => 23,  74 => 19,  71 => 18,  52 => 7,  47 => 4,  44 => 3,  36 => 80,  34 => 45,  32 => 18,  30 => 3,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* {% block header %}*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*     <title>{% block title %}{% endblock %} - Marek's Blog</title>*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Marek's Blog</h1>*/
/*             <p>Where everything is made up and the points don't matter</p>*/
/*         </div>*/
/*     </div>*/
/* </head>*/
/* {% endblock %}*/
/* {% block navbar %}*/
/* <body>*/
/* <nav class="navbar">*/
/*     <div class="container">*/
/*         <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="{{ path('blog_homepage') }}">Home</a></li>*/
/*             <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" href=>About*/
/*                     <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="#">Author</a></li>*/
/*                     <li><a href="#">Contact</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="dropdown">*/
/*                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories*/
/*                     <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     {% for cat in categories %}*/
/*                     <li><a href="{{ path('cat_show', { cat: cat.name }) }}">{{ cat.name }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <div class="container-fluid" id="content">*/
/*             {% block posts %}{% include 'BlogBundle:Default:posts.html.twig' %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/*         {% block rightside %}*/
/*         <div class="col-md-4">*/
/*             <div class="well">*/
/*                 <h4>Search on Blog</h4>*/
/*                 <div class="input-group">*/
/*                     <input type="text" class="form-control">*/
/*                         <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button">*/
/*                                 <span class="glyphicon glyphicon-search"></span>*/
/*                         </button>*/
/*                         </span>*/
/*                 </div>*/
/*                </div>*/
/*             {% block sidebar %}*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') == false %}*/
/*                     <a href="{{ path('login') }}" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-user"></span> Login</a>*/
/*                 {% endif %}*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     <a href="{{ path('newpost') }}" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-plus"></span> Add post.</a>*/
/*                     <a href="{{ path('logout') }}" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-off"></span> Logout</a>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*             </div>*/
/*         {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* </div>*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/* <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/

<?php

/* @Blog/Default/base.html.twig */
class __TwigTemplate_899ce82e330bed3cd23331d281cec299bce4707b04362185cbc0e0a919c3e2ce extends Twig_Template
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
        $__internal_2e18491b93e062feb71e2d723847289410e51cf29c8702b254d1300705207164 = $this->env->getExtension("native_profiler");
        $__internal_2e18491b93e062feb71e2d723847289410e51cf29c8702b254d1300705207164->enter($__internal_2e18491b93e062feb71e2d723847289410e51cf29c8702b254d1300705207164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/base.html.twig"));

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
        
        $__internal_2e18491b93e062feb71e2d723847289410e51cf29c8702b254d1300705207164->leave($__internal_2e18491b93e062feb71e2d723847289410e51cf29c8702b254d1300705207164_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ba6ee1f8c537ea7747ffaf49733bae13530b6fbac5504660e829f76b7819e5e1 = $this->env->getExtension("native_profiler");
        $__internal_ba6ee1f8c537ea7747ffaf49733bae13530b6fbac5504660e829f76b7819e5e1->enter($__internal_ba6ee1f8c537ea7747ffaf49733bae13530b6fbac5504660e829f76b7819e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ba6ee1f8c537ea7747ffaf49733bae13530b6fbac5504660e829f76b7819e5e1->leave($__internal_ba6ee1f8c537ea7747ffaf49733bae13530b6fbac5504660e829f76b7819e5e1_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_4bfc09c189533eb74b3f3a2f62f3528b618dc4a522f8f24cf7c2e6e99cae974c = $this->env->getExtension("native_profiler");
        $__internal_4bfc09c189533eb74b3f3a2f62f3528b618dc4a522f8f24cf7c2e6e99cae974c->enter($__internal_4bfc09c189533eb74b3f3a2f62f3528b618dc4a522f8f24cf7c2e6e99cae974c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4bfc09c189533eb74b3f3a2f62f3528b618dc4a522f8f24cf7c2e6e99cae974c->leave($__internal_4bfc09c189533eb74b3f3a2f62f3528b618dc4a522f8f24cf7c2e6e99cae974c_prof);

    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_4993702069f8b45a9f92f608da2784272bf12fabc64a0cfb9fe78448cc56b1e3 = $this->env->getExtension("native_profiler");
        $__internal_4993702069f8b45a9f92f608da2784272bf12fabc64a0cfb9fe78448cc56b1e3->enter($__internal_4993702069f8b45a9f92f608da2784272bf12fabc64a0cfb9fe78448cc56b1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        
        $__internal_4993702069f8b45a9f92f608da2784272bf12fabc64a0cfb9fe78448cc56b1e3->leave($__internal_4993702069f8b45a9f92f608da2784272bf12fabc64a0cfb9fe78448cc56b1e3_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd0df0c1e77be23bb6b1444ea67c40d89d034a2ffd4ffb2a723e0fd4faa3aeaf = $this->env->getExtension("native_profiler");
        $__internal_bd0df0c1e77be23bb6b1444ea67c40d89d034a2ffd4ffb2a723e0fd4faa3aeaf->enter($__internal_bd0df0c1e77be23bb6b1444ea67c40d89d034a2ffd4ffb2a723e0fd4faa3aeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd0df0c1e77be23bb6b1444ea67c40d89d034a2ffd4ffb2a723e0fd4faa3aeaf->leave($__internal_bd0df0c1e77be23bb6b1444ea67c40d89d034a2ffd4ffb2a723e0fd4faa3aeaf_prof);

    }

    // line 50
    public function block_posts($context, array $blocks = array())
    {
        $__internal_af5bdb3de7296a4d9fedf520a021fdcab66c1751006aaa7d394e02cecd796c6d = $this->env->getExtension("native_profiler");
        $__internal_af5bdb3de7296a4d9fedf520a021fdcab66c1751006aaa7d394e02cecd796c6d->enter($__internal_af5bdb3de7296a4d9fedf520a021fdcab66c1751006aaa7d394e02cecd796c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        $this->loadTemplate("BlogBundle:Default:posts.html.twig", "@Blog/Default/base.html.twig", 50)->display($context);
        
        $__internal_af5bdb3de7296a4d9fedf520a021fdcab66c1751006aaa7d394e02cecd796c6d->leave($__internal_af5bdb3de7296a4d9fedf520a021fdcab66c1751006aaa7d394e02cecd796c6d_prof);

    }

    // line 53
    public function block_rightside($context, array $blocks = array())
    {
        $__internal_b02a01c747de600507ebbdcb9a6e411ec4d0d479a651f4f4544cacd44f6f975d = $this->env->getExtension("native_profiler");
        $__internal_b02a01c747de600507ebbdcb9a6e411ec4d0d479a651f4f4544cacd44f6f975d->enter($__internal_b02a01c747de600507ebbdcb9a6e411ec4d0d479a651f4f4544cacd44f6f975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightside"));

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
        
        $__internal_b02a01c747de600507ebbdcb9a6e411ec4d0d479a651f4f4544cacd44f6f975d->leave($__internal_b02a01c747de600507ebbdcb9a6e411ec4d0d479a651f4f4544cacd44f6f975d_prof);

    }

    // line 66
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e8d8cf2029c7f35e154d88baeeedc1e9140150d73fb34fa96feb430b79136fb4 = $this->env->getExtension("native_profiler");
        $__internal_e8d8cf2029c7f35e154d88baeeedc1e9140150d73fb34fa96feb430b79136fb4->enter($__internal_e8d8cf2029c7f35e154d88baeeedc1e9140150d73fb34fa96feb430b79136fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_e8d8cf2029c7f35e154d88baeeedc1e9140150d73fb34fa96feb430b79136fb4->leave($__internal_e8d8cf2029c7f35e154d88baeeedc1e9140150d73fb34fa96feb430b79136fb4_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 74,  238 => 72,  233 => 71,  230 => 70,  224 => 68,  221 => 67,  215 => 66,  207 => 75,  205 => 66,  191 => 54,  185 => 53,  173 => 50,  164 => 77,  162 => 53,  158 => 51,  156 => 50,  150 => 46,  144 => 45,  132 => 39,  121 => 37,  117 => 36,  101 => 23,  95 => 19,  89 => 18,  61 => 7,  56 => 4,  50 => 3,  39 => 80,  37 => 45,  35 => 18,  33 => 3,  29 => 1,);
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

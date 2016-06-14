<?php

/* BlogBundle:Default:showpost.html.twig */
class __TwigTemplate_bdbce8e1fe06a0ac569615b0fda96e7ec8ba11924a6e22e6bfcc7473a2697e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:showpost.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'posts' => array($this, 'block_posts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3f2cddfb0fc10d23cbf44d9387178e1ca1d60545003dd8b99f0a0614d32e92d = $this->env->getExtension("native_profiler");
        $__internal_d3f2cddfb0fc10d23cbf44d9387178e1ca1d60545003dd8b99f0a0614d32e92d->enter($__internal_d3f2cddfb0fc10d23cbf44d9387178e1ca1d60545003dd8b99f0a0614d32e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:showpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f2cddfb0fc10d23cbf44d9387178e1ca1d60545003dd8b99f0a0614d32e92d->leave($__internal_d3f2cddfb0fc10d23cbf44d9387178e1ca1d60545003dd8b99f0a0614d32e92d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1965a1bc9a1766591c621f23980b3e6c849fc4e0f5d88212f9f3da0f1946fee7 = $this->env->getExtension("native_profiler");
        $__internal_1965a1bc9a1766591c621f23980b3e6c849fc4e0f5d88212f9f3da0f1946fee7->enter($__internal_1965a1bc9a1766591c621f23980b3e6c849fc4e0f5d88212f9f3da0f1946fee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show post";
        
        $__internal_1965a1bc9a1766591c621f23980b3e6c849fc4e0f5d88212f9f3da0f1946fee7->leave($__internal_1965a1bc9a1766591c621f23980b3e6c849fc4e0f5d88212f9f3da0f1946fee7_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_b33ed83579fdaf8cbc4d149fd376651ee704839f8232de8296025c54d17c04a2 = $this->env->getExtension("native_profiler");
        $__internal_b33ed83579fdaf8cbc4d149fd376651ee704839f8232de8296025c54d17c04a2->enter($__internal_b33ed83579fdaf8cbc4d149fd376651ee704839f8232de8296025c54d17c04a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "    <h2> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "</h2>
    <p class=\"small\">Author: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "username", array()), "html", null, true);
        echo "</p>
    <p class=\"small\">Added: ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "added", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "postcontent", array()), "html", null, true);
        echo "</p>
    ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 10
                echo "            <div class=\"pull-right\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("postedit", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()))), "html", null, true);
                echo "\"
                                       class=\"btn btn-lg btn-warning\"><span
                            class=\"glyphicon glyphicon-retweet\"></span> Edit post</a></div>
        ";
            }
            // line 14
            echo "    ";
        }
        
        $__internal_b33ed83579fdaf8cbc4d149fd376651ee704839f8232de8296025c54d17c04a2->leave($__internal_b33ed83579fdaf8cbc4d149fd376651ee704839f8232de8296025c54d17c04a2_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:showpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  75 => 10,  72 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Show post{% endblock %}*/
/* {% block posts %}*/
/*     <h2> {{ entry.title }}</h2>*/
/*     <p class="small">Author: {{ entry.user.username }}</p>*/
/*     <p class="small">Added: {{ entry.added|date('d-m-Y H:i:s') }}</p>*/
/*     <p>{{ entry.postcontent }}</p>*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {% if entry.user.username == app.user.username or is_granted('ROLE_ADMIN') %}*/
/*             <div class="pull-right"><a href="{{ path('postedit', { id: entry.id }) }}"*/
/*                                        class="btn btn-lg btn-warning"><span*/
/*                             class="glyphicon glyphicon-retweet"></span> Edit post</a></div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

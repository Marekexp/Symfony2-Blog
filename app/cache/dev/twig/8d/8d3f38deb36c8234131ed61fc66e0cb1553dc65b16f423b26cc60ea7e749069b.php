<?php

/* BlogBundle:Default:addpost.html.twig */
class __TwigTemplate_a89ac0c32aa9baa3a0d81824c1041b4efd116c966ef69de4456d2f0ffec4f4d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle:Default:base.html.twig", "BlogBundle:Default:addpost.html.twig", 1);
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
        $__internal_9c031d34a0ec0efb5ec2513d03f129e4363cad327c098ec26717642532af5b8f = $this->env->getExtension("native_profiler");
        $__internal_9c031d34a0ec0efb5ec2513d03f129e4363cad327c098ec26717642532af5b8f->enter($__internal_9c031d34a0ec0efb5ec2513d03f129e4363cad327c098ec26717642532af5b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:addpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c031d34a0ec0efb5ec2513d03f129e4363cad327c098ec26717642532af5b8f->leave($__internal_9c031d34a0ec0efb5ec2513d03f129e4363cad327c098ec26717642532af5b8f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e27f0dedba95885ba2ed539fb014d7e7c85275e769295351ed22ec6ee7f0574 = $this->env->getExtension("native_profiler");
        $__internal_2e27f0dedba95885ba2ed539fb014d7e7c85275e769295351ed22ec6ee7f0574->enter($__internal_2e27f0dedba95885ba2ed539fb014d7e7c85275e769295351ed22ec6ee7f0574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add post";
        
        $__internal_2e27f0dedba95885ba2ed539fb014d7e7c85275e769295351ed22ec6ee7f0574->leave($__internal_2e27f0dedba95885ba2ed539fb014d7e7c85275e769295351ed22ec6ee7f0574_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_a93795ab802639bea456c3e36945ce818bc7f59b1d56555b0d19f1ea59811e18 = $this->env->getExtension("native_profiler");
        $__internal_a93795ab802639bea456c3e36945ce818bc7f59b1d56555b0d19f1ea59811e18->enter($__internal_a93795ab802639bea456c3e36945ce818bc7f59b1d56555b0d19f1ea59811e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

        // line 4
        echo "        <h1>New Post</h1>

        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Add post.\" class=\"btn btn-primary\" />
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a93795ab802639bea456c3e36945ce818bc7f59b1d56555b0d19f1ea59811e18->leave($__internal_a93795ab802639bea456c3e36945ce818bc7f59b1d56555b0d19f1ea59811e18_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:addpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'BlogBundle:Default:base.html.twig' %}*/
/* {% block title %}Add post{% endblock %}*/
/* {% block posts %}*/
/*         <h1>New Post</h1>*/
/* */
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Add post." class="btn btn-primary" />*/
/*         {{ form_end(form) }}*/
/* */
/* {% endblock %}*/

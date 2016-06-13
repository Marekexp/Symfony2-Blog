<?php

/* BlogBundle:Default:addpost.html.twig */
class __TwigTemplate_259d174c6df3d51f6c19bab78c4ffb439887b92226bc2cac1a48c35d9b819ff2 extends Twig_Template
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
        $__internal_6dbc7e3dcfd6f2a3f4a0fb397d338336b55dec217c9ae7adb1b048244b596703 = $this->env->getExtension("native_profiler");
        $__internal_6dbc7e3dcfd6f2a3f4a0fb397d338336b55dec217c9ae7adb1b048244b596703->enter($__internal_6dbc7e3dcfd6f2a3f4a0fb397d338336b55dec217c9ae7adb1b048244b596703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:addpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbc7e3dcfd6f2a3f4a0fb397d338336b55dec217c9ae7adb1b048244b596703->leave($__internal_6dbc7e3dcfd6f2a3f4a0fb397d338336b55dec217c9ae7adb1b048244b596703_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_35036a271e9c9459684564fe1b61bfcd470bf5be9af5b13ffb3eaca00af0a574 = $this->env->getExtension("native_profiler");
        $__internal_35036a271e9c9459684564fe1b61bfcd470bf5be9af5b13ffb3eaca00af0a574->enter($__internal_35036a271e9c9459684564fe1b61bfcd470bf5be9af5b13ffb3eaca00af0a574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add post";
        
        $__internal_35036a271e9c9459684564fe1b61bfcd470bf5be9af5b13ffb3eaca00af0a574->leave($__internal_35036a271e9c9459684564fe1b61bfcd470bf5be9af5b13ffb3eaca00af0a574_prof);

    }

    // line 3
    public function block_posts($context, array $blocks = array())
    {
        $__internal_d63ad24acddb216f9099694b47f1ee46c3a57fa8aff8f6b705f963f6f378853d = $this->env->getExtension("native_profiler");
        $__internal_d63ad24acddb216f9099694b47f1ee46c3a57fa8aff8f6b705f963f6f378853d->enter($__internal_d63ad24acddb216f9099694b47f1ee46c3a57fa8aff8f6b705f963f6f378853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "posts"));

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
        
        $__internal_d63ad24acddb216f9099694b47f1ee46c3a57fa8aff8f6b705f963f6f378853d->leave($__internal_d63ad24acddb216f9099694b47f1ee46c3a57fa8aff8f6b705f963f6f378853d_prof);

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

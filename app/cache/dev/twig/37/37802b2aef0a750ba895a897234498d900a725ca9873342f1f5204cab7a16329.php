<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_eb76409ca4644a362fd22d4c1be49c4f8d1dd9b798c8017023cd74e65d99ac42 extends Twig_Template
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
        $__internal_c4354a3fe979fdf21c32de65264757d06316f81e576af88f8ad0a93e6bde62f4 = $this->env->getExtension("native_profiler");
        $__internal_c4354a3fe979fdf21c32de65264757d06316f81e576af88f8ad0a93e6bde62f4->enter($__internal_c4354a3fe979fdf21c32de65264757d06316f81e576af88f8ad0a93e6bde62f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c4354a3fe979fdf21c32de65264757d06316f81e576af88f8ad0a93e6bde62f4->leave($__internal_c4354a3fe979fdf21c32de65264757d06316f81e576af88f8ad0a93e6bde62f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

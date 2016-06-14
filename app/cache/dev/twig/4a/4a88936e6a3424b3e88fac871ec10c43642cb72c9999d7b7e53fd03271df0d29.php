<?php

/* @Blog/Default/posts.html.twig */
class __TwigTemplate_a1577e9223bf8a11de75bc80b0ffe8a8ab65ec2fae1ea7797487a5086bf974e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'adminpanel' => array($this, 'block_adminpanel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c273947c1acb50159377ff1fa614ed98ae76e5b8dae102f4d118c95450a761e = $this->env->getExtension("native_profiler");
        $__internal_0c273947c1acb50159377ff1fa614ed98ae76e5b8dae102f4d118c95450a761e->enter($__internal_0c273947c1acb50159377ff1fa614ed98ae76e5b8dae102f4d118c95450a761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/posts.html.twig"));

        // line 1
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_post", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">
                <h2> ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</h2>
            </a>
        <p class=\"small\">Author: ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
        <p class=\"small\">Added: ";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "added", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</p>
        <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "postcontent", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        ";
        $this->displayBlock('adminpanel', $context, $blocks);
        
        $__internal_0c273947c1acb50159377ff1fa614ed98ae76e5b8dae102f4d118c95450a761e->leave($__internal_0c273947c1acb50159377ff1fa614ed98ae76e5b8dae102f4d118c95450a761e_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_79aac372819b255b8ffb8de21649d4f83470e4fcb94c25bb6549d35ecad1f303 = $this->env->getExtension("native_profiler");
        $__internal_79aac372819b255b8ffb8de21649d4f83470e4fcb94c25bb6549d35ecad1f303->enter($__internal_79aac372819b255b8ffb8de21649d4f83470e4fcb94c25bb6549d35ecad1f303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_79aac372819b255b8ffb8de21649d4f83470e4fcb94c25bb6549d35ecad1f303->leave($__internal_79aac372819b255b8ffb8de21649d4f83470e4fcb94c25bb6549d35ecad1f303_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  46 => 7,  42 => 6,  38 => 5,  33 => 3,  28 => 2,  23 => 1,);
    }
}
/*         {% for entry in posts %}*/
/*             <a href="{{ path('show_post', { id: entry.id }) }}">*/
/*                 <h2> {{ entry.title }}</h2>*/
/*             </a>*/
/*         <p class="small">Author: {{ entry.user.username }}</p>*/
/*         <p class="small">Added: {{ entry.added|date('d-m-Y H:i:s') }}</p>*/
/*         <p>{{ entry.postcontent }}</p>*/
/*         {% endfor %}*/
/*         {% block adminpanel %}{% endblock %}*/
/* */

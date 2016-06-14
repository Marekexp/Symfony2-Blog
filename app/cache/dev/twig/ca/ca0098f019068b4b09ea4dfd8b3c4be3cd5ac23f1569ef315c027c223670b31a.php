<?php

/* BlogBundle:Default:posts.html.twig */
class __TwigTemplate_48ccc463531d39da79eaef003cb251e446f23552445ef3148817151d9b377f02 extends Twig_Template
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
        $__internal_3866191da04f53c4f42fb0165fdebc5387c3aeab0a23b36fd319555df592a8ab = $this->env->getExtension("native_profiler");
        $__internal_3866191da04f53c4f42fb0165fdebc5387c3aeab0a23b36fd319555df592a8ab->enter($__internal_3866191da04f53c4f42fb0165fdebc5387c3aeab0a23b36fd319555df592a8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:posts.html.twig"));

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
        
        $__internal_3866191da04f53c4f42fb0165fdebc5387c3aeab0a23b36fd319555df592a8ab->leave($__internal_3866191da04f53c4f42fb0165fdebc5387c3aeab0a23b36fd319555df592a8ab_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_9c54c2cc00146e09e73c05993419772deecd942fd5aa75eb7bcd9a78bf8729ee = $this->env->getExtension("native_profiler");
        $__internal_9c54c2cc00146e09e73c05993419772deecd942fd5aa75eb7bcd9a78bf8729ee->enter($__internal_9c54c2cc00146e09e73c05993419772deecd942fd5aa75eb7bcd9a78bf8729ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_9c54c2cc00146e09e73c05993419772deecd942fd5aa75eb7bcd9a78bf8729ee->leave($__internal_9c54c2cc00146e09e73c05993419772deecd942fd5aa75eb7bcd9a78bf8729ee_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:posts.html.twig";
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

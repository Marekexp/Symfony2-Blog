<?php

/* @Blog/Default/posts.html.twig */
class __TwigTemplate_914ad799c9b9ab642a5a2f69c8aad2df98a1518aecb3151e7b33bc4eb41e41e4 extends Twig_Template
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
        // line 1
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
    }

    public function block_adminpanel($context, array $blocks = array())
    {
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
        return array (  51 => 9,  43 => 7,  39 => 6,  35 => 5,  30 => 3,  25 => 2,  20 => 1,);
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

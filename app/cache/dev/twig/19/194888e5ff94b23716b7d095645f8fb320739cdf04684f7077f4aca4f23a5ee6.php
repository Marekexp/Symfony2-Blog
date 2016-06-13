<?php

/* @Blog/Default/posts.html.twig */
class __TwigTemplate_8b7a6bbaddb40cd981d14cce68ce7334b416da70633bd50e1ecbd8e4dec50782 extends Twig_Template
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
        $__internal_83b195ba78ccf8b4b93aa36070604c5f2826ad62dc9c8145eae8804f8f6499c4 = $this->env->getExtension("native_profiler");
        $__internal_83b195ba78ccf8b4b93aa36070604c5f2826ad62dc9c8145eae8804f8f6499c4->enter($__internal_83b195ba78ccf8b4b93aa36070604c5f2826ad62dc9c8145eae8804f8f6499c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/posts.html.twig"));

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
        
        $__internal_83b195ba78ccf8b4b93aa36070604c5f2826ad62dc9c8145eae8804f8f6499c4->leave($__internal_83b195ba78ccf8b4b93aa36070604c5f2826ad62dc9c8145eae8804f8f6499c4_prof);

    }

    public function block_adminpanel($context, array $blocks = array())
    {
        $__internal_5626dfc02ad726b999c9aedfb7075f0593551dda70fa0b954eb457797014b7ac = $this->env->getExtension("native_profiler");
        $__internal_5626dfc02ad726b999c9aedfb7075f0593551dda70fa0b954eb457797014b7ac->enter($__internal_5626dfc02ad726b999c9aedfb7075f0593551dda70fa0b954eb457797014b7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminpanel"));

        
        $__internal_5626dfc02ad726b999c9aedfb7075f0593551dda70fa0b954eb457797014b7ac->leave($__internal_5626dfc02ad726b999c9aedfb7075f0593551dda70fa0b954eb457797014b7ac_prof);

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

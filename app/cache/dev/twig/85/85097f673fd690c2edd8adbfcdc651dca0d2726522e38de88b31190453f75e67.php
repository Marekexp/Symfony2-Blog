<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e0388a568cb1a1dec2c50e061a4b3f8c2bcf160abfd52dbd2b088bd945ebdfc extends Twig_Template
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
        $__internal_3dadede8cd1871ff10775188924497f8b7402f97fd31d665767ed7a65969d42e = $this->env->getExtension("native_profiler");
        $__internal_3dadede8cd1871ff10775188924497f8b7402f97fd31d665767ed7a65969d42e->enter($__internal_3dadede8cd1871ff10775188924497f8b7402f97fd31d665767ed7a65969d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3dadede8cd1871ff10775188924497f8b7402f97fd31d665767ed7a65969d42e->leave($__internal_3dadede8cd1871ff10775188924497f8b7402f97fd31d665767ed7a65969d42e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

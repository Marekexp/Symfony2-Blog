<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_094b1625170a5b308f57aee3a59bbe2e0d7db41a8f2cbff7847e26b07abd395d extends Twig_Template
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
        $__internal_62a1cfb1d364a5ce73af6b6823af84c1d6a4c79ee9795e23123c315946a76371 = $this->env->getExtension("native_profiler");
        $__internal_62a1cfb1d364a5ce73af6b6823af84c1d6a4c79ee9795e23123c315946a76371->enter($__internal_62a1cfb1d364a5ce73af6b6823af84c1d6a4c79ee9795e23123c315946a76371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_62a1cfb1d364a5ce73af6b6823af84c1d6a4c79ee9795e23123c315946a76371->leave($__internal_62a1cfb1d364a5ce73af6b6823af84c1d6a4c79ee9795e23123c315946a76371_prof);

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

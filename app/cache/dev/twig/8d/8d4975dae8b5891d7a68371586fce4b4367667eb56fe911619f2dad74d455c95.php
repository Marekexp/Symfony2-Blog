<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_bf3f00d4b8017f497a8dc7993f543c06a851537b5a09c5ad87c4a8ffd60113de extends Twig_Template
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
        $__internal_5532b546ede72034644210ec93d65dd10702b3cd5638358ac5000aba6e33f2aa = $this->env->getExtension("native_profiler");
        $__internal_5532b546ede72034644210ec93d65dd10702b3cd5638358ac5000aba6e33f2aa->enter($__internal_5532b546ede72034644210ec93d65dd10702b3cd5638358ac5000aba6e33f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5532b546ede72034644210ec93d65dd10702b3cd5638358ac5000aba6e33f2aa->leave($__internal_5532b546ede72034644210ec93d65dd10702b3cd5638358ac5000aba6e33f2aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

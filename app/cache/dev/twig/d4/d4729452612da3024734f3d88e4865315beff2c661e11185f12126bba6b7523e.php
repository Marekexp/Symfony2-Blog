<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6f341b9c948515d750825dced8d85857e7b12d6c58a7e2ec8cafbcbcadf7d6f2 extends Twig_Template
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
        $__internal_1d275b4377c486f22698591e50809660f366fa1c9a49df74a0e6de670caa0a2d = $this->env->getExtension("native_profiler");
        $__internal_1d275b4377c486f22698591e50809660f366fa1c9a49df74a0e6de670caa0a2d->enter($__internal_1d275b4377c486f22698591e50809660f366fa1c9a49df74a0e6de670caa0a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1d275b4377c486f22698591e50809660f366fa1c9a49df74a0e6de670caa0a2d->leave($__internal_1d275b4377c486f22698591e50809660f366fa1c9a49df74a0e6de670caa0a2d_prof);

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

<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b5831d2b09061532623ff36676c7bd9298121efd652f02bdc0d6ff4f02b941c4 extends Twig_Template
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
        $__internal_3d9289a8d8ffc5bd0e65482795ed54294b2b3eee80e43e6efb557ab36009a00d = $this->env->getExtension("native_profiler");
        $__internal_3d9289a8d8ffc5bd0e65482795ed54294b2b3eee80e43e6efb557ab36009a00d->enter($__internal_3d9289a8d8ffc5bd0e65482795ed54294b2b3eee80e43e6efb557ab36009a00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3d9289a8d8ffc5bd0e65482795ed54294b2b3eee80e43e6efb557ab36009a00d->leave($__internal_3d9289a8d8ffc5bd0e65482795ed54294b2b3eee80e43e6efb557ab36009a00d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

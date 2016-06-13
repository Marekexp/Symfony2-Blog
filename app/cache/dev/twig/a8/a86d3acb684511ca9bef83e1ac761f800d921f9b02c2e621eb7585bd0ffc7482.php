<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f8fc7a3cc2d50c8421b21ac786fb2c3811c6dfbb39518e2082501d7a50b6625e extends Twig_Template
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
        $__internal_6ba0a80884dfc31f388f3131e2433e2452933e06f7b731396441ef5e0d7d0271 = $this->env->getExtension("native_profiler");
        $__internal_6ba0a80884dfc31f388f3131e2433e2452933e06f7b731396441ef5e0d7d0271->enter($__internal_6ba0a80884dfc31f388f3131e2433e2452933e06f7b731396441ef5e0d7d0271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6ba0a80884dfc31f388f3131e2433e2452933e06f7b731396441ef5e0d7d0271->leave($__internal_6ba0a80884dfc31f388f3131e2433e2452933e06f7b731396441ef5e0d7d0271_prof);

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

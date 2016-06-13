<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f9f6d9e9bc20ba3c2742673d521b74a8ba5ea317e333b9c0fc8f03c9d8027e8b extends Twig_Template
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
        $__internal_98edcf6ebb27f6ba5ecfbf6b1891a43562f30cfce4573c047a3cb5547c106bc3 = $this->env->getExtension("native_profiler");
        $__internal_98edcf6ebb27f6ba5ecfbf6b1891a43562f30cfce4573c047a3cb5547c106bc3->enter($__internal_98edcf6ebb27f6ba5ecfbf6b1891a43562f30cfce4573c047a3cb5547c106bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98edcf6ebb27f6ba5ecfbf6b1891a43562f30cfce4573c047a3cb5547c106bc3->leave($__internal_98edcf6ebb27f6ba5ecfbf6b1891a43562f30cfce4573c047a3cb5547c106bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

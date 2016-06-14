<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b9af8dd83d5c1d2e52217bc0d9a8468e94fc2ef2ba371c297146fb2074fea21c extends Twig_Template
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
        $__internal_3a4b7ec1b16f79c8386f5da66a10260fae15897c860ed3594cf3f4445b991dcc = $this->env->getExtension("native_profiler");
        $__internal_3a4b7ec1b16f79c8386f5da66a10260fae15897c860ed3594cf3f4445b991dcc->enter($__internal_3a4b7ec1b16f79c8386f5da66a10260fae15897c860ed3594cf3f4445b991dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3a4b7ec1b16f79c8386f5da66a10260fae15897c860ed3594cf3f4445b991dcc->leave($__internal_3a4b7ec1b16f79c8386f5da66a10260fae15897c860ed3594cf3f4445b991dcc_prof);

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

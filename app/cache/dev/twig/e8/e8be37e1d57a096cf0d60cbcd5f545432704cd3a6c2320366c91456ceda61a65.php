<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_bfa4ea07b9d36e19fe999f5e567b00c3e051d2db3ba94689929bdf492a6e7a40 extends Twig_Template
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
        $__internal_b01097fded75b93ea823f6d20d1f9a47dc0b2ab1f2a05a13d4e07f70b7427fc8 = $this->env->getExtension("native_profiler");
        $__internal_b01097fded75b93ea823f6d20d1f9a47dc0b2ab1f2a05a13d4e07f70b7427fc8->enter($__internal_b01097fded75b93ea823f6d20d1f9a47dc0b2ab1f2a05a13d4e07f70b7427fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b01097fded75b93ea823f6d20d1f9a47dc0b2ab1f2a05a13d4e07f70b7427fc8->leave($__internal_b01097fded75b93ea823f6d20d1f9a47dc0b2ab1f2a05a13d4e07f70b7427fc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

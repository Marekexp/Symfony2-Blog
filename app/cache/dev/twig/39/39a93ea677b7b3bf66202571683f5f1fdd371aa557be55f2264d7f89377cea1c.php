<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f930e42fa01c059731ae5d46d46c74daeb3b0b26fc1a03b868ac7f7b1e7f8b8a extends Twig_Template
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
        $__internal_3657720ef1b8b8646311471bfd82bd67c9f0449c768c1c59b3a6879ec48ec8f6 = $this->env->getExtension("native_profiler");
        $__internal_3657720ef1b8b8646311471bfd82bd67c9f0449c768c1c59b3a6879ec48ec8f6->enter($__internal_3657720ef1b8b8646311471bfd82bd67c9f0449c768c1c59b3a6879ec48ec8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3657720ef1b8b8646311471bfd82bd67c9f0449c768c1c59b3a6879ec48ec8f6->leave($__internal_3657720ef1b8b8646311471bfd82bd67c9f0449c768c1c59b3a6879ec48ec8f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

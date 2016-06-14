<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_81f93e877a77fcb57d8e6a614ba29434614bdbdd6b115708e4168d2e531bc2c8 extends Twig_Template
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
        $__internal_763e368ddb7ac22dfa37524b2e93f1e4c69dff37cef1a3f6577a5c522d8c29ec = $this->env->getExtension("native_profiler");
        $__internal_763e368ddb7ac22dfa37524b2e93f1e4c69dff37cef1a3f6577a5c522d8c29ec->enter($__internal_763e368ddb7ac22dfa37524b2e93f1e4c69dff37cef1a3f6577a5c522d8c29ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_763e368ddb7ac22dfa37524b2e93f1e4c69dff37cef1a3f6577a5c522d8c29ec->leave($__internal_763e368ddb7ac22dfa37524b2e93f1e4c69dff37cef1a3f6577a5c522d8c29ec_prof);

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

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3ae9d94aa734e21b8d5e5aa1e0d8f63cbb1e3a6cca4da7ce25d3dc5ca640baa0 extends Twig_Template
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
        $__internal_30adb177c3af6708540526da3af918c773d82777d226cec0baa9e4dc25b94b5f = $this->env->getExtension("native_profiler");
        $__internal_30adb177c3af6708540526da3af918c773d82777d226cec0baa9e4dc25b94b5f->enter($__internal_30adb177c3af6708540526da3af918c773d82777d226cec0baa9e4dc25b94b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_30adb177c3af6708540526da3af918c773d82777d226cec0baa9e4dc25b94b5f->leave($__internal_30adb177c3af6708540526da3af918c773d82777d226cec0baa9e4dc25b94b5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

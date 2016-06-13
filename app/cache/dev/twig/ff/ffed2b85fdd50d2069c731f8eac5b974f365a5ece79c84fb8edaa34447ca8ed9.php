<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_95a4d090bf254f3cd92cab65c5ec95ce56ea52ca0eb01b53909f4190121b298f extends Twig_Template
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
        $__internal_867613143569d4ae75a9a4551264a0edde6a2069c8c7d2ab7aa1dc3a9fdf6908 = $this->env->getExtension("native_profiler");
        $__internal_867613143569d4ae75a9a4551264a0edde6a2069c8c7d2ab7aa1dc3a9fdf6908->enter($__internal_867613143569d4ae75a9a4551264a0edde6a2069c8c7d2ab7aa1dc3a9fdf6908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_867613143569d4ae75a9a4551264a0edde6a2069c8c7d2ab7aa1dc3a9fdf6908->leave($__internal_867613143569d4ae75a9a4551264a0edde6a2069c8c7d2ab7aa1dc3a9fdf6908_prof);

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

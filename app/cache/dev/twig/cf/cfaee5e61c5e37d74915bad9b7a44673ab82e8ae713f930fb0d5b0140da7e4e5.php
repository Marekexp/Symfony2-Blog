<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0872cb3035ee654f01fa75a74a43f6e39116a67e2ec76f8d6b8aaaebdba82c4a extends Twig_Template
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
        $__internal_3be3327ced93e11ea76608efe663d4d506e71561fca709a6196bcb13dfad7234 = $this->env->getExtension("native_profiler");
        $__internal_3be3327ced93e11ea76608efe663d4d506e71561fca709a6196bcb13dfad7234->enter($__internal_3be3327ced93e11ea76608efe663d4d506e71561fca709a6196bcb13dfad7234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3be3327ced93e11ea76608efe663d4d506e71561fca709a6196bcb13dfad7234->leave($__internal_3be3327ced93e11ea76608efe663d4d506e71561fca709a6196bcb13dfad7234_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

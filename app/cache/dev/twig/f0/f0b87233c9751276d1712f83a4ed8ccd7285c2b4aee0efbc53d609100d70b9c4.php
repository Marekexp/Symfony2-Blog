<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6a7aaf1a9acc8c28c78b09f3270c8ba8125106ac5c99af27a8f4e09bf34cb0ba extends Twig_Template
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
        $__internal_2737d01017576da0672324561647e09f73948f1b4cc53d0a2c5e6201831ecb8c = $this->env->getExtension("native_profiler");
        $__internal_2737d01017576da0672324561647e09f73948f1b4cc53d0a2c5e6201831ecb8c->enter($__internal_2737d01017576da0672324561647e09f73948f1b4cc53d0a2c5e6201831ecb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2737d01017576da0672324561647e09f73948f1b4cc53d0a2c5e6201831ecb8c->leave($__internal_2737d01017576da0672324561647e09f73948f1b4cc53d0a2c5e6201831ecb8c_prof);

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

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7672e7852c9f8560c4cc5cdbf9755940e9ea5d800376005a0ce7601be346d196 extends Twig_Template
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
        $__internal_75cd7f08071330bf3d6529fabed5e9f89e17253cad0cf58f30dd5f39b5da0503 = $this->env->getExtension("native_profiler");
        $__internal_75cd7f08071330bf3d6529fabed5e9f89e17253cad0cf58f30dd5f39b5da0503->enter($__internal_75cd7f08071330bf3d6529fabed5e9f89e17253cad0cf58f30dd5f39b5da0503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_75cd7f08071330bf3d6529fabed5e9f89e17253cad0cf58f30dd5f39b5da0503->leave($__internal_75cd7f08071330bf3d6529fabed5e9f89e17253cad0cf58f30dd5f39b5da0503_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

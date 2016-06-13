<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_854e0a33585c33d9d74b4d017063d017b99ecbd798756b8136812c57b802a1d5 extends Twig_Template
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
        $__internal_9d00c201444867b2a620c60cf3a6761a0b309b7387ac75435babc6597f42af29 = $this->env->getExtension("native_profiler");
        $__internal_9d00c201444867b2a620c60cf3a6761a0b309b7387ac75435babc6597f42af29->enter($__internal_9d00c201444867b2a620c60cf3a6761a0b309b7387ac75435babc6597f42af29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9d00c201444867b2a620c60cf3a6761a0b309b7387ac75435babc6597f42af29->leave($__internal_9d00c201444867b2a620c60cf3a6761a0b309b7387ac75435babc6597f42af29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0850dfb5a395cc37e1a98e06004bf9584211953ff2b42b1d1b20347bb12929eb extends Twig_Template
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
        $__internal_0d4bd082f5cba4d528bb1b20f471ba849963f7717be507db03a0c7652c08f1b9 = $this->env->getExtension("native_profiler");
        $__internal_0d4bd082f5cba4d528bb1b20f471ba849963f7717be507db03a0c7652c08f1b9->enter($__internal_0d4bd082f5cba4d528bb1b20f471ba849963f7717be507db03a0c7652c08f1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0d4bd082f5cba4d528bb1b20f471ba849963f7717be507db03a0c7652c08f1b9->leave($__internal_0d4bd082f5cba4d528bb1b20f471ba849963f7717be507db03a0c7652c08f1b9_prof);

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

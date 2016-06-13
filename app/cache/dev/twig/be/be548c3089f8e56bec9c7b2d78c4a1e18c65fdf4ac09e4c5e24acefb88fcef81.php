<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8267e4365d80b14326cc9854b146494f7de8d828d202b43cd169595941fef202 extends Twig_Template
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
        $__internal_51103e409f8e209595c79c15b1924507eb461d1216458ffb21e6bc7c3a6a4ade = $this->env->getExtension("native_profiler");
        $__internal_51103e409f8e209595c79c15b1924507eb461d1216458ffb21e6bc7c3a6a4ade->enter($__internal_51103e409f8e209595c79c15b1924507eb461d1216458ffb21e6bc7c3a6a4ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_51103e409f8e209595c79c15b1924507eb461d1216458ffb21e6bc7c3a6a4ade->leave($__internal_51103e409f8e209595c79c15b1924507eb461d1216458ffb21e6bc7c3a6a4ade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

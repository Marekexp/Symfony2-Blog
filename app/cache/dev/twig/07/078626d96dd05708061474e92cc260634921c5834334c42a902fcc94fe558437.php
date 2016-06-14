<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7af96468cb84c73b86536277b6665f68eab78c24c295e4fc0dbda2f8ba8a215e extends Twig_Template
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
        $__internal_1b4cc18ba7e6fa08504f49f500390382dcf1dfffaa7fcfb585fcf23d085b701a = $this->env->getExtension("native_profiler");
        $__internal_1b4cc18ba7e6fa08504f49f500390382dcf1dfffaa7fcfb585fcf23d085b701a->enter($__internal_1b4cc18ba7e6fa08504f49f500390382dcf1dfffaa7fcfb585fcf23d085b701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1b4cc18ba7e6fa08504f49f500390382dcf1dfffaa7fcfb585fcf23d085b701a->leave($__internal_1b4cc18ba7e6fa08504f49f500390382dcf1dfffaa7fcfb585fcf23d085b701a_prof);

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

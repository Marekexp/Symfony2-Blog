<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_72fa2650e94a962e6b014b64cdea5a38839dfdc2ab052cb2be8f0535b1044c6f extends Twig_Template
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
        $__internal_cda5e57a9abcdbb7f033e393622082fee7684890c27e7eef023b7474e03578de = $this->env->getExtension("native_profiler");
        $__internal_cda5e57a9abcdbb7f033e393622082fee7684890c27e7eef023b7474e03578de->enter($__internal_cda5e57a9abcdbb7f033e393622082fee7684890c27e7eef023b7474e03578de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cda5e57a9abcdbb7f033e393622082fee7684890c27e7eef023b7474e03578de->leave($__internal_cda5e57a9abcdbb7f033e393622082fee7684890c27e7eef023b7474e03578de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

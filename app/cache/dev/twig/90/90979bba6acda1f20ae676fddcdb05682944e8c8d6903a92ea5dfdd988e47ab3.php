<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dea16c545958875db2bb97700397d1108d6f5bb7362a3b5c0a2f7a4aa4e97d95 extends Twig_Template
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
        $__internal_20ddf1cb95cc1cda62d32504f4a764f62383e000b6a24e600956592634518a7a = $this->env->getExtension("native_profiler");
        $__internal_20ddf1cb95cc1cda62d32504f4a764f62383e000b6a24e600956592634518a7a->enter($__internal_20ddf1cb95cc1cda62d32504f4a764f62383e000b6a24e600956592634518a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_20ddf1cb95cc1cda62d32504f4a764f62383e000b6a24e600956592634518a7a->leave($__internal_20ddf1cb95cc1cda62d32504f4a764f62383e000b6a24e600956592634518a7a_prof);

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

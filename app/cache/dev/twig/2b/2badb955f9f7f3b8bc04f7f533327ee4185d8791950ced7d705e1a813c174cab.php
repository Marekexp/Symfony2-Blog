<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f953a9511d4161658812497cd96d4076c2685ecf16e21a5350fd3d1c58ed5ab2 extends Twig_Template
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
        $__internal_26a3879320fbdc607959114ba6cd990c8a85d4b19ac6d6ae6adf18c9badb1f1a = $this->env->getExtension("native_profiler");
        $__internal_26a3879320fbdc607959114ba6cd990c8a85d4b19ac6d6ae6adf18c9badb1f1a->enter($__internal_26a3879320fbdc607959114ba6cd990c8a85d4b19ac6d6ae6adf18c9badb1f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_26a3879320fbdc607959114ba6cd990c8a85d4b19ac6d6ae6adf18c9badb1f1a->leave($__internal_26a3879320fbdc607959114ba6cd990c8a85d4b19ac6d6ae6adf18c9badb1f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

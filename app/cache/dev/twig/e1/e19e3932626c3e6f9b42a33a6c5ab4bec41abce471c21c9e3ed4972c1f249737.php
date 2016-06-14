<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e4212efeba608169e4e6257a642998082aaaffe9f505c41fca7947b0f79fdf0f extends Twig_Template
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
        $__internal_1f2bacb71d200bb52f5a1f2b38d6880e7564d976849b316c9c59485a6551a9e0 = $this->env->getExtension("native_profiler");
        $__internal_1f2bacb71d200bb52f5a1f2b38d6880e7564d976849b316c9c59485a6551a9e0->enter($__internal_1f2bacb71d200bb52f5a1f2b38d6880e7564d976849b316c9c59485a6551a9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1f2bacb71d200bb52f5a1f2b38d6880e7564d976849b316c9c59485a6551a9e0->leave($__internal_1f2bacb71d200bb52f5a1f2b38d6880e7564d976849b316c9c59485a6551a9e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

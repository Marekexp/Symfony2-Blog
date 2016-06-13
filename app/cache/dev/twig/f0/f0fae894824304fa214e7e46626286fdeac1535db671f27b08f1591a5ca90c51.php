<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f4d214c4bea742c9d92ff7026838d664dc953282b2cb9089989d524d40456c06 extends Twig_Template
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
        $__internal_52eb56d810cdd899d701ab072f8aad25df43730589d5524207e76d8aa7d2cfd5 = $this->env->getExtension("native_profiler");
        $__internal_52eb56d810cdd899d701ab072f8aad25df43730589d5524207e76d8aa7d2cfd5->enter($__internal_52eb56d810cdd899d701ab072f8aad25df43730589d5524207e76d8aa7d2cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_52eb56d810cdd899d701ab072f8aad25df43730589d5524207e76d8aa7d2cfd5->leave($__internal_52eb56d810cdd899d701ab072f8aad25df43730589d5524207e76d8aa7d2cfd5_prof);

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

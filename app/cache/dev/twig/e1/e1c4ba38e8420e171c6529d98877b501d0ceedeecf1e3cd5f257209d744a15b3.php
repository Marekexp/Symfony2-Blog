<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d5fd77b756be47430424400f0f0dbd5025606b7b3e920f014ec9be3235f6842e extends Twig_Template
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
        $__internal_a4e0fb74086d802624f886a4491ad13850b34802fbb181e70026cdbd3acafbd8 = $this->env->getExtension("native_profiler");
        $__internal_a4e0fb74086d802624f886a4491ad13850b34802fbb181e70026cdbd3acafbd8->enter($__internal_a4e0fb74086d802624f886a4491ad13850b34802fbb181e70026cdbd3acafbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a4e0fb74086d802624f886a4491ad13850b34802fbb181e70026cdbd3acafbd8->leave($__internal_a4e0fb74086d802624f886a4491ad13850b34802fbb181e70026cdbd3acafbd8_prof);

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

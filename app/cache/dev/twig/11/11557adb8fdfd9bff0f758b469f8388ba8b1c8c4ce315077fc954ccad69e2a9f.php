<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_651e94ac0154e7f12bebde8ed971e43a777a78cf5bdb2a8a92107f262c9ed7c2 extends Twig_Template
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
        $__internal_4158b62b39d6d52307c9427f6c2ecaf270cc87043b6228710a2c7dd7f0c8946d = $this->env->getExtension("native_profiler");
        $__internal_4158b62b39d6d52307c9427f6c2ecaf270cc87043b6228710a2c7dd7f0c8946d->enter($__internal_4158b62b39d6d52307c9427f6c2ecaf270cc87043b6228710a2c7dd7f0c8946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4158b62b39d6d52307c9427f6c2ecaf270cc87043b6228710a2c7dd7f0c8946d->leave($__internal_4158b62b39d6d52307c9427f6c2ecaf270cc87043b6228710a2c7dd7f0c8946d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

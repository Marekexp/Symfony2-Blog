<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2a6b635183b6c7a83ea435e8e1b9c8f3b9b8bcae381322a602d26f9de77538ac extends Twig_Template
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
        $__internal_63b5aed031d77cddaa1037858d765f427900516ced0de5564415042a3cd193ca = $this->env->getExtension("native_profiler");
        $__internal_63b5aed031d77cddaa1037858d765f427900516ced0de5564415042a3cd193ca->enter($__internal_63b5aed031d77cddaa1037858d765f427900516ced0de5564415042a3cd193ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_63b5aed031d77cddaa1037858d765f427900516ced0de5564415042a3cd193ca->leave($__internal_63b5aed031d77cddaa1037858d765f427900516ced0de5564415042a3cd193ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_69d77b241380c8b5d4c1aaf50f8c4bc4ec30dcee2a0d916e6940831637de47fa extends Twig_Template
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
        $__internal_bed53f507535fce82bddf02e3815afa609994800f116c53ffcb726ff78d8a366 = $this->env->getExtension("native_profiler");
        $__internal_bed53f507535fce82bddf02e3815afa609994800f116c53ffcb726ff78d8a366->enter($__internal_bed53f507535fce82bddf02e3815afa609994800f116c53ffcb726ff78d8a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bed53f507535fce82bddf02e3815afa609994800f116c53ffcb726ff78d8a366->leave($__internal_bed53f507535fce82bddf02e3815afa609994800f116c53ffcb726ff78d8a366_prof);

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

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_64e432f1e48487c848142c24e12090679f0f8796eed9ec0c77d4dc6a5c3efea8 extends Twig_Template
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
        $__internal_b2039f2998f068b6196ab8d7c71f936532d928f7e1b8d654b0c4937485bf3aa4 = $this->env->getExtension("native_profiler");
        $__internal_b2039f2998f068b6196ab8d7c71f936532d928f7e1b8d654b0c4937485bf3aa4->enter($__internal_b2039f2998f068b6196ab8d7c71f936532d928f7e1b8d654b0c4937485bf3aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b2039f2998f068b6196ab8d7c71f936532d928f7e1b8d654b0c4937485bf3aa4->leave($__internal_b2039f2998f068b6196ab8d7c71f936532d928f7e1b8d654b0c4937485bf3aa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

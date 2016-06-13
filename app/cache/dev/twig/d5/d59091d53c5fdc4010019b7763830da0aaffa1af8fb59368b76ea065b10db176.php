<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9f889c919509400bb62cbf79cabdff96488db97f806ba6b313c70d5694f94551 extends Twig_Template
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
        $__internal_75dcf8141c329c2d38bfabb8f6b83a0a964395ed699f6d2ac96b32e51b49d43f = $this->env->getExtension("native_profiler");
        $__internal_75dcf8141c329c2d38bfabb8f6b83a0a964395ed699f6d2ac96b32e51b49d43f->enter($__internal_75dcf8141c329c2d38bfabb8f6b83a0a964395ed699f6d2ac96b32e51b49d43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_75dcf8141c329c2d38bfabb8f6b83a0a964395ed699f6d2ac96b32e51b49d43f->leave($__internal_75dcf8141c329c2d38bfabb8f6b83a0a964395ed699f6d2ac96b32e51b49d43f_prof);

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

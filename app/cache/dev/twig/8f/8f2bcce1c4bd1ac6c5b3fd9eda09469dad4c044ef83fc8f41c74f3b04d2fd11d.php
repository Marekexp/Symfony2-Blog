<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e81ba9fc0203a9c8845734eee48a864cbf8dd197de0c807d08c94482d17893be extends Twig_Template
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
        $__internal_8b4a520cae2ec1a4d70e1c075ceacd4cc37951e2c626c1b593e986af0c236a09 = $this->env->getExtension("native_profiler");
        $__internal_8b4a520cae2ec1a4d70e1c075ceacd4cc37951e2c626c1b593e986af0c236a09->enter($__internal_8b4a520cae2ec1a4d70e1c075ceacd4cc37951e2c626c1b593e986af0c236a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8b4a520cae2ec1a4d70e1c075ceacd4cc37951e2c626c1b593e986af0c236a09->leave($__internal_8b4a520cae2ec1a4d70e1c075ceacd4cc37951e2c626c1b593e986af0c236a09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba7dece5b61e857667f0e7db065bba35bb0e332b5b4ab697e769422abbad84cb extends Twig_Template
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
        $__internal_d72d8dd639e02d9d93223e8446bc1cc61fefc2ac20fa0d2022548b00525959a5 = $this->env->getExtension("native_profiler");
        $__internal_d72d8dd639e02d9d93223e8446bc1cc61fefc2ac20fa0d2022548b00525959a5->enter($__internal_d72d8dd639e02d9d93223e8446bc1cc61fefc2ac20fa0d2022548b00525959a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d72d8dd639e02d9d93223e8446bc1cc61fefc2ac20fa0d2022548b00525959a5->leave($__internal_d72d8dd639e02d9d93223e8446bc1cc61fefc2ac20fa0d2022548b00525959a5_prof);

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

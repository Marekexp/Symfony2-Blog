<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_17a1e5a65991f2d2c940548ac6c424ddb3357057f24fca55d6c7fb4bf2732902 extends Twig_Template
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
        $__internal_a51ec78676523f1b80a1ab0e8c5cd2c26d3979ae8323a377a80f99eb64c9f8fd = $this->env->getExtension("native_profiler");
        $__internal_a51ec78676523f1b80a1ab0e8c5cd2c26d3979ae8323a377a80f99eb64c9f8fd->enter($__internal_a51ec78676523f1b80a1ab0e8c5cd2c26d3979ae8323a377a80f99eb64c9f8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a51ec78676523f1b80a1ab0e8c5cd2c26d3979ae8323a377a80f99eb64c9f8fd->leave($__internal_a51ec78676523f1b80a1ab0e8c5cd2c26d3979ae8323a377a80f99eb64c9f8fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

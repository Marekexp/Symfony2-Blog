<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ac03e1ecc49ac07f6b961031ffe720c13e4092f52e0c975d914f4d76cab26ab extends Twig_Template
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
        $__internal_8e7ad0c17e92b9d3a4002d45fe62cc0c8cdb8e0ffd199af4aea2863c4c25675c = $this->env->getExtension("native_profiler");
        $__internal_8e7ad0c17e92b9d3a4002d45fe62cc0c8cdb8e0ffd199af4aea2863c4c25675c->enter($__internal_8e7ad0c17e92b9d3a4002d45fe62cc0c8cdb8e0ffd199af4aea2863c4c25675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8e7ad0c17e92b9d3a4002d45fe62cc0c8cdb8e0ffd199af4aea2863c4c25675c->leave($__internal_8e7ad0c17e92b9d3a4002d45fe62cc0c8cdb8e0ffd199af4aea2863c4c25675c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

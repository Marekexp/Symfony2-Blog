<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4fabc11c627aa9a008434f53df4a64738186e42ac00607a075f52c99d6e707ee extends Twig_Template
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
        $__internal_006221ef5e7d0235e2a6cefe35dfa19063ce24884dd4250865dfa8ae4fa0c597 = $this->env->getExtension("native_profiler");
        $__internal_006221ef5e7d0235e2a6cefe35dfa19063ce24884dd4250865dfa8ae4fa0c597->enter($__internal_006221ef5e7d0235e2a6cefe35dfa19063ce24884dd4250865dfa8ae4fa0c597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_006221ef5e7d0235e2a6cefe35dfa19063ce24884dd4250865dfa8ae4fa0c597->leave($__internal_006221ef5e7d0235e2a6cefe35dfa19063ce24884dd4250865dfa8ae4fa0c597_prof);

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

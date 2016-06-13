<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a1026ecce71501257c870d395b5415e53b73278d810065c8d51becbf1cf86fe4 extends Twig_Template
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
        $__internal_2462bcd5e9877fd06609d2023b94d15b8ff75111244a606c31e1ab9029b88279 = $this->env->getExtension("native_profiler");
        $__internal_2462bcd5e9877fd06609d2023b94d15b8ff75111244a606c31e1ab9029b88279->enter($__internal_2462bcd5e9877fd06609d2023b94d15b8ff75111244a606c31e1ab9029b88279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2462bcd5e9877fd06609d2023b94d15b8ff75111244a606c31e1ab9029b88279->leave($__internal_2462bcd5e9877fd06609d2023b94d15b8ff75111244a606c31e1ab9029b88279_prof);

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

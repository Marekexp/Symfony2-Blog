<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_822d94f967f8d268dda74b7b0ae49c733bf8ae9a1059ca3f20299f10fcb1ae14 extends Twig_Template
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
        $__internal_cd332986cb92c792b034afeef95ba2bea526cfe4bdd1fda07caa0bf729cf50f9 = $this->env->getExtension("native_profiler");
        $__internal_cd332986cb92c792b034afeef95ba2bea526cfe4bdd1fda07caa0bf729cf50f9->enter($__internal_cd332986cb92c792b034afeef95ba2bea526cfe4bdd1fda07caa0bf729cf50f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cd332986cb92c792b034afeef95ba2bea526cfe4bdd1fda07caa0bf729cf50f9->leave($__internal_cd332986cb92c792b034afeef95ba2bea526cfe4bdd1fda07caa0bf729cf50f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

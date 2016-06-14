<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_95356384a00e005d1e48c511ddf08caf7247652dd33ed86840b37e88a25c337e extends Twig_Template
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
        $__internal_22e358f6371e32f19216b276752b55fb4f140fea89c6923825a4f28c78f67223 = $this->env->getExtension("native_profiler");
        $__internal_22e358f6371e32f19216b276752b55fb4f140fea89c6923825a4f28c78f67223->enter($__internal_22e358f6371e32f19216b276752b55fb4f140fea89c6923825a4f28c78f67223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_22e358f6371e32f19216b276752b55fb4f140fea89c6923825a4f28c78f67223->leave($__internal_22e358f6371e32f19216b276752b55fb4f140fea89c6923825a4f28c78f67223_prof);

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

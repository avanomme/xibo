<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* hls-designer-javascript.twig */
class __TwigTemplate_528dbfd37fa86748b4016c1e477f1d82c6af1b6188baeaf7412ff85ac0868747 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "<script type=\"text/javascript\">

    // Runs after form opens
    function hls_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');
    }

</script>";
    }

    public function getTemplateName()
    {
        return "hls-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "hls-designer-javascript.twig", "/srv/xibo-cms/modules/hls-designer-javascript.twig");
    }
}

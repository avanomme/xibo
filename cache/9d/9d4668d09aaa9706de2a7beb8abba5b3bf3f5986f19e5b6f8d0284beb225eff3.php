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

/* webpage-designer-javascript.twig */
class __TwigTemplate_19c99309d78199c62e7ecc70a0d28b04af0d378acf2e593a3058a667530812d8 extends Template
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
    function webpage_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set mode field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#modeId', ['', '.webpage-widths, .webpage-offsets', '.webpage-widths', '.webpage-triggers'], [1, 2, 3, 1]);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "webpage-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "webpage-designer-javascript.twig", "/srv/xibo-cms/modules/webpage-designer-javascript.twig");
    }
}

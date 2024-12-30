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

/* shellcommand-designer-javascript.twig */
class __TwigTemplate_10d5992a77a8130561f3234b9e5384130ab82ae16954798a992e39b8fcda02f5 extends Template
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
    function shellcommand_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Use global or multiple commands checkbox
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useGlobalCommand', '.global-command-show', '.global-command-hide');

        // Set command code field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#commandType', ['.new-command-fields', '.stored-command-fields'], ['createCommand', 'storedCommand']);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "shellcommand-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "shellcommand-designer-javascript.twig", "/srv/xibo-cms/modules/shellcommand-designer-javascript.twig");
    }
}

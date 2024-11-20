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

/* embedded-designer-javascript.twig */
class __TwigTemplate_760ad238cbddcb36ba552cf7458973b03f8082ee033c6f2f42bd3328849a3842 extends Template
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
    function embedded_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');
        
        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'embedHtml', !\$(this).data('formEditorOnly'));
    }

</script>";
    }

    public function getTemplateName()
    {
        return "embedded-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "embedded-designer-javascript.twig", "/srv/xibo-cms/modules/embedded-designer-javascript.twig");
    }
}

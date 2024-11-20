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

/* notificationview-designer-javascript.twig */
class __TwigTemplate_f9c7a6459acd5d7a7f427a0303659ba1a568e54374593df7b7e40dc21a618d0d extends Template
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
    function notificationview_form_edit_open() {
        
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'template', !\$(this).data('formEditorOnly'));
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
    }

    // Runs before form submit
    function notificationview_form_edit_submit() {        

        // Update text callback fields
        formHelpers.updateCKEditor();
    }
    
</script>";
    }

    public function getTemplateName()
    {
        return "notificationview-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "notificationview-designer-javascript.twig", "/srv/xibo-cms/modules/notificationview-designer-javascript.twig");
    }
}

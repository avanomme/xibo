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

/* calendar-designer-javascript.twig */
class __TwigTemplate_229cd098eeb0f56c8b0acff7b441cc18c5f95d98001a435b5a3d5482bf19afc4 extends Template
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
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function calendar_form_edit_open() {

        // Set duration field, using the helper
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set template field, using the helper
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useCurrentTemplate', '.current-event-template');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'template', !\$(this).data('formEditorOnly'));
        formHelpers.setupDualTypeTextArea(this, 'currentEventTemplate');
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

        // set date range fields
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDateRange', '.date-range', '.interval');

        // show only current events hide the exclude all current events option
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useCurrentTemplate', '.current-event-template');

        // Setup background color picker
        createColorPicker(\$(this).find('#backgroundColor'), {format: 'hex'});
    }

    // Runs before form submit
    function calendar_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "calendar-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendar-designer-javascript.twig", "/srv/xibo-cms/modules/calendar-designer-javascript.twig");
    }
}

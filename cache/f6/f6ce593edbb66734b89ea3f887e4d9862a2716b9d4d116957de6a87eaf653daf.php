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

/* calendaradvanced-designer-javascript.twig */
class __TwigTemplate_f908f72e9d29c01064e9c4b5723c52dca5d9798e1a3af7d3e837e994afa10a88 extends Template
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
    function calendaradvanced_form_edit_open() {
        var self = this;

        var updateColors = function() {
            var CALENDAR_TYPE_NAMES = [
                'custom',
                'schedule',
                'daily',
                'weekly',
                'monthly'
            ];
            var overrideTemplate = \$(self).find('#overrideColorTemplate').prop('checked');
            var calendarType = CALENDAR_TYPE_NAMES[\$(self).find('#calendarType').val()];
            var templates = \$(self).data().extra.templates;
            var \$templateThemePicker = \$(self).find('#templateTheme');

            // Toggle elements
            \$(self).find('.template-colors-select').toggle(!overrideTemplate);
            \$(self).find('.template-colors-custom').toggle(overrideTemplate);

            if(!overrideTemplate) {
                var templateColors;

                // Get the current template id and fill the text field with its colour values
                for(var i = 0;i < templates.length;i++) {
                    if(templates[i].id == calendarType) {
                        templateColors = templates[i][\$templateThemePicker.val()];
                        break;
                    }
                }

                // Use template colors for the input fields
                for (var name in templateColors) {
                    if (templateColors.hasOwnProperty(name)) {
                        \$(self).find('#' + name).val(templateColors[name]);
                    }
                }
            }
        }

        // Set duration field, using the helper
        formHelpers.setupCheckboxInputFields(\$(self).find('form'), '#useDuration', '.duration-fields');

        // Set clock type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(self), '#calendarType', ['.custom-control-group', '.schedule-control-group', '.daily-control-group', '.weekly-control-group', '.monthly-control-group'], [0, 1, 2, 3, 4]);

        // set date range fields
        formHelpers.setupCheckboxInputFields(\$(self).find('form'), '#useDateRange', '.date-range', '.interval');

        \$(self).find('#overrideColorTemplate, #templateTheme, #calendarType').on('change', updateColors);
        updateColors();
    }

    // Runs before form submit
    function calendaradvanced_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "calendaradvanced-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendaradvanced-designer-javascript.twig", "/srv/xibo-cms/modules/calendaradvanced-designer-javascript.twig");
    }
}

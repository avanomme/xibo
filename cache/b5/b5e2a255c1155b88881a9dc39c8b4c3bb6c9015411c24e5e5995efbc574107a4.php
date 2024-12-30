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

/* worldclock-designer-javascript.twig */
class __TwigTemplate_d7ab3598bee44a03459c15eb34314521d9894c7b64774bfa533e94515c510ae9 extends Template
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
    function worldclock_form_edit_open() {
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set clock type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#clockType', ['.digital-control-group', '.analogue-control-group'], [1, 2]);

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');
        
        // Setup form Editor
        formHelpers.setupDualTypeTextArea(this, 'mainTemplate');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#mainTemplate': 'mainTemplate',
                '#styleSheet': 'css',
                '#widgetOriginalWidth': 'widgetOriginalWidth',
                '#widgetOriginalHeight': 'widgetOriginalHeight'
            });

        // Setup analogue clock special fields
        formHelpers.setupCheckboxInputFields(\$(this), '#showSecondsHand', '.seconds-fields');
        formHelpers.setupCheckboxInputFields(\$(this), '#showSteps', '.steps-fields');
        formHelpers.setupCheckboxInputFields(\$(this), '#showMiniDigitalClock', '.inner-digital-fields');
        formHelpers.setupCheckboxInputFields(\$(this), '#showLabel', '.label-fields');

        // Setup multiple clocks
        configureMultipleWorldClocks(\$(this));

        initClockRows(this);
    }

    function configureMultipleWorldClocks(container, translations) {
        if(container.length == 0)
            return;

        var \$worldClocksContainer = container.find('#worldClocksContainer');
        var worldClockTemplate = formHelpers.getTemplate('worldClockTemplate');
        var worldClocks = container.data().extra.worldClocks;
        var timezones = container.data().extra.timezones;

        if(worldClocks.length == 0) {
            // Add a template row
            var context = {title: '1', clockTimezone: '', timezones: timezones, buttonGlyph: 'fa-plus'};
            \$(worldClockTemplate(context)).appendTo(\$worldClocksContainer);
            initClockRows(container);
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(worldClocks, function(index, field) {
                i++;
                
                var context = {title: i, clockTimezone: field.clockTimezone, clockHighlight: field.clockHighlight, clockLabel: field.clockLabel, timezones: timezones, buttonGlyph: ((i == 1) ? 'fa-plus' : 'fa-minus')};
                \$worldClocksContainer.append(worldClockTemplate(context));

            });
            updateClockCountLabel(container);
            initClockRows(container);
        }

        // Nabble the resulting buttons
        \$worldClocksContainer.on('click', 'button', function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find('i').hasClass('fa-plus')) {
                var context = {title: \$worldClocksContainer.find('.form-clock').length + 1, clockTimezone: '', timezones: timezones, buttonGlyph: 'fa-minus'};
                \$worldClocksContainer.append(worldClockTemplate(context));
                initClockRows(container);
            } else {
                // Remove this row
                \$(this).closest('.form-clock').remove();
            }

            updateClockCountLabel(container);
        });
    }

    function updateClockCountLabel(container) {
        var clockCount = container.find('#worldClocksContainer').find('.form-clock').length;
        container.find('.clockCount').html((clockCount > 1) ? '(' + clockCount + ')' : '');
    }

    function initClockRows(container) {
        // Initialise select2 elements
        \$(container).find('.localSelect select.form-control').each(function() {
            makeLocalSelect(\$(this), (\$(container).hasClass('modal') ? \$(container) : \$('body')));
        });

        // Use hidden inputs to send empty checkbox values
        \$(container).find('input[type=\"checkbox\"]').click(function() {
            \$(this).parent().find('input[type=\"hidden\"]').val(\$(this).is(':checked') ? 'on' : '');
        });
    }
</script>";
    }

    public function getTemplateName()
    {
        return "worldclock-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "worldclock-designer-javascript.twig", "/srv/xibo-cms/modules/worldclock-designer-javascript.twig");
    }
}

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

/* ticker-designer-javascript.twig */
class __TwigTemplate_26060cafcd9c22ce9b49140f63dc360ff713b3c195fce7adfd3690dba98cd51e extends Template
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
    function ticker_form_edit_open() {
        // Update form fields based on template options
        var updateTemplateOptions = function() {
            var templates = \$(this).data().extra.templates;
            var templateId = \$(this).find('#templateId').val();
            var \$form = \$(this);

            // Hide all options first
            \$form.find('.template-option').addClass('d-none');

            // Options from template handling
            \$.each(templates, function(templateIndex, template) {
                if(template.id == templateId) {
                    for (const key in template.options) {
                        if (Object.hasOwnProperty.call(template.options, key)) {
                            var element = template.options[key];
                            \$form.find('.template-option-' + key).toggleClass('d-none', !template.options[key]);
                        }
                    }
                }
            });
        }.bind(this);

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));

        // Initialise CKEditor for the noDataMessage
        formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#ta_text_advanced': 'defaultVisualEditor',
                '#ta_text': 'template',
                '#ta_css': 'css'
            });

        // Tidy up colorpickers on modal close
        if(\$(this).hasClass('modal')) {
            \$(this).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    destroyColorPicker(\$(this).find(\".XiboColorPicker\"));
                }
            });
        }

        \$(this).find('#templateId').on('change', updateTemplateOptions);

        formHelpers.setupPhpDateFormatPopover(\$(this))

        updateTemplateOptions();
    }

    // Runs before form submit
    function ticker_form_edit_submit() {

        // Update text callback fields
        formHelpers.updateCKEditor();
    }
</script>

<style>
    .popover{
        max-width: 100%;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "ticker-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "ticker-designer-javascript.twig", "/srv/xibo-cms/modules/ticker-designer-javascript.twig");
    }
}

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

/* clock-designer-javascript.twig */
class __TwigTemplate_fd7010d7337f619ed2a7f3c2cb60733cc7cc7144981052b51b3f791a800203b9 extends Template
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
    function clock_form_edit_open() {

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set clock type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#clockTypeId', ['.analogue-control-group', '.digital-control-group', '.flip-control-group'], [1, 2, 3]);

        // Setup editors
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'), '[' + jsTimeFormat + ']');

        // For the clock type, we need to check if it's not digital, and destroy the inline editor for that specific case
        var self = this;
        var clockTypeChangeBehaviour = function(form) {
            if(!\$(self).data('formEditorOnly')) {
                if(\$(form).find('form #clockTypeId').val() !== '2') {
                    \$(form).data().viewerObject.setupInlineEditor('ta_text', false);
                    \$(form).find('.template-tab').hide();
                } else {
                    var isChecked = \$(form).find('#ta_text_advanced').is(':checked');
                    \$(form).data().viewerObject.setupInlineEditor('ta_text', isChecked);
                    \$(form).find('.template-tab').show();
                }
            }
        };

        // On select input change, check clock type
        \$(this).find('form #clockTypeId').on('change input', function() {
            clockTypeChangeBehaviour(\$(self));
        });

        clockTypeChangeBehaviour(\$(self));
    }

    // Runs before form submit
    function clock_form_edit_submit() {  

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "clock-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "clock-designer-javascript.twig", "/srv/xibo-cms/modules/clock-designer-javascript.twig");
    }
}

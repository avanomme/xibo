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

/* video-designer-javascript.twig */
class __TwigTemplate_8342ad2d8f05e1590fc6cb97d136ecdc11462229cefa496fdff5460a349791c6 extends Template
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
    function video_form_edit_open() {

        var form = \$(this).find('form');
        // Set command code field, using the helper ()
        formHelpers.setupConditionalInputFields(
            form.find('#duration, #useDuration'), //triggerFields
            form.find('.loop-fields'), //targetFields
            form.data('mediaDuration'), //compareValue
            function (compare) {
                var valueComparison = parseFloat(form.find('#duration').val()) > parseFloat(compare);
                var useDurationIsChecked = form.find('#useDuration').is(':checked');
                return valueComparison && useDurationIsChecked;
            } //conditionTest
        );

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(form, '#useDuration', '.duration-fields');


        formHelpers.mediaEditFormOpen(this);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "video-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "video-designer-javascript.twig", "/srv/xibo-cms/modules/video-designer-javascript.twig");
    }
}

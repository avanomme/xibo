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

/* datasetticker-designer-javascript.twig */
class __TwigTemplate_3c4cd871c90237647d2e6dc7ff14933779785c58f2bf3ec7cf73224e775d3e83 extends Template
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
    function datasetticker_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            var dataSetId = \$(this).find('form').data().elementOptions.dataSetId;

            if( dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set clock type input field, using the helper ()
            formHelpers.setupObjectValueInputFields(\$(this), '#effect', ['.effect-controls'], ['none'], true);

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Configure the query for sorting and filtering
            formHelpers.configureQueryBuilder(this, datasetQueryBuilderTranslations);

            // Setup editors
            formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));
            
            // Initialise CKEditor for the noDataMessage
            formHelpers.setupDualTypeTextArea(this, 'noDataMessage');
        }
    }

    // Runs before form submit
    function datasetticker_form_edit_submit() {

        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#dataSetTickerForm2\");

            // Clean the previous generated hidden dataSetColumns from the form
            form.find('input[name=\"dataSetColumnId[]\"]').remove();

            // Add all the selected columns to the form as hidden input fields
            \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
                form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
            });

            // Submit the form
            form.data(\"apply\", true);
            
            formHelpers.updateCKEditor();
        }
    }

</script>";
    }

    public function getTemplateName()
    {
        return "datasetticker-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "datasetticker-designer-javascript.twig", "/srv/xibo-cms/modules/datasetticker-designer-javascript.twig");
    }
}

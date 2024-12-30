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

/* datasetview-designer-javascript.twig */
class __TwigTemplate_5e76ec3432532002070eb6d0f67cfb1ca535385f99d31cee7f31e35555112dd8 extends Template
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
    function datasetview_form_edit_open() {

        if(\$(this).find('form').data('formStep') === 1) {
            // If data set exists, set the drop-down to that value
            var dataSetId = \$(this).find('form').data().elementOptions.dataSetId;
            
            if(dataSetId !== undefined) {
                \$(this).find('#dataSetId').val(dataSetId);
            }
        } else if(\$(this).find('form').data('formStep') === 2) {
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

            // Set override template field, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');

            // Set clock type input field, using the helper ()
            formHelpers.setupObjectValueInputFields(\$(this), '#templateId', ['.template-selector-default'], ['empty']);

            // Set order and filtering clauses fields, using the helper ()
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useOrderingClause', '.order-clause-field', '#orderClause');
            formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useFilteringClause', '.filter-clause-field', '#filterClause');

            // Initialise CKEditor for the noDataMessage
            formHelpers.setupDualTypeTextArea(this, 'noDataMessage');

            // Setup template override
            formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#styleSheet': 'css'
            });

            dataSetFormSetup(this);
        }
    }

    // Runs before form submit
    function datasetview_form_edit_submit() {
        
        if(\$(this).find('form').data('formStep') === 2) {
            var form = \$(\"#dataSetViewEditForm2\");

            // Clean the previous generated hidden dataSetColumns from the form
            form.find('input[name=\"dataSetColumnId[]\"]').remove();

            // Add all the selected columns to the form as hidden input fields
            \$(\$(\"#columnsIn\").sortable('toArray')).each(function() {
                form.append('<input type=\"hidden\" name=\"dataSetColumnId[]\" value=\"' + this + '\" />');
            });

            form.data(\"apply\", true);
            
            formHelpers.updateCKEditor();
        }
    }

    function dataSetFormSetup(dialog) {

        // Setup lists drag and sort ( with double click )
        \$(\"#columnsIn, #columnsOut\").sortable({
            connectWith: '.connectedSortable',
            dropOnEmpty: true
        }).disableSelection();
        \$(\".li-sortable\", dialog).dblclick(switchLists);

        // Configure the query for sorting and filtering
        formHelpers.configureQueryBuilder(dialog, datasetQueryBuilderTranslations);

        // Populate the font list with options
        var \$fontFamily = \$(dialog).find(\"#fontFamily\");
        \$.ajax({
            method: \"GET\",
            url: \$fontFamily.data('searchUrl'),
            success: function(res) {
                if (res.success) {
                    \$.each(res.data, function(index, element) {
                        if (\$fontFamily.data('value') === element.familyName) {
                            \$fontFamily.append(\$('<option value=\"' + element.familyName + '\" selected>' + element.displayName + '</option>'));
                        } else {
                            \$fontFamily.append(\$('<option value=\"' + element.familyName + '\">' + element.displayName + '</option>'));
                        }
                    });
                }
            }
        });

        if(\$(dialog).hasClass('modal')) {
            \$(dialog).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    destroyColorPicker(\$(dialog).find(\".XiboColorPicker\"));
                }
            });
        }
    }
</script>";
    }

    public function getTemplateName()
    {
        return "datasetview-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "datasetview-designer-javascript.twig", "/srv/xibo-cms/modules/datasetview-designer-javascript.twig");
    }
}

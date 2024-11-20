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

/* action-designer-javascript.twig */
class __TwigTemplate_f116e13802be3b6c3c76894829b34497573fdba34b0de817c8109a491c759c67 extends Template
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
    function reloadLayoutEditorData() {
        // Reload layout designer data and show the target action tab
        if(lD != undefined) {
            lD.propertiesPanel.openTabOnRender = 'a[href=\"#actionTab\"]';
            lD.reloadData(lD.layout);
        }
    }

    function actionFormOpen(dialog) {
        onTargetChange(dialog);

        \$(dialog).find(\"#target\").on('change', function () {
            onTargetChange(dialog);
        });

        onActionTypeChange(dialog);

        \$(dialog).find(\"#actionType\").on('change', function () {
            onActionTypeChange(dialog);
        });

        onTriggerChange(dialog);
        \$(dialog).find(\"#triggerType\").on('change', function() {
            onTriggerChange(dialog);
        })

        onTargetWidgetChange(dialog);
        \$(dialog).find(\"#widgetId, #actionType, #target\").on('change', function() {
            onTargetWidgetChange(dialog);
        })

        // On modal close, reload layout designer data
        \$(dialog).on('hidden.bs.modal', reloadLayoutEditorData);
    }

    function actionFormDeleteOpen(dialog) {
        // On confirm deletion, reload layout designer data
        \$(dialog).find('.save-button').on('click', reloadLayoutEditorData);
    }

    function onTargetChange(dialog) {
        var target = \$(dialog).find(\"#target\").val();
        var targetId = \$(dialog).find(\".targetid-control\");

        if (target === 'region') {
            targetId.removeClass(\"d-none\");
            targetId.find('select').removeAttr('disabled');
            targetId.find('input[type=\"hidden\"').remove();
            
        } else {
            \$('#targetId').val('');
            targetId.addClass(\"d-none\");
        }
    }

    function onActionTypeChange(dialog) {
        var actionType = \$(dialog).find('#actionType').val();

        var navLayout = \$(dialog).find(\".nav-control-layout\");
        var navWidget = \$(dialog).find(\".nav-control-widget\");
        var target = \$(dialog).find(\".target-control\");

        if (actionType === 'navLayout') {
            // nav Layout, hide Widget and Target dropdowns and clear corresponding values
            navLayout.removeClass(\"d-none\");
            navWidget.addClass(\"d-none\");
            \$(\"#target\").val(\"screen\").change();
            target.addClass(\"d-none\");
            \$('#widgetId').val('');
            \$('#targetId').val('');
        } else if (actionType === 'navWidget') {
            // nav Widget, hide LayoutCode and clear its value
            navLayout.addClass(\"d-none\");
            navWidget.removeClass(\"d-none\");
            target.removeClass(\"d-none\");
            \$('#layoutCode').val('');
        } else {
            // not in nav Action Type, clear values, hide
            navLayout.addClass(\"d-none\");
            navWidget.addClass(\"d-none\");
            target.removeClass(\"d-none\");
            \$('#widgetId').val('');
            \$('#layoutCode').val('');
        }
    }

    function onTriggerChange(dialog) {
        var triggerType = \$(dialog).find(\"#triggerType\").val();
        var triggerCode = \$(dialog).find(\".trigger-code-control\");

        if (triggerType === 'webhook') {
            triggerCode.removeClass('d-none');
        } else {
            triggerCode.addClass('d-none');
            \$('#triggerCode').val('');
        }
    }

    function onTargetWidgetChange(dialog) {
        var actionType = \$(dialog).find('#actionType').val();
        var target = \$(dialog).find(\"#target\").val();
        var widgetId = \$(dialog).find(\"#widgetId\").val();
        var \$targetId = \$(dialog).find('#targetId');
        var \$targetIdContainer = \$(dialog).find('#targetId');

        // Remove warning card
        \$(dialog).find('.nav-control-widget .card.text-danger').remove();
        
        if (actionType === 'navWidget' && target == 'region' && widgetId != undefined) {
            // Set target value to empty
            \$targetId.val('');

            // Disable target region ( since we are setting it programmatically )
            \$targetId.attr('disabled', 'disabled');
            
            // Remove previous temporary element if exists
            \$targetIdContainer.find('input[type=\"hidden\"').remove();

            if(widgetId == '') {
                return true;
            }

            // Get layout designer element
            var widget = lD.getElementByTypeAndId('widget', 'widget_' + lD.layout.drawer.regionId + '_' + widgetId, 'drawer');
            var widgetTargetRegion = widget.targetRegionId;

            if(widgetTargetRegion == undefined) {
                // Show warning to select a target region in the drawer
                \$(dialog).find('.nav-control-widget').append(\$('<div class=\"card bg-light p-2 text-danger offset-sm-2 col-sm-10 text-center form-error\">";
        // line 153
        echo twig_escape_filter($this->env, __("Select a target region for this widget in the layout designer drawer!"), "html", null, true);
        echo "</div>'));
            } else {
                if(\$targetId.find('option[value=\"' + widgetTargetRegion + '\"]').length > 0) {
                    // Change the target value to the target region for the selected widget
                    \$targetId.val(widgetTargetRegion);
                } else {
                    console.error('";
        // line 159
        echo twig_escape_filter($this->env, __("Something went wrong: target region is not available in the current layout"), "html", null, true);
        echo "');
                }
            }

            // Create a temporary input to submit the disabled select value
            \$targetIdContainer.append('<input type=\"hidden\" name=\"' + \$targetId.attr('name')  + '\" value=\"' + \$targetId.val() + '\" />');
        } else {
            // Call onTargetChange again to check if we need to reshow the region target
            onTargetChange(dialog);
        }
    }

    function showActionsGrid(source, sourceId) {
        // create the table only when we are on Action tab
        \$('.nav-tabs a').on('shown.bs.tab', function(event) {
            if (\$(event.target).hasClass('action-tab')) {
                // Expose the button
                \$('.action-button-add').removeClass(\"d-none\");

                // initialize the table only if it's not already initialized
                if (!\$.fn.DataTable.isDataTable('#actions')) {
                    // Configure the DataTable
                    var table = \$(\"#actions\").DataTable({
                        \"language\": dataTablesLanguage,
                        serverSide: true,
                        stateSave: true,
                        stateDuration: 0,
                        \"filter\": false,
                        searchDelay: 3000,
                        \"order\": [[0, \"asc\"]],
                        ajax: {
                            url: \"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.search"), "html", null, true);
        echo "\",
                            \"data\": function (d) {
                                \$.extend(d, {
                                    \"source\": source,
                                    \"sourceId\": sourceId
                                });
                            }
                        },
                        \"columns\": [
                            {\"data\": \"actionId\", \"visible\": false},
                            {\"data\": \"ownerId\", \"visible\": false},
                            {
                                \"data\": \"triggerType\",
                                \"render\": function(data, type, row, meta) {
                                    if (type === \"display\") {
                                        if (data === \"touch\") {
                                            return \"";
        // line 206
        echo twig_escape_filter($this->env, __("Touch/Click"), "html", null, true);
        echo "\";
                                        } else if (data === \"webhook\") {
                                            return \"";
        // line 208
        echo twig_escape_filter($this->env, __("Web hook"), "html", null, true);
        echo "\"
                                        } else {
                                            return data;
                                        }
                                    } else {
                                        return data;
                                    }
                                }
                            },
                            {\"data\": \"triggerCode\", \"visible\": false},
                            {
                                \"data\": \"actionType\",
                                \"render\": function(data, type, row, meta) {
                                    if (type === \"display\") {
                                        if (data === \"next\") {
                                            return \"";
        // line 223
        echo twig_escape_filter($this->env, __("Next"), "html", null, true);
        echo "\";
                                        } else if (data === \"previous\") {
                                            return \"";
        // line 225
        echo twig_escape_filter($this->env, __("Previous"), "html", null, true);
        echo "\"
                                        } else if (data === \"navLayout\") {
                                            return \"";
        // line 227
        echo twig_escape_filter($this->env, __("Navigate to Layout"), "html", null, true);
        echo "\"
                                        } else if (data === \"navWidget\") {
                                            return \"";
        // line 229
        echo twig_escape_filter($this->env, __("Navigate to Widget"), "html", null, true);
        echo "\"
                                        } else {
                                            return data;
                                        }
                                    } else {
                                        return data;
                                    }
                                }
                            },
                            {
                                \"data\": \"target\",
                                \"render\": function(data, type, row, meta) {
                                    if (type === \"display\") {
                                        if (data === \"region\") {
                                            return \"";
        // line 243
        echo twig_escape_filter($this->env, __("Region"), "html", null, true);
        echo "\";
                                        } else if (data === \"screen\") {
                                            return \"";
        // line 245
        echo twig_escape_filter($this->env, __("Screen"), "html", null, true);
        echo "\"
                                        } else {
                                            return data;
                                        }
                                    } else {
                                        return data;
                                    }
                                }
                            },
                            {
                                \"data\": \"targetId\",
                                \"render\": function(data, type, row, meta) {
                                    if (type === \"display\" && data !== null && data !== \"\") {
                                        return \"<span title=\\\"\" + data + \"\\\">\" + row.regionName + \"</span>\";
                                    } else {
                                        return data;
                                    }
                                },
                                \"visible\": false
                            },
                            {
                                \"data\": \"widgetId\",
                                \"render\": function(data, type, row, meta) {
                                    if (type === \"display\" && data !== null && data !== \"\") {
                                        return \"<span title=\\\"\" + data + \"\\\">\" + row.widgetName + \"</span>\";
                                    } else {
                                        return data;
                                    }
                                },
                                \"visible\": false
                            },
                            {\"data\": \"layoutCode\"},
                            {
                                \"orderable\": false,
                                \"data\": dataTableButtonsColumn
                            }
                        ]
                    });
                    table.on('draw', dataTableDraw);
                    table.on('processing.dt', dataTableProcessing);
                    dataTableAddButtons(table, \$('#actions_wrapper').find('.dataTables_buttons'), false);
                }
            } else {
                // Hide the button
                \$('.action-button-add').addClass(\"d-none\");
            }
        });
    }


</script>";
    }

    public function getTemplateName()
    {
        return "action-designer-javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 245,  286 => 243,  269 => 229,  264 => 227,  259 => 225,  254 => 223,  236 => 208,  231 => 206,  212 => 190,  178 => 159,  169 => 153,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "action-designer-javascript.twig", "/srv/xibo-cms/views/action-designer-javascript.twig");
    }
}

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

/* layout-page.twig */
class __TwigTemplate_ad14c6592ede8c2658da1ca6957e45161e7b6114a37425182fa35d3c588a15a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-page.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("authed.twig", "layout-page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Layouts"), "html", null, true);
        echo " | ";
    }

    // line 6
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "layout.add"], "method", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" data-modal-size=\"extra-large\" title=\"";
            // line 9
            echo __("Add a new Layout and jump to the layout designer.");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Layout");
            echo "</button>
        <button class=\"btn btn-info\" id=\"layoutUploadForm\" title=\"";
            // line 10
            echo __("Import a Layout from a ZIP file.");
            echo "\" href=\"#\"> <i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
            echo __("Import");
            echo "</button>
    </div>
    ";
        }
    }

    // line 15
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 17
        echo __("Layouts");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-type=\"layout\" data-grid-name=\"layoutView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"true\"><span>";
        // line 23
        echo __("General");
        echo "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"false\"><span>";
        // line 24
        echo __("Advanced");
        echo "</span></a></li>
                        </ul>
                        <form class=\"form-inline d-block\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\" role=\"tabpanel\">
                                    ";
        // line 29
        ob_start(function () { return ''; });
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["campaignId", ($context["title"] ?? null)], 30, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 32
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["layout", ($context["title"] ?? null)], 33, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 35)) {
            // line 36
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 40
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 40, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 42
        echo "
                                    ";
        // line 43
        ob_start(function () { return ''; });
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["codeLike", ($context["title"] ?? null)], 44, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 46
        $context["attributes"] = [0 => ["name" => "data-allow-clear", "value" => "true"], 1 => ["name" => "data-placeholder--id", "value" => null], 2 => ["name" => "data-placeholder--value", "value" => ""]];
        // line 51
        echo "
                                    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displaygroup.view"], "method", false, false, false, 52)) {
            // line 53
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Display Group");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Show Layouts active on the selected Display / Display Group");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_dropdown", ["activeDisplayGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["displayGroupId" => null, "displayGroup" => ""]], ($context["displayGroups"] ?? null)), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 55, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 57
        echo "
                                    ";
        // line 58
        ob_start(function () { return ''; });
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null)), "userId", "userName", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 60, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 62
        ob_start(function () { return ''; });
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null)), "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 64, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 66
        ob_start(function () { return ''; });
        echo __("Orientation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                                    ";
        $context["option1"] = __("All");
        // line 68
        echo "                                    ";
        $context["option2"] = __("Landscape");
        // line 69
        echo "                                    ";
        $context["option3"] = __("Portrait");
        // line 70
        echo "                                    ";
        $context["values"] = [0 => ["id" => "", "value" => ($context["option1"] ?? null)], 1 => ["id" => "landscape", "value" => ($context["option2"] ?? null)], 2 => ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 71
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 71, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 73
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 73, $context, $this->getSourceContext());
        echo "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\" role=\"tabpanel\">

                                    ";
        // line 77
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                                    ";
        $context["option1"] = __("Yes");
        // line 79
        echo "                                    ";
        $context["option2"] = __("No");
        // line 80
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 81
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 81, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 83
        ob_start(function () { return ''; });
        echo __("Show");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                                    ";
        $context["option1"] = __("All");
        // line 85
        echo "                                    ";
        $context["option2"] = __("Only Used");
        // line 86
        echo "                                    ";
        $context["option3"] = __("Only Unused");
        // line 87
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 2, "value" => ($context["option2"] ?? null)], 2 => ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 88
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["layoutStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value"], 88, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 90
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                                    ";
        $context["option1"] = __("All");
        // line 92
        echo "                                    ";
        $context["option2"] = __("1st line");
        // line 93
        echo "                                    ";
        $context["option3"] = __("Widget List");
        // line 94
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 2, "value" => ($context["option2"] ?? null)], 2 => ["id" => 3, "value" => ($context["option3"] ?? null)]];
        // line 95
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["showDescriptionId", "single", ($context["title"] ?? null), 2, ($context["values"] ?? null), "id", "value"], 95, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "library.view"], "method", false, false, false, 97)) {
            // line 98
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Media");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 99
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_input", ["mediaLike", ($context["title"] ?? null)], 99, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 101
        echo "
                                    ";
        // line 102
        ob_start(function () { return ''; });
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null)], 103, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-2 p-3 bg-light\" id=\"grid-folder-filter\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 114
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>

                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 120
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    
                    <div id=\"datatable-container\" class=\"card col-sm-10 pt-4 px-2\">
                        <div class=\"XiboData\">
                            <table id=\"layouts\" class=\"table table-striped responsive nowrap\" data-content-type=\"layout\" data-content-id-name=\"layoutId\" data-state-preference-name=\"layoutGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 129
        echo __("ID");
        echo "</th>
                                        <th>";
        // line 130
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 131
        echo __("Status");
        echo "</th>
                                        <th>";
        // line 132
        echo __("Description");
        echo "</th>
                                        <th>";
        // line 133
        echo __("Duration");
        echo "</th>
                                        ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 134)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 135
        echo "                                        <th>";
        echo __("Orientation");
        echo "</th>
                                        <th>";
        // line 136
        echo __("Thumbnail");
        echo "</th>
                                        <th>";
        // line 137
        echo __("Owner");
        echo "</th>
                                        <th>";
        // line 138
        echo __("Sharing");
        echo "</th>
                                        <th>";
        // line 139
        echo __("Valid?");
        echo "</th>
                                        <th>";
        // line 140
        echo __("Stats?");
        echo "</th>
                                        <th>";
        // line 141
        echo __("Created");
        echo "</th>
                                        <th>";
        // line 142
        echo __("Modified");
        echo "</th>
                                        <th>";
        // line 143
        echo __("Layout ID");
        echo "</th>
                                        <th>";
        // line 144
        echo __("Code");
        echo "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 160
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {
            ";
        // line 164
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 164)) {
            // line 165
            echo "            disableFolders();
            ";
        }
        // line 167
        echo "
            table = \$(\"#layouts\").DataTable({
                language: dataTablesLanguage,
                lengthMenu: [10, 25, 50, 100, 250, 500],
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                dataType: 'json',
                order: [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                columns: [
                    {\"data\": \"campaignId\", responsivePriority: 1},
                    {
                        \"data\": \"layout\",
                        responsivePriority: 2,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"name\": \"publishedStatus\",
                        responsivePriority: 2,
                        \"data\": function (data, type) {
                            if (data.publishedDate != null) {
                                var now = moment();
                                var published = moment(data.publishedDate);
                                var differenceMinutes = published.diff(now, 'minutes');
                                var momentDifference = moment(now).to(published);

                                if (differenceMinutes < -5) {
                                    return data.publishedStatus.concat(\" - \", translations.publishedStatusFailed);
                                } else {
                                    return data.publishedStatus.concat(\" - \", translations.publishedStatusFuture + \" \" + momentDifference);
                                }
                            } else {
                                return data.publishedStatus;
                            }

                        }
                    },
                    {
                        \"name\": \"description\",
                        \"data\": null,
                        responsivePriority: 10,
                        \"render\": {\"_\": \"description\", \"display\": \"descriptionFormatted\", \"sort\": \"description\"}
                    },
                    {
                        \"name\": \"duration\",
                        responsivePriority: 3,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.duration;

                            return dataTableTimeFromSeconds(data.duration, type);
                        }
                    },
                    ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 232)) {
            echo "{
                        \"sortable\": false,
                        \"visible\": false,
                        responsivePriority: 3,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 238
        echo "                    { data: 'orientation', responsivePriority: 10, visible: false},
                    {
                        responsivePriority: 5,
                        data: 'thumbnail',
                        render: function(data, type, row) {
                          if (type !== 'display') {
                            return row.layoutId;
                          }
                          if (data) {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                '<img class=\"img-fluid\" src=\"' + data + '\" alt=\"";
        // line 248
        echo twig_escape_filter($this->env, __("Thumbnail"), "html", null, true);
        echo "\" />' +
                                '</a>';
                          } else {
                            var addUrl = '";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        echo "'.replace(':id', row.layoutId);
                            return '<a class=\"img-replace generate-layout-thumbnail\" data-type=\"image\" href=\"' + addUrl + '\">' +
                                '<img class=\"img-fluid\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/thumbs/placeholder.png"], "method", false, false, false, 253), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, __("Add Thumbnail"), "html", null, true);
        echo "\" />' +
                                '</a>';
                          }
                          return '';
                        },
                        sortable: false
                    },
                    {\"data\": \"owner\", responsivePriority: 4},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 4,
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"name\": \"status\",
                        responsivePriority: 3,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.status;

                            var icon = \"\";
                            if (data.status == 1)
                                icon = \"fa-check\";
                            else if (data.status == 2)
                                icon = \"fa-exclamation\";
                            else if (data.status == 3)
                                icon = \"fa-cogs\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.statusDescription) + ((data.statusMessage == null) ? \"\" : \" - \" + (data.statusMessage)) + '\"></span>';
                        }
                    },
                    {
                        \"name\": \"enableStat\",
                        responsivePriority: 4,
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 1)
                                icon = \"fa-check\";
                            else
                                icon = \"fa-times\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.enableStatDescription) + '\"></span>';
                        }
                    },
                    {
                        \"data\": \"createdDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        data: \"modifiedDt\",
                        responsivePriority: 6,
                        render: dataTableDateFromIso,
                        visible: true
                    },
                    {
                      data: \"layoutId\",
                      visible: false,
                      responsivePriority: 4
                    },
                    {\"data\": \"code\", \"visible\":false, responsivePriority: 4},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', { form: \$(\"#layouts\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
            table.on('draw', function(e, settings) {
              \$('#' + e.target.id + ' .generate-layout-thumbnail').on('click', function(e) {
                e.preventDefault();
                var \$anchor = \$(this);
                \$.ajax({
                  url: \$anchor.attr('href'),
                  method: 'POST',
                  success: function() {
                    \$anchor.find('img').attr('src', \$anchor.attr('href'));
                    \$anchor.removeClass('generate-layout-thumbnail').attr('data-toggle', 'lightbox');
                  }
                });
              });
            });
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#layouts_wrapper').find('.dataTables_buttons'));
        });

        \$(\"#layoutUploadForm\").click(function(e) {
            e.preventDefault();
            var currentWorkingFolderId = \$('#folderId').val();

            // Open the upload dialog with our options.
            openUploadForm({
                url: \"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.import"), "html", null, true);
        echo "\",
                title: \"";
        // line 353
        echo twig_escape_filter($this->env, __("Upload Layout"), "html", null, true);
        echo "\",
                videoImageCovers: false,
                buttons: {
                    main: {
                        label: \"";
        // line 357
        echo twig_escape_filter($this->env, __("Done"), "html", null, true);
        echo "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    layoutImport: true,
                    updateInAllChecked: ";
        // line 367
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 367), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 368
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 368), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    trans: {
                        addFiles: \"";
        // line 370
        echo twig_escape_filter($this->env, __("Add Layout Export ZIP Files"), "html", null, true);
        echo "\",
                        startUpload: \"";
        // line 371
        echo twig_escape_filter($this->env, __("Start Import"), "html", null, true);
        echo "\",
                        cancelUpload: \"";
        // line 372
        echo twig_escape_filter($this->env, __("Cancel Import"), "html", null, true);
        echo "\",
                        replaceExistingMediaMessage: \"";
        // line 373
        echo twig_escape_filter($this->env, __("Replace Existing Media?"), "html", null, true);
        echo "\",
                        importTagsMessage: \"";
        // line 374
        echo twig_escape_filter($this->env, __("Import Tags?"), "html", null, true);
        echo "\",
                        useExistingDataSetsMessage: \"";
        // line 375
        echo twig_escape_filter($this->env, __("Use existing DataSets matched by name?"), "html", null, true);
        echo "\",
                        dataSetDataMessage: \"";
        // line 376
        echo twig_escape_filter($this->env, __("Import DataSet Data?"), "html", null, true);
        echo "\",
                        selectFolder: \"";
        // line 377
        echo twig_escape_filter($this->env, __("Select Folder"), "html", null, true);
        echo "\",
                        selectFolderTitle: \"";
        // line 378
        echo twig_escape_filter($this->env, __("Change Current Folder location"), "html", null, true);
        echo "\",
                        selectedFolder: \"";
        // line 379
        echo twig_escape_filter($this->env, __("Current Folder"), "html", null, true);
        echo ":\",
                        selectedFolderTitle: \"";
        // line 380
        echo twig_escape_filter($this->env, __("Upload files to this Folder"), "html", null, true);
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 383), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 384), "html", null, true);
        echo "\",
                        validExt: \"zip\"
                    },
                    currentWorkingFolderId: currentWorkingFolderId,
                    folderSelector: true
                },
                formOpenedEvent: function () {
                    // Configure the active behaviour of the checkboxes
                    \$(\"#useExistingDataSets\").on(\"click\", function () {
                        \$(\"#importDataSetData\").prop(\"disabled\", (\$(this).is(\":checked\")));
                    });
                },
                uploadDoneEvent: function (data) {
                    XiboDialogClose();
                    table.ajax.reload();
                }
            });
        });

        function layoutAddFormOpen(dialog) {
          // Form
          var \$form = \$('#layoutAddForm');

          // Popovers
          \$(dialog).find('[data-toggle=\"popover\"]').popover();

          // Stepper
          var navListItems = \$(dialog).find('div.stepper-nav div a'),
              allWells = \$(dialog).find('.stepper-panel'),
              stepWizard = \$(dialog).find('.stepwizard');

          navListItems.click(function (e) {
            e.preventDefault();
            var \$target = \$(\$(this).attr('href')),
                \$item = \$(this);

            if (!\$item.attr('disabled')) {
              // Set all step links to inactive
              navListItems
                .removeClass('btn-success')
                .addClass('btn-default');

              // Activate this specific one
              \$item.addClass('btn-success');

              // Hide all the panels and show this specific one
              allWells.hide();
              \$target.show();
              \$target.find('input:eq(0)').focus();

              // Set the active panel on the links
              stepWizard.data('active', \$target.prop('id'))

              // Is the next action to finish?
              if (\$target.data('next') === 'finished') {
                \$(dialog).find('#layout-create-stepper-next-button').html(\"";
        // line 439
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "\");
              } else {
                \$(dialog).find('#layout-create-stepper-next-button').html(\"";
        // line 441
        echo twig_escape_filter($this->env, __("Next"), "html", null, true);
        echo "\")
              }
            }
          });

          // Add some buttons.
          \$(dialog).
              find('.modal-footer').
              append(\$('<a class=\"btn btn-white\">').html(\"";
        // line 449
        echo twig_escape_filter($this->env, __("Help"), "html", null, true);
        echo "\").click(function(e) {
                e.preventDefault();
                XiboHelpRender(\$form.data().helpUrl);
              })).
              append(
                  \$('<a class=\"btn btn-white\">').html(\"";
        // line 454
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\").click(function(e) {
                    e.preventDefault();
                    XiboDialogClose();
                  })).
              append(\$('<a id=\"layout-create-stepper-next-button\" class=\"btn btn-primary disabled\">').
                  html(\"";
        // line 459
        echo twig_escape_filter($this->env, __("Next"), "html", null, true);
        echo "\").
                  click(function(e) {
                    e.preventDefault();
                    var steps = \$(dialog).find('.stepwizard'),
                        curStep = \$(dialog).find('#' + steps.data('active')),
                        curInputs = curStep.find('input[type=\\'text\\'],input[type=\\'url\\']'),
                        isValid = true;

                    // What is the next step?
                    if (curStep.data('next') === 'finished') {
                      // add a progress spinning to the button
                      var \$button = \$(this);
                      \$button.append(' <span class=\"saving fa fa-cog fa-spin\"></span>');
                      \$button.addClass(\"disabled\");

                      // Submit the form thereby creating the layout
                      \$('#layoutAddForm').trigger('submit');
                    } else {
                      var nextStepWizard = steps.find('a[href=\\'#' + curStep.data('next') + '\\']');

                      \$(dialog).find('.form-group').removeClass('has-error');
                      for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                          isValid = false;
                          \$(curInputs[i]).closest('.form-group').addClass('has-error');
                        }
                      }

                      if (isValid) {
                        nextStepWizard.removeAttr('disabled').trigger('click');
                      }
                    }
                  }));

          // Card handling
          // Get our template ready to roll.
          var cardsTemplate = Handlebars.compile(\$('#template-layout-add-template-cards').html());
          var cardColumn = \$(dialog).find('#layout-add-templates');

          // Initialise masonary - we do this after we've added our first card.
          var masonry;
          masonry = new Masonry('#layout-add-templates', {
            percentPosition: true
          });

          // filter form
          var \$filter = \$('#layout-add-templates-filter');
          var filter = {
            start: 0,
            length: 15,
          };
          filter = \$.extend(filter, \$filter.serializeObject());

          // track start/length
          \$filter.on('change', function() {
            // Clear everything.
            masonry.remove(cardColumn.find('.template-card'));

            // Run a new query.
            filter = \$.extend(filter, \$filter.serializeObject());

            if (!filter.template && (filter.provider && (filter.provider === 'both' || filter.provider === 'local'))) {
              loadPredefined(cardsTemplate, cardColumn, masonry, filter);
            }

            loadTemplates(cardsTemplate, cardColumn, masonry, filter, 'both');
          });

          if (filter.provider && (filter.provider === 'both' || filter.provider === 'local')) {
            loadPredefined(cardsTemplate, cardColumn, masonry, filter);
          }

          cardColumn.imagesLoaded(function() {
            // All images loaded
            // Make a request to get our templates.
            loadTemplates(cardsTemplate, cardColumn, masonry, filter, 'both');
          }).progress(function() {
            // Layout the image card we've loaded
            masonry.layout();
          });

          // Add the more button
          \$(dialog).find('#layout-add-templates-more').on('click', function(e) {
            e.preventDefault();
            filter.start = filter.start + filter.length;
            loadTemplates(cardsTemplate, cardColumn, masonry, filter, 'both');
          });

          // Folder selector.
          if (\$('#folder-tree-form-modal').length === 0) {
            // compile tree folder modal and append it to Form
            var folderTreeModal = Handlebars.compile(\$('#folder-tree-template').html());
            var treeConfig = {\"container\": \"container-folder-form-tree\", \"modal\": \"folder-tree-form-modal\"};
            \$(\"body\").append(folderTreeModal(treeConfig));

            \$(\"#folder-tree-form-modal\").on('hidden.bs.modal', function() {
              // Fix for 2nd/overlay modal
              \$('.modal:visible').length && \$(document.body).addClass('modal-open');

              \$(this).data('bs.modal', null);
            });
          }

          // select current working folder if one is selected in the grid
          if (\$('#container-folder-tree').jstree(\"get_selected\", true)[0] !== undefined) {
            \$('#layoutAddForm' + ' #folderId').val(\$('#container-folder-tree').jstree(\"get_selected\", true)[0].id);
          }

          initJsTreeAjax(\$('#folder-tree-form-modal').find('#container-folder-form-tree'), 'layoutAddForm', true, 600);

          // Add a submit handler
          \$('#layoutAddForm').submit(function(e) {
            e.preventDefault();
            var \$form = \$(this);
            var url = \$(this).data().redirect;
            XiboFormSubmit(\$form, null, function(xhr, form) {
              // Remove the cogs/disabled.
              var \$saveButton = \$(this).find('.saving');
              \$saveButton.parent().removeClass('disabled');
              \$saveButton.find('.saving').remove();

              if (xhr.success) {
                // Reload the designer
                XiboRedirect(url.replace(\":id\", xhr.id));
              }
            });
          });
        }

        function loadPredefined(cardsTemplate, cardColumn, masonry, filter) {
          // Add full screen, l-bar-right and l-bar-left
          masonry.addItems(addTemplateCard(cardsTemplate, cardColumn, {
            title: '";
        // line 591
        echo twig_escape_filter($this->env, __("Full screen"), "html", null, true);
        echo "',
            description: '";
        // line 592
        echo twig_escape_filter($this->env, __("Full screen content"), "html", null, true);
        echo "',
            thumbnail: '";
        // line 593
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 593), "html", null, true);
        echo "theme/default/img/layout_grids/full-screen.png',
            source: 'local',
            id: '0|full-screen'
          }));
          masonry.addItems(addTemplateCard(cardsTemplate, cardColumn, {
            title: '";
        // line 598
        echo twig_escape_filter($this->env, __("L shape left"), "html", null, true);
        echo "',
            description: '";
        // line 599
        echo twig_escape_filter($this->env, __("3 regions in an L shape, on the left"), "html", null, true);
        echo "',
            thumbnail: '";
        // line 600
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 600), "html", null, true);
        echo "theme/default/img/layout_grids/l-bar-left.png',
            source: 'local',
            id: '0|l-bar-left'
          }));
          masonry.addItems(addTemplateCard(cardsTemplate, cardColumn, {
            title: '";
        // line 605
        echo twig_escape_filter($this->env, __("L shape right"), "html", null, true);
        echo "',
            description: '";
        // line 606
        echo twig_escape_filter($this->env, __("3 regions in an L shape, on the right"), "html", null, true);
        echo "',
            thumbnail: '";
        // line 607
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 607), "html", null, true);
        echo "theme/default/img/layout_grids/l-bar-right.png',
            source: 'local',
            id: '0|l-bar-right'
          }));

          // Add our blank resolution
          masonry.addItems(addTemplateCard(cardsTemplate, cardColumn, {
            title: '";
        // line 614
        echo twig_escape_filter($this->env, __("Blank"), "html", null, true);
        echo "',
            description: '";
        // line 615
        echo twig_escape_filter($this->env, __("Add your own regions using the editor"), "html", null, true);
        echo "',
            thumbnail: null,
            source: 'local',
            id: '0|blank'
          }));
        }

        function loadTemplates(cardsTemplate, cardColumn, masonry, filter) {
          var spinner = cardColumn.closest('.modal').find('.panel-footer .spinner-grow');
          var moreButton = cardColumn.closest('.modal').find('#layout-add-templates-more');
          spinner.removeClass('d-none');
          moreButton.prop('disabled', true);
          \$.ajax({
            method: 'GET',
            url: '";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search.all"), "html", null, true);
        echo "',
            data: filter,
            success: function(response) {
              if (response && response.data && response.data.length > 0) {
                \$.each(response.data, function(index, el) {
                  masonry.addItems(addTemplateCard(cardsTemplate, cardColumn, el));
                });

                moreButton.prop('disabled', false);
              } else {
                toastr.info('";
        // line 639
        echo twig_escape_filter($this->env, __("There are no more templates to show"), "html", null, true);
        echo "');
              }

              cardColumn.imagesLoaded().progress(function () {
                masonry.layout();
              });

              spinner.addClass('d-none');
            }
          });
        }

        function addTemplateCard(cardsTemplate, cardColumn, el) {
          el.showFooter = el.orientation || (el.provider && el.provider.logoUrl) || (el.tags && el.tags.length > 0);
          el.thumbnail = el.thumbnail || '";
        // line 653
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 653), "html", null, true);
        echo "theme/default/img/thumbs/placeholder.png';
          var \$element = \$(cardsTemplate(el));
          \$element.find('.card').on('click', function(e) {
            e.preventDefault();
            // Remove all selections.
            cardColumn.find('.border-success').removeClass('border-success');

            // Select this one.
            var \$that = \$(this);
            \$that.addClass('border-success');
            \$('#layout-create-stepper-next-button').removeClass('disabled');

            // If source is local and layoutId is 0, then show the resolution filter otherwise don't
            var layoutId = \$(this).data('layout-id') + \"\";
            var source = \$(this).data('source');
            var download = \$(this).data('download');

            var \$form = \$('#layoutAddForm');
            \$form.find('input[name=\"layoutId\"]').val(layoutId);
            \$form.find('input[name=\"source\"]').val(source);
            \$form.find('input[name=\"download\"]').val(download);

            if (layoutId.startsWith(\"0|\")) {
              \$form.find('.resolution-group').removeClass('d-none');
            } else {
              \$form.find('.resolution-group').addClass('d-none');
            }
          });
          cardColumn.append(\$element);
          return \$element;
        }

        function layoutExportFormSubmit() {
            var \$form = \$(\"#layoutExportForm\");
            window.location = \$form.attr(\"action\") + \"?\" + \$form.serialize();

            setTimeout(function() {
                XiboDialogClose();
            }, 1000);
        }

        function assignLayoutToCampaignFormSubmit() {
            var form = \$(\"#layoutAssignCampaignForm\");

            var url = form.prop(\"action\").replace(\":id\", form.find(\"#campaignId\").val());

            \$.ajax({
                type: form.attr(\"method\"),
                url: url,
                data: {layoutId: form.data().layoutId},
                cache: false,
                dataType:\"json\",
                success: XiboSubmitResponse
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {
            var \$input = \$('<input type=checkbox id=\"enableStat\" name=\"enableStat\"> ";
        // line 710
        echo twig_escape_filter($this->env, __("Enable Stats Collection?"), "html", null, true);
        echo " </input>');
            var \$helpText = \$('<span class=\"help-block\">";
        // line 711
        echo twig_escape_filter($this->env, __("Check to enable the collection of Proof of Play statistics for the selected items."), "html", null, true);
        echo "</span>');

            \$input.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(\$input);
            \$(dialog).find('.modal-body').append(\$helpText);
        }

        function layoutPublishFormOpen() {
          // Nothing to do here, but we use the same form on the layout designer and have a callback registered there
        }

    </script>
";
    }

    // line 728
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 729
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "

    ";
        // line 749
        echo "
    <script type=\"text/x-handlebars-template\" id=\"template-layout-add-template-cards\">
        <div class=\"template-card w-25 p-2\">
            <div class=\"card\" data-layout-id=\"{{ id }}\" data-source=\"{{ source }}\" data-download=\"{{ download }}\">
                {{#if thumbnail}}<img class=\"card-img-top\" src=\"{{ thumbnail }}\" alt=\"{{ title }}\">{{/if}}
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ title }}</h5>
                    {{#if description}}<p class=\"card-text\" style=\"max-height:200px; overflow-y: auto\"><span class=\"text-muted\">{{{description}}}</span></p>{{/if}}
                </div>
                {{#if showFooter }}
                <div class=\"card-footer\">
                    {{#if orientation}}
                        <span class=\"badge badge-pill badge-primary\">{{orientation}}</span>
                    {{/if}}
                    {{#each tags}}
                        <span class=\"badge badge-pill badge-info\">{{this}}</span>
                    {{/each}}
                    {{#if provider.logoUrl}}
                        <img class=\"provider-image\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 749), "html", null, true);
        // line 756
        echo "{{ provider.logoUrl }}\" alt=\"{{ provider.message }}\">
                    {{/if}}
                </div>
                {{/if}}
            </div>
        </div>
    </script>
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1222 => 756,  1201 => 749,  1195 => 729,  1191 => 728,  1171 => 711,  1167 => 710,  1107 => 653,  1090 => 639,  1077 => 629,  1060 => 615,  1056 => 614,  1046 => 607,  1042 => 606,  1038 => 605,  1030 => 600,  1026 => 599,  1022 => 598,  1014 => 593,  1010 => 592,  1006 => 591,  871 => 459,  863 => 454,  855 => 449,  844 => 441,  839 => 439,  781 => 384,  777 => 383,  771 => 380,  767 => 379,  763 => 378,  759 => 377,  755 => 376,  751 => 375,  747 => 374,  743 => 373,  739 => 372,  735 => 371,  731 => 370,  722 => 368,  714 => 367,  701 => 357,  694 => 353,  690 => 352,  586 => 253,  581 => 251,  575 => 248,  563 => 238,  554 => 232,  502 => 183,  484 => 167,  480 => 165,  478 => 164,  473 => 161,  469 => 160,  450 => 144,  446 => 143,  442 => 142,  438 => 141,  434 => 140,  430 => 139,  426 => 138,  422 => 137,  418 => 136,  413 => 135,  407 => 134,  403 => 133,  399 => 132,  395 => 131,  391 => 130,  387 => 129,  375 => 120,  364 => 114,  349 => 103,  345 => 102,  342 => 101,  336 => 99,  331 => 98,  329 => 97,  323 => 95,  320 => 94,  317 => 93,  314 => 92,  311 => 91,  307 => 90,  301 => 88,  298 => 87,  295 => 86,  292 => 85,  289 => 84,  285 => 83,  279 => 81,  276 => 80,  273 => 79,  270 => 78,  266 => 77,  259 => 73,  253 => 71,  250 => 70,  247 => 69,  244 => 68,  241 => 67,  237 => 66,  231 => 64,  226 => 63,  222 => 62,  216 => 60,  211 => 59,  207 => 58,  204 => 57,  198 => 55,  193 => 54,  188 => 53,  186 => 52,  183 => 51,  181 => 46,  175 => 44,  171 => 43,  168 => 42,  162 => 40,  157 => 39,  152 => 38,  147 => 37,  142 => 36,  140 => 35,  134 => 33,  130 => 32,  124 => 30,  120 => 29,  112 => 24,  108 => 23,  101 => 19,  96 => 17,  93 => 16,  89 => 15,  79 => 10,  71 => 9,  68 => 8,  65 => 7,  61 => 6,  53 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-page.twig", "/srv/xibo-cms/views/layout-page.twig");
    }
}

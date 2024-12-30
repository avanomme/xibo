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

/* playlist-page.twig */
class __TwigTemplate_90d37f310e2c1be74c18f8c1928d4f7771b9e05ffb773c813337e7fed0e1a6f6 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "playlist-page.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("authed.twig", "playlist-page.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Playlists"), "html", null, true);
        echo " | ";
    }

    // line 26
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "playlist.add"], "method", false, false, false, 27)) {
            // line 28
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton btns\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Playlist");
            echo "</button>
    </div>
    ";
        }
    }

    // line 34
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 36
        echo __("Playlists");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"playlistView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        echo "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Advanced");
        echo "</span></a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\">

                                    ";
        // line 49
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 50, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 52)) {
            // line 53
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 55
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 57, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 59
        echo "
                                    ";
        // line 60
        $context["attributes"] = [0 => ["name" => "data-live-search", "value" => "true"], 1 => ["name" => "data-selected-text-format", "value" => "count > 4"]];
        // line 64
        echo "
                                    ";
        // line 65
        ob_start(function () { return ''; });
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Show items owned by the selected User.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null)), "userId", "userName", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 67, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 69
        ob_start(function () { return ''; });
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null)), "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 71, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 73
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 73, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 75
        ob_start(function () { return ''; });
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null)], 76, $context, $this->getSourceContext());
        echo "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced-filter\">

                                    ";
        // line 80
        ob_start(function () { return ''; });
        echo __("Show");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                                    ";
        $context["values"] = [0 => ["id" => 1, "value" => "All"], 1 => ["id" => 2, "value" => "Only Used"], 2 => ["id" => 3, "value" => "Only Unused"]];
        // line 82
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["playlistStatusId", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value"], 82, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "library.view"], "method", false, false, false, 84)) {
            // line 85
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Media");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 86
            echo "                                        ";
            echo twig_call_macro($macros["inline"], "macro_input", ["mediaLike", ($context["title"] ?? null)], 86, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 88
        echo "                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-2 p-3 bg-light\" id=\"grid-folder-filter\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 98
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 103
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\" class=\"card col-sm-10 pt-4 px-2\">
                        <div class=\"XiboData\">
                            <table id=\"playlists\" class=\"table table-striped\" data-content-type=\"playlist\"
                                   data-content-id-name=\"playlistId\" data-state-preference-name=\"playlistGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 112
        echo __("ID");
        echo "</th>
                                    <th>";
        // line 113
        echo __("Name");
        echo "</th>
                                    <th>";
        // line 114
        echo __("Duration");
        echo "</th>
                                    ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 115)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 116
        echo "                                    <th>";
        echo __("Dynamic?");
        echo "</th>
                                    <th>";
        // line 117
        echo __("Owner");
        echo "</th>
                                    <th>";
        // line 118
        echo __("Sharing");
        echo "</th>
                                    <th>";
        // line 119
        echo __("Created");
        echo "</th>
                                    <th>";
        // line 120
        echo __("Modified");
        echo "</th>
                                    <th>";
        // line 121
        echo __("Stats?");
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

    <div id=\"dummyLayout\" style=\"display:none\"></div>

    <div id=\"editor-container\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

";
    }

    // line 146
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "    ";
        // line 148
        echo "    ";
        $this->loadTemplate("common.twig", "playlist-page.twig", 148)->display($context);
        // line 149
        echo "
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 150), "html", null, true);
        echo "dist/playlistEditor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

        ";
        // line 154
        echo "        ";
        // line 155
        echo "        ";
        // line 156
        echo "        ";
        // line 157
        echo "
        var table;
        \$(document).ready(function () {

            ";
        // line 161
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 161)) {
            // line 162
            echo "            disableFolders();
            ";
        }
        // line 164
        echo "            
            // Create ourselves a little hidden layout for preview sizing, etc
            \$(\"#dummyLayout\").html('<div id=\"layout\" data-background-color=\"#000000\" style=\"background-color: #000000\" designer_scale=\"1\"><div id=\"region_-1\" zindex=\"1\" tip_scale=\"1\" designer_scale=\"1\" width=\"800\" height=\"450\"></div></div>');

            // Configure the DataTable
            table = \$(\"#playlists\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                \"lengthMenu\": [10, 25, 50, 100, 250, 500],
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    url: \"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"playlistId\", responsivePriority: 2},
                    {
                        \"data\": \"name\",
                        responsivePriority: 3,
                        \"render\": dataTableSpacingPreformatted
                    },
                    {
                        \"data\": \"duration\",
                        responsivePriority: 3,
                        \"render\": function (data, type, row) {
                            if (type !== \"display\" && type !== \"export\")
                                return data;

                            if (row.requiresDurationUpdate === 1) {
                                return '<span class=\"fa fa-clock-o\" title=\"";
        // line 202
        echo "Changes have been made and we are recalculating this Playlists duration";
        echo "\"></span>';
                            } else if (row.requiresDurationUpdate !== 0) {
                                return moment().startOf(\"day\").seconds(data).format(\"H:mm:ss\") + ' <span class=\"fa fa-clock-o\" title=\"";
        // line 204
        echo "This duration will be updated at ";
        echo "' + moment(row.requiresDurationUpdate, \"X\").format(jsDateFormat) + '\"></span>';
                            }

                            return dataTableTimeFromSeconds(data, type, row);
                        }
                    },
                    ";
        // line 210
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 210)) {
            echo "{
                        \"sortable\": false,
                        \"visible\": false,
                        responsivePriority: 4,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 216
        echo "                    {\"data\": \"isDynamic\", \"render\": dataTableTickCrossColumn, responsivePriority: 4},
                    {\"data\": \"owner\", responsivePriority: 4},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 5,
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"data\": \"createdDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"data\": \"modifiedDt\",
                        responsivePriority: 6,
                        \"render\": dataTableDateFromIso,
                        \"visible\": false
                    },
                    {
                        \"name\": \"enableStat\",
                        responsivePriority: 6,
                        \"data\": function (data) {

                            var icon = \"\";
                            if (data.enableStat == 'On')
                                icon = \"fa-check\";
                            else if (data.enableStat == 'Off')
                                icon = \"fa-times\";
                            else
                                icon = \"fa-level-down\";

                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.enableStatDescription) + '\"></span>';
                        }
                    },
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('draw', {form: \$(\"#playlists\").closest(\".XiboGrid\").find(\".FilterDiv form\")}, dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playlists_wrapper').find('.dataTables_buttons'));
        });

        // Playlist Add Form
        // contains a grid on the populate tab
        // hook up the grid
        var mediaTable;
        var nameFilter;
        var tagFilter;
        var exactTags;
        var logicalOperator;
        var logicalOperatorName;

        function playlistEditorFormOpen(formData) {

            // Clear container
            \$('#editor-container').empty();

            // Append form
            \$('#editor-container').append(formData.message);
        }

        function playlistFormOpen(dialog) {
            mediaTable = null;

            \$(dialog).find(\"input[name=filterMediaName]\").on(\"keyup\", _.debounce(function () {
                playlistFormPopulateMediaTable(dialog);
            }, 500));

            \$(dialog).find(\"input[name=filterMediaTag], input[name=exactTags], select[name=logicalOperator], select[name=logicalOperatorName]\").on(\"change\", function () {
                playlistFormPopulateMediaTable(dialog);
            });

            // First time in there
            playlistFormPopulateMediaTable(dialog);

            // Run function to set the form submit behaviour
            playlistAddFormOpen();
        }

        ///
        /// Playlist Usage Form
        ///
        function usageFormOpen(dialog) {
            // Displays tab
            var usageTable = \$(\"#usageReportTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                responsive: true,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.usage", ["id" => ":id"]), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportTable\").data().playlistId),
                    \"data\": function (dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    {\"data\": \"displayId\"},
                    {\"data\": \"display\"},
                    {\"data\": \"description\"}
                ]
            });

            usageTable.on('draw', dataTableDraw);
            usageTable.on('processing.dt', dataTableProcessing);

            // Layouts tab
            var usageTableLayouts = \$(\"#usageReportLayoutsTable\").DataTable({
                \"language\": dataTablesLanguage,
                serverSide: true,
                stateSave: true, stateDuration: 0,
                filter: false,
                searchDelay: 3000,
                responsive: true,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.usage.layouts", ["id" => ":id"]), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().playlistId)
                },
                \"columns\": [
                    {\"data\": \"layoutId\"},
                    {\"data\": \"layout\"},
                    {\"data\": \"description\"},
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }

        function playlistFormPopulateMediaTable(dialog) {
            nameFilter = \$(dialog).find(\"input[name=filterMediaName]\").val();
            tagFilter = \$(dialog).find(\"input[name=filterMediaTag]\").val();
            exactTags = \$(dialog).find(\"input[name=exactTags]\").is(':checked')
            logicalOperator = \$(dialog).find(\"select[name=logicalOperator]\").val();
            logicalOperatorName = \$(dialog).find(\"select[name=logicalOperatorName]\").val();

            if (nameFilter === \"\" && tagFilter === \"\") {
                if (mediaTable != null) {
                    mediaTable.destroy();
                    mediaTable = null;
                    \$(\"#playlistLibraryMedia tbody\").empty();
                }

                return;
            }

            if (mediaTable != null) {
                mediaTable.ajax.reload();
            } else {
                mediaTable = \$(\"#playlistLibraryMedia\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    filter: false,
                    responsive: true,
                    searchDelay: 3000,
                    \"order\": [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                        \"data\": function (d) {
                            \$.extend(
                              d,
                              {
                                media: nameFilter,
                                tags: tagFilter,
                                assignable: 1,
                                exactTags: exactTags,
                                logicalOperator: logicalOperator,
                                logicalOperatorName: logicalOperatorName
                              }
                            );
                        }
                    },
                    \"columns\": [
                        {\"data\": \"mediaId\"},
                        {\"data\": \"name\"},
                        {\"data\": \"mediaType\"},
                        ";
        // line 408
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 408)) {
            echo "{\"data\": dataTableCreateTags},";
        }
        // line 409
        echo "                        {
                            \"name\": \"duration\",
                            \"data\": function (data, type) {
                                if (type !== \"display\")
                                    return data.duration;

                                return moment().startOf(\"day\").seconds(data.duration).format(\"H:mm:ss\");
                            }
                        }
                    ]
                });

                mediaTable.on('processing.dt', dataTableProcessing);
                mediaTable.on('draw', {form: \$(\".playlistForm\")}, dataTableCreateTagEvents);
            }
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 429
        echo __("Off");
        echo "</option>' +
                '<option value=\"On\">";
        // line 430
        echo __("On");
        echo "</option>' +
                '<option value=\"Inherit\">";
        // line 431
        echo __("Inherit");
        echo "</option>' +
                '</select>');

            \$select.on('change', function () {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

        function playlistAddFormOpen() {
            \$(\"#playlistAddForm\").off(\"submit\").submit(function (e) {
                e.preventDefault();
                var form = \$(this);

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType: \"json\",
                    success: function (xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success && xhr.data.isDynamic == 0) {

                            // Open the editor
                            openPlaylistEditorForm(xhr.id);
                        }
                    }
                });
            });
        }

        function openPlaylistEditorForm(playlistId) {
            var requestPath = playlistEditorUrl;

            // replace id if necessary/exists
            requestPath = requestPath.replace(':id', playlistId);

            \$.ajax({
                url: requestPath,
                type: 'GET'
            }).done(function (res) {

                if (!res.success) {
                    // Login Form needed?
                    if (res.login) {
                        window.location.href = window.location.href;
                        location.reload();
                    } else {
                        // Just an error we dont know about
                        if (res.message == undefined) {
                            console.error(res);
                        } else {
                            console.error(res.message);
                        }
                    }
                } else {
                    // Clear container
                    \$('#editor-container').empty();

                    // Append form
                    \$('#editor-container').append(res.html);
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                // Output error to console
                console.error(jqXHR, textStatus, errorThrown);
            });
        }
    </script>

    ";
        // line 504
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 505
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["module"], "layoutDesignerJavaScript", [], "method", false, false, false, 505), ""))) {
                // line 506
                echo "            ";
                $this->loadTemplate((twig_get_attribute($this->env, $this->source, $context["module"], "layoutDesignerJavaScript", [], "method", false, false, false, 506) . ".twig"), "playlist-page.twig", 506)->display($context);
                // line 507
                echo "        ";
            }
            // line 508
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        echo "
";
    }

    public function getTemplateName()
    {
        return "playlist-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 509,  777 => 508,  774 => 507,  771 => 506,  768 => 505,  751 => 504,  675 => 431,  671 => 430,  667 => 429,  645 => 409,  641 => 408,  619 => 389,  569 => 342,  540 => 316,  438 => 216,  429 => 210,  420 => 204,  415 => 202,  392 => 182,  372 => 164,  368 => 162,  366 => 161,  360 => 157,  358 => 156,  356 => 155,  354 => 154,  344 => 150,  341 => 149,  338 => 148,  336 => 147,  332 => 146,  304 => 121,  300 => 120,  296 => 119,  292 => 118,  288 => 117,  283 => 116,  277 => 115,  273 => 114,  269 => 113,  265 => 112,  253 => 103,  243 => 98,  231 => 88,  225 => 86,  220 => 85,  218 => 84,  212 => 82,  209 => 81,  205 => 80,  197 => 76,  193 => 75,  188 => 73,  182 => 71,  177 => 70,  173 => 69,  167 => 67,  162 => 66,  158 => 65,  155 => 64,  153 => 60,  150 => 59,  144 => 57,  139 => 56,  134 => 55,  129 => 54,  124 => 53,  122 => 52,  116 => 50,  112 => 49,  103 => 43,  99 => 42,  92 => 38,  87 => 36,  84 => 35,  80 => 34,  70 => 29,  67 => 28,  64 => 27,  60 => 26,  52 => 24,  47 => 21,  45 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-page.twig", "/srv/xibo-cms/views/playlist-page.twig");
    }
}

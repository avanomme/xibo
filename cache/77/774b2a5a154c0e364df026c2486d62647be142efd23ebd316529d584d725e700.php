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

/* library-page.twig */
class __TwigTemplate_9d4823b24122c14c17c5acee11cc18d9c6ba53ea5408044b35b1b8a1fe140c68 extends Template
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
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "library-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "library-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Library"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "library.add", 1 => "library.modify"]], "method", false, false, false, 29), 0)) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 29), 1)))) {
            // line 30
            echo "    <div class=\"widget-action-menu pull-right\">
        ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "library.add"], "method", false, false, false, 31)) {
                // line 32
                echo "        <button class=\"btn btn-success\" href=\"#\" id=\"libraryUploadForm\" title=\"";
                echo __("Add a new media item to the library");
                echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo __("Add Media");
                echo "</button>
        <button class=\"btn btn-success XiboFormButton\" title=\"";
                // line 33
                echo __("Add a new media item to the library via external URL");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.uploadUrl.form"), "html", null, true);
                echo "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo __("Add media (URL)");
                echo "</button>
        ";
            }
            // line 35
            echo "        ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 35), 1)) && twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "library.modify"], "method", false, false, false, 35))) {
                // line 36
                echo "            <button class=\"btn btn-danger XiboFormButton\" title=\"";
                echo __("Run through the library and remove unused and unnecessary files");
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.tidy.form"), "html", null, true);
                echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
                echo __("Tidy Library");
                echo "</button>
        ";
            }
            // line 38
            echo "    </div>
    ";
        }
    }

    // line 43
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 45
        echo __("Library");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"libraryView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 51
        ob_start(function () { return ''; });
        echo __("ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_number", ["mediaId", ($context["title"] ?? null)], 52, $context, $this->getSourceContext());
        echo "

                            ";
        // line 54
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["media", ($context["title"] ?? null)], 55, $context, $this->getSourceContext());
        echo "

                            ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 57)) {
            // line 58
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            echo "                                ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 62, $context, $this->getSourceContext());
            echo "
                            ";
        }
        // line 64
        echo "
                            ";
        // line 65
        $context["attributes"] = [0 => ["name" => "data-allow-clear", "value" => "true"], 1 => ["name" => "data-placeholder--id", "value" => null], 2 => ["name" => "data-placeholder--value", "value" => ""]];
        // line 70
        echo "
                            ";
        // line 71
        ob_start(function () { return ''; });
        echo __("Owner");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                            ";
        $context["users"] = twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["users"] ?? null));
        // line 73
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerId", "single", ($context["title"] ?? null), null, ($context["users"] ?? null), "userId", "userName", "", "selectPicker", "", "", "", ($context["attributes"] ?? null)], 73, $context, $this->getSourceContext());
        echo "

                            ";
        // line 75
        ob_start(function () { return ''; });
        echo __("Owner User Group");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Show items owned by users in the selected User Group.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["ownerUserGroupId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["groupId" => null, "group" => ""]], ($context["groups"] ?? null)), "groupId", "group", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 77, $context, $this->getSourceContext());
        echo "

                            ";
        // line 79
        ob_start(function () { return ''; });
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["type" => null, "name" => ""]], ($context["modules"] ?? null)), "type", "name"], 80, $context, $this->getSourceContext());
        echo "

                            ";
        // line 82
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                            ";
        $context["values"] = [0 => ["id" => 1, "value" => "Yes"], 1 => ["id" => 0, "value" => "No"]];
        // line 84
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["retired", "single", ($context["title"] ?? null), 0, ($context["values"] ?? null), "id", "value"], 84, $context, $this->getSourceContext());
        echo "

                            ";
        // line 86
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 86, $context, $this->getSourceContext());
        echo "

                            ";
        // line 88
        ob_start(function () { return ''; });
        echo __("Layout ID");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_number", ["layoutId", ($context["title"] ?? null), ($context["layoutId"] ?? null)], 89, $context, $this->getSourceContext());
        echo "

                            ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Orientation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                            ";
        $context["option1"] = __("All");
        // line 93
        echo "                            ";
        $context["option2"] = __("Landscape");
        // line 94
        echo "                            ";
        $context["option3"] = __("Portrait");
        // line 95
        echo "                            ";
        $context["values"] = [0 => ["id" => "", "value" => ($context["option1"] ?? null)], 1 => ["id" => "landscape", "value" => ($context["option2"] ?? null)], 2 => ["id" => "portrait", "value" => ($context["option3"] ?? null)]];
        // line 96
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["values"] ?? null), "id", "value"], 96, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-2 p-3 bg-light\" id=\"grid-folder-filter\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 104
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 109
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\" class=\"card col-sm-10 pt-4 px-2\">
                        <div class=\"XiboData\">
                            <table id=\"libraryItems\" class=\"table table-striped responsive nowrap\" data-content-type=\"media\" data-content-id-name=\"mediaId\" data-state-preference-name=\"libraryGrid\" style=\"width: 100%;\">
                                <thead>
                                <tr>
                                    <th>";
        // line 117
        echo __("ID");
        echo "</th>
                                    <th>";
        // line 118
        echo __("Name");
        echo "</th>
                                    <th>";
        // line 119
        echo __("Type");
        echo "</th>
                                    ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 120)) {
            echo "<th>";
            echo __("Tag");
            echo "</th>";
        }
        // line 121
        echo "                                    <th>";
        echo __("Thumbnail");
        echo "</th>
                                    <th>";
        // line 122
        echo __("Duration");
        echo "</th>
                                    <th>";
        // line 123
        echo __("Duration (seconds)");
        echo "</th>
                                    <th>";
        // line 124
        echo __("Size");
        echo "</th>
                                    <th>";
        // line 125
        echo __("Size (bytes)");
        echo "</th>
                                    <th>";
        // line 126
        echo __("Resolution");
        echo "</th>
                                    <th>";
        // line 127
        echo __("Owner");
        echo "</th>
                                    <th>";
        // line 128
        echo __("Sharing");
        echo "</th>
                                    <th>";
        // line 129
        echo __("Revised");
        echo "</th>
                                    <th>";
        // line 130
        echo __("Released");
        echo "</th>
                                    <th>";
        // line 131
        echo __("File Name");
        echo "</th>
                                    <th>";
        // line 132
        echo __("Stats?");
        echo "</th>
                                    <th>";
        // line 133
        echo __("Created");
        echo "</th>
                                    <th>";
        // line 134
        echo __("Modified");
        echo "</th>
                                    <th>";
        // line 135
        echo __("Expires");
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

    // line 151
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {

            ";
        // line 156
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 156)) {
            // line 157
            echo "            disableFolders();
            ";
        }
        // line 159
        echo "
            table = \$(\"#libraryItems\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                responsive: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[1, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"mediaId\", responsivePriority: 2},
                    {\"data\": \"name\", \"render\": dataTableSpacingPreformatted, responsivePriority: 3 },
                    {\"data\": \"mediaType\", responsivePriority: 2},
                    ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 182)) {
            echo "{
                        \"sortable\": false,
                        responsivePriority: 2,
                        \"visible\": false,
                        \"data\": dataTableCreateTags
                    },";
        }
        // line 188
        echo "                    {
                        responsivePriority: 5,
                        data: 'thumbnail',
                        render: function(data, type, row) {
                            if (type !== 'display') {
                                return row.layoutId;
                            }
                            if (data) {
                                return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                    '<img class=\"img-fluid\" src=\"' + data + '&isThumb=1\" alt=\"";
        // line 197
        echo twig_escape_filter($this->env, __("Thumbnail"), "html", null, true);
        echo "\" />' +
                                    '</a>';
                            }
                            return '';
                        },
                        sortable: false
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
                    {\"data\": \"duration\", \"visible\": false, responsivePriority: 10},
                    {
                        \"name\": \"fileSize\",
                        responsivePriority: 3,
                        \"data\": null,
                        \"render\": {\"_\": \"fileSize\", \"display\": \"fileSizeFormatted\", \"sort\": \"fileSize\"}
                    },
                    {\"data\": \"fileSize\", \"visible\": false, responsivePriority: 10},
                    {
                        name: 'width',
                        data: function(data, type, row, meta) {
                            if (type !== 'display' || data.width === 0 || data.height === 0) {
                                return '';
                            }

                            return data.width + 'x' + data.height;
                        },
                        visible: false,
                        responsivePriority: 10
                    },
                    {\"data\": \"owner\", responsivePriority: 5},
                    {
                        \"data\": \"groupsWithPermissions\",
                        responsivePriority: 5,
                        \"render\": dataTableCreatePermissions
                    },
                    {\"data\": \"revised\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 6},
                    {
                        \"name\": \"released\",
                        responsivePriority: 6,
                        \"data\": function (data, type) {
                            if (type != \"display\")
                                return data.released;

                            var icon = \"\";
                            if (data.released == 1)
                                icon = \"fa-check\";
                            else if (data.released == 0)
                                icon = \"fa-cogs\";
                            else if (data.released == 2)
                                icon = \"fa-times\";


                            return '<span class=\"fa ' + icon + '\" title=\"' + (data.releasedDescription) + '\"></span>';
                        },
                        \"visible\": false
                    },
                    {\"data\": \"fileName\", responsivePriority: 500},
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
                        \"name\": \"expires\",
                        responsivePriority: 6,
                        \"data\": function (data, type) {
                            if (data.expires != null && data.expires != 0) {
                                var now = moment();
                                var expiresIn = moment.unix(data.expires);
                                var differenceMinutes = expiresIn.diff(now, 'minutes');
                                var momentDifference = moment(now).to(expiresIn);

                                if (differenceMinutes < -10 ) {
                                    return data.mediaExpiryFailed;
                                } else {
                                    return data.mediaExpiresIn.replace('%s', momentDifference);
                                }
                            } else {
                                return data.mediaNoExpiryDate;
                            }

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
            table.on('draw', { form: \$(\"#libraryItems\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#libraryItems_wrapper').find('.dataTables_buttons'));
        });

        \$(\"#libraryUploadForm\").click(function(e) {
            e.preventDefault();
            var currentWorkingFolderId = \$('#folderId').val();

            openUploadForm({
                url: \"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\",
                title: \"";
        // line 331
        echo __("Add Media");
        echo "\",
                initialisedBy: \"library-upload\",
                buttons: {
                    main: {
                        label: \"";
        // line 335
        echo __("Done");
        echo "\",
                        className: \"btn-primary btn-bb-main\",
                        callback: function () {
                            table.ajax.reload();
                            XiboDialogClose();
                        }
                    }
                },
                templateOptions: {
                    trans: {
                        addFiles: \"";
        // line 345
        echo __("Add files");
        echo "\",
                        startUpload: \"";
        // line 346
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 347
        echo __("Cancel upload");
        echo "\",
                        selectFolder: \"";
        // line 348
        echo __("Select Folder");
        echo "\",
                        selectFolderTitle: \"";
        // line 349
        echo __("Change Current Folder location");
        echo "\",
                        selectedFolder: \"";
        // line 350
        echo __("Current Folder");
        echo ":\",
                        selectedFolderTitle: \"";
        // line 351
        echo __("Upload files to this Folder");
        echo "\",
                    },
                    upload: {
                        maxSize: ";
        // line 354
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 354), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 355), "html", null, true);
        echo "\",
                        validExt: \"";
        // line 356
        echo twig_escape_filter($this->env, ($context["validExt"] ?? null), "html", null, true);
        echo "\"
                    },
                    updateInAllChecked: ";
        // line 358
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 358), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 359
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 359), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    currentWorkingFolderId: currentWorkingFolderId,
                    folderSelector: true
                }
            });
        });

        /**
         * Media Edit form
         */
        function mediaEditFormOpen(dialog) {
            // Create a new button
            var footer = dialog.find(\".modal-footer\");
            var mediaId = dialog.find(\"#mediaEditForm\").data().mediaId;
            var validExtensions = dialog.find(\"#mediaEditForm\").data().validExtensions;
            var folderId = dialog.find(\"#mediaEditForm\").data().folderId;

            // Append
            var replaceButton = \$('<button class=\"btn btn-warning\">";
        // line 377
        echo __("Replace");
        echo "</button>');
            replaceButton.click(function(e) {
                e.preventDefault();

                // Open the upload dialog with our options.
                openUploadForm({
                    url: \"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\",
                    title: \"";
        // line 384
        echo __("Upload media");
        echo "\",
                    buttons: {
                        main: {
                            label: \"";
        // line 387
        echo __("Done");
        echo "\",
                            className: \"btn-primary btn-bb-main\",
                            callback: function () {
                                table.ajax.reload();
                                XiboDialogClose();
                            }
                        }
                    },
                    templateOptions: {
                        multi: false,
                        oldMediaId: mediaId,
                        oldFolderId: folderId,
                        updateInAllChecked: ";
        // line 399
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 399), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        deleteOldRevisionsChecked: ";
        // line 400
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 400), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        trans: {
                            addFiles: \"";
        // line 402
        echo __("Add Replacement");
        echo "\",
                            startUpload: \"";
        // line 403
        echo __("Start Replace");
        echo "\",
                            cancelUpload: \"";
        // line 404
        echo __("Cancel Replace");
        echo "\",
                            updateInLayouts: {
                                title: \"";
        // line 406
        echo __("Update this media in all layouts it is assigned to?");
        echo "\",
                                helpText: \"";
        // line 407
        echo __("Note: It will only be updated in layouts you have permission to edit.");
        echo "\"
                            },
                            deleteOldRevisions: {
                                title: \"";
        // line 410
        echo __("Delete the old version?");
        echo "\",
                                helpText: \"";
        // line 411
        echo __("Completely remove the old version of this media item if a new file is being uploaded.");
        echo "\"
                            }
                        },
                        upload: {
                            maxSize: ";
        // line 415
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 415), "html", null, true);
        echo ",
                            maxSizeMessage: \"";
        // line 416
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 416), "html", null, true);
        echo "\",
                            validExt: validExtensions,
                            validExtensionsMessage: \"";
        // line 418
        echo "Valid extensions are %s";
        echo "\".replace(\"%s\", validExtensions).replace(/\\|/g, \", \")
                        }
                    },
                    uploadDoneEvent: function () {
                        XiboDialogClose();
                        table.ajax.reload();
                    }
                });
            });

            footer.find(\".btn-primary\").before(replaceButton);
        }

        ///
        /// Library Usage Form
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
        // line 445
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.usage", ["id" => ":id"]), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportTable\").data().mediaId),
                    \"data\": function(dataDisplay) {
                        \$.extend(dataDisplay, \$(dialog).find(\"#usageReportForm\").serializeObject());
                        return dataDisplay;
                    }
                },
                \"columns\": [
                    { \"data\": \"displayId\"},
                    { \"data\": \"display\" },
                    { \"data\": \"description\" }
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
        // line 471
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.usage.layouts", ["id" => ":id"]), "html", null, true);
        echo "\".replace(\":id\", \$(\"#usageReportLayoutsTable\").data().mediaId)
                },
                \"columns\": [
                    { \"data\": \"layoutId\"},
                    { \"data\": \"layout\" },
                    { \"data\": \"description\" },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            usageTableLayouts.on('draw', dataTableDraw);
            usageTableLayouts.on('processing.dt', dataTableProcessing);
        }

        function setDefaultMultiSelectFormOpen(dialog) {
            ";
        // line 489
        $context["message"] = "Force delete from any existing layouts, assignments, etc";
        // line 490
        echo "            ";
        $context["message2"] = "Notify each Display that has this Media in its local storage to remove it immediately?";
        // line 491
        echo "
            var \$input = \$(
                '<div class=\"form-group\">' +
                 '<input type=checkbox id=\"forceDelete\" name=\"forceDelete\"> ";
        // line 494
        echo twig_escape_filter($this->env, __(($context["message"] ?? null)));
        echo " </input>' +
                '</div>'
            );

            var \$input2 = \$(
                '<div class=\"form-group\">' +
                '<input type=checkbox id=\"purge\" name=\"purge\"> ";
        // line 500
        echo twig_escape_filter($this->env, __(($context["message2"] ?? null)));
        echo " </input>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$input, \$input2);

            \$('#forceDelete, #purge').on('change', function() {
                dialog.data().commitData = {
                    forceDelete: \$('#forceDelete').val(),
                    purge: \$('#purge').val()
                };
            });
        }

        function setEnableStatMultiSelectFormOpen(dialog) {

            var \$select = \$('<select id=\"enableStat\" name=\"enableStat\" class=\"form-control\">' +
                '<option value=\"Off\">";
        // line 517
        echo __("Off");
        echo "</option>' +
                '<option value=\"On\">";
        // line 518
        echo __("On");
        echo "</option>' +
                '<option value=\"Inherit\">";
        // line 519
        echo __("Inherit");
        echo "</option>' +
                '</select>');

            \$select.on('change', function() {
                dialog.data().commitData = {enableStat: \$(this).val()};
            }).trigger('change');

            \$(dialog).find('.modal-body').append(\$select);
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "library-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 519,  908 => 518,  904 => 517,  884 => 500,  875 => 494,  870 => 491,  867 => 490,  865 => 489,  844 => 471,  815 => 445,  785 => 418,  780 => 416,  776 => 415,  769 => 411,  765 => 410,  759 => 407,  755 => 406,  750 => 404,  746 => 403,  742 => 402,  733 => 400,  725 => 399,  710 => 387,  704 => 384,  700 => 383,  691 => 377,  666 => 359,  658 => 358,  653 => 356,  649 => 355,  645 => 354,  639 => 351,  635 => 350,  631 => 349,  627 => 348,  623 => 347,  619 => 346,  615 => 345,  602 => 335,  595 => 331,  591 => 330,  455 => 197,  444 => 188,  435 => 182,  423 => 173,  407 => 159,  403 => 157,  401 => 156,  395 => 152,  391 => 151,  372 => 135,  368 => 134,  364 => 133,  360 => 132,  356 => 131,  352 => 130,  348 => 129,  344 => 128,  340 => 127,  336 => 126,  332 => 125,  328 => 124,  324 => 123,  320 => 122,  315 => 121,  309 => 120,  305 => 119,  301 => 118,  297 => 117,  286 => 109,  276 => 104,  264 => 96,  261 => 95,  258 => 94,  255 => 93,  252 => 92,  248 => 91,  242 => 89,  238 => 88,  233 => 86,  227 => 84,  224 => 83,  220 => 82,  214 => 80,  210 => 79,  204 => 77,  199 => 76,  195 => 75,  189 => 73,  186 => 72,  182 => 71,  179 => 70,  177 => 65,  174 => 64,  168 => 62,  163 => 61,  158 => 60,  153 => 59,  148 => 58,  146 => 57,  140 => 55,  136 => 54,  130 => 52,  126 => 51,  119 => 47,  114 => 45,  111 => 44,  107 => 43,  101 => 38,  91 => 36,  88 => 35,  79 => 33,  72 => 32,  70 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-page.twig", "/srv/xibo-cms/views/library-page.twig");
    }
}

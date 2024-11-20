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

/* playersoftware-page.twig */
class __TwigTemplate_7784711492e1609e786443cff865c37e3e786c45df65b521cfa8a40453b6cc4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "playersoftware-page.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "playersoftware-page.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "playersoftware.add"], "method", false, false, false, 28)) {
            // line 29
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success\" href=\"#\" id=\"playerSoftwareUploadForm\" title=\"";
            // line 30
            echo __("Add a new media item to the player software library");
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Version");
            echo "</button>
    </div>
    ";
        }
    }

    // line 36
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 38
        echo __("Player Software");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"playerSoftwareView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Android");
        $context["android"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Windows");
        $context["windows"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("webOS");
        $context["webos"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Tizen");
        $context["sssp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        $context["options"] = [0 => ["optionid" => "", "option" => ""], 1 => ["optionid" => "android", "option" =>         // line 51
($context["android"] ?? null)], 2 => ["optionid" => "windows", "option" =>         // line 52
($context["windows"] ?? null)], 3 => ["optionid" => "lg", "option" =>         // line 53
($context["webos"] ?? null)], 4 => ["optionid" => "sssp", "option" =>         // line 54
($context["sssp"] ?? null)]];
        // line 56
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["playerType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 56, $context, $this->getSourceContext());
        echo "

                            ";
        // line 58
        ob_start(function () { return ''; });
        echo __("Version");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["playerVersion", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["version" => null, "version" => null]], ($context["versions"] ?? null)), "version", "version"], 59, $context, $this->getSourceContext());
        echo "

                            ";
        // line 61
        ob_start(function () { return ''; });
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["playerCode", ($context["title"] ?? null)], 62, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"playerSoftwareItems\" class=\"table table-striped\" data-state-preference-name=\"playerSoftwareGrid\">
                        <thead>
                        <tr>
                            <th>";
        // line 70
        echo __("Version ID");
        echo "</th>
                            <th>";
        // line 71
        echo __("Player Version Name");
        echo "</th>
                            <th>";
        // line 72
        echo __("Type");
        echo "</th>
                            <th>";
        // line 73
        echo __("Version");
        echo "</th>
                            <th>";
        // line 74
        echo __("Code");
        echo "</th>
                            <th>";
        // line 75
        echo __("Media ID");
        echo "</th>
                            <th>";
        // line 76
        echo __("Original File Name");
        echo "</th>
                            <th>";
        // line 77
        echo __("Sharing");
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
";
    }

    // line 91
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "    <script type=\"text/javascript\">
        var table;
        \$(document).ready(function() {
            table = \$(\"#playerSoftwareItems\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[2, \"asc\"]],
                ajax: {
                    \"url\": \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search"), "html", null, true);
        echo "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#playerSoftwareItems\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"versionId\"},
                    {\"data\": \"playerShowVersion\" },
                    {\"data\": \"type\"},
                    {\"data\": \"version\"},
                    {\"data\": \"code\"},
                    {\"data\": \"mediaId\"},
                    {\"data\": \"originalFileName\"},
                    {
                        \"data\": \"groupsWithPermissions\",
                        \"render\": dataTableCreatePermissions
                    },
                    {
                        \"orderable\": false,
                        \"data\": dataTableButtonsColumn
                    }
                ],

                createdRow: function (row, data, index) {
                    if (data.version === \"\" || data.version === null || data.code === 0) {
                        \$(row).addClass('table-danger');
                        \$(row).attr('Title', \"";
        // line 133
        echo twig_escape_filter($this->env, ($context["warningLabel"] ?? null), "html", null, true);
        echo "\");
                    }
                },
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#playerSoftwareItems_wrapper').find('.dataTables_buttons'));
        });

        \$(\"#playerSoftwareUploadForm\").click(function(e) {
            e.preventDefault();

            openUploadForm({
                url: \"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\",
                title: \"";
        // line 148
        echo __("Upload Version");
        echo "\",
                videoImageCovers: false,
                buttons: {
                    main: {
                        label: \"";
        // line 152
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
                    trans: {
                        addFiles: \"";
        // line 163
        echo __("Add files");
        echo "\",
                        startUpload: \"";
        // line 164
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 165
        echo __("Cancel upload");
        echo "\",
                        processing: \"";
        // line 166
        echo __("Processing...");
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 169), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 170), "html", null, true);
        echo "\",
                        validExt: \"";
        // line 171
        echo twig_escape_filter($this->env, ($context["validExt"] ?? null), "html", null, true);
        echo "\"
                    },
                    updateInAllChecked: false,
                    deleteOldRevisionsChecked: false,
                    folderSelector: false
                }
            });
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "playersoftware-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 171,  312 => 170,  308 => 169,  302 => 166,  298 => 165,  294 => 164,  290 => 163,  276 => 152,  269 => 148,  265 => 147,  248 => 133,  219 => 107,  202 => 92,  198 => 91,  181 => 77,  177 => 76,  173 => 75,  169 => 74,  165 => 73,  161 => 72,  157 => 71,  153 => 70,  141 => 62,  137 => 61,  131 => 59,  127 => 58,  121 => 56,  119 => 54,  118 => 53,  117 => 52,  116 => 51,  114 => 49,  109 => 48,  104 => 47,  99 => 46,  94 => 45,  90 => 44,  83 => 40,  78 => 38,  75 => 37,  71 => 36,  61 => 30,  58 => 29,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playersoftware-page.twig", "/srv/xibo-cms/views/playersoftware-page.twig");
    }
}

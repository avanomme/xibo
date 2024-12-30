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

/* template-page.twig */
class __TwigTemplate_123fd95d61b607a52091a882eb3b45f81ac031818f2ebae34f6a476b993bd03c extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "template-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "template-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Templates"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "template.add"], "method", false, false, false, 29)) {
            // line 30
            echo "        <div class=\"widget-action-menu pull-right\">
            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            // line 31
            echo __("Add a new Template and jump to the layout designer.");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Template");
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
        echo __("Templates");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"templateView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["template", ($context["title"] ?? null)], 45, $context, $this->getSourceContext());
        echo "

                            ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 47)) {
            // line 48
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("A comma separated list of tags to filter by. Enter a Tag value preceded with | to filter by Tag values. Enter --no-tag to see items without tags.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "                                ";
            echo twig_call_macro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 52, $context, $this->getSourceContext());
            echo "
                            ";
        }
        // line 54
        echo "
                            ";
        // line 55
        echo twig_call_macro($macros["inline"], "macro_hidden", ["folderId"], 55, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-2 p-3 bg-light\" id=\"grid-folder-filter\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 63
        echo __("Search in all folders");
        echo "\">";
        echo __("All Folders");
        echo "</label>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 68
        echo __("Open / Close Folder Search options");
        echo "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div id=\"datatable-container\" class=\"card col-sm-10 pt-4 px-2\">
                        <div class=\"XiboData\">
                            <table id=\"templates\" class=\"table table-striped\" data-content-type=\"layout\" data-content-id-name=\"layoutId\" data-state-preference-name=\"templateGrid\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 76
        echo __("Name");
        echo "</th>
                                        <th>";
        // line 77
        echo __("Status");
        echo "</th>
                                        <th>";
        // line 78
        echo __("Owner");
        echo "</th>
                                        <th>";
        // line 79
        echo __("Description");
        echo "</th>
                                        ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 80)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 81
        echo "                                        <th>";
        echo __("Orientation");
        echo "</th>
                                        <th>";
        // line 82
        echo __("Thumbnail");
        echo "</th>
                                        <th>";
        // line 83
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
        </div>
    </div>
";
    }

    // line 99
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    <script type=\"text/javascript\">
        ";
        // line 101
        if ( !twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 101)) {
            // line 102
            echo "            disableFolders();
        ";
        }
        // line 104
        echo "        var table = \$(\"#templates\").DataTable({
            \"language\": dataTablesLanguage,
            dom: dataTablesTemplate,
            serverSide: true,
            stateSave: true,
            stateDuration: 0,
            responsive: true,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            \"order\": [[ 1, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"layout\", responsivePriority: 2},
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
                { \"data\": \"owner\", responsivePriority: 3},
                {
                    \"name\": \"description\",
                    \"data\": null,
                    responsivePriority: 3,
                    \"render\": {\"_\": \"description\", \"display\": \"descriptionWithMarkup\", \"sort\": \"description\"}
                },
                ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 152)) {
            echo "{
                    \"sortable\": false,
                    \"visible\": false,
                    \"data\": dataTableCreateTags,
                    responsivePriority: 3
                },";
        }
        // line 158
        echo "                { data: 'orientation', responsivePriority: 10, visible: false},
                {
                    responsivePriority: 3,
                    data: 'thumbnail',
                    render: function (data, type, row) {
                        if (type !== 'display') {
                            return row.layoutId;
                        }
                        if (data) {
                            return '<a class=\"img-replace\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data + '\">' +
                                '<img class=\"img-fluid\" src=\"' + data + '\" alt=\"";
        // line 168
        echo twig_escape_filter($this->env, __("Thumbnail"), "html", null, true);
        echo "\" />' +
                                '</a>';
                        } else {
                          var addUrl = '";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        echo "'.replace(':id', row.layoutId);
                          return '<a class=\"img-replace generate-layout-thumbnail\" href=\"' + addUrl + '\">' +
                              '<img class=\"img-fluid\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/thumbs/placeholder.png"], "method", false, false, false, 173), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, __("Add Thumbnail"), "html", null, true);
        echo "\" />' +
                              '</a>';
                        }
                        return '';
                    },
                    sortable: false
                },
                {
                    \"data\": \"groupsWithPermissions\",
                    responsivePriority: 4,
                    \"render\": dataTableCreatePermissions
                },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('draw', { form: \$(\"#templates\").closest(\".XiboGrid\").find(\".FilterDiv form\") } ,dataTableCreateTagEvents);
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
        dataTableAddButtons(table, \$('#templates_wrapper').find('.dataTables_buttons'));

        function templateFormOpen() {
            if (\$('#folder-tree-form-modal').length === 0) {
                // compile tree folder modal and append it to Form
                var folderTreeModal = Handlebars.compile(\$('#folder-tree-template').html());
                var treeConfig = {\"container\": \"container-folder-form-tree\", \"modal\": \"folder-tree-form-modal\"};
                \$(\"body\").append(folderTreeModal(treeConfig));

                \$(\"#folder-tree-form-modal\").on('hidden.bs.modal', function () {
                    // Fix for 2nd/overlay modal
                    \$('.modal:visible').length && \$(document.body).addClass('modal-open');
                    
                    \$(this).data('bs.modal', null);
                });
            }

            // select current working folder if one is selected in the grid
            if (\$('#container-folder-tree').jstree(\"get_selected\", true)[0] !== undefined) {
                \$('#templateAddForm' + ' #folderId').val(\$('#container-folder-tree').jstree(\"get_selected\", true)[0].id);
            }

            initJsTreeAjax(\$('#folder-tree-form-modal').find('#container-folder-form-tree'), 'templateAddForm', true, 600);

            \$(\"#templateAddForm\").submit(function(e) {
                e.preventDefault();
                var form = \$(this);

                var url = \$(this).data().redirect;

                \$.ajax({
                    type: \$(this).attr(\"method\"),
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),
                    cache: false,
                    dataType:\"json\",
                    success: function(xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success) {
                            // Reload the designer
                            XiboRedirect(url.replace(\":id\", xhr.id));
                        }
                    }
                });
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "template-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 173,  317 => 171,  311 => 168,  299 => 158,  290 => 152,  252 => 117,  237 => 104,  233 => 102,  231 => 101,  228 => 100,  224 => 99,  205 => 83,  201 => 82,  196 => 81,  190 => 80,  186 => 79,  182 => 78,  178 => 77,  174 => 76,  163 => 68,  153 => 63,  142 => 55,  139 => 54,  133 => 52,  128 => 51,  123 => 50,  118 => 49,  113 => 48,  111 => 47,  105 => 45,  101 => 44,  94 => 40,  89 => 38,  86 => 37,  82 => 36,  70 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "template-page.twig", "/srv/xibo-cms/views/template-page.twig");
    }
}

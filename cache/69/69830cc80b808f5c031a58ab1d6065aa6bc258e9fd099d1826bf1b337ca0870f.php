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

/* command-page.twig */
class __TwigTemplate_8dc38b0bb04b54a8fa23edb521c30d6b2f9183f89907fc168c3d7682abd0c902 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "command-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "command-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Commands"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "command.add"], "method", false, false, false, 29)) {
            // line 30
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-terminal\" aria-hidden=\"true\"></i> ";
            echo __("Add Command");
            echo "</button>
    </div>
    ";
        }
    }

    // line 37
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 39
        echo __("Commands");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Command");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["command", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        echo "

                            ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_input", ["code", ($context["title"] ?? null)], 49, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"commands\" class=\"table table-striped\" data-state-preference-name=\"commandGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 57
        echo __("Name");
        echo "</th>
                                <th>";
        // line 58
        echo __("Code");
        echo "</th>
                                <th>";
        // line 59
        echo __("Available On");
        echo "</th>
                                <th>";
        // line 60
        echo __("Description");
        echo "</th>
                                <th>";
        // line 61
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

    // line 75
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#commands\").DataTable({ \"language\": dataTablesLanguage,
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
        // line 89
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#commands\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"command\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"code\" , responsivePriority: 2},
                {
                    \"data\": \"availableOn\",
                     responsivePriority: 3,
                    \"render\": function(data, type) {

                        if (type !== \"display\")
                            return data;

                        var returnData = '';

                        if (typeof data !== undefined && data != null) {
                            var arrayOfTags = data.split(',');

                            returnData += '<div class=\"permissionsDiv\">';

                            for (var i = 0; i < arrayOfTags.length; i++) {
                                var name = arrayOfTags[i];
                                if (name !== '') {
                                    returnData += '<li class=\"badge ' + ((name === 'lg') ? '' : 'capitalize') + '\">'
                                        + name.replace(\"lg\", \"webOS\").replace(\"sssp\", \"Tizen\") + '</span></li>'
                                }
                            }

                            returnData += '</div>';
                        }

                        return returnData;
                    }
                },
                { \"data\": \"description\", responsivePriority: 3 },
                {
                    \"data\": \"groupsWithPermissions\",
                     responsivePriority: 3,
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
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#commands_wrapper').find('.dataTables_buttons'));
    </script>
";
    }

    public function getTemplateName()
    {
        return "command-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 89,  162 => 76,  158 => 75,  141 => 61,  137 => 60,  133 => 59,  129 => 58,  125 => 57,  113 => 49,  109 => 48,  103 => 46,  99 => 45,  92 => 41,  87 => 39,  84 => 38,  80 => 37,  70 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "command-page.twig", "/srv/xibo-cms/views/command-page.twig");
    }
}

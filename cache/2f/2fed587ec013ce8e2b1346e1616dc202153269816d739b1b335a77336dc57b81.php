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

/* resolution-page.twig */
class __TwigTemplate_6634e2521228b29726cfae609fcd39f235c4c4a89e0f0af3d34d5e57f4b2733c extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "resolution-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "resolution-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Resolutions"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "resolution.add"], "method", false, false, false, 29)) {
            // line 30
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            // line 31
            echo __("Add a new resolution for use on layouts");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.add.form"), "html", null, true);
            echo "\"><span class=\"fa fa-plus\"></span> ";
            echo __("Add Resolution");
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
        echo __("Resolution");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"resolutionView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">
                            ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Enabled");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Yes");
        $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("No");
        $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                            ";
        $context["values"] = [0 => ["id" => 1, "value" => ($context["option1"] ?? null)], 1 => ["id" => 0, "value" => ($context["option2"] ?? null)]];
        // line 49
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["enabled", "single", ($context["title"] ?? null), 1, ($context["values"] ?? null), "id", "value"], 49, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"resolutions\" class=\"table table-striped\" data-state-preference-name=\"resolutionGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 57
        echo __("ID");
        echo "</th>
                                <th>";
        // line 58
        echo __("Resolution");
        echo "</th>
                                <th>";
        // line 59
        echo __("Width");
        echo "</th>
                                <th>";
        // line 60
        echo __("Height");
        echo "</th>
                                <th>";
        // line 61
        echo __("Enabled?");
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
        \$(document).ready(function() {
            var table = \$(\"#resolutions\").DataTable({
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
                    url: \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.search"), "html", null, true);
        echo "\",
                    data: function (d) {
                        \$.extend(d, \$(\"#resolutions\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"resolutionId\", responsivePriority: 2},
                    {\"data\": \"resolution\"},
                    {\"data\": \"width\"},
                    {\"data\": \"height\"},
                    {\"data\": \"enabled\"},
                    {
                        \"orderable\": false,
                        responsivePriority: 1,
                        \"data\": dataTableButtonsColumn
                    }
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#resolutions_wrapper').find('.dataTables_buttons'));
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "resolution-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 91,  167 => 76,  163 => 75,  146 => 61,  142 => 60,  138 => 59,  134 => 58,  130 => 57,  118 => 49,  115 => 48,  110 => 47,  105 => 46,  101 => 45,  94 => 41,  89 => 39,  86 => 38,  82 => 37,  70 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "resolution-page.twig", "/srv/xibo-cms/views/resolution-page.twig");
    }
}

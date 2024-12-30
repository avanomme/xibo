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

/* module-page.twig */
class __TwigTemplate_73a8e80f96c34e59858da1954266f3c253fb17535dd85eb09eefc8f394640e67 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "module-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "module-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Modules"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 30
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["modulesToInstall"] ?? null)), 0))) {
            // line 31
            echo "        <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Modules available to Install");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.install.list.form"), "html", null, true);
            echo "\"><i class=\"fa fa-upload\" aria-hidden=\"true\"></i> ";
            echo __("Install Module");
            echo "</button>
        ";
        }
        // line 33
        echo "        <button class=\"btn btn-info XiboFormButton\" title=\"";
        echo __("Verify all modules have been installed correctly.");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.verify.form"), "html", null, true);
        echo "\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> ";
        echo __("Verify All");
        echo "</button>
        <button class=\"btn btn btn-secondary\" id=\"refreshGrid\" title=\"";
        // line 34
        echo __("Refresh");
        echo "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> ";
        echo __("Refresh");
        echo "</button>
    </div>
";
    }

    // line 38
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 40
        echo __("Modules");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"modules\" class=\"table table-striped\" data-state-preference-name=\"moduleGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 54
        echo __("Name");
        echo "</th>
                                <th>";
        // line 55
        echo __("Description");
        echo "</th>
                                <th>";
        // line 56
        echo __("Library Media");
        echo "</th>
                                <th>";
        // line 57
        echo __("Default Duration");
        echo "</th>
                                <th>";
        // line 58
        echo __("Valid Extensions");
        echo "</th>
                                <th>";
        // line 59
        echo __("Preview Enabled");
        echo "</th>
                                <th title=\"";
        // line 60
        echo __("Can this module be assigned to a Layout?");
        echo "\">";
        echo __("Assignable");
        echo "</th>
                                <th>";
        // line 61
        echo __("Enabled");
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
        var table = \$(\"#modules\").DataTable({
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
            \"order\": [[ 0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#modules\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\" , responsivePriority: 2},
                { \"data\": \"description\" },
                { \"data\": \"regionSpecific\", \"render\": dataTableTickCrossInverseColumn },
                { \"data\": \"defaultDuration\" },
                { \"data\": \"validExtensions\" },
                { \"data\": \"previewEnabled\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"assignable\", \"render\": dataTableTickCrossColumn },
                { \"data\": \"enabled\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#modules_wrapper').find('.dataTables_buttons'));

        function installModuleComplete()
        {
            \$(\"#moduleInstallForm\").data(\"refresh\", true);
        }

        \$(\"#refreshGrid\").click(function () {
            table.ajax.reload();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "module-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 90,  175 => 76,  171 => 75,  154 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  124 => 54,  109 => 42,  104 => 40,  101 => 39,  97 => 38,  88 => 34,  79 => 33,  69 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-page.twig", "/srv/xibo-cms/views/module-page.twig");
    }
}

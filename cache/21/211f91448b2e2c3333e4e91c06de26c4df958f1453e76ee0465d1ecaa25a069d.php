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

/* displayprofile-page.twig */
class __TwigTemplate_e21e501fdeb496f5270321c96f3985fc8718732e9dece908726ae2b2489fb65c extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "displayprofile-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "displayprofile-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Display Setting Profiles"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displayprofile.add"], "method", false, false, false, 29)) {
            // line 30
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-info XiboFormButton\" title=\"";
            // line 31
            echo __("Add a new Display Settings Profile");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.add.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
            echo __("Add Profile");
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
        echo __("Display Setting Profiles");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline\">

                            ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_inputNameGrid", ["displayProfile", ($context["title"] ?? null)], 46, $context, $this->getSourceContext());
        echo "

                            ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                            ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["typeId" => null, "type" => ""]], ($context["types"] ?? null)), "typeId", "type"], 49, $context, $this->getSourceContext());
        echo "
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"displayProfiles\" class=\"table table-striped\" data-state-preference-name=\"displayProfileGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 57
        echo __("Name");
        echo "</th>
                                <th>";
        // line 58
        echo __("Type");
        echo "</th>
                                <th>";
        // line 59
        echo __("Default");
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

    // line 73
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    <script type=\"text/javascript\">
        var table = \$(\"#displayProfiles\").DataTable({ \"language\": dataTablesLanguage,
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#displayProfiles\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"type\" },
                { \"data\": \"isDefault\", \"render\": dataTableTickCrossColumn },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#displayProfiles_wrapper').find('.dataTables_buttons'));

        // Custom submit for display profile form
        function displayProfileEditFormSubmit() {
            var \$form = \$(\"#displayProfileForm\");

            // Remove temp fields and enable checkbox after submit
            \$form.submit(function(event) {
                event.preventDefault();

                // Re-enable checkboxes
                \$form.find('input[type=\"checkbox\"]').each(function () {
                    // Enable checkbox
                    \$(this).attr('disabled', false);
                });

                // Remove temp input fields
                \$form.find('input.temp-input').each(function () {
                    \$(this).remove();
                });
            });

            // Replace all checkboxes with hidden input fields
            \$form.find('input[type=\"checkbox\"]').each(function () {
                // Get checkbox values
                var value = \$(this).is(':checked') ? 'on' : 'off';
                var id = \$(this).attr('id');

                // Create hidden input
                \$('<input type=\"hidden\" class=\"temp-input\">')
                    .attr('id', id)
                    .attr('name', id)
                    .val(value)
                    .appendTo(\$(this).parent());

                // Disable checkbox so it won't be submitted
                \$(this).attr('disabled', true);
            });

            // Submit form
            \$form.submit();
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 87,  157 => 74,  153 => 73,  136 => 59,  132 => 58,  128 => 57,  116 => 49,  112 => 48,  106 => 46,  102 => 45,  94 => 40,  89 => 38,  86 => 37,  82 => 36,  70 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-page.twig", "/srv/xibo-cms/views/displayprofile-page.twig");
    }
}

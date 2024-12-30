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

/* daypart-page.twig */
class __TwigTemplate_90a951433798002f9b2fd054e00f815aa0297a86c9585e331963b952946e3dca extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "daypart-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "daypart-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Dayparting"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "daypart.add"], "method", false, false, false, 29)) {
            // line 30
            echo "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-success XiboFormButton\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.add.form"), "html", null, true);
            echo "\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Daypart");
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
        echo __("Dayparting");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
                <div class=\"XiboFilter\">
                    <div class=\"FilterDiv\" id=\"Filter\">
                        <form class=\"form-inline\">
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"dayparts\" class=\"table table-striped\" data-state-preference-name=\"daypartGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 51
        echo __("Name");
        echo "</th>
                                <th>";
        // line 52
        echo __("Description");
        echo "</th>
                                <th>";
        // line 53
        echo __("Start Time");
        echo "</th>
                                <th>";
        // line 54
        echo __("End Time");
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

    // line 68
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "    <script type=\"text/javascript\">

        var table = \$(\"#dayparts\").DataTable({
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search"), "html", null, true);
        echo "\",
                \"data\": function(d) {
                    \$.extend(d, \$(\"#dayparts\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                }
            },
            \"columns\": [
                { \"data\": \"name\", \"render\": dataTableSpacingPreformatted , responsivePriority: 2},
                { \"data\": \"description\" },
                { \"data\": \"startTime\" },
                { \"data\": \"endTime\" },
                {
                    \"orderable\": false,
                    responsivePriority: 1,
                    \"data\": dataTableButtonsColumn
                }
            ]
        });

        table.on('draw', dataTableDraw);
        table.on('processing.dt', dataTableProcessing);
        dataTableAddButtons(table, \$('#dayparts_wrapper').find('.dataTables_buttons'));

        function dayPartFormOpen(dialog) {
            // Render a set of exceptions
            \$exceptions = \$(dialog).find(\"#dayPartExceptions\");

            // Days of the week translations
            var daysOfTheWeek = [
                { day: \"Mon\", title: \"";
        // line 112
        echo __("Monday");
        echo "\" },
                { day: \"Tue\", title: \"";
        // line 113
        echo __("Tuesday");
        echo "\" },
                { day: \"Wed\", title: \"";
        // line 114
        echo __("Wednesday");
        echo "\" },
                { day: \"Thu\", title: \"";
        // line 115
        echo __("Thursday");
        echo "\" },
                { day: \"Fri\", title: \"";
        // line 116
        echo __("Friday");
        echo "\" },
                { day: \"Sat\", title: \"";
        // line 117
        echo __("Saturday");
        echo "\" },
                { day: \"Sun\", title: \"";
        // line 118
        echo __("Sunday");
        echo "\" }
            ];

            // Compile the handlebars template
            var exceptionsTemplate = Handlebars.compile(\$(\"#dayPartExceptionsTemplate\").html());

            if (dialog.data().extra.exceptions.length == 0) {
                // Contexts for template
                var context = {
                    daysOfWeek: daysOfTheWeek,
                    buttonGlyph: \"fa-plus\",
                    exceptionDay: \"\",
                    exceptionStart: \"\",
                    exceptionEnd: \"\",
                    fieldId: 0
                };

                // Append
                \$exceptions.append(exceptionsTemplate(context));
                
                XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
            } else {
                // For each of the existing exceptions, create form components
                var i = 0;
                \$.each(dialog.data().extra.exceptions, function (index, field) {
                    i++;
                    // call the template
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\"),
                        exceptionDay: field.day,
                        exceptionStart: field.start,
                        exceptionEnd: field.end,
                        fieldId: i
                    };

                    \$exceptions.append(exceptionsTemplate(context));
                    
                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                });
            }

            // Nabble the resulting buttons
            \$exceptions.on(\"click\", \"button\", function (e) {
                e.preventDefault();

                // find the gylph
                if (\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                    var context = {
                        daysOfWeek: daysOfTheWeek,
                        buttonGlyph: \"fa-minus\",
                        exceptionDay: \"\",
                        exceptionStart: \"\",
                        exceptionEnd: \"\",
                        fieldId: \$exceptions.find('.form-group').length + 1
                    };

                    \$exceptions.append(exceptionsTemplate(context));

                    XiboInitialise(\"#\" + \$exceptions.prop(\"id\"));
                } else {
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            });

            // check if we already have this day in exceptions array, if so remove the row with a message.
            \$exceptions.on(\"change\", \"select\", function() {
                var selectedDays = [];
                \$('select').not('#' + \$(this).attr('id')).each(function(i) {
                    selectedDays.push(\$(this).val());
                });

                if (selectedDays.includes(this.value)) {
                    toastr.error(translations.dayPartExceptionErrorMessage);
                    // Remove this row
                    \$(this).closest(\".form-group\").remove();
                }
            })
        }

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>
    ";
        // line 220
        echo "
    <script type=\"text/x-handlebars-template\" id=\"dayPartExceptionsTemplate\">
        <div class=\"form-group row\">
            <div class=\"col-3\">
                <select class=\"form-control\" name=\"exceptionDays[]\" id=\"exceptionDays_{{fieldId}}\">
                    <option value=\"\"></option>
                    {{#each daysOfWeek}}
                    <option value=\"{{ day }}\" {{#eq day ../exceptionDay}}selected{{/eq}}>{{ title }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-3\">
    ";
        echo "
                ";
        // line 221
        echo twig_call_macro($macros["inline"], "macro_time", ["exceptionStartTimes[]", "", "{{ exceptionStart }}"], 221, $context, $this->getSourceContext());
        echo "
    ";
        // line 225
        echo "
            </div>
            <div class=\"col-3\">
    ";
        echo "
                ";
        // line 226
        echo twig_call_macro($macros["inline"], "macro_time", ["exceptionEndTimes[]", "", "{{ exceptionEnd }}"], 226, $context, $this->getSourceContext());
        echo "
    ";
        // line 234
        echo "
            </div>
            <div class=\"col-1\">
                <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
        </div>
    </script>
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "daypart-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 234,  331 => 226,  324 => 225,  320 => 221,  304 => 220,  211 => 118,  207 => 117,  203 => 116,  199 => 115,  195 => 114,  191 => 113,  187 => 112,  156 => 84,  139 => 69,  135 => 68,  118 => 54,  114 => 53,  110 => 52,  106 => 51,  92 => 40,  87 => 38,  84 => 37,  80 => 36,  70 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "daypart-page.twig", "/srv/xibo-cms/views/daypart-page.twig");
    }
}

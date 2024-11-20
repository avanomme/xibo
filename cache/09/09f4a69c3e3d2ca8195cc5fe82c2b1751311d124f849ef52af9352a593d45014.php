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

/* dashboard-status-page.twig */
class __TwigTemplate_619daddb4e54b635ef1a56556f8b83278f3e9b92fbb8c15a487913428208e701 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "dashboard-status-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "dashboard-status-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-dashboard-message.twig", "dashboard-status-page.twig", 27);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 28
        echo "    <div class=\"row\">
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon orange pull-left\">
                        <i class=\"fa fa-desktop\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title displays-count\">0</div>
                        <div class=\"comment displays-comment\" data-title=\"";
        // line 37
        echo __("Display");
        echo "\" data-title-plural=\"";
        echo __("Displays");
        echo "\"></div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon red pull-left\">
                        <i class=\"fa fa-tasks\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, ($context["librarySize"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 51
        echo __("Library Size");
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon green pull-left\">
                        <i class=\"fa fa-users\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        <div class=\"title\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["countUsers"] ?? null), "html", null, true);
        echo "</div>
                        <div class=\"comment\">";
        // line 65
        if ((0 === twig_compare(($context["countUsers"] ?? null), 1))) {
            echo __("User");
        } else {
            echo __("Users");
        }
        echo "</div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-xl-3 col-md-6 col-12\">
            <div class=\"widget\">
                <div class=\"widget-body p-3 p-xl-2\">
                    <div class=\"widget-icon blue pull-left\">
                        <i class=\"fa fa-cogs\"></i>
                    </div>
                    <div class=\"widget-content pull-left\">
                        ";
        // line 78
        if ((0 !== twig_compare(($context["embeddedWidget"] ?? null), ""))) {
            // line 79
            echo "                            ";
            echo ($context["embeddedWidget"] ?? null);
            echo "
                        ";
        } else {
            // line 81
            echo "                            <div class=\"title\">";
            echo twig_escape_filter($this->env, ($context["nowShowing"] ?? null), "html", null, true);
            echo "</div>
                            <div class=\"comment\">";
            // line 82
            echo __("Now Showing");
            echo "</div>
                        ";
        }
        // line 84
        echo "                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 95
        if ((0 !== twig_compare(($context["xmdsLimit"] ?? null), ""))) {
            // line 96
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage. Limit %xmdsLimit%"), array("%xmdsLimit%" => ($context["xmdsLimit"] ?? null), ));
            // line 97
            echo "                    ";
        } else {
            // line 98
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Bandwidth Usage (%bandwidthSuffix%)"), array("%bandwidthSuffix%" => ($context["bandwidthSuffix"] ?? null), ));
            // line 99
            echo "                    ";
        }
        // line 100
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displays.reporting"], "method", false, false, false, 100)) {
            // line 101
            echo "                    <a class=\"pull-right\" href=\"/report/form/bandwidth\">";
            echo __("More Statistics");
            echo "</a>
                    ";
        }
        // line 103
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"bandwidthChart\" style=\"clear:both;\" height=\"230\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-tasks\"></i>
                    ";
        // line 114
        if ((0 !== twig_compare(($context["libraryLimitSet"] ?? null), ""))) {
            // line 115
            echo "                        ";
            /* xgettext:no-php-format */            echo strtr(__("Library Usage. Limit %libraryLimit%"), array("%libraryLimit%" => ($context["libraryLimit"] ?? null), ));
            // line 116
            echo "                    ";
        } else {
            // line 117
            echo "                        ";
            echo __("Library Usage");
            // line 118
            echo "                    ";
        }
        // line 119
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <canvas id=\"libraryChart\" style=\"clear:both;\" width=\"350\" height=\"220\"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 132
        echo __("Display Activity");
        // line 133
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div class=\"table-responsive\">
                        <table id=\"displays\" class=\"table\">
                            <thead>
                            <tr>
                                <th>";
        // line 140
        echo __("Display");
        echo "</th>
                                <th>";
        // line 141
        echo __("Logged In");
        echo "</th>
                                <th>";
        // line 142
        echo __("Authorised");
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget news-widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-book\"></i>
                    ";
        // line 157
        echo __("Latest News");
        // line 158
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium\">
                    ";
        // line 161
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["latestNews"] ?? null)), 0))) {
            // line 162
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 163
                echo "                            <div class=\"article\">
                                <h4 class=\"article_title\">";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 164), "html", null, true);
                echo " <small class=\"article_date\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "date", [], "any", false, false, false, 164), "html", null, true);
                echo "</small></h4>
                                <p>";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["news"], "description", [], "any", false, false, false, 165);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, $context["news"], "link", [], "any", false, false, false, 165)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "link", [], "any", false, false, false, 165), "html", null, true);
                    echo "\" title=\"Read\" target=\"_blank\">";
                    echo __("Full Article");
                    echo "</a>.";
                }
                echo "</p>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                    ";
        }
        // line 169
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    ";
        // line 179
        echo __("Display Status");
        // line 180
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 183
        echo __("Click on the chart for a breakdown");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-cloud-download\"></i>
                    ";
        // line 194
        echo __("Display Content Status");
        // line 195
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 198
        echo __("Click on the chart for a breakdown");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayContentChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row d-none\" id=\"displayGroupStatusChartRow\">

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    <span id=\"dGStatusTitle\">";
        // line 213
        echo __("Display Groups Status");
        echo "</span>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 217
        echo __("Click on the chart to view Display information");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayGroupStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget\">
                <div class=\"widget-title\">
                    <i class=\"fa fa-desktop\"></i>
                    <span id=\"dGContentTitle\"> ";
        // line 229
        echo __("Display Groups Content Status");
        echo "</span>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"widget-body medium no-padding\">
                    <div style=\"text-align: center; height: 10px; margin-bottom: 5px\"><span>";
        // line 233
        echo __("Click on the chart to view Display information");
        echo "</span></div>
                    <div style=\"position: relative; height: 235px\">
                        <canvas id=\"displayGroupContentStatusChart\" style=\"clear:both;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"widget d-none\" id=\"displaysGridTable\">
        <div class=\"widget-title\">";
        // line 243
        echo __("Displays");
        // line 244
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displays.view"], "method", false, false, false, 244)) {
            // line 245
            echo "                <a class=\"pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
            echo "\">";
            echo __("Displays Page");
            echo "</a>
            ";
        }
        // line 247
        echo "        </div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" data-grid-name=\"displayGridView\">
                <div class=\"XiboFilter card mb-3 bg-light d-none\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <form class=\"form-inline d-block\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 255
        echo twig_call_macro($macros["inline"], "macro_hidden", ["displayGroupId"], 255, $context, $this->getSourceContext());
        echo "
                                    ";
        // line 256
        echo twig_call_macro($macros["inline"], "macro_hidden", ["mediaInventoryStatus"], 256, $context, $this->getSourceContext());
        echo "
                                    ";
        // line 257
        echo twig_call_macro($macros["inline"], "macro_hidden", ["loggedIn"], 257, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"displaysGrid\" class=\"table table-striped\" data-state-preference-name=\"statusDashboardDisplays\" style=\"width: 100%;\">
                        <thead>
                        <tr>
                            <th>";
        // line 267
        echo __("ID");
        echo "</th>
                            <th>";
        // line 268
        echo __("Display");
        echo "</th>
                            <th>";
        // line 269
        echo __("Status");
        echo "</th>
                            <th>";
        // line 270
        echo __("Authorised?");
        echo "</th>
                            <th>";
        // line 271
        echo __("Current Layout");
        echo "</th>
                            <th>";
        // line 272
        echo __("Storage Available");
        echo "</th>
                            <th>";
        // line 273
        echo __("Storage Total");
        echo "</th>
                            <th>";
        // line 274
        echo __("Storage Free %");
        echo "</th>
                            <th>";
        // line 275
        echo __("Description");
        echo "</th><th>";
        echo __("Orientation");
        echo "</th>
                            <th>";
        // line 276
        echo __("Resolution");
        echo "</th>
                            ";
        // line 277
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 277)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 278
        echo "                            <th>";
        echo __("Default Layout");
        echo "</th>
                            <th>";
        // line 279
        echo __("Interleave Default");
        echo "</th>
                            <th>";
        // line 280
        echo __("Email Alert");
        echo "</th>
                            <th>";
        // line 281
        echo __("Logged In");
        echo "</th>
                            <th>";
        // line 282
        echo __("Last Accessed");
        echo "</th>
                            <th>";
        // line 283
        echo __("Display Profile");
        echo "</th>
                            <th>";
        // line 284
        echo __("Version");
        echo "</th>
                            <th>";
        // line 285
        echo __("Device Name");
        echo "</th>
                            <th>";
        // line 286
        echo __("IP Address");
        echo "</th>
                            <th>";
        // line 287
        echo __("Mac Address");
        echo "</th>
                            <th>";
        // line 288
        echo __("Timezone");
        echo "</th>
                            <th>";
        // line 289
        echo __("Latitude");
        echo "</th>
                            <th>";
        // line 290
        echo __("Longitude");
        echo "</th>
                            <th>";
        // line 291
        echo __("Screen shot?");
        echo "</th>
                            <th>";
        // line 292
        echo __("Thumbnail");
        echo "</th>
                            <th>";
        // line 293
        echo __("CMS Transfer?");
        echo "</th>
                            <th>";
        // line 294
        echo __("Bandwidth Limit");
        echo "</th>
                            <th>";
        // line 295
        echo __("Last Command");
        echo "</th>
                            <th>";
        // line 296
        echo __("XMR Registered");
        echo "</th>
                            <th>";
        // line 297
        echo __("Commercial Licence");
        echo "</th>
                            <th>";
        // line 298
        echo __("Remote");
        echo "</th>
                            <th>";
        // line 299
        echo __("Created Date");
        echo "</th>
                            <th>";
        // line 300
        echo __("Modified Date");
        echo "</th>
                            <th>";
        // line 301
        echo __("Faults?");
        echo "</th>
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

    // line 314
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "    <script type=\"text/javascript\">

        var displayGroupStatusChart = null;
        var displayGroupContentStatusChart = null;

        var displayGroupId = null;
        var loggedInStatus = null;
        var mediaInventoryStatus = null;

        var displayGroupIdsContent = [];
        var displayGroupIdsStatus = [];
        var displayGridTable = null

        // Create our chart
        var bandwidthChart = new Chart(\$(\"#bandwidthChart\"), {
            type: \"bar\",
            data: ";
        // line 331
        echo ($context["bandwidthWidget"] ?? null);
        echo ",
            options: {
                scales: {
                    xAxes: [{
                        stacked: ";
        // line 335
        if (($context["xmdsLimit"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 336
        echo "                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: \"";
        // line 340
        echo twig_escape_filter($this->env, ($context["bandwidthSuffix"] ?? null), "html", null, true);
        echo "\",
                        },
                        stacked: ";
        // line 342
        if (($context["xmdsLimit"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        // line 343
        echo "                    }]
                },
                legend: {
                    display: false
                },
                maintainAspectRatio: false,
            }
        });

        var libraryData = ";
        // line 352
        echo ($context["libraryWidgetData"] ?? null);
        echo ";
        var colours = new Array();
        for(var i = 0; i < libraryData.length; i++) {
            colours.push(\$c.rand());
        }
        var libraryChart = new Chart(\$(\"#libraryChart\"), {
            type: 'pie',
            data: {
                datasets: [{
                    data: libraryData,
                    backgroundColor: colours
                }],
                labels: ";
        // line 364
        echo ($context["libraryWidgetLabels"] ?? null);
        echo "
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\".article_date\").each(function(index, element) {
            if(\$(\".article_date\").length > 1){
                // Replace the ISO date with a nice formatted date \"for humans\"
                \$(this).html(moment(\$(this).html(), systemDateFormat).fromNow());
            }
        });

        var table = \$(\"#displays\").DataTable({
            \"language\": dataTablesLanguage,
            serverSide: true,
            stateSave: true,
            responsive: true,
            stateDuration: 0,
            stateLoadCallback: dataTableStateLoadCallback,
            stateSaveCallback: dataTableStateSaveCallback,
            filter: false,
            searchDelay: 3000,
            order: [[0, \"asc\"]],
            ajax: {
                \"url\": \"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displays"), "html", null, true);
        echo "\",
                \"data\": function (dataToSend) {
                    //make a new object so as not to destroy the input.
                    var data = {};
                    data.draw = dataToSend.draw;
                    data.length = dataToSend.length;
                    data.start = dataToSend.start;
                    data.order = dataToSend.order;
                    data.columns = [];

                    \$.each(dataToSend.columns, function (index, e) {
                        var col = {};
                        col.data = e.data;
                        if (e.name != null && e.name !== \"\")
                            col.name = e.name;
                        data.columns.push(col);
                    });

                    \$.extend(data, \$(\"#displays\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());

                    return data;
                }
            },
            createdRow: function (row, data, index) {
                if (data.mediaInventoryStatus === 1) {
                    \$(row).addClass('table-success');
                } else if (data.mediaInventoryStatus === 1) {
                    \$(row).addClass('table-danger');
                } else {
                    \$(row).addClass('table-warning');
                }
            },
            lengthChange: false,
            \"columns\": [
                {\"data\": \"display\"},
                {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn},
                {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn}
            ]
        });

        table.on('processing.dt', dataTableProcessing);
        table.on('draw', function(e, settings) {
            var \$displaysComment = \$(\".displays-comment\");
            var total = table.page.info().recordsTotal;
            \$(\".displays-count\").html(total);
            \$displaysComment.html((total > 0) ? \$displaysComment.data().titlePlural : \$displaysComment.data().title)
        });

        var displayData ";
        // line 438
        if (($context["displayStatus"] ?? null)) {
            echo "= ";
            echo ($context["displayStatus"] ?? null);
        }
        echo ";
        var displayStatusChart = new Chart(\$(\"#displayStatusChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [translations.online, translations.offline]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        var displayMediaStatusData ";
        // line 453
        if (($context["displayMediaStatus"] ?? null)) {
            echo "= ";
            echo ($context["displayMediaStatus"] ?? null);
        }
        echo ";

        var displayContentChart = new Chart(\$(\"#displayContentChart\"), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: displayMediaStatusData,
                    backgroundColor: [\"rgb(0,255,0)\", \"rgb(255,0,0)\"]
                }],
                labels: [translations.upToDate, translations.notUpToDate]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        \$(\"#displayStatusChart\").click(function(evt){
                var activePoints = displayStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == translations.online) {
                        loggedInStatus = 1;
                        \$('#dGStatusTitle').css('color', 'rgb(0,255,0)')
                    } else {
                        loggedInStatus = 0;
                        \$('#dGStatusTitle').css('color', 'rgb(255,0,0)')
                    }

                    if (displayGroupStatusChart !== undefined && displayGroupStatusChart !== null) {
                        displayGroupStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        echo "\",
                        data: {
                            status: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsStatus = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupStatusChart = new Chart(\$(\"#displayGroupStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false,
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('d-none');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayContentChart\").click(function(evt){
                var activePoints = displayContentChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    var label = chartData.labels[index];

                    if (label == translations.upToDate) {
                        mediaInventoryStatus = 1;
                        \$('#dGContentTitle').css('color', 'rgb(0,255,0)')
                    } else {
                        mediaInventoryStatus = -1;
                        \$('#dGContentTitle').css('color', 'rgb(255,0,0)')
                    }

                    if (displayGroupContentStatusChart !== undefined && displayGroupContentStatusChart !== null) {
                        displayGroupContentStatusChart.destroy();
                    }

                    \$.ajax({
                        type: \"get\",
                        url: \"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("statusdashboard.displayGroups"), "html", null, true);
        echo "\",
                        data: {
                            inventoryStatus: label
                        },
                        success: function (result) {
                            if (result.success === true) {

                                var displayGroupNames = JSON.parse(result.data.displayGroupNames);
                                var displaysAssigned = JSON.parse(result.data.displayGroupMembers);
                                displayGroupIdsContent = JSON.parse(result.data.displayGroupIds);

                                var coloursDG = [];

                                for(var i = 0; i < displayGroupNames.length; i++) {
                                    coloursDG.push(\$c.rand());
                                }

                                displayGroupContentStatusChart = new Chart(\$(\"#displayGroupContentStatusChart\"), {
                                    type: 'doughnut',
                                    data: {
                                        datasets: [{
                                            data: displaysAssigned,
                                            backgroundColor: coloursDG
                                        }],
                                        labels: displayGroupNames
                                    },
                                    options: {
                                        maintainAspectRatio: false
                                    }
                                });

                                \$(\"#displayGroupStatusChartRow\").removeClass('d-none');
                            }
                        }
                    });
                }
            }
        );

        \$(\"#displayGroupStatusChart\").click(function(evt) {
                var activePoints = displayGroupStatusChart.getElementsAtEvent(evt);

                \$('#displayGroupId').val(\"\");
                \$('#mediaInventoryStatus').val(\"\");
                \$('#loggedIn').val(\"\");
                if (activePoints[0]) {
                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsStatus[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#loggedIn').val(loggedInStatus);
                    handleDisplaysGrid();

                    \$(\"#displaysGridTable\").removeClass('d-none');
                }
            }
        );

        \$(\"#displayGroupContentStatusChart\").click(function(evt){
                var activePoints = displayGroupContentStatusChart.getElementsAtEvent(evt);

                if (activePoints[0]) {
                    \$('#displayGroupId').val(\"\");
                    \$('#mediaInventoryStatus').val(\"\");
                    \$('#loggedIn').val(\"\");

                    var chartData = activePoints[0]['_chart'].config.data;
                    var index = activePoints[0]['_index'];

                    displayGroupId = displayGroupIdsContent[index];

                    \$('#displayGroupId').val(displayGroupId);
                    \$('#mediaInventoryStatus').val(mediaInventoryStatus);
                    handleDisplaysGrid();

                    \$(\"#displaysGridTable\").removeClass('d-none');
                }
            }
        );

        function handleDisplaysGrid() {
            if (displayGridTable != null) {
                displayGridTable.ajax.reload();
            } else {
                displayGridTable = \$(\"#displaysGrid\").DataTable({
                    \"language\": dataTablesLanguage,
                    dom: dataTablesTemplate,
                    serverSide: true,
                    stateSave: true,
                    stateDuration: 0,
                    stateLoadCallback: dataTableStateLoadCallback,
                    stateSaveCallback: dataTableStateSaveCallback,
                    filter: false,
                    searchDelay: 3000,
                    responsive: true,
                    order: [[1, \"asc\"]],
                    ajax: {
                        \"url\": \"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        echo "\",
                        \"data\": function (dataToSend) {
                            //make a new object so as not to destroy the input.
                            var data = {};
                            data.draw = dataToSend.draw;
                            data.length = dataToSend.length;
                            data.start = dataToSend.start;
                            data.order = dataToSend.order;
                            data.columns = [];
                            // remove buttons column
                            dataToSend.columns.pop();
                            \$.each(dataToSend.columns, function (index, e) {
                                var col = {};
                                col.data = e.data;
                                if (e.name != null && e.name != \"\")
                                    col.name = e.name;
                                data.columns.push(col);
                            });

                            \$.extend(data, \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                            return data;
                        }
                    },
                    createdRow: function (row, data, index) {
                        if (data.mediaInventoryStatus === 1) {
                            \$(row).addClass('table-success');
                        } else if (data.mediaInventoryStatus === 1) {
                            \$(row).addClass('table-danger');
                        } else {
                            \$(row).addClass('table-warning');
                        }
                    },
                    \"columns\": [
                        {\"data\": \"displayId\", responsivePriority: 2},
                        {\"data\": \"display\", responsivePriority: 2},
                        {
                            \"data\": \"mediaInventoryStatus\",
                            responsivePriority: 2,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 1)
                                    icon = \"fa-check\";
                                else if (data == 2)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-cloud-download\";

                                return '<span class=\"fa ' + icon + '\" title=\"' + (row.statusDescription) + '\"></span>';
                            }
                        },
                        {\"data\": \"licensed\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                        {\"data\": \"currentLayout\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                        {
                            \"data\": \"storageAvailableSpace\",
                            responsivePriority: 5,
                            \"visible\": false,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                return row.storageAvailableSpaceFormatted;
                            }
                        },
                        {
                            \"data\": \"storageTotalSpace\",
                            responsivePriority: 5,
                            \"visible\": false,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                return row.storageTotalSpaceFormatted;
                            }
                        },
                        {\"data\": \"storagePercentage\", \"visible\": false, \"sortable\": false, responsivePriority: 5},
                        {\"data\": \"description\", \"visible\": false, responsivePriority: 4},
                        {\"data\": \"orientation\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"resolution\", \"visible\": false, responsivePriority: 6},
                        ";
        // line 734
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 734)) {
            // line 735
            echo "                        {
                            \"name\": \"tags\",
                            responsivePriority: 3,
                            \"sortable\": false,
                            \"visible\": false,
                            \"data\": dataTableCreateTags
                        },
                        ";
        }
        // line 743
        echo "                        {\"data\": \"defaultLayout\", \"visible\": false, responsivePriority: 4},
                        {\"data\": \"incSchedule\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                        {\"data\": \"emailAlert\", \"render\": dataTableTickCrossColumn, \"visible\": false, responsivePriority: 5},
                        {\"data\": \"loggedIn\", \"render\": dataTableTickCrossColumn, responsivePriority: 3},
                        {\"data\": \"lastAccessed\", \"render\": dataTableDateFromUnix, responsivePriority: 4},
                        {
                            \"name\": \"displayProfileId\",
                            responsivePriority: 5,
                            \"data\": function (data, type) {
                                return data.displayProfile;
                            },
                            \"visible\": false
                        },
                        {
                            \"name\": \"clientSort\",
                            responsivePriority: 4,
                            \"data\": function (data) {
                                if (data.clientType === 'lg') {
                                    data.clientType = 'webOS'
                                }

                                return data.clientType + ' ' + data.clientVersion + '-' + data.clientCode;
                            },
                            \"visible\": false
                        },
                        {\"data\": \"deviceName\", \"visible\": false, responsivePriority: 5},
                        {\"data\": \"clientAddress\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"macAddress\", responsivePriority: 5},
                        {\"data\": \"timeZone\", \"visible\": false, responsivePriority: 5},
                        {\"data\": \"latitude\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"longitude\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"screenShotRequested\", \"render\": dataTableTickCrossColumn, \"visible\": false, \"name\": \"screenShotRequested\", responsivePriority: 7},
                        {
                            \"name\": \"thumbnail\",
                            responsivePriority: 4,
                            \"orderable\": false,
                            \"data\": function (data, type) {
                                if (type != \"display\")
                                    return data.thumbnail;

                                if (data.thumbnail != \"\") {
                                    return '<a class=\"display-screenshot-container\" data-toggle=\"lightbox\" data-type=\"image\" href=\"' + data.thumbnail + '\"><img class=\"display-screenshot\" src=\"' + data.thumbnail + '\" data-display-id=\"'+ data.displayId +'\" data-type=\"'+ data.clientType +'\" /></a>';
                                }
                                else {
                                    return \"\";
                                }
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"isCmsTransferInProgress\",
                            \"render\": dataTableTickCrossColumn,
                            \"visible\": false,
                            \"name\": \"isCmsTransferInProgress\"
                        },
                        {
                            \"name\": \"bandwidthLimit\",
                            responsivePriority: 5,
                            \"data\": null,
                            \"render\": {\"_\": \"bandwidthLimit\", \"display\": \"bandwidthLimitFormatted\", \"sort\": \"bandwidthLimit\"},
                            \"visible\": false
                        },
                        {
                            \"data\": \"lastCommandSuccess\",
                            responsivePriority: 6,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 1)
                                    icon = \"fa-check\";
                                else if (data == 0)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-question\";

                                return \"<span class='fa \" + icon + \"'></span>\";
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"xmrChannel\",
                            responsivePriority: 6,
                            \"render\": function (data, type, row) {
                                if (type === \"export\") {
                                    return (data !== null && data !== \"\") ? 1 : 0;
                                }

                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data != null && data != \"\")
                                    icon = \"fa-check\";
                                else
                                    icon = \"fa-times\";

                                return \"<span class='fa \" + icon + \"'></span>\";
                            },
                            \"visible\": false
                        },
                        {
                            \"data\": \"commercialLicence\",
                            \"name\": \"commercialLicence\",
                            responsivePriority: 5,
                            \"render\": function (data, type, row) {
                                if (type != \"display\")
                                    return data;

                                var icon = \"\";
                                if (data == 3) {
                                    return \"N/A\";
                                } else {
                                    if (data == 1) {
                                        icon = \"fa-check\";
                                    } else if (data == 0) {
                                        icon = \"fa-times\";
                                    } else if (data == 2) {
                                        icon = \"fa-clock-o\";
                                    }

                                    return '<span class=\"fa ' + icon + '\" title=\"' + (row.commercialLicenceDescription) + '\"></span>';
                                }
                            },
                            \"visible\": false
                        },
                        {
                            \"name\": \"remote\",
                            \"data\": null,
                            responsivePriority: 4,
                            \"render\": function (data, type, row) {
                                if (type === \"display\") {
                                    var html = \"<div class='remote-icons'>\";
                                    if (\"";
        // line 877
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 877), "html", null, true);
        echo "\" !== \"\" && row.clientAddress != null && row.clientAddress !== \"\") {
                                        var link = \"";
        // line 878
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 878), "html", null, true);
        echo "\".replace('%s', row.clientAddress);
                                        html += '<a href=\"' + link + '\" title=\"";
        // line 879
        echo twig_escape_filter($this->env, __("VNC to this Display"), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", [], "any", false, false, false, 879), "html", null, true);
        echo "\">'
                                            + '<i class=\"fa fa-eye\"></i></a>';
                                    }

                                    if (row.teamViewerLink !== \"\") {
                                        html += '<a href=\"' + row.teamViewerLink + '\" title=\"";
        // line 884
        echo twig_escape_filter($this->env, __("TeamViewer to this Display"), "html", null, true);
        echo "\" target=\"_blank\">'
                                            + '<img src=\"";
        // line 885
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 885), "html", null, true);
        echo "theme/default/img/remote_icons/teamviewer.png\" alt=\"TeamViewer Icon\"></a>';
                                    }

                                    if (row.webkeyLink !== \"\") {
                                        html += '<a href=\"' + row.webkeyLink + '\" title=\"";
        // line 889
        echo twig_escape_filter($this->env, __("Webkey to this Display"), "html", null, true);
        echo "\" target=\"_blank\">'
                                            + '<img src=\"";
        // line 890
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 890), "html", null, true);
        echo "theme/default/img/remote_icons/webkey.png\" alt=\"Webkey Icon\"></a>';
                                    }

                                    return html + \"</div>\";

                                } else if (type === \"export\") {
                                    if (row.teamViewerLink !== \"\") {
                                        return \"TeamViewer: \" + row.teamViewerLink;
                                    }
                                    if (row.webkeyLink !== \"\") {
                                        return \"Webkey: \" + row.webkeyLink;
                                    }
                                    if (row.teamViewerLink === \"\" && row.webkeyLink === \"\") {
                                        return \"\";
                                    }
                                } else {
                                    return \"\";
                                }
                            },
                            \"visible\": true,
                            \"orderable\": false
                        },
                        {\"data\": \"createdDt\", \"visible\": false, responsivePriority: 6},
                        {\"data\": \"modifiedDt\", \"visible\": false, responsivePriority: 6},
                        {
                            \"data\": \"countFaults\",
                            \"name\": \"countFaults\",
                            responsivePriority: 3,
                            \"render\": function (data, type, row) {
                                if (type != \"display\") {
                                    return data;
                                }

                                if (data > 0) {
                                    return '<span class=\"badge\" style=\"background-color: red; color: white\">'+(row.countFaults)+'</span>';
                                } else {
                                    return '';
                                }
                            }
                        },
                    ]
                });

                displayGridTable.on('draw', dataTableDraw);
                displayGridTable.on('draw', { form: \$(\"#displaysGrid\").closest(\".XiboGrid\").find(\".FilterDiv form\") }, dataTableCreateTagEvents);
                displayGridTable.on('processing.dt', dataTableProcessing);
                dataTableAddButtons(displayGridTable, \$('#displaysGrid_wrapper').find('.dataTables_buttons'))}
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "dashboard-status-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1274 => 890,  1270 => 889,  1263 => 885,  1259 => 884,  1249 => 879,  1245 => 878,  1241 => 877,  1105 => 743,  1095 => 735,  1093 => 734,  1009 => 653,  907 => 554,  842 => 492,  797 => 453,  776 => 438,  725 => 390,  696 => 364,  681 => 352,  670 => 343,  664 => 342,  659 => 340,  653 => 336,  647 => 335,  640 => 331,  622 => 315,  618 => 314,  602 => 301,  598 => 300,  594 => 299,  590 => 298,  586 => 297,  582 => 296,  578 => 295,  574 => 294,  570 => 293,  566 => 292,  562 => 291,  558 => 290,  554 => 289,  550 => 288,  546 => 287,  542 => 286,  538 => 285,  534 => 284,  530 => 283,  526 => 282,  522 => 281,  518 => 280,  514 => 279,  509 => 278,  503 => 277,  499 => 276,  493 => 275,  489 => 274,  485 => 273,  481 => 272,  477 => 271,  473 => 270,  469 => 269,  465 => 268,  461 => 267,  448 => 257,  444 => 256,  440 => 255,  431 => 249,  427 => 247,  419 => 245,  416 => 244,  414 => 243,  401 => 233,  394 => 229,  379 => 217,  372 => 213,  354 => 198,  349 => 195,  347 => 194,  333 => 183,  328 => 180,  326 => 179,  314 => 169,  311 => 168,  294 => 165,  288 => 164,  285 => 163,  280 => 162,  278 => 161,  273 => 158,  271 => 157,  253 => 142,  249 => 141,  245 => 140,  236 => 133,  234 => 132,  219 => 119,  216 => 118,  213 => 117,  210 => 116,  207 => 115,  205 => 114,  192 => 103,  186 => 101,  183 => 100,  180 => 99,  177 => 98,  174 => 97,  171 => 96,  169 => 95,  156 => 84,  151 => 82,  146 => 81,  140 => 79,  138 => 78,  118 => 65,  114 => 64,  98 => 51,  94 => 50,  76 => 37,  65 => 28,  54 => 27,  50 => 26,  45 => 23,  43 => 24,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard-status-page.twig", "/srv/xibo-cms/views/dashboard-status-page.twig");
    }
}

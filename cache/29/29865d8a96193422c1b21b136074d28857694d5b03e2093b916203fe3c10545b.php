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

/* schedule-page.twig */
class __TwigTemplate_b56ebd52effffca6af294e010d881d70daff66bc89cf3a665584b8466ed6395a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "schedule-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "schedule-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Schedule"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"row\">
        <div class=\"xibo-calendar-controls-container align-content-start col-sm-6 col-xl-5 pr-0 form-inline\">
            <div class=\"xibo-calendar-controls\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" title=\"Show All\" type=\"checkbox\" id=\"showAll\" name=\"showAll\" data-search-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        echo "\"
                        ";
        // line 34
        if ((0 === twig_compare(($context["displayGroupsShowAll"] ?? null),  -1))) {
            // line 35
            echo "                            checked
                        ";
        }
        // line 37
        echo "                    >
                    <label class=\"form-check-label\" for=\"showAll\">";
        // line 38
        echo __("Show All");
        echo "</label>
                </div>
            </div>
            <div class=\"xibo-calendar-controls dropdown \">
                <select id=\"DisplayList\" class=\"form-control\" name=\"displayGroupIds[]\"
                        data-placeholder=\"";
        // line 43
        echo __("Displays");
        echo "\"
                        data-search-url=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        echo "\"
                        data-trans-groups=\"";
        // line 45
        echo __("Groups");
        echo "\"
                        data-trans-display=\"";
        // line 46
        echo __("Display");
        echo "\"
                        data-allow-clear=\"true\"
                        data-width=\"100%\"
                        data-placeholder=\"";
        // line 49
        echo __("Select Displays");
        echo "\" multiple>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["displayGroups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 51
            echo "                        ";
            $context["itemOptionId"] = twig_get_attribute($this->env, $this->source, $context["option"], "displayGroupId", [], "any", false, false, false, 51);
            // line 52
            echo "                        ";
            $context["itemOptionValue"] = twig_get_attribute($this->env, $this->source, $context["option"], "displayGroup", [], "any", false, false, false, 52);
            // line 53
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
            echo "\" selected >";
            echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </select>
            </div>

            <div class=\"xibo-calendar-controls dropdown\">
                ";
        // line 60
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Layout / Campaign");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please select a Layout or Campaign for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
                <select name=\"campaignId\" id=\"campaignId\" class=\"d-none form-control\"
                    data-search-url= \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search"), "html", null, true);
        echo "\"
                    data-trans-campaigns= \"";
        // line 65
        echo __("Campaigns");
        echo "\"
                    data-trans-layouts= \"";
        // line 66
        echo __("Layouts");
        echo "\"
                    data-allow-clear=\"true\"
                    data-width=\"100%\"
                    title=\"";
        // line 69
        echo __("Layout / Campaign");
        echo "\"
                    data-placeholder=\"";
        // line 70
        echo __("Layout / Campaign");
        echo "\"
                    data-dropdownAutoWidth
                    >
                </select>
            </div>
        </div>
        <div class=\"xibo-calendar-controls-container align-content-start justify-content-end col-sm-6 col-xl-7 pl-0 form-inline text-right\">
            ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "schedule.add"], "method", false, false, false, 77)) {
            // line 78
            echo "                <div class=\"xibo-calendar-controls\">
                    <button class=\"btn btn-success XiboFormButton\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.form"), "html", null, true);
            echo "\">
                        ";
            // line 80
            echo __("Add Event");
            // line 81
            echo "                    </button>
                </div>
            ";
        }
        // line 84
        echo "            <div class=\"btn-group xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span class=\"fa fa-backward\"></span> ";
        // line 85
        echo __("Prev");
        echo "</button>
                <button type=\"button\" class=\"btn btn-white\" data-calendar-nav=\"today\">";
        // line 86
        echo __("Today");
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"next\">";
        // line 87
        echo __("Next");
        echo " <span class=\"fa fa-forward\"></span></button>
            </div>
            <div class=\"xibo-calendar-controls\">
                <div class=\"inputgroup date\" id=\"dateInput\">
                    <span class=\"btn btn-outline-dark date-open-button\" role=\"button\">
                        <i class=\"fa fa-calendar\"></i>
                    </span>
                    <input type=\"text\" class=\"form-control\" id=\"dateInputLink\" data-input />
                </div>
            </div>
            <div class=\"btn-group xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-outline-info\" data-calendar-view=\"year\">";
        // line 98
        echo __("Year");
        echo "</button>
                <button type=\"button\" class=\"btn btn-outline-info active\" data-calendar-view=\"month\">";
        // line 99
        echo __("Month");
        echo "</button>
                <button type=\"button\" class=\"btn btn-outline-info\" data-calendar-view=\"week\">";
        // line 100
        echo __("Week");
        echo "</button>
                <button type=\"button\" class=\"btn btn-outline-info\" data-calendar-view=\"day\">";
        // line 101
        echo __("Day");
        echo "</button>
                ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "schedule.agenda"], "method", false, false, false, 102)) {
            // line 103
            echo "                    <button type=\"button\" class=\"btn btn-outline-info\" data-calendar-view=\"agenda\">";
            echo __("Agenda");
            echo "</button>
                ";
        }
        // line 105
        echo "            </div>
        </div>
        <div class=\"text-center col-xl-12\">
            <h1 class=\"page-header\"></h1>
            <div class=\"calendar-loading\">
                <span id=\"calendar-progress\" class=\"fa fa-spin fa-cog\"></span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 cal-event-agenda-filter\" style=\"display:none;\">
            <!-- Time Slider -->
            <div class=\"cal-event-time-bar\">
                <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"-1\">
                    <span class=\"fa fa-step-backward\"></span>
                </div>
                <input id=\"timePicker\" type=\"text\"
                    data-slider-id='timePickerSlider'
                    data-slider-min=\"0\"
                    data-slider-max=\"1439\"
                    data-slider-step=\"1\"
                    data-slider-value=\"0\"
                    data-slider-handle=\"square\"
                />
                <div class=\"btn slider-step-btn time-picker-step-btn\" data-step=\"1\">
                    <span class=\"fa fa-step-forward\"></span>
                </div>
            </div>

            <!-- Geo location -->
            <form class=\"form-inline cal-event-location\">
                <button id=\"toggleMap\" type=\"button\" class=\"btn btn-primary pull-right\" title=\"";
        // line 136
        echo __("Map");
        echo "\"><i class=\"fa fa-map\"></i></button>
                <button id=\"getLocation\" type=\"button\" class=\"btn btn-white pull-right\" title=\"";
        // line 137
        echo __("Get browser location!");
        echo "\"><i class=\"fa fa-map-marker\"></i></button>
                <button id=\"clearLocation\" type=\"button\" class=\"btn btn-white pull-right\" title=\"";
        // line 138
        echo __("Clear coordinates!");
        echo "\"><i class=\"fa fa-times\"></i></button>
                <div class=\"form-group pull-right\">
                    <input type=\"email\" class=\"form-control\" id=\"geoLongitude\" placeholder=\"Longitude\">
                </div>
                <div class=\"form-group pull-right\">
                    <input type=\"text\" class=\"form-control\" id=\"geoLatitude\" placeholder=\"Latitude\">
                </div>
            </form>

            <!-- Geo location map -->
            <div class=\"cal-event-location-map\" data-default-lat=\"";
        // line 148
        echo twig_escape_filter($this->env, ($context["defaultLat"] ?? null), "html", null, true);
        echo "\" data-default-long=\"";
        echo twig_escape_filter($this->env, ($context["defaultLong"] ?? null), "html", null, true);
        echo "\">
                <div id=\"geoFilterAgendaMap\" style=\"height: 400px; width: 100%\" class=\"d-none\"></div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div id=\"CalendarContainer\" data-event-source=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.calendar.data"), "html", null, true);
        echo "\" data-agenda-link=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.events", ["id" => ":id"]), "html", null, true);
        echo "\" data-calendar-type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 154), "html", null, true);
        echo "\" class=\"col-sm-12\">
            <div id=\"Calendar\"></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"cal-legend\">
                <ul>
                    <li class=\"event-always\"><span class=\"fa fa-retweet\"></span> ";
        // line 162
        echo __("Always showing");
        echo "</li>
                    <li class=\"event-info\"><span class=\"fa fa-desktop\"></span> ";
        // line 163
        echo __("Single Display");
        echo "</li>
                    <li class=\"event-success\"><span class=\"fa fa-desktop\"></span> ";
        // line 164
        echo __("Multi Display");
        echo "</li>
                    <li class=\"event-important\"><span class=\"fa fa-bullseye\"></span> ";
        // line 165
        echo __("Priority");
        echo "</li>
                    <li class=\"event-special\"><span class=\"fa fa-repeat\"></span> ";
        // line 166
        echo __("Recurring");
        echo "</li>
                    <li class=\"event-inverse\"><span class=\"fa fa-lock\"></span> ";
        // line 167
        echo __("View Only");
        echo "</li>
                    <li class=\"event-command\"><span class=\"fa fa-wrench\"></span> ";
        // line 168
        echo __("Command");
        echo "</li>
                    <li class=\"event-interrupt\"><span class=\"fa fa-hand-paper\"></span> ";
        // line 169
        echo __("Interrupt");
        echo "</li>
                    <li class=\"event-geo-location\"><span class=\"fa fa-map-marker\"></span> ";
        // line 170
        echo __("Geo Location");
        echo "</li>
                    <li class=\"event-action\"><span class=\"fa fa-paper-plane \"></span> ";
        // line 171
        echo __("Interactive Action");
        echo "</li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 178
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "    ";
        $this->displayParentBlock("javaScriptTemplates", $context, $blocks);
        echo "
    
    ";
        // line 374
        echo "
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-day\">
            <div id=\"cal-day-box\">
                <div class=\"row-fluid clearfix cal-row-head\">
                    <div class=\"span1 col-1 cal-cell\"><%= cal.locale.time %></div>
                    <div class=\"span11 col-11 cal-cell\"><%= cal.locale.events %></div>
                </div>
                <% if(all_day.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-1\"><b><%= cal.locale.all_day %></b></div>
                    <div class=\"span11 col-11\">
                        <% _.each(all_day, function(event){ %>
                        <%
                        var eventTitle = (event.event.isAlways == 1) ? event.title : \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                        %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= eventTitle %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <% if(before_time.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-3\"><b><%= cal.locale.before_time %></b></div>
                    <div class=\"span5 col-5\">
                        <% _.each(before_time, function(event){ %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <span class=\"cal-hours pull-right\"><%= event.end_hour %></span>
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                               data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                               class=\"event-item\">
                                <%= event.title %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <div id=\"cal-day-panel\" class=\"clearfix\">
                    <div id=\"cal-day-panel-hour\">
                        <% for(i = 0; i < hours; i++){ %>
                        <div class=\"cal-day-hour\">
                            <% for(l = 0; l < cal._hour_min(i); l++){ %>
                            <div class=\"row-fluid cal-day-hour-part\">
                                <div class=\"span1 col-1\"><b><%= cal._hour(i, l) %></b></div>
                                <div class=\"span11 col-11\"></div>
                            </div>
                            <% }; %>
                        </div>
                        <% }; %>
                    </div>

                    <% _.each(by_hour, function(event){ %>
                    <div class=\"pull-left day-event <% if (event.lines < 1) { %>day-event-small<% } %> day-highlight dh-<%= event['class'] %>\" style=\"margin-top: <%= (event.top * 30) %>px; height: <%= (event.lines * 30) %>px\"
                    <% if (event.lines < 2) { %>data-toggle=\"popover\" data-html=\"true\" data-content=\"<a href='<%= event.url ? event.url : \"javascript:void(0)\" %>'><%= event.title %></a>\" title=\"<%= event.start_hour %> - <%= event.end_hour %>\"<% } %>
                    >
                    <span class=\"cal-hours\"><%= event.start_hour %> - <%= event.end_hour %></span>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                        <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            <% if(after_time.length) {%>
            <div class=\"row-fluid clearfix cal-day-hour\">
                <div class=\"span1 col-3\"><b><%= cal.locale.after_time %></b></div>
                <div class=\"span11 col-9\">
                    <% _.each(after_time, function(event){ %>
                    <div class=\"day-highlight dh-<%= event['class'] %>\">
                        <span class=\"cal-hours\"><%= event.start_hour %></span>
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                            <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            </div>
            <% }; %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-events-list\">
            <span id=\"cal-slide-tick\" style=\"display: none\"></span>
            <div id=\"cal-slide-content\" class=\"cal-event-list\">
                <ul class=\"unstyled list-unstyled\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";
                    var eventPriority = \"\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                        eventClass = \"event-important\";
                        eventIcon = \"fa-bullseye\";
                        eventPriority = event.event.isPriority;
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (event.event.eventTypeId == 6) {
                        eventIcon = \"fa-paper-plane\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <li>
                        <span class=\"pull-left event <%= event['class'] %>\"></span>&nbsp;
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                           data-event-class=\"<%= eventClass %>\" class=\"event-item\">
                            <span class=\"fa <%= eventIcon %>\"><span class=\"event-priority\"><%= eventPriority %></span></span> <%= title %></a>
                    </li>
                    <% }) %>
                </ul>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month\">
            <div class=\"cal-row-fluid cal-row-head\">
                <% _.each(days_name, function(name){ %>
                <div class=\"cal-cell1\"><%= name %></div>
                <% }) %>
            </div>
            <div class=\"cal-month-box\">
                <% for(i = 0; i < 6; i++) { %>
                <% if(cal.stop_cycling == true) break; %>
                <div class=\"cal-row-fluid cal-before-eventlist\">
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day1\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day2\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day3\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day4\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day5\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day6\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day7\"><%= cal._day(i, day++) %></div>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month-day\">
            <div class=\"cal-month-day <%= cls %>\">
                <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"day\" data-toggle=\"tooltip\" title=\"<%= tooltip %>\"><%= day %></span>

                <% if (events.length > 0) { %>
                    <span class=\"cal-month-day-number-events label label-info\" data-toggle=\"tooltip\" title=\"";
        echo __("Number of events");
        // line 624
        echo "\"><%= events.length %></span>
                <% } %>

                <% if (events.length > 0) { %>
                <div class=\"events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";
                    var eventPriority = \"\";

                    if (event.event.isAlways != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.isAlways == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                        eventClass = \"event-important\";
                        eventIcon = \"fa-bullseye\";
                        eventPriority = event.event.isPriority;
                    }

                    if (event.event.eventTypeId == 2) {
                        eventIcon = \"fa-wrench\";
                    }

                    if (event.event.eventTypeId == 4) {
                        eventIcon = \"fa-hand-paper\";
                    }

                    if (event.event.isGeoAware === 1) {
                        eventIcon = \"fa-map-marker\";
                    }

                    if (event.event.eventTypeId == 6) {
                        eventIcon = \"fa-paper-plane\";
                    }

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"pull-left event <%= eventClass %>\" data-toggle=\"tooltip\"
                       title=\"<%= event.title %>\"><span class=\"fa <%= eventIcon %>\"><span class=\"event-priority\"><%= eventPriority %></span></span></a>
                    <% }); %>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week\">
            <div class=\"cal-week-box\">
                <div class=\"cal-offset1 cal-column\"></div>
                <div class=\"cal-offset2 cal-column\"></div>
                <div class=\"cal-offset3 cal-column\"></div>
                <div class=\"cal-offset4 cal-column\"></div>
                <div class=\"cal-offset5 cal-column\"></div>
                <div class=\"cal-offset6 cal-column\"></div>
                <div class=\"cal-row-fluid cal-row-head\">
                    <% _.each(days_name, function(name) { %>
                    <div class=\"cal-cell1 <%= cal._getDayClass('week', start) %>\" data-toggle=\"tooltip\" title=\"<%= cal._getHolidayName(start) %>\"><%= name %><br>
                        <small><span data-cal-date=\"<%= start.getFullYear() %>-<%= start.getMonthFormatted() %>-<%= start.getDateFormatted() %>\" data-cal-view=\"day\"><%= cal.options.type !== 'Jalali' ? start.getDate() : start.getJalaliDate() %> <%= cal.options.type !== 'Jalali' ? cal.locale['ms' + start.getMonth()] : cal.locale['jms' + (start.getJalaliMonth() - 1)] %></span></small>
                    </div>
                    <% start.setDate(start.getDate() + 1); %>
                    <% }) %>
                </div>
                <hr>
                <%= cal._week() %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week-days\">
            <% _.each(events, function(event){ %>
            <%
            var title = event.title;
            var eventIcon = \"fa-desktop\";
            var eventClass = \"event-warning\";
            var eventPriority = \"\";

            if (event.event.isAlways != 1) {
            if (event.event.eventTypeId == 2) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else if (event.sameDay) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
            }
            }

            if (event.event.displayOrder > 0)
            title = title + \" (\" + event.event.displayOrder + \")\";

            if (event.event.displayGroups.length <= 1) {
            eventClass = \"event-info\";
            }
            else {
            eventClass = \"event-success\";
            }

            if (event.event.isAlways == 1) {
            eventIcon = \"fa-retweet\";
            }

            if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
            eventClass = \"event-special\";
            eventIcon = \"fa-repeat\";
            }

            if (event.event.isPriority >= 1) {
                eventClass = \"event-important\";
                eventIcon = \"fa-bullseye\";
                eventPriority = event.event.isPriority;
            }

            if (event.event.eventTypeId == 4) {
                eventIcon = \"fa-hand-paper\";
            }

            if (event.event.isGeoAware === 1) {
                eventIcon = \"fa-map-marker\";
            }

            if (event.event.eventTypeId == 6) {
                eventIcon = \"fa-paper-plane\";
            }

            if (!event.editable) {
            event.url = null;
            eventIcon = \"fa-wrench\";
            eventClass = \"event-inverse\";
            }
            %>
            <div class=\"cal-row-fluid\">
                <div class=\"cal-cell<%= event.days%> cal-offset<%= event.start_day %> day-highlight dh-<%= event['class'] %>\">
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"cal-event-week event<%= event.id %>\"><span class=\"fa <%= eventIcon %>\"><span class=\"event-priority\"><%= eventPriority %></span></span> <%= title %></a>
                </div>
            </div>
            <% }); %>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year\">
            <div class=\"cal-year-box\">
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(0) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(1) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(2) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(3) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(4) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(5) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(6) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(7) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(8) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(9) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(10) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(11) %></div>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year-month\">
            <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"month\"><%= month_name %></span>
            <% if (events.length > 0) { %>
            <small class=\"cal-events-num badge badge-important pull-left\"><%= events.length %></small>
            <div class=\"hide events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                <% _.each(events, function(event) { %>
                <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                   data-event-start=\"<%= event.start %>\" data-event-end=\"<%= event.end %>\"
                   data-event-class=\"<%= event['class'] %>\"
                   class=\"pull-left event <%= event['class'] %> event<%= event.id %>\" data-toggle=\"tooltip\"
                   title=\"<%= event.title %>\"></a>
                <% }); %>
            </div>
            <% } %>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda\">
            
            <div class=\"container-fluid\">
                
                <!-- Content panel with tabs -->
                <div class=\"card with-nav-tabs bg-white agenda-panel\">
                
                    <!-- Tab Panel -->
                    <% if (typeof agenda.displayGroupList != 'undefined' && agenda.displayGroupList.length > 1) { %>
                        <div class=\"card-heading\">
                                <ul class=\"nav nav-tabs\">
                                    <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                        <% if (displayGroup['id'] == agenda.selectedDisplayGroup) { %>
                                            <li class=\"nav-item active\">
                                        <% } else { %>
                                            <li class=\"nav-item\">
                                        <% }; %>
                                        
                                            <%
                                                // If it is a simple display show an 
                                                var displayGroupIcon = \"\";
                                                if (displayGroup['isDisplaySpecific'] == 0)
                                                    displayGroupIcon = \"<span class='fa fa-television'></span> \";
                                            %>
                                        
                                            <a class=\"nav-link\" data-toggle=\"tab\" data-id=\"<%= displayGroup['id'] %>\" href=\"#tab_<%= displayGroup['id'] %>\">
                                                <%= (displayGroupIcon + displayGroup['name']) %>
                                            </a>
                                        </li>
                                    <% }); %>
                                </ul> 
                        </div>
                    <% } %>
                
                    <!-- Tab Content -->
                    <div class=\"card-body p-1\">
                    
                    <% if (agenda.errorMessage != '') { %>
                       ";
        echo "
                       <!-- Request failed - Show Error Message -->
                       <div class=\"text-danger text-center\">
                           <% if (agenda.errorMessage == 'display_not_selected') { %>
                               <p>";
        // line 628
        echo __("Display not selected!");
        echo "</p>
                           <% } else if (agenda.errorMessage == 'all_displays_selected') { %>
                               <p>";
        // line 630
        echo __("Show All option does not work for this filter, one or more specific Display/Display Group need to be selected!");
        echo "</p>
                           <% } else if (agenda.errorMessage == 'no_events') { %>
                               <p>";
        // line 632
        echo __("No events for the chosen Display/Display Group on the selected date!");
        echo "</p>    
                           <% } else  if (agenda.errorMessage == 'request_failed') { %>
                               <p>";
        // line 634
        echo __("Data request failed!");
        echo "</p>
                           <% } %>
                       </div>
                       ";
        // line 695
        echo "
                   <% } else if(!jQuery.isEmptyObject(agenda.results)) { %>
                        <!-- Request successful - Show Data -->
                            
                        <!-- Breadcrumb trail -->
                        <div class=\"cal-event-breadcrumb-trail col-12\">
                            <div id=\"content\"></div>
                        </div>     
                        
                        <!-- Agenda Data Content -->
                        <div class=\"tab-content\">
                            <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                <% if (typeof agenda.results[(displayGroup['id'])] != 'undefined') { %>
                                    <% 
                                        var resultItem = agenda.results[displayGroup['id']]; 
                                        var isActive = (displayGroup['id'] == agenda.selectedDisplayGroup) ? 'active' : '';
                                    %>
                                    <div id=\"tab_<%= displayGroup['id'] %>\" class=\"tab-pane <%= isActive %> container-fluid\">
                                        <div class=\"row\">
                                            <% if(typeof resultItem.events != 'undefined') { %>
                                                <div class=\"col-lg-9 agenda-col\">
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 1) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 3) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 4) %>
                                                    <%= cal._layouts(resultItem.events, resultItem.layouts, 5) %>
                                                </div>
                                                <div class=\"col-lg-3 agenda-col\">
                                                    <div class=\"row\">
                                                        <div class=\"col-6 col-lg-12 agenda-col\">
                                                            <%= cal._displaygroups(resultItem.events, resultItem.displayGroups) %>
                                                        </div> 
                                                        <div class=\"col-6 col-lg-12 agenda-col\">
                                                            <%= cal._campaigns(resultItem.events, resultItem.campaigns) %>
                                                        </div>
                                                    </div>
                                                </div>
                                            <% } %>
                                        </div>
                                    </div>
                                <% } %>
                            <% }); %>
                        </div>
                    <% } %>   
                    </div>
                </div>
            </div>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-layouts\">
            <table class=\"table agenda-table agenda-table-layouts\" data-type=\"layouts\" style=\"width: 100%;\">
                <thead>
                    <tr class=\"table-title\">
                     <% if (layouts.type == 4) { %>
                        <th colspan=\"11\" class=\"pr-2\">
                     <% } else { %>
                        <th colspan=\"10\" class=\"pr-2\">
                     <% } %>
                            <% if (layouts.type == 1) { %>
                                ";
        echo __("Layouts");
        // line 697
        echo "</span>
                            <% } else if (layouts.type == 3) { %>
                                ";
        echo __("Overlay Layouts");
        // line 699
        echo "
                            <% } else if (layouts.type == 4) { %>
                                ";
        echo __("Interrupt Layouts");
        // line 701
        echo "
                            <% } else if (layouts.type == 5) { %>
                                ";
        echo __("Campaign Layouts");
        // line 704
        echo "
                            <% } %>
                            
                            <span class=\"pull-right badge badge-light\" title=\"";
        echo __("Number of Layouts");
        // line 709
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                                <%= layouts.length %>
                            </span>
                        </th>
                    </tr>
                    ";
        echo "
                    <tr>
                        <th></th>
                        <th>";
        // line 712
        echo __("ID");
        echo "</th>
                        <th>";
        // line 713
        echo __("Layout Name");
        echo "</th>
                        <th>";
        // line 714
        echo __("Status");
        echo "</th>
                        <th>";
        // line 715
        echo __("From Date");
        echo "</th>
                        <th>";
        // line 716
        echo __("To Date");
        echo "</th>
                        <th>";
        // line 717
        echo __("Layout Duration");
        echo "</th>
                        ";
        // line 718
        echo "<% if (layouts.type == 4) { %>";
        echo "
                        <th>";
        // line 719
        echo __("Share of Voice");
        echo "</th>
                        ";
        // line 720
        echo "<% } %>";
        echo "
                        <th>";
        // line 721
        echo __("Display Order");
        echo "</th>
                        <th>";
        // line 722
        echo __("Priority");
        echo "</th>
                        <th>";
        // line 723
        echo __("Visible");
        echo "</th>
                    </tr>
                    ";
        // line 735
        echo "
                </thead>
                <tbody>
                    <% _.each(layouts, function(layout){ %>
                        <tr 
                            class=\"<%= layout.itemClass %>\"
                            data-elem-id=\"<%= layout.layoutId %>\" 
                            data-event-id=\"<%= layout.eventId %>\" 
                            data-toggle=\"tooltip\"
                            <% if (layout.itemClass == 'low-priority') { %>
                                title=\"";
        echo __("This layout will not be shown as there are higher priority layouts scheduled at this time");
        // line 754
        echo "\"
                            <% } %> 
                        >
                            <td><span class=\"fa <%= layout.itemIcon %>\"></span></td>
                            <td><%= layout.layoutId %></td>
                            <td><%= layout.layoutName %></td>
                            <%
                                var icon = \"\";
                                if (layout.layoutStatus == 1)
                                    icon = \"fa-check\";
                                else if (layout.layoutStatus == 0)
                                    icon = \"fa-times\";
                                else if (layout.layoutStatus == 3)
                                    icon = \"fa-cogs\";
                                else
                                    icon = \"fa-exclamation\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <% if (layout.isAlways == 1) { %>
                                <td>";
        echo __("Always");
        // line 783
        echo "</td>
                                <td><span class=\"fa fa-retweet\"></span></td>
                            <% } else { %> 
                                <td><%= layout.eventFromDt %></td>
                                <td><%= layout.eventToDt %></td>
                            <% } %> 
                            
                            <td><%= layout.layoutDuration %></td>
                            <% if (layouts.type == 4) { %>
                            <td><%= layout.shareOfVoice %></td>
                            <% } %>
                            <td><%= layout.layoutDisplayOrder %></td>
                            <td><%= layout.eventPriority %></td>
                            <%
                                var icon = \"\";
                                if (layout.itemClass == 'low-priority')
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-displaygroups\">
            <table id=\"displaygroups\" class=\"table agenda-table\" data-type=\"displaygroups\"  width=\"100%\">
                ";
        echo "
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">";
        // line 786
        echo __("Display Groups");
        echo "</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>";
        // line 790
        echo __("ID");
        echo "</th>
                        <th>";
        // line 791
        echo __("Name");
        echo "</th>
                    </tr>
                </thead>
                ";
        // line 814
        echo "
                <tbody>
                    <% _.each(displaygroups, function(displaygroup){ %>
                        <tr data-elem-id=\"<%= displaygroup.displayGroupId %>\">
                            <%
                                var icon = \"\";
                                if (displaygroup.isDisplaySpecific == 1)
                                    icon = \"fa-television\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <td><%= displaygroup.displayGroupId %></td>
                            <td><%= displaygroup.displayGroup %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-campaigns\">
            <table id=\"campaigns\" class=\"table agenda-table\" data-type=\"campaigns\"  width=\"100%\">
                ";
        echo "
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"4\">";
        // line 817
        echo __("Campaigns");
        echo "</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>";
        // line 821
        echo __("ID");
        echo "</th>
                        <th>";
        // line 822
        echo __("Name");
        echo "</th>
                        <th>";
        // line 823
        echo __("Cycle Playback?");
        echo "</th>
                    </tr>
                </thead>
                ";
        // line 870
        echo "
                <tbody>
                    <% _.each(campaigns, function(campaign){ %>
                        <tr data-elem-id=\"<%= campaign.campaignId %>\">
                            <td></td>
                            <td><%= campaign.campaignId %></td>
                            <td><%= campaign.campaign %></td>
                            <%
                                var icon = \"\";
                                if (campaign.cyclePlaybackEnabled == 0)
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-breadcrumb-trail\">
            <!-- Layout -->
            <span>
                <a href=\"<%= layout.link %>\"><%= layout.name %></a>
            </span>
            
            <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            
            <!-- Campaign -->
            <% if (typeof campaign != 'undefined') { %>
                <span>
                    <% if (campaign.link != '') { %>
                      <a href=\"<%= campaign.link %>\"><%= campaign.name %></a>
                    <% } else { %>   
                      <%= campaign.name %>
                    <% } %> 
                </span>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            <% } %> 
            
            <!-- Schedule -->
            <span>
                <a href=\"<%= schedule.link %>\" class=\"XiboFormButton\" data-event-start=\"<%= schedule.fromDt %>\" data-event-end=\"<%= schedule.toDt %>\">
                    ";
        echo "
                        ";
        // line 871
        echo __("Schedule");
        // line 872
        echo "                    ";
        // line 903
        echo "
                </a>
            </span>
            
            <!-- Display Groups -->
            <% _.each(displayGroups, function(displayGroup){ %>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
                <span>
                  <% if (displayGroup.link != '') { %>
                    <a href=\"<%= displayGroup.link %>\"><%= displayGroup.name %></a>
                  <% } else { %>   
                    <%= displayGroup.name %>
                  <% } %> 
                </span>
            <% }); %>
            
        </script>


        <script type=\"text/x-handlebars-template\" id=\"reminderEventTemplate\">
            <div class=\"form-group row\">
                <input class=\"form-control\" name=\"reminder_scheduleReminderId[]\" type=\"hidden\" value=\"{{ scheduleReminderId }}\" />

                <div class=\"col-sm-2\">
                    <label for=\"reminder_value[]\">
                        <input class=\"form-control\" name=\"reminder_value[]\" type=\"number\" value=\"{{ value }}\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <label for=\"reminder_type[]\">
                        <select class=\"form-control\" name=\"reminder_type[]\">
                            <option value=\"1\" {{#eq type 1}}selected{{/eq}}>";
        echo __("Minute");
        // line 904
        echo "</option>
                            <option value=\"2\" {{#eq type 2}}selected{{/eq}}>";
        echo __("Hour");
        // line 905
        echo "</option>
                            <option value=\"3\" {{#eq type 3}}selected{{/eq}}>";
        echo __("Day");
        // line 906
        echo "</option>
                            <option value=\"4\" {{#eq type 4}}selected{{/eq}}>";
        echo __("Week");
        // line 907
        echo "</option>
                            <option value=\"5\" {{#eq type 5}}selected{{/eq}}>";
        echo __("Month");
        // line 914
        echo "</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_option[]\">
                        <select class=\"form-control\" name=\"reminder_option[]\">
                            <option value=\"1\" {{#eq option 1}}selected{{/eq}}>";
        echo __("Before schedule starts");
        // line 915
        echo "</option>
                            <option value=\"2\" {{#eq option 2}}selected{{/eq}}>";
        echo __("After schedule starts");
        // line 916
        echo "</option>
                            <option value=\"3\" {{#eq option 3}}selected{{/eq}}>";
        echo __("Before schedule ends");
        // line 917
        echo "</option>
                            <option value=\"4\" {{#eq option 4}}selected{{/eq}}>";
        echo __("After schedule ends");
        // line 924
        echo "</option>
                        </select>
                    </label>
                </div>
                <div class=\"col-sm-3\">
                    <label for=\"reminder_isEmail[]\">
                        <input type=\"checkbox\" name=\"reminder_isEmail[]\" {{#eq isEmail 1}}checked{{/eq}}/>
                        ";
        echo __("Notify by email?");
        // line 934
        echo "
                        <input type=\"hidden\" name=\"reminder_isEmailHidden[]\" />
                    </label>
                </div>
                <div class=\"col-sm-2\">
                    <button class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
                </div>
            </div>
        </script>

        ";
        echo "
";
    }

    // line 937
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 938
        echo "    <script type=\"text/javascript\">
\t\t// We are using this variable in xibo-calendar.js
        var scheduleRecurrenceDeleteUrl = \"";
        // line 940
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.recurrence.delete.form", ["id" => ":id"]), "html", null, true);
        echo "\";

        var layoutPreviewUrl = \"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => ":id"]), "html", null, true);
        echo "\";

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });

        // Init campaign select2
        \$(function() {
            // Select lists
            var dialog = 'body';

            var \$campaignSelect = \$('.xibo-calendar-controls #campaignId');
            \$campaignSelect.select2({
                dropdownParent: \$(dialog),
                ajax: {
                    url: \$campaignSelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    placeholder: 'This is my placeholder',
                    allowClear: true,
                    data: function(params) {

                        var query = {
                            isLayoutSpecific: -1,
                            retired: 0,
                            totalDuration: 0,
                            name: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isLayoutSpecific\"
                                },
                                {
                                    \"data\": \"campaign\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };

                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }

                        return query;
                    },
                    processResults: function(data, params) {

                        var results = [];
                        var campaigns = [];
                        var layouts = [];

                        \$.each(data.data, function(index, element) {
                            if (element.isLayoutSpecific === 1) {
                                layouts.push({
                                    \"id\": element.campaignId,
                                    \"text\": element.campaign
                                });
                            } else {
                                campaigns.push({
                                    \"id\": element.campaignId,
                                    \"text\": element.campaign
                                });
                            }
                        });

                        if (campaigns.length > 0) {
                            results.push({
                                \"text\": \$campaignSelect.data('transCampaigns'),
                                \"children\": campaigns
                            })
                        }

                        if (layouts.length > 0) {
                            results.push({
                                \"text\": \$campaignSelect.data('transLayouts'),
                                \"children\": layouts
                            })
                        }

                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;

                        return {
                            results: results,
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            })
            .on('change', function(e) {
                // Refresh the calendar view
                setTimeout(calendar.view(), 1000);
            });

            var \$displaySelect = \$('#DisplayList', dialog);
            \$displaySelect.select2({
                dropdownParent: \$(dialog),
                dropdownAutoWidth: true,
                ajax: {
                    url: \$displaySelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    data: function(params) {
                        var query = {
                            isDisplaySpecific: -1,
                            forSchedule: 1,
                            displayGroup: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isDisplaySpecific\"
                                },
                                {
                                    \"data\": \"displayGroup\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };
                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }
                        return query;
                    },
                    processResults: function(data, params) {
                        var groups = [];
                        var displays = [];
                        \$.each(data.data, function(index, element) {
                            if (element.isDisplaySpecific === 1) {
                                displays.push({
                                    \"id\": element.displayGroupId,
                                    \"text\": element.displayGroup
                                });
                            } else {
                                groups.push({
                                    \"id\": element.displayGroupId,
                                    \"text\": element.displayGroup
                                });
                            }
                        });
                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;
                        return {
                            results: [
                                {
                                    \"text\": \$displaySelect.data('transGroups'),
                                    \"children\": groups
                                },{
                                    \"text\": \$displaySelect.data('transDisplay'),
                                    \"children\": displays
                                }
                            ],
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            }).on('select2:unselecting', function() {
                // Prevent the ajax request when we deselect an option ( change will still be called )
                var opts = \$(this).data('select2').options;
                opts.set('disabled', true);

                setTimeout(function() {
                    opts.set('disabled', false);
                }, 100);
            })
            .on('change', function(e) {
                // Refresh the calendar view
                setTimeout(calendar.view(), 1000);
            });

            // Set up our show all selector control
            \$('#showAll', dialog).on('change', function() {
                setTimeout(calendar.view(), 1000);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "schedule-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1296 => 942,  1291 => 940,  1287 => 938,  1283 => 937,  1267 => 934,  1257 => 924,  1253 => 917,  1249 => 916,  1245 => 915,  1235 => 914,  1231 => 907,  1227 => 906,  1223 => 905,  1219 => 904,  1185 => 903,  1183 => 872,  1181 => 871,  1133 => 870,  1127 => 823,  1123 => 822,  1119 => 821,  1112 => 817,  1086 => 814,  1080 => 791,  1076 => 790,  1069 => 786,  1034 => 783,  1012 => 754,  999 => 735,  994 => 723,  990 => 722,  986 => 721,  982 => 720,  978 => 719,  974 => 718,  970 => 717,  966 => 716,  962 => 715,  958 => 714,  954 => 713,  950 => 712,  939 => 709,  933 => 704,  928 => 701,  923 => 699,  918 => 697,  857 => 695,  851 => 634,  846 => 632,  841 => 630,  836 => 628,  579 => 624,  383 => 374,  377 => 179,  373 => 178,  363 => 171,  359 => 170,  355 => 169,  351 => 168,  347 => 167,  343 => 166,  339 => 165,  335 => 164,  331 => 163,  327 => 162,  312 => 154,  301 => 148,  288 => 138,  284 => 137,  280 => 136,  247 => 105,  241 => 103,  239 => 102,  235 => 101,  231 => 100,  227 => 99,  223 => 98,  209 => 87,  205 => 86,  201 => 85,  198 => 84,  193 => 81,  191 => 80,  187 => 79,  184 => 78,  182 => 77,  172 => 70,  168 => 69,  162 => 66,  158 => 65,  154 => 64,  150 => 62,  145 => 61,  140 => 60,  134 => 55,  123 => 53,  120 => 52,  117 => 51,  113 => 50,  109 => 49,  103 => 46,  99 => 45,  95 => 44,  91 => 43,  83 => 38,  80 => 37,  76 => 35,  74 => 34,  70 => 33,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-page.twig", "/srv/xibo-cms/views/schedule-page.twig");
    }
}

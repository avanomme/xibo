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

/* displayprofile-form-edit-soc.twig */
class __TwigTemplate_8c9a8f8c58156a9256820350eb41af66bb2257befba8ba3467cb6d258c2803af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-soc.twig", 23)->unwrap();
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('formHtml', $context, $blocks);
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 29
        echo __("General");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#timers\" role=\"tab\" data-toggle=\"tab\">";
        // line 30
        echo __("On/Off Timers");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#pictureOptions\" role=\"tab\" data-toggle=\"tab\">";
        // line 31
        echo __("Picture Settings");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#lockOptions\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        echo __("Lock Settings");
        echo "</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 33
        echo __("Advanced");
        echo "</a></li>
            ";
        // line 34
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["commands"] ?? null)), 0))) {
            // line 35
            echo "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#commands\" role=\"tab\" data-toggle=\"tab\">";
            echo __("Commands");
            echo "</a></li>
            ";
        }
        // line 37
        echo "        </ul>
        <form id=\"displayProfileForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "displayProfileId", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"general\">
                    ";
        // line 41
        $this->loadTemplate("displayprofile-form-edit-common-fields.twig", "displayprofile-form-edit-soc.twig", 41)->display($context);
        // line 42
        echo "
                    ";
        // line 43
        $context["title"] = __("Licence Code");
        // line 44
        echo "                    ";
        $context["helpText"] = __("Provide the Licence Code (formerly Licence email address) to license Players using this Display Profile.");
        // line 45
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_email", ["emailAddress", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "emailAddress"], "method", false, false, false, 45), ($context["helpText"] ?? null)], 45, $context, $this->getSourceContext());
        echo "

                    ";
        // line 47
        $context["title"] = __("Collect interval");
        // line 48
        echo "                    ";
        $context["helpText"] = __("How often should the Player check for new content.");
        // line 49
        echo "                    ";
        $context["options"] = [0 => ["id" => 60, "value" => __("1 minute")], 1 => ["id" => 300, "value" => __("5 minutes")], 2 => ["id" => 600, "value" => __("10 minutes")], 3 => ["id" => 1800, "value" => __("30 minutes")], 4 => ["id" => 3600, "value" => __("1 hour")], 5 => ["id" => 5400, "value" => __("1 hour 30 minutes")], 6 => ["id" => 7200, "value" => __("2 hours")], 7 => ["id" => 9000, "value" => __("2 hours 30 minutes")], 8 => ["id" => 10800, "value" => __("3 hours")], 9 => ["id" => 12600, "value" => __("3 hours 30 minutes")], 10 => ["id" => 14400, "value" => __("4 hours")], 11 => ["id" => 18000, "value" => __("5 hours")], 12 => ["id" => 21600, "value" => __("6 hours")], 13 => ["id" => 25200, "value" => __("7 hours")], 14 => ["id" => 28800, "value" => __("8 hours")], 15 => ["id" => 32400, "value" => __("9 hours")], 16 => ["id" => 36000, "value" => __("10 hours")], 17 => ["id" => 39600, "value" => __("11 hours")], 18 => ["id" => 43200, "value" => __("12 hours")], 19 => ["id" => 86400, "value" => __("24 hours")]];
        // line 71
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["collectInterval", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "collectInterval"], "method", false, false, false, 71), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 71, $context, $this->getSourceContext());
        echo "

                    ";
        // line 73
        $context["title"] = __("XMR Public Address");
        // line 74
        echo "                    ";
        $context["helpText"] = __("Please enter the public address for XMR.");
        // line 75
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_input", ["xmrNetworkAddress", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "xmrNetworkAddress"], "method", false, false, false, 75), ($context["helpText"] ?? null)], 75, $context, $this->getSourceContext());
        echo "

                    ";
        // line 77
        $context["title"] = __("Enable stats reporting?");
        // line 78
        echo "                    ";
        $context["helpText"] = __("Should the application send proof of play stats to the CMS.");
        // line 79
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["statsEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "statsEnabled"], "method", false, false, false, 79), ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
        echo "

                    ";
        // line 81
        $context["title"] = __("Aggregation level");
        // line 82
        echo "                    ";
        $context["helpText"] = __("Set the level of collection for Proof of Play Statistics to be applied to selected Layouts / Media and Widget items.");
        // line 83
        echo "                    ";
        $context["options"] = [0 => ["id" => "Individual", "value" => __("Individual")], 1 => ["id" => "Hourly", "value" => __("Hourly")], 2 => ["id" => "Daily", "value" => __("Daily")]];
        // line 88
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["aggregationLevel", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "aggregationLevel"], "method", false, false, false, 88), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null), "aggregation-level"], 88, $context, $this->getSourceContext());
        echo "

                    ";
        // line 90
        $context["title"] = __("Player Version");
        // line 91
        echo "                    ";
        $context["helpText"] = __("Set the Player Version to install, making sure that the selected version is suitable for your device");
        // line 92
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 92), "lg"))) {
            // line 93
            echo "                        ";
            $context["attributes"] = [0 => ["name" => "data-width", "value" => "300px"], 1 => ["name" => "data-allow-clear", "value" => "true"], 2 => ["name" => "data-placeholder--id", "value" => null], 3 => ["name" => "data-placeholder--value", "value" => ""], 4 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], 5 => ["name" => "data-search-term", "value" => "playerShowVersion"], 6 => ["name" => "data-id-property", "value" => "mediaId"], 7 => ["name" => "data-text-property", "value" => "playerShowVersion"], 8 => ["name" => "data-filter-options", "value" => "{\"playerType\":\"lg\"}"]];
            // line 104
            echo "                    ";
        }
        // line 105
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 105), "sssp"))) {
            // line 106
            echo "                        ";
            $context["attributes"] = [0 => ["name" => "data-width", "value" => "300px"], 1 => ["name" => "data-allow-clear", "value" => "true"], 2 => ["name" => "data-placeholder--id", "value" => null], 3 => ["name" => "data-placeholder--value", "value" => ""], 4 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.search")], 5 => ["name" => "data-search-term", "value" => "playerShowVersion"], 6 => ["name" => "data-id-property", "value" => "mediaId"], 7 => ["name" => "data-text-property", "value" => "playerShowVersion"], 8 => ["name" => "data-filter-options", "value" => "{\"playerType\":\"sssp\"}"]];
            // line 117
            echo "                    ";
        }
        // line 118
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["versionMediaId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "versionMediaId"], "method", false, false, false, 118), twig_array_merge([0 => ["mediaId" => null, "playerShowVersion" => ""]], ($context["versions"] ?? null)), "mediaId", "playerShowVersion", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 118, $context, $this->getSourceContext());
        echo "

                    ";
        // line 120
        $context["title"] = __("Orientation");
        // line 121
        echo "                    ";
        $context["helpText"] = __("Set the orientation of the device (portrait mode will only work if supported by the hardware) Application Restart Required.");
        // line 122
        echo "                    ";
        $context["options"] = [0 => ["id" => 0, "value" => __("Landscape")], 1 => ["id" => 1, "value" => __("Portrait")], 2 => ["id" => 8, "value" => __("Reverse Landscape")], 3 => ["id" => 9, "value" => __("Reverse Portrait")]];
        // line 128
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "orientation"], "method", false, false, false, 128), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 128, $context, $this->getSourceContext());
        echo "

                    ";
        // line 130
        $context["title"] = __("Download Window Start Time");
        // line 131
        echo "                    ";
        $context["helpText"] = __("The start of the time window to connect to the CMS and download updates.");
        // line 132
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["downloadStartWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "downloadStartWindow"], "method", false, false, false, 132), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 132, $context, $this->getSourceContext());
        echo "

                    ";
        // line 134
        $context["title"] = __("Download Window End Time");
        // line 135
        echo "                    ";
        $context["helpText"] = __("The end of the time window to connect to the CMS and download updates.");
        // line 136
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["downloadEndWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "downloadEndWindow"], "method", false, false, false, 136), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 136, $context, $this->getSourceContext());
        echo "

                    ";
        // line 138
        $context["title"] = __("Update Window Start Time");
        // line 139
        echo "                    ";
        $context["helpText"] = __("The start of the time window to install application updates.");
        // line 140
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["updateStartWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "updateStartWindow"], "method", false, false, false, 140), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 140, $context, $this->getSourceContext());
        echo "

                    ";
        // line 142
        $context["title"] = __("Update Window End Time");
        // line 143
        echo "                    ";
        $context["helpText"] = __("The end of the time window to install application updates.");
        // line 144
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_time", ["updateEndWindow", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "updateEndWindow"], "method", false, false, false, 144), ($context["helpText"] ?? null), "", "", "", "HH:mm"], 144, $context, $this->getSourceContext());
        echo "

                    ";
        // line 146
        $context["title"] = __("Force HTTPS?");
        // line 147
        echo "                    ";
        $context["helpText"] = __("Should Displays be forced to use HTTPS connection to the CMS?");
        // line 148
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["forceHttps", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "forceHttps"], "method", false, false, false, 148), ($context["helpText"] ?? null)], 148, $context, $this->getSourceContext());
        echo "

                    ";
        // line 150
        $context["title"] = __("Operating Hours");
        // line 151
        echo "                    ";
        $context["helpText"] = __("Select a day part that should act as operating hours for this display - email alerts will not be sent outside of operating hours");
        // line 152
        echo "                    ";
        $context["attributes"] = [0 => ["name" => "data-width", "value" => "300px"], 1 => ["name" => "data-allow-clear", "value" => "true"], 2 => ["name" => "data-placeholder--id", "value" => null], 3 => ["name" => "data-placeholder--value", "value" => ""], 4 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.search")], 5 => ["name" => "data-search-term", "value" => "name"], 6 => ["name" => "data-id-property", "value" => "dayPartId"], 7 => ["name" => "data-text-property", "value" => "name"], 8 => ["name" => "data-filter-options", "value" => "{\"isAlways\":\"0\", \"isCustom\":\"0\"}"]];
        // line 163
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["dayPartId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "dayPartId"], "method", false, false, false, 163), twig_array_merge([0 => ["dayPartId" => null, "name" => ""]], ($context["dayParts"] ?? null)), "dayPartId", "name", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 163, $context, $this->getSourceContext());
        echo "

                </div>

                <div class=\"tab-pane\" id=\"advanced\">

                    ";
        // line 169
        $context["title"] = __("Log Level");
        // line 170
        echo "                    ";
        $context["helpText"] = __("The logging level that should be recorded by the Player.");
        // line 171
        echo "                    ";
        $context["options"] = [0 => ["id" => "audit", "value" => __("Audit")], 1 => ["id" => "error", "value" => __("Error")], 2 => ["id" => "off", "value" => __("Off")]];
        // line 176
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["logLevel", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "logLevel"], "method", false, false, false, 176), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 176, $context, $this->getSourceContext());
        echo "

                    ";
        // line 178
        $context["title"] = __("Action Bar Mode");
        // line 179
        echo "                    ";
        $context["helpText"] = __("How should the action bar behave?");
        // line 180
        echo "                    ";
        $context["options"] = [0 => ["id" => 0, "value" => __("Hide")], 1 => ["id" => 1, "value" => __("Timed")]];
        // line 184
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["actionBarMode", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "actionBarMode"], "method", false, false, false, 184), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 184, $context, $this->getSourceContext());
        echo "

                    ";
        // line 186
        $context["title"] = __("Action Bar Display Duration");
        // line 187
        echo "                    ";
        $context["helpText"] = __("How long should the Action Bar be shown for, in seconds?");
        // line 188
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["actionBarDisplayDuration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "actionBarDisplayDuration"], "method", false, false, false, 188), ($context["helpText"] ?? null)], 188, $context, $this->getSourceContext());
        echo "

                    ";
        // line 190
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", 1 => 0], "method", false, false, false, 190), 1))) {
            // line 191
            echo "                        ";
            $context["title"] = __("Notify current layout");
            // line 192
            echo "                        ";
            $context["helpText"] = __("When enabled the Player will send the current layout to the CMS each time it changes. Warning: This is bandwidth intensive and should be disabled unless on a LAN.");
            // line 193
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["sendCurrentLayoutAsStatusUpdate", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "sendCurrentLayoutAsStatusUpdate"], "method", false, false, false, 193), ($context["helpText"] ?? null)], 193, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 195
        echo "
                    ";
        // line 196
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", 1 => 0], "method", false, false, false, 196), 1))) {
            // line 197
            echo "                        ";
            ob_start(function () { return ''; });
            // line 198
            echo "                            ";
            echo __("Screen shot interval");
            // line 199
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_playerCompat", ["", "", "R204+", "R208+", ""], 199, $context, $this->getSourceContext());
            echo "
                        ";
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 201
            echo "                        ";
            $context["helpText"] = __("The duration between status screen shots in minutes. 0 to disable. Warning: This is bandwidth intensive.");
            // line 202
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_number", ["screenShotRequestInterval", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "screenShotRequestInterval"], "method", false, false, false, 202), ($context["helpText"] ?? null)], 202, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 204
        echo "
                    ";
        // line 205
        $context["title"] = __("Screen Shot Size");
        // line 206
        echo "                    ";
        $context["helpText"] = __("The size of the screenshot to return when requested.");
        // line 207
        echo "                    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 207), "lg"))) {
            // line 208
            echo "                    ";
            $context["options"] = [0 => ["id" => 1, "value" => __("Thumbnail")], 1 => ["id" => 2, "value" => __("HD")], 2 => ["id" => 3, "value" => __("FHD")]];
            // line 213
            echo "                    ";
        } else {
            // line 214
            echo "                        ";
            $context["options"] = [0 => ["id" => 1, "value" => __("Thumbnail")], 1 => ["id" => 2, "value" => __("Standard")]];
            // line 218
            echo "                    ";
        }
        // line 219
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["screenShotSize", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "screenShotSize"], "method", false, false, false, 219), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 219, $context, $this->getSourceContext());
        echo "

                    ";
        // line 221
        $context["title"] = __("Send progress while downloading");
        // line 222
        echo "                    ";
        $context["helpText"] = __("How often, in minutes, should the Display send its download progress while it is downloading new content?");
        // line 223
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["mediaInventoryTimer", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "mediaInventoryTimer"], "method", false, false, false, 223), ($context["helpText"] ?? null)], 223, $context, $this->getSourceContext());
        echo "

                    ";
        // line 225
        $context["title"] = __("Embedded Web Server Port");
        // line 226
        echo "                    ";
        $context["helpText"] = __("The port number to use for the embedded web server on the Player. Only change this if there is a port conflict reported on the status screen.");
        // line 227
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["serverPort", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "serverPort"], "method", false, false, false, 227), ($context["helpText"] ?? null)], 227, $context, $this->getSourceContext());
        echo "

                    ";
        // line 229
        $context["title"] = __("Embedded Web Server allow WAN?");
        // line 230
        echo "                    ";
        $context["helpText"] = __("Should we allow access to the Player Embedded Web Server from WAN? You may need to adjust the device firewall to allow external traffic");
        // line 231
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["embeddedServerAllowWan", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "embeddedServerAllowWan"], "method", false, false, false, 231), ($context["helpText"] ?? null)], 231, $context, $this->getSourceContext());
        echo "
                </div>

                <div class=\"tab-pane\" id=\"timers\">

                    ";
        // line 236
        ob_start(function () { return ''; });
        // line 237
        echo "                        ";
        echo __("Use the form fields to create On/Off timings for the monitor for specific days of the week as required.");
        // line 238
        echo "                    ";
        $context["settingsDesc1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 239
        echo "                    ";
        ob_start(function () { return ''; });
        // line 240
        echo "                        ";
        echo __("Please note:");
        // line 241
        echo "                    ";
        $context["settingsDesc2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 242
        echo "                    ";
        ob_start(function () { return ''; });
        // line 243
        echo "                        ";
        echo __("When the monitor is 'Off' it will not be able to receive content updates. With the next timed 'On' the monitor will connect to the CMS and get content/schedule updates.");
        // line 244
        echo "                    ";
        $context["settingsDesc3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 245
        echo "                    <div class=\"alert alert-info\">
                        <p>";
        // line 246
        echo twig_escape_filter($this->env, ($context["settingsDesc1"] ?? null), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, ($context["settingsDesc2"] ?? null), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, ($context["settingsDesc3"] ?? null), "html", null, true);
        echo "</p>
                    </div>

                    ";
        // line 250
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Monday");
        $context["monday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Tuesday");
        $context["tuesday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 252
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Wednesday");
        $context["wednesday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 253
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Thursday");
        $context["thursday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 254
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Friday");
        $context["friday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 255
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Saturday");
        $context["saturday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Sunday");
        $context["sunday"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 257
        echo "
                    ";
        // line 258
        $context["options"] = [0 => ["id" => "monday", "name" =>         // line 259
($context["monday"] ?? null)], 1 => ["id" => "tuesday", "name" =>         // line 260
($context["tuesday"] ?? null)], 2 => ["id" => "wednesday", "name" =>         // line 261
($context["wednesday"] ?? null)], 3 => ["id" => "thursday", "name" =>         // line 262
($context["thursday"] ?? null)], 4 => ["id" => "friday", "name" =>         // line 263
($context["friday"] ?? null)], 5 => ["id" => "saturday", "name" =>         // line 264
($context["saturday"] ?? null)], 6 => ["id" => "sunday", "name" =>         // line 265
($context["sunday"] ?? null)]];
        // line 267
        echo "
                    <div id=\"timers-container\" class=\"container-fluid display-settings-container\" data-values=\"";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "timers"], "method", false, false, false, 268), "html", null, true);
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, json_encode(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>

                </div>

                <div class=\"tab-pane\" id=\"pictureOptions\">

                    ";
        // line 274
        ob_start(function () { return ''; });
        // line 275
        echo "                        ";
        echo __("Control picture settings using the fields below. Use the sliders to set the required range for each setting.");
        // line 276
        echo "                    ";
        $context["settingsDesc"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 277
        echo "                    <div class=\"alert alert-info\">
                        <p>";
        // line 278
        echo twig_escape_filter($this->env, ($context["settingsDesc"] ?? null), "html", null, true);
        echo "</p>
                    </div>

                    ";
        // line 282
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Backlight");
        $context["backlight"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 283
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Contrast");
        $context["contrast"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 284
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Brightness");
        $context["brightness"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 285
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Sharpness");
        $context["sharpness"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 286
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Horizontal Sharpness");
        $context["hSharpness"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 287
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Vertical Sharpness");
        $context["vSharpness"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 288
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Color");
        $context["color"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 289
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Tint");
        $context["tint"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 290
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Color Temperature");
        $context["colorTemperature"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 291
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Dynamic Contrast");
        $context["dynamicContrast"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 292
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Super Resolution");
        $context["superResolution"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 293
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Color Gamut");
        $context["colorGamut"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 294
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Dynamic Color");
        $context["dynamicColor"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Noise Reduction");
        $context["noiseReduction"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 296
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("MPEG Noise Reduction");
        $context["mpegNoiseReduction"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 297
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Black Level");
        $context["blackLevel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 298
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Gamma");
        $context["gamma"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        echo "
                    ";
        // line 301
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Red");
        $context["red"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 302
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Green");
        $context["green"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 303
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Warm");
        $context["warm"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 304
        echo "                    ";
        ob_start(function () { return ''; });
        echo __("Cool");
        $context["cool"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 305
        echo "
                    ";
        // line 306
        $context["options"] = ["backlight" => ["name" =>         // line 307
($context["backlight"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0 => 0, 1 => 100], "ticks_labels" => [0 => 0, 1 => 100]]], "contrast" => ["name" =>         // line 308
($context["contrast"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0 => 0, 1 => 100], "ticks_labels" => [0 => 0, 1 => 100]]], "brightness" => ["name" =>         // line 309
($context["brightness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0 => 0, 1 => 100], "ticks_labels" => [0 => 0, 1 => 100]]], "sharpness" => ["name" =>         // line 310
($context["sharpness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 50, "step" => 1, "ticks" => [0 => 0, 1 => 50], "ticks_labels" => [0 => 0, 1 => 50]]], "hSharpness" => ["name" =>         // line 311
($context["hSharpness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 50, "step" => 1, "ticks" => [0 => 0, 1 => 50], "ticks_labels" => [0 => 0, 1 => 50]]], "vSharpness" => ["name" =>         // line 312
($context["vSharpness"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 50, "step" => 1, "ticks" => [0 => 0, 1 => 50], "ticks_labels" => [0 => 0, 1 => 50]]], "color" => ["name" =>         // line 313
($context["color"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0 => 0, 1 => 100], "ticks_labels" => [0 => 0, 1 => 100]]], "tint" => ["name" =>         // line 314
($context["tint"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0 => 0, 1 => 100], "ticks_labels" => [0 => ($context["red"] ?? null), 1 => ($context["green"] ?? null)]]], "colorTemperature" => ["name" =>         // line 315
($context["colorTemperature"] ?? null), "type" => "number", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 100, "step" => 1, "ticks" => [0 => 0, 1 => 100], "ticks_labels" => [0 => ($context["warm"] ?? null), 1 => ($context["cool"] ?? null)]]], "dynamicContrast" => ["name" =>         // line 316
($context["dynamicContrast"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0 => 0, 1 => 1, 2 => 2, 3 => 3], "ticks_labels" => [0 => "off", 1 => "low", 2 => "medium", 3 => "high"], "tooltip" => "hide"]], "superResolution" => ["name" =>         // line 317
($context["superResolution"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0 => 0, 1 => 1, 2 => 2, 3 => 3], "ticks_labels" => [0 => "off", 1 => "low", 2 => "medium", 3 => "high"], "tooltip" => "hide"]], "colorGamut" => ["name" =>         // line 318
($context["colorGamut"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 1, "step" => 1, "ticks" => [0 => 0, 1 => 1], "ticks_labels" => [0 => "normal", 1 => "extended"], "tooltip" => "hide"]], "dynamicColor" => ["name" =>         // line 319
($context["dynamicColor"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0 => 0, 1 => 1, 2 => 2, 3 => 3], "ticks_labels" => [0 => "off", 1 => "low", 2 => "medium", 3 => "high"], "tooltip" => "hide"]], "noiseReduction" => ["name" =>         // line 320
($context["noiseReduction"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 4, "step" => 1, "ticks" => [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4], "ticks_labels" => [0 => "auto", 1 => "off", 2 => "low", 3 => "medium", 4 => "high"], "tooltip" => "hide"]], "mpegNoiseReduction" => ["name" =>         // line 321
($context["mpegNoiseReduction"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 4, "step" => 1, "ticks" => [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4], "ticks_labels" => [0 => "auto", 1 => "off", 2 => "low", 3 => "medium", 4 => "high"], "tooltip" => "hide"]], "blackLevel" => ["name" =>         // line 322
($context["blackLevel"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 1, "step" => 1, "ticks" => [0 => 0, 1 => 1], "ticks_labels" => [0 => "low", 1 => "high"], "tooltip" => "hide"]], "gamma" => ["name" =>         // line 323
($context["gamma"] ?? null), "type" => "string", "inputType" => "slider", "sliderOptions" => ["min" => 0, "max" => 3, "step" => 1, "ticks" => [0 => 0, 1 => 1, 2 => 2, 3 => 3], "ticks_labels" => [0 => "low", 1 => "medium", 2 => "high", 3 => "high2"], "tooltip" => "hide"]]];
        // line 325
        echo "
                    <div id=\"picture-options-container\" class=\"container-fluid display-settings-container\" data-values=\"";
        // line 326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "pictureOptions"], "method", false, false, false, 326), "html", null, true);
        echo "\" data-options=\"";
        echo twig_escape_filter($this->env, json_encode(($context["options"] ?? null)), "html", null, true);
        echo "\"></div>

                </div>

                <div class=\"tab-pane\" id=\"lockOptions\">

                    <div id=\"lock-options-container\" class=\"container-fluid display-settings-container\" data-value=\"";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getSetting", [0 => "lockOptions"], "method", false, false, false, 332), "html", null, true);
        echo "\">
                        ";
        // line 334
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("usblock");
        $context["usblockTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 335
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Set access to any device that uses the monitors USB port. Set to ‘False’ the monitor will not accept input or read from USB ports.");
        $context["usblockHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 336
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("osdlock");
        $context["osdlockTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 337
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Set access to the monitor settings via the remote control. Set To ‘False’ the remote control will not change the volume, brightness etc of the monitor.");
        $context["osdlockHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 338
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("False");
        $context["falseText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 339
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("True");
        $context["trueText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 340
        echo "                        ";
        $context["options"] = [0 => ["val" => "empty", "text" => ""], 1 => ["val" => "false", "text" =>         // line 342
($context["falseText"] ?? null)], 2 => ["val" => "true", "text" =>         // line 343
($context["trueText"] ?? null)]];
        // line 345
        echo "
                        ";
        // line 346
        if (((twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "usblock", [], "any", true, true, false, 346) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "usblock", [], "any", false, false, false, 346))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 346), "lg")))) {
            // line 347
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "usblock", [], "any", false, false, false, 347), true))) {
                // line 348
                echo "                                ";
                $context["usblockValue"] = "true";
                // line 349
                echo "                            ";
            } else {
                // line 350
                echo "                                ";
                $context["usblockValue"] = "false";
                // line 351
                echo "                            ";
            }
            // line 352
            echo "                        ";
        } else {
            // line 353
            echo "                            ";
            $context["usblockValue"] = "empty";
            // line 354
            echo "                        ";
        }
        // line 355
        echo "
                        ";
        // line 356
        if ((twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "osdlock", [], "any", true, true, false, 356) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "osdlock", [], "any", false, false, false, 356)))) {
            // line 357
            echo "                            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "osdlock", [], "any", false, false, false, 357), true))) {
                // line 358
                echo "                                ";
                $context["osdlockValue"] = "true";
                // line 359
                echo "                            ";
            } else {
                // line 360
                echo "                                ";
                $context["osdlockValue"] = "false";
                // line 361
                echo "                            ";
            }
            // line 362
            echo "                        ";
        } else {
            // line 363
            echo "                            ";
            $context["osdlockValue"] = "empty";
            // line 364
            echo "                        ";
        }
        // line 365
        echo "
                        ";
        // line 366
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 366), "lg"))) {
            // line 367
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["usblock", "single", ($context["usblockTitle"] ?? null), ($context["usblockValue"] ?? null), ($context["options"] ?? null), "val", "text", ($context["usblockHelp"] ?? null)], 367, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 369
        echo "
                        ";
        // line 370
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["osdlock", "single", ($context["osdlockTitle"] ?? null), ($context["osdlockValue"] ?? null), ($context["options"] ?? null), "val", "text", ($context["osdlockHelp"] ?? null)], 370, $context, $this->getSourceContext());
        echo "

                        ";
        // line 373
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Keylock (local)");
        $context["localKeylockTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 374
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Set the allowed key input for the monitor.");
        $context["localKeylockHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 375
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Keylock (remote)");
        $context["remoteKeylockTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 376
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Set the allowed key input for the monitor.");
        $context["remoteKeylockHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 377
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Allow All");
        $context["allowallText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 378
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Block All");
        $context["blockallText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 379
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Power Only");
        $context["poweronlyText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 380
        echo "                        ";
        $context["options"] = [0 => ["val" => "", "text" => ""], 1 => ["val" => "allowall", "text" =>         // line 382
($context["allowallText"] ?? null)], 2 => ["val" => "blockall", "text" =>         // line 383
($context["blockallText"] ?? null)]];
        // line 385
        echo "                        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "type", [], "any", false, false, false, 385), "lg"))) {
            // line 386
            echo "                            ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), [0 => ["val" => "poweronly", "text" => ($context["poweronlyText"] ?? null)]], ($context["options"] ?? null));
            // line 387
            echo "                        ";
        }
        // line 388
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["keylockLocal", "single", ($context["localKeylockTitle"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "keylock", [], "any", false, false, false, 388), "local", [], "any", false, false, false, 388), ($context["options"] ?? null), "val", "text", ($context["localKeylockHelp"] ?? null)], 388, $context, $this->getSourceContext());
        echo "
                        ";
        // line 389
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["keylockRemote", "single", ($context["remoteKeylockTitle"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lockOptions"] ?? null), "keylock", [], "any", false, false, false, 389), "remote", [], "any", false, false, false, 389), ($context["options"] ?? null), "val", "text", ($context["remoteKeylockHelp"] ?? null)], 389, $context, $this->getSourceContext());
        echo "
                    </div>

                </div>

                ";
        // line 394
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["commands"] ?? null)), 0))) {
            // line 395
            echo "                    <div class=\"tab-pane\" id=\"commands\">
                        ";
            // line 396
            $this->loadTemplate("displayprofile-form-edit-command-fields.twig", "displayprofile-form-edit-soc.twig", 396)->display($context);
            // line 397
            echo "                    </div>
                ";
        }
        // line 399
        echo "            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit-soc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  868 => 399,  864 => 397,  862 => 396,  859 => 395,  857 => 394,  849 => 389,  844 => 388,  841 => 387,  838 => 386,  835 => 385,  833 => 383,  832 => 382,  830 => 380,  825 => 379,  820 => 378,  815 => 377,  810 => 376,  805 => 375,  800 => 374,  795 => 373,  790 => 370,  787 => 369,  781 => 367,  779 => 366,  776 => 365,  773 => 364,  770 => 363,  767 => 362,  764 => 361,  761 => 360,  758 => 359,  755 => 358,  752 => 357,  750 => 356,  747 => 355,  744 => 354,  741 => 353,  738 => 352,  735 => 351,  732 => 350,  729 => 349,  726 => 348,  723 => 347,  721 => 346,  718 => 345,  716 => 343,  715 => 342,  713 => 340,  708 => 339,  703 => 338,  698 => 337,  693 => 336,  688 => 335,  683 => 334,  679 => 332,  668 => 326,  665 => 325,  663 => 323,  662 => 322,  661 => 321,  660 => 320,  659 => 319,  658 => 318,  657 => 317,  656 => 316,  655 => 315,  654 => 314,  653 => 313,  652 => 312,  651 => 311,  650 => 310,  649 => 309,  648 => 308,  647 => 307,  646 => 306,  643 => 305,  638 => 304,  633 => 303,  628 => 302,  623 => 301,  620 => 299,  615 => 298,  610 => 297,  605 => 296,  600 => 295,  595 => 294,  590 => 293,  585 => 292,  580 => 291,  575 => 290,  570 => 289,  565 => 288,  560 => 287,  555 => 286,  550 => 285,  545 => 284,  540 => 283,  535 => 282,  529 => 278,  526 => 277,  523 => 276,  520 => 275,  518 => 274,  507 => 268,  504 => 267,  502 => 265,  501 => 264,  500 => 263,  499 => 262,  498 => 261,  497 => 260,  496 => 259,  495 => 258,  492 => 257,  487 => 256,  482 => 255,  477 => 254,  472 => 253,  467 => 252,  462 => 251,  457 => 250,  447 => 246,  444 => 245,  441 => 244,  438 => 243,  435 => 242,  432 => 241,  429 => 240,  426 => 239,  423 => 238,  420 => 237,  418 => 236,  409 => 231,  406 => 230,  404 => 229,  398 => 227,  395 => 226,  393 => 225,  387 => 223,  384 => 222,  382 => 221,  376 => 219,  373 => 218,  370 => 214,  367 => 213,  364 => 208,  361 => 207,  358 => 206,  356 => 205,  353 => 204,  347 => 202,  344 => 201,  338 => 199,  335 => 198,  332 => 197,  330 => 196,  327 => 195,  321 => 193,  318 => 192,  315 => 191,  313 => 190,  307 => 188,  304 => 187,  302 => 186,  296 => 184,  293 => 180,  290 => 179,  288 => 178,  282 => 176,  279 => 171,  276 => 170,  274 => 169,  264 => 163,  261 => 152,  258 => 151,  256 => 150,  250 => 148,  247 => 147,  245 => 146,  239 => 144,  236 => 143,  234 => 142,  228 => 140,  225 => 139,  223 => 138,  217 => 136,  214 => 135,  212 => 134,  206 => 132,  203 => 131,  201 => 130,  195 => 128,  192 => 122,  189 => 121,  187 => 120,  181 => 118,  178 => 117,  175 => 106,  172 => 105,  169 => 104,  166 => 93,  163 => 92,  160 => 91,  158 => 90,  152 => 88,  149 => 83,  146 => 82,  144 => 81,  138 => 79,  135 => 78,  133 => 77,  127 => 75,  124 => 74,  122 => 73,  116 => 71,  113 => 49,  110 => 48,  108 => 47,  102 => 45,  99 => 44,  97 => 43,  94 => 42,  92 => 41,  86 => 38,  83 => 37,  77 => 35,  75 => 34,  71 => 33,  67 => 32,  63 => 31,  59 => 30,  55 => 29,  50 => 26,  43 => 25,  40 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-soc.twig", "/srv/xibo-cms/views/displayprofile-form-edit-soc.twig");
    }
}

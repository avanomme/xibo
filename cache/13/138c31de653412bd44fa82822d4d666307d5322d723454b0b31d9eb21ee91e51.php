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

/* ticker-form-edit.twig */
class __TwigTemplate_9217799d368adbc788377e96f07d6fa1d6b43d58e87c98975cce76db6582cc92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'extra' => [$this, 'block_extra'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "ticker-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "ticker-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo __("Edit Ticker");
    }

    // line 30
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getExtra", [], "method", false, false, false, 30));
    }

    // line 32
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("General");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 36
        echo __("Configuration");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 37
        echo __("Appearance");
        echo "</span></a></li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 40
        echo __("Templates");
        echo "<span class=\"caret\"></span>
                </a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#templatePreset\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Preset");
        echo "</span></a>
                    <a class=\"dropdown-item template-override-controls\" href=\"#templateTab\"  role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Main");
        echo "</span></a>
                    <a class=\"dropdown-item template-override-controls\" href=\"#optionalStylesheetTab\"  role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Optional Stylesheet");
        echo "</span></a>
                    <a class=\"dropdown-item\" href=\"#noDataTemplateTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("No Data");
        echo "</span></a>
                    <a class=\"dropdown-item\" href=\"#optionalJavascriptTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Optional JavaScript");
        echo "</span></a>
                </div>
            </li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#cacheTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Caching");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"tickerEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 53), "widgetId", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 56
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "name"], "method", false, false, false, 58), ($context["helpText"] ?? null)], 58, $context, $this->getSourceContext());
        echo "

                        ";
        // line 60
        ob_start(function () { return ''; });
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["useDuration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getUseDuration", [], "method", false, false, false, 62), ($context["helpText"] ?? null)], 62, $context, $this->getSourceContext());
        echo "

                        ";
        // line 64
        ob_start(function () { return ''; });
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The duration in seconds this item should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["duration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getDuration", [], "method", false, false, false, 66), ($context["helpText"] ?? null), "duration-fields", "required"], 66, $context, $this->getSourceContext());
        echo "

                        ";
        // line 68
        ob_start(function () { return ''; });
        echo __("Duration is per item");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The duration specified is per item otherwise it is per feed.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["durationIsPerItem", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "durationIsPerItem"], "method", false, false, false, 70), ($context["helpText"] ?? null)], 70, $context, $this->getSourceContext());
        echo "

                        ";
        // line 72
        ob_start(function () { return ''; });
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
                        ";
        // line 75
        ob_start(function () { return ''; });
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 79
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 80
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 81
($context["inheritOption"] ?? null)]];
        // line 83
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 83)], "method", false, false, false, 83), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        ";
        // line 87
        ob_start(function () { return ''; });
        echo __("Feed URL");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Link for the RSS feed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["uri", ($context["title"] ?? null), urldecode(twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "uri"], "method", false, false, false, 89)), ($context["helpText"] ?? null), "feed-fields"], 89, $context, $this->getSourceContext());
        echo "

                        ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Number of Items");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Number of RSS items you want to display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["numItems", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "numItems"], "method", false, false, false, 93), ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
        echo "

                        ";
        // line 95
        ob_start(function () { return ''; });
        echo __("Take items from the");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Take the items from the beginning or the end of the list");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Start of the Feed");
        $context["startOfTheFeed"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("End of the Feed");
        $context["endOfTheFeed"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        $context["options"] = [0 => ["takeitemsfromid" => "start", "takeitemsfrom" =>         // line 100
($context["startOfTheFeed"] ?? null)], 1 => ["takeitemsfromid" => "end", "takeitemsfrom" =>         // line 101
($context["endOfTheFeed"] ?? null)]];
        // line 103
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["takeItemsFrom", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "takeItemsFrom", 1 => "start"], "method", false, false, false, 103), ($context["options"] ?? null), "takeitemsfromid", "takeitemsfrom", ($context["helpText"] ?? null)], 103, $context, $this->getSourceContext());
        echo "

                        ";
        // line 105
        ob_start(function () { return ''; });
        echo __("Reverse Order?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should we reverse the order of the feed items?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["reverseOrder", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "reverseOrder"], "method", false, false, false, 107), ($context["helpText"] ?? null)], 107, $context, $this->getSourceContext());
        echo "

                        ";
        // line 109
        ob_start(function () { return ''; });
        echo __("Randomise?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should the order of the feed be randomised? When enabled each time the Widget is shown the items will be randomly shuffled and displayed in a random order.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["randomiseItems", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "randomiseItems"], "method", false, false, false, 111), ($context["helpText"] ?? null)], 111, $context, $this->getSourceContext());
        echo "
                        
                        ";
        // line 113
        ob_start(function () { return ''; });
        echo __("Copyright");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Copyright information to display as the last item in this feed. This can be styled with the #copyright CSS selector.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["copyright", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "copyright"], "method", false, false, false, 115), ($context["helpText"] ?? null)], 115, $context, $this->getSourceContext());
        echo "

                        ";
        // line 117
        ob_start(function () { return ''; });
        echo __("Show items side by side?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should items be shown side by side?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["itemsSideBySide", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "itemsSideBySide"], "method", false, false, false, 119), ($context["helpText"] ?? null)], 119, $context, $this->getSourceContext());
        echo "

                        ";
        // line 121
        ob_start(function () { return ''; });
        echo __("Date Format");
        // line 122
        echo "                            <span class=\"fa fa-info-circle date-format-table\"
                                  data-toggle=\"popover\"
                                  data-trigger=\"hover\">
                            </span>
                        ";
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The format to apply to all dates returned by the Widget.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["dateFormat", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "dateFormat"], "method", false, false, false, 128), ($context["helpText"] ?? null)], 128, $context, $this->getSourceContext());
        echo "

                        ";
        // line 130
        ob_start(function () { return ''; });
        echo __("Allowable Attributes");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A comma separated list of attributes that should not be stripped from the incoming feed.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["allowedAttributes", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "allowedAttributes"], "method", false, false, false, 132), ($context["helpText"] ?? null)], 132, $context, $this->getSourceContext());
        echo "

                        ";
        // line 134
        ob_start(function () { return ''; });
        echo __("Strip Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A comma separated list of HTML tags that should be stripped from the feed in addition to the default ones.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["stripTags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "stripTags"], "method", false, false, false, 136), ($context["helpText"] ?? null)], 136, $context, $this->getSourceContext());
        echo "

                        ";
        // line 138
        ob_start(function () { return ''; });
        echo __("Decode the HTML entities in this feed before parsing it");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should we decode the HTML entities in this feed before parsing it?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["decodeHtml", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "decodeHtml"], "method", false, false, false, 140), ($context["helpText"] ?? null)], 140, $context, $this->getSourceContext());
        echo "

                        ";
        // line 142
        ob_start(function () { return ''; });
        echo __("Disable Date Sort");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Should the date sort applied to the feed be disabled?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["disableDateSort", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "disableDateSort"], "method", false, false, false, 144), ($context["helpText"] ?? null)], 144, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">
                        ";
        // line 148
        ob_start(function () { return ''; });
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The selected effect works best with a background colour. Optionally add one here.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["backgroundColor", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "backgroundColor"], "method", false, false, false, 150), ($context["helpText"] ?? null), "background-color-group"], 150, $context, $this->getSourceContext());
        echo "

                        ";
        // line 152
        ob_start(function () { return ''; });
        echo __("Effect");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please select the effect that will be used to transition between items. Marquee effects are CPU intensive and may not be suitable for lower power displays.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 154
        echo "
                        ";
        // line 155
        ob_start(function () { return ''; });
        echo __("Show all items");
        $context["showAll"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Paged");
        $context["showPaged"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Marquee Left");
        $context["marqueeLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Marquee Right");
        $context["marqueeRight"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Marquee Up");
        $context["marqueeUp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Marquee Down");
        $context["marqueeDown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "                        ";
        $context["optionGroups"] = [0 => ["id" => "showAll", "label" =>         // line 162
($context["showAll"] ?? null)], 1 => ["id" => "showPaged", "label" =>         // line 163
($context["showPaged"] ?? null)]];
        // line 165
        echo "
                        ";
        // line 166
        ob_start(function () { return ''; });
        echo __("No effect - all items are shown");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        echo "                        ";
        $context["showAllOptions"] = [0 => ["effectid" => "none", "effect" =>         // line 168
($context["noneOption"] ?? null)], 1 => ["effectid" => "marqueeLeft", "effect" =>         // line 169
($context["marqueeLeft"] ?? null)], 2 => ["effectid" => "marqueeRight", "effect" =>         // line 170
($context["marqueeRight"] ?? null)], 3 => ["effectid" => "marqueeUp", "effect" =>         // line 171
($context["marqueeUp"] ?? null)], 4 => ["effectid" => "marqueeDown", "effect" =>         // line 172
($context["marqueeDown"] ?? null)]];
        // line 174
        echo "
                        ";
        // line 175
        ob_start(function () { return ''; });
        echo __("No transition");
        $context["noTransitionOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Fade");
        $context["fade"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Fade Out");
        $context["fadeout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Scroll Horizontal");
        $context["scrollHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Scroll Vertical");
        $context["scrollVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Flip Horizontal");
        $context["flipHorz"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 181
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Flip Vertical");
        $context["flipVert"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Shuffle");
        $context["shuffle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Tile Slide");
        $context["tileSlide"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Tile Blind");
        $context["tileBlind"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        echo "                        ";
        $context["showPagedOptions"] = [0 => ["effectid" => "noTransition", "effect" =>         // line 186
($context["noTransitionOption"] ?? null)], 1 => ["effectid" => "fade", "effect" =>         // line 187
($context["fade"] ?? null)], 2 => ["effectid" => "fadeout", "effect" =>         // line 188
($context["fadeout"] ?? null)], 3 => ["effectid" => "scrollHorz", "effect" =>         // line 189
($context["scrollHorz"] ?? null)], 4 => ["effectid" => "scrollVert", "effect" =>         // line 190
($context["scrollVert"] ?? null)], 5 => ["effectid" => "flipHorz", "effect" =>         // line 191
($context["flipHorz"] ?? null)], 6 => ["effectid" => "flipVert", "effect" =>         // line 192
($context["flipVert"] ?? null)], 7 => ["effectid" => "shuffle", "effect" =>         // line 193
($context["shuffle"] ?? null)], 8 => ["effectid" => "tileSlide", "effect" =>         // line 194
($context["tileSlide"] ?? null)], 9 => ["effectid" => "tileBlind", "effect" =>         // line 195
($context["tileBlind"] ?? null)]];
        // line 197
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["effect", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "effect"], "method", false, false, false, 197), ["showAll" => ($context["showAllOptions"] ?? null), "showPaged" => ($context["showPagedOptions"] ?? null)], "effectid", "effect", ($context["helpText"] ?? null), "l", "", "", "", "", ($context["optionGroups"] ?? null)], 197, $context, $this->getSourceContext());
        echo "

                        ";
        // line 199
        ob_start(function () { return ''; });
        echo __("Speed");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 201
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["speed", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "speed", 1 => twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "scrollSpeed"], "method", false, false, false, 201)], "method", false, false, false, 201), ($context["helpText"] ?? null), "effect-controls"], 201, $context, $this->getSourceContext());
        echo "

                        ";
        // line 203
        ob_start(function () { return ''; });
        echo __("Text direction");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 204
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Which direction does the text in the feed use?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 205
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Left to Right (LTR)");
        $context["leftToRight"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 206
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Right to Left (RTL)");
        $context["rightToLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 207
        echo "                        ";
        $context["options"] = [0 => ["textdirectionid" => "ltr", "textdirection" =>         // line 208
($context["leftToRight"] ?? null)], 1 => ["textdirectionid" => "rtl", "textdirection" =>         // line 209
($context["rightToLeft"] ?? null)]];
        // line 211
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["textDirection", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "textDirection", 1 => "ltr"], "method", false, false, false, 211), ($context["options"] ?? null), "textdirectionid", "textdirection", ($context["helpText"] ?? null)], 211, $context, $this->getSourceContext());
        echo "

                        ";
        // line 213
        ob_start(function () { return ''; });
        echo __("Items per page");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 214
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("If an effect has been selected from the General tab, how many pages should we split the items across? If you don't enter anything here 1 item will be put on each page.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 215
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["itemsPerPage", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "itemsPerPage"], "method", false, false, false, 215), ($context["helpText"] ?? null), "effect-controls"], 215, $context, $this->getSourceContext());
        echo "

                    </div>

                    <div class=\"tab-pane\" id=\"templatePreset\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 221
        echo __("Preset");
        echo "</h4>
                        </div>

                        ";
        // line 224
        ob_start(function () { return ''; });
        echo __("Template");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select the template you would like to apply. This can be overridden using the check box below.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 226
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["templateId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "templateId", 1 => "title-only"], "method", false, false, false, 226), ($context["templatesAvailable"] ?? null), "id", "value", ($context["helptext"] ?? null), "template-selector-control selectPicker selectPickerWithImage", null, null, null, [0 => ["name" => "data-minimum-results-for-search", "value" => "Infinity"], 1 => ["name" => "data-width", "value" => "100%"]], null, "image"], 226, $context, $this->getSourceContext());
        echo "

                        ";
        // line 228
        ob_start(function () { return ''; });
        echo __("Override the template?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 229
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Tick if you would like to override the template.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 230
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["overrideTemplate", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "overrideTemplate", 1 => 0], "method", false, false, false, 230), ($context["helpText"] ?? null)], 230, $context, $this->getSourceContext());
        echo "

                        ";
        // line 232
        ob_start(function () { return ''; });
        // line 233
        echo "                           ";
        echo __("With Override the Template selected enter your own text, html and css by using the Templates drop down menu in the tab header above.");
        echo "                     
                        ";
        $context["useTemplatesMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 235
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["useTemplatesMessage"] ?? null), "template-override-controls"], 235, $context, $this->getSourceContext());
        echo "

                        <div class=\"template-options template-selector-control\">
                            ";
        // line 238
        ob_start(function () { return ''; });
        // line 239
        echo "                            ";
        echo __("You can change the appearance of this template using the options below.");
        echo "                     
                            ";
        $context["useTemplatesOptionsMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 241
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["useTemplatesOptionsMessage"] ?? null), ""], 241, $context, $this->getSourceContext());
        echo "

                            ";
        // line 243
        ob_start(function () { return ''; });
        echo __("Background");
        $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["background-color", ($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "background-color"], "method", false, false, false, 244), "", "template-option template-option-background-color d-none"], 244, $context, $this->getSourceContext());
        echo "

                            ";
        // line 246
        ob_start(function () { return ''; });
        echo __("Title");
        $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 247
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["title-color", ($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "title-color"], "method", false, false, false, 247), "", "template-option template-option-title-color d-none"], 247, $context, $this->getSourceContext());
        echo "

                            ";
        // line 249
        ob_start(function () { return ''; });
        echo __("Name");
        $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 250
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["name-color", ($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "name-color"], "method", false, false, false, 250), "", "template-option template-option-name-color d-none"], 250, $context, $this->getSourceContext());
        echo "

                            ";
        // line 252
        ob_start(function () { return ''; });
        echo __("Description");
        $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 253
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["description-color", ($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "description-color"], "method", false, false, false, 253), "", "template-option template-option-description-color d-none"], 253, $context, $this->getSourceContext());
        echo "

                            ";
        // line 255
        ob_start(function () { return ''; });
        echo __("Font Size");
        $context["name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 256
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_number", ["font-size", ($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "font-size"], "method", false, false, false, 256), "", "template-option template-option-font-size d-none"], 256, $context, $this->getSourceContext());
        echo "

                            ";
        // line 258
        ob_start(function () { return ''; });
        echo __("Image Fit");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 259
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Contain");
        $context["containText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 260
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Cover");
        $context["coverText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 261
        echo "                            ";
        ob_start(function () { return ''; });
        echo __("Fill");
        $context["fillText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        echo "                            ";
        $context["options"] = [0 => ["id" => "contain", "value" =>         // line 263
($context["containText"] ?? null)], 1 => ["id" => "cover", "value" =>         // line 264
($context["coverText"] ?? null)], 2 => ["id" => "fill", "value" =>         // line 265
($context["fillText"] ?? null)]];
        // line 267
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["image-fit", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "image-fit", 1 => "contain"], "method", false, false, false, 267), ($context["options"] ?? null), "id", "value", "", "template-option template-option-image-fit d-none"], 267, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"templateTab\">
                        <div class=\"form-content-title row\">
                            <h4 class=\"col-6 text-left\">";
        // line 273
        echo __("Main Template");
        echo "</h4>
                            <div class=\"col-6 text-right\">
                                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"ta_text_advanced\" name=\"ta_text_advanced\" ";
        // line 275
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "ta_text_advanced", 1 => 0], "method", false, false, false, 275), 1))) {
            echo "checked";
        }
        echo " 
                                    data-size=\"small\" 
                                    data-label-text=\"";
        // line 277
        echo __("Visual editor");
        echo "\" 
                                    data-label-width=\"80px\" 
                                    data-on-text=\"";
        // line 279
        echo __("On");
        echo "\" 
                                    data-off-text=\"";
        // line 280
        echo __("Off");
        echo "\">
                            </div>
                        </div>

                        <div class=\"editor-messages\">
                            ";
        // line 285
        ob_start(function () { return ''; });
        // line 286
        echo "                                ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                            ";
        $context["simpleTextEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 288
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["simpleTextEditorMessage"] ?? null), "ta_text-advanced-editor-hide inline-editor-hide"], 288, $context, $this->getSourceContext());
        echo "

                            ";
        // line 291
        echo "                            ";
        ob_start(function () { return ''; });
        // line 292
        echo "                                ";
        echo __("Enter text to display using the inline editor which can be opened by clicking in the preview on the left.");
        // line 293
        echo "                                ";
        echo __("When using the inline editor Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 294
        echo "                            ";
        $context["layoutEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["layoutEditorMessage"] ?? null), "layout-designer-message inline-editor-show"], 295, $context, $this->getSourceContext());
        echo "

                            ";
        // line 298
        echo "                            ";
        ob_start(function () { return ''; });
        // line 299
        echo "                                ";
        echo __("Enter the text to display. The red rectangle reflects the size of the region you are editing.");
        // line 300
        echo "                                ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 301
        echo "                            ";
        $context["playlistEditorMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 302
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["playlistEditorMessage"] ?? null), "playlist-editor-message ta_text-advanced-editor-show"], 302, $context, $this->getSourceContext());
        echo "
                        </div>

                        <div class=\"ckeditor_controls row inline-editor-hide\" data-linked-to=\"ta_text\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_snippets_select\">";
        // line 308
        echo __("Snippets");
        echo "</label>
                                    <div class=\"col-sm-8 ckeditor_select_container\">
                                        <select id=\"ckeditor_snippets_select\"
                                            class=\"ckeditor_snippets_select form-control\"
                                            data-linked-to=\"ta_text\">
                                            <option value=\"\"></option>
                                            <option value=\"Name\">Name</option>
                                            <option value=\"Title\">Title</option>
                                            <option value=\"Description\">Description</option>
                                            <option value=\"Date\">Date</option>
                                            <option value=\"Content\">Content</option>
                                            <option value=\"Copyright\">Copyright</option>
                                            <option value=\"Link\">Link</option>
                                            <option value=\"PermaLink\">PermaLink</option>
                                            <option value=\"Tag|Namespace\">Tag|Namespace</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group row\">
                                    <label class=\"col-sm-4 control-label\" for=\"ckeditor_library_select2\">";
        // line 329
        echo __("Library");
        echo "</label>
                                    <div class=\"col-sm-8\">
                                        <select id=\"ckeditor_library_select2\"
                                                class=\"ckeditor_library_select form-control\"
                                                data-linked-to=\"ta_text\"
                                                data-search-url=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "\"
                                                data-image-url=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "?preview=1\">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
        // line 342
        echo twig_call_macro($macros["forms"], "macro_textarea", ["ta_text", "", twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getRawNode", [0 => "template"], "method", false, false, false, 342), "", "inline-editor-hide", "", 10], 342, $context, $this->getSourceContext());
        echo "
                        
                    </div>

                    <div class=\"tab-pane\" id=\"optionalStylesheetTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 348
        echo __("Optional Stylesheet Template");
        echo "</h4>
                        </div>
                        
                        ";
        // line 351
        echo twig_call_macro($macros["forms"], "macro_textarea", ["ta_css", "", twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getRawNode", [0 => "css"], "method", false, false, false, 351), "", "template-override-controls", "", 10], 351, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"noDataTemplateTab\">
                        <div class=\"form-content-title row\">
                            <h4 class=\"col-6 text-left\">";
        // line 356
        echo __("No Data Template");
        echo "</h4>
                            <div class=\"col-6 text-right\">
                                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"noDataMessage_advanced\" name=\"noDataMessage_advanced\" ";
        // line 358
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "noDataMessage_advanced", 1 => 0], "method", false, false, false, 358), 1))) {
            echo "checked";
        }
        echo " 
                                    data-size=\"small\" 
                                    data-label-text=\"";
        // line 360
        echo __("Visual editor");
        echo "\" 
                                    data-label-width=\"80px\" 
                                    data-on-text=\"";
        // line 362
        echo __("On");
        echo "\" 
                                    data-off-text=\"";
        // line 363
        echo __("Off");
        echo "\">
                            </div>
                        </div>

                        ";
        // line 367
        ob_start(function () { return ''; });
        // line 368
        echo "                            ";
        echo __("Enter text or HTML in the box below.");
        echo "<br>
                        ";
        $context["noDataMessageMessage1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 370
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["noDataMessageMessage1"] ?? null), "noDataMessage-advanced-editor-hide"], 370, $context, $this->getSourceContext());
        echo "

                        ";
        // line 372
        ob_start(function () { return ''; });
        // line 373
        echo "                            ";
        echo __("Enter the text to display.");
        // line 374
        echo "                            ";
        echo __("The red rectangle reflects the size of the region you are editing.");
        // line 375
        echo "                            ";
        echo __("Shift+Enter will drop a single line. Enter alone starts a new paragraph.");
        // line 376
        echo "                        ";
        $context["noDataMessageMessage2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 377
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["noDataMessageMessage2"] ?? null), "noDataMessage-advanced-editor-show"], 377, $context, $this->getSourceContext());
        echo "

                        ";
        // line 379
        ob_start(function () { return ''; });
        // line 380
        echo "                            ";
        echo __("A message to display when no data is returned from the source");
        // line 381
        echo "                        ";
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 382
        echo "
                        ";
        // line 383
        echo twig_call_macro($macros["forms"], "macro_textarea", ["noDataMessage", "", twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getRawNode", [0 => "noDataMessage"], "method", false, false, false, 383), ($context["helpText"] ?? null), "", "", 5], 383, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"optionalJavascriptTab\">
                        <div class=\"form-content-title\">
                            <h4>";
        // line 388
        echo __("Optional JavaScript");
        echo "</h4>
                        </div>

                        ";
        // line 391
        echo twig_call_macro($macros["forms"], "macro_textarea", ["javaScript", "", twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getRawNode", [0 => "javaScript"], "method", false, false, false, 391), "", "", "", 10], 391, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"cacheTab\">
                        ";
        // line 395
        ob_start(function () { return ''; });
        echo __("Update Interval (mins)");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 396
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the update interval in minutes. This should be kept as high as possible. For example, if the data will only change once per hour this could be set to 60.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 397
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["updateInterval", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "updateInterval", 1 => 60], "method", false, false, false, 397), ($context["helpText"] ?? null), "", "required"], 397, $context, $this->getSourceContext());
        echo "
                                                
                        ";
        // line 399
        ob_start(function () { return ''; });
        echo __("Update Interval Images (mins)");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 400
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Override the update interval for images. This should be kept as high as possible and can be set for all Tickers in Module Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 401
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["updateIntervalImages", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "updateIntervalImages", 1 => twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getSetting", [0 => "updateIntervalImages", 1 => 240], "method", false, false, false, 401)], "method", false, false, false, 401), ($context["helpText"] ?? null), "", "required"], 401, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ticker-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1063 => 401,  1058 => 400,  1054 => 399,  1048 => 397,  1043 => 396,  1039 => 395,  1032 => 391,  1026 => 388,  1018 => 383,  1015 => 382,  1012 => 381,  1009 => 380,  1007 => 379,  1001 => 377,  998 => 376,  995 => 375,  992 => 374,  989 => 373,  987 => 372,  981 => 370,  975 => 368,  973 => 367,  966 => 363,  962 => 362,  957 => 360,  950 => 358,  945 => 356,  937 => 351,  931 => 348,  922 => 342,  912 => 335,  908 => 334,  900 => 329,  876 => 308,  866 => 302,  863 => 301,  860 => 300,  857 => 299,  854 => 298,  848 => 295,  845 => 294,  842 => 293,  839 => 292,  836 => 291,  830 => 288,  824 => 286,  822 => 285,  814 => 280,  810 => 279,  805 => 277,  798 => 275,  793 => 273,  783 => 267,  781 => 265,  780 => 264,  779 => 263,  777 => 262,  772 => 261,  767 => 260,  762 => 259,  758 => 258,  752 => 256,  748 => 255,  742 => 253,  738 => 252,  732 => 250,  728 => 249,  722 => 247,  718 => 246,  712 => 244,  708 => 243,  702 => 241,  696 => 239,  694 => 238,  687 => 235,  681 => 233,  679 => 232,  673 => 230,  668 => 229,  664 => 228,  658 => 226,  653 => 225,  649 => 224,  643 => 221,  633 => 215,  628 => 214,  624 => 213,  618 => 211,  616 => 209,  615 => 208,  613 => 207,  608 => 206,  603 => 205,  598 => 204,  594 => 203,  588 => 201,  583 => 200,  579 => 199,  573 => 197,  571 => 195,  570 => 194,  569 => 193,  568 => 192,  567 => 191,  566 => 190,  565 => 189,  564 => 188,  563 => 187,  562 => 186,  560 => 185,  555 => 184,  550 => 183,  545 => 182,  540 => 181,  535 => 180,  530 => 179,  525 => 178,  520 => 177,  515 => 176,  511 => 175,  508 => 174,  506 => 172,  505 => 171,  504 => 170,  503 => 169,  502 => 168,  500 => 167,  496 => 166,  493 => 165,  491 => 163,  490 => 162,  488 => 161,  483 => 160,  478 => 159,  473 => 158,  468 => 157,  463 => 156,  459 => 155,  456 => 154,  451 => 153,  447 => 152,  441 => 150,  436 => 149,  432 => 148,  424 => 144,  419 => 143,  415 => 142,  409 => 140,  404 => 139,  400 => 138,  394 => 136,  389 => 135,  385 => 134,  379 => 132,  374 => 131,  370 => 130,  364 => 128,  359 => 127,  352 => 122,  349 => 121,  343 => 119,  338 => 118,  334 => 117,  328 => 115,  323 => 114,  319 => 113,  313 => 111,  308 => 110,  304 => 109,  298 => 107,  293 => 106,  289 => 105,  283 => 103,  281 => 101,  280 => 100,  278 => 99,  273 => 98,  268 => 97,  263 => 96,  259 => 95,  253 => 93,  248 => 92,  244 => 91,  238 => 89,  233 => 88,  229 => 87,  221 => 83,  219 => 81,  218 => 80,  217 => 79,  215 => 78,  210 => 77,  205 => 76,  201 => 75,  198 => 74,  193 => 73,  189 => 72,  183 => 70,  178 => 69,  174 => 68,  168 => 66,  163 => 65,  159 => 64,  153 => 62,  148 => 61,  144 => 60,  138 => 58,  133 => 57,  129 => 56,  123 => 53,  117 => 50,  111 => 47,  107 => 46,  103 => 45,  99 => 44,  95 => 43,  89 => 40,  83 => 37,  79 => 36,  75 => 35,  71 => 33,  67 => 32,  60 => 30,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "ticker-form-edit.twig", "/srv/xibo-cms/modules/ticker-form-edit.twig");
    }
}

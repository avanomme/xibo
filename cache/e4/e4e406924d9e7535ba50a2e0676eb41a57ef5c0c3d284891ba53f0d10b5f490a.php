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

/* schedule-form-now.twig */
class __TwigTemplate_5db884c566e702a49b2502ae732702bd4cdbedf6d50d9596ee6bb4f0fc9a9244 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-now.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-now.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Schedule Now");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 33
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Save");
        echo ", scheduleNowFormSubmit(\$(\"#scheduleNowForm\"))
";
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "setupScheduleNowForm";
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"scheduleNowForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        echo "\">
                ";
        // line 43
        echo twig_call_macro($macros["forms"], "macro_hidden", ["eventTypeId", ($context["eventTypeId"] ?? null)], 43, $context, $this->getSourceContext());
        echo "
                ";
        // line 44
        echo twig_call_macro($macros["forms"], "macro_hidden", ["dayPartId", twig_get_attribute($this->env, $this->source, ($context["customDayPart"] ?? null), "dayPartId", [], "any", false, false, false, 44)], 44, $context, $this->getSourceContext());
        echo "
                ";
        // line 45
        echo twig_call_macro($macros["forms"], "macro_hidden", ["alwaysDayPartId", twig_get_attribute($this->env, $this->source, ($context["alwaysDayPart"] ?? null), "dayPartId", [], "any", false, false, false, 45)], 45, $context, $this->getSourceContext());
        echo "
                ";
        // line 46
        echo twig_call_macro($macros["forms"], "macro_hidden", ["customDayPartId", twig_get_attribute($this->env, $this->source, ($context["customDayPart"] ?? null), "dayPartId", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
        echo "
                ";
        // line 47
        echo twig_call_macro($macros["forms"], "macro_hidden", ["fromDt", ""], 47, $context, $this->getSourceContext());
        echo "
                ";
        // line 48
        echo twig_call_macro($macros["forms"], "macro_hidden", ["toDt", ""], 48, $context, $this->getSourceContext());
        echo "
                ";
        // line 49
        echo twig_call_macro($macros["forms"], "macro_hidden", ["syncTimezone", "1"], 49, $context, $this->getSourceContext());
        echo "

                ";
        // line 52
        echo "                ";
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search")], 1 => ["name" => "data-search-is-layout-specific", "value" =>  -1], 2 => ["name" => "data-trans-layout", "value" => __("Layout")], 3 => ["name" => "data-trans-layout-help-text", "value" => __("Please select a Layout for this Event to show")], 4 => ["name" => "data-trans-campaign", "value" => __("Campaign")], 5 => ["name" => "data-trans-campaign-help-text", "value" => __("Please select a Campaign for this Event to show")]];
        // line 60
        echo "
                ";
        // line 61
        ob_start(function () { return ''; });
        echo __("Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please select a Layout for this Event to show");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["campaign"] ?? null), "campaignId", [], "any", false, false, false, 63), [0 => ($context["campaign"] ?? null)], "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control", "", "", "", ($context["attributes"] ?? null)], 63, $context, $this->getSourceContext());
        echo "

                ";
        // line 65
        ob_start(function () { return ''; });
        echo __("Always?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Run this event from now and dont stop.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["always", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 67, $context, $this->getSourceContext());
        echo "

                ";
        // line 69
        ob_start(function () { return ''; });
        echo __("Hours");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Hours this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["hours", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part"], 71, $context, $this->getSourceContext());
        echo "
                
                ";
        // line 73
        ob_start(function () { return ''; });
        echo __("Minutes");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Minutes this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["minutes", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part"], 75, $context, $this->getSourceContext());
        echo "
                
                ";
        // line 77
        ob_start(function () { return ''; });
        echo __("Seconds");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Seconds this event should be scheduled for");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["seconds", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "schedule-now-seconds-field duration-part"], 79, $context, $this->getSourceContext());
        echo "

                ";
        // line 81
        ob_start(function () { return ''; });
        echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                <div class=\"alert alert-info scheduleNowMessage d-none\" data-template=\"";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\"></div>

                ";
        // line 84
        ob_start(function () { return ''; });
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please select one or more displays / groups for this event to be shown on.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                ";
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], 1 => ["name" => "data-trans-groups", "value" => __("Groups")], 2 => ["name" => "data-trans-display", "value" => __("Display")]];
        // line 91
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), [0 => ($context["displayGroupId"] ?? null)], ($context["displayGroup"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "", "", "", "", ($context["attributes"] ?? null)], 91, $context, $this->getSourceContext());
        echo "

                ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Display Order");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Should this event have an order?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), ($context["displayOrder"] ?? null), ($context["helpText"] ?? null)], 95, $context, $this->getSourceContext());
        echo "
                
                ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Priority");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), ($context["isPriority"] ?? null), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
        echo "

                ";
        // line 101
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "EVENT_SYNC", [], "any", false, false, false, 101), 1))) {
            // line 102
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Synchronise this event?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 103
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("When selected, all selected players will attempt to synchronise the output (Supported on Android player only)");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 104
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["syncEvent", ($context["title"] ?? null), 0, ($context["helpText"] ?? null), "sync-schedule-control"], 104, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 106
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "schedule-form-now.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 106,  281 => 104,  276 => 103,  271 => 102,  269 => 101,  263 => 99,  258 => 98,  254 => 97,  248 => 95,  243 => 94,  239 => 93,  233 => 91,  230 => 86,  225 => 85,  221 => 84,  215 => 82,  211 => 81,  205 => 79,  200 => 78,  196 => 77,  190 => 75,  185 => 74,  181 => 73,  175 => 71,  170 => 70,  166 => 69,  160 => 67,  155 => 66,  151 => 65,  145 => 63,  140 => 62,  136 => 61,  133 => 60,  130 => 52,  125 => 49,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 40,  89 => 39,  82 => 37,  76 => 34,  72 => 33,  65 => 32,  61 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-now.twig", "/srv/xibo-cms/views/schedule-form-now.twig");
    }
}

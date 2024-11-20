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

/* image-form-edit.twig */
class __TwigTemplate_8ba39ef87d266750d3fced5f618c3b7834d0cb9db89a44c158c2260fcfbec390 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "image-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "image-form-edit.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Edit Image");
    }

    // line 31
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 34
        echo __("General");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#appearanceTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("Appearance");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"imageEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 38), "widgetId", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\" data-widget-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 38), "widgetId", [], "any", false, false, false, 38), "html", null, true);
        echo "\" data-media-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getMediaId", [], "method", false, false, false, 38), "html", null, true);
        echo "\" data-media-editable=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "checkEditable", [0 => twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getMedia", [], "method", false, false, false, 38)], "method", false, false, false, 38), "html", null, true);
        echo "\" data-valid-extensions=\"";
        echo twig_escape_filter($this->env, ($context["validExtensions"] ?? null), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 41
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "name"], "method", false, false, false, 43), ($context["helpText"] ?? null)], 43, $context, $this->getSourceContext());
        echo "

                        ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Set a duration?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select to provide a specific duration for this Widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["useDuration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getUseDuration", [], "method", false, false, false, 47), ($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        echo "

                        ";
        // line 49
        ob_start(function () { return ''; });
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The duration in seconds this should be displayed");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["duration", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getDuration", [], "method", false, false, false, 51), ($context["helpText"] ?? null), "duration-fields", "required"], 51, $context, $this->getSourceContext());
        echo "

                        ";
        // line 53
        ob_start(function () { return ''; });
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Setting for enabling statistic collection");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
                        ";
        // line 56
        ob_start(function () { return ''; });
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 60
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 61
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 62
($context["inheritOption"] ?? null)]];
        // line 64
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "enableStat", 1 => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 64)], "method", false, false, false, 64), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"appearanceTab\">
                        ";
        // line 68
        ob_start(function () { return ''; });
        echo twig_escape_filter($this->env, __("Fit supported from: "), "html", null, true);
        echo " ";
        $context["fitMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Scale type");
        echo " ";
        echo twig_call_macro($macros["forms"], "macro_playerCompat", ["v3 R304", "TBC", "TBC", "TBC", "v3 R303", ($context["fitMessage"] ?? null)], 69, $context, $this->getSourceContext());
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("How should this image be scaled?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Centre");
        $context["center"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Stretch");
        $context["stretch"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Fit");
        $context["fit"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        $context["options"] = [0 => ["scaleTypeId" => "center", "scaleType" =>         // line 75
($context["center"] ?? null)], 1 => ["scaleTypeId" => "stretch", "scaleType" =>         // line 76
($context["stretch"] ?? null)], 2 => ["scaleTypeId" => "fit", "scaleType" =>         // line 77
($context["fit"] ?? null)]];
        // line 79
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["scaleTypeId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "scaleType"], "method", false, false, false, 79), ($context["options"] ?? null), "scaleTypeId", "scaleType", ($context["helpText"] ?? null)], 79, $context, $this->getSourceContext());
        echo "

                        ";
        // line 81
        ob_start(function () { return ''; });
        echo __("Horizontal Align");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("How should this image be aligned?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Left");
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Centre");
        $context["center"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Right");
        $context["right"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                        ";
        $context["options"] = [0 => ["alignId" => "left", "align" =>         // line 87
($context["left"] ?? null)], 1 => ["alignId" => "center", "align" =>         // line 88
($context["center"] ?? null)], 2 => ["alignId" => "right", "align" =>         // line 89
($context["right"] ?? null)]];
        // line 91
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["alignId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "align", 1 => "center"], "method", false, false, false, 91), ($context["options"] ?? null), "alignId", "align", ($context["helpText"] ?? null), "align-fields"], 91, $context, $this->getSourceContext());
        echo "

                        ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Vertical Align");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("How should this image be vertically aligned?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Top");
        $context["top"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Middle");
        $context["middle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Bottom");
        $context["bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        $context["options"] = [0 => ["valignId" => "top", "valign" =>         // line 99
($context["top"] ?? null)], 1 => ["valignId" => "middle", "valign" =>         // line 100
($context["middle"] ?? null)], 2 => ["valignId" => "bottom", "valign" =>         // line 101
($context["bottom"] ?? null)]];
        // line 103
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["valignId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getoption", [0 => "valign", 1 => "middle"], "method", false, false, false, 103), ($context["options"] ?? null), "valignId", "valign", ($context["helpText"] ?? null), "align-fields"], 103, $context, $this->getSourceContext());
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
        return "image-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 103,  284 => 101,  283 => 100,  282 => 99,  280 => 98,  275 => 97,  270 => 96,  265 => 95,  260 => 94,  256 => 93,  250 => 91,  248 => 89,  247 => 88,  246 => 87,  244 => 86,  239 => 85,  234 => 84,  229 => 83,  224 => 82,  220 => 81,  214 => 79,  212 => 77,  211 => 76,  210 => 75,  208 => 74,  203 => 73,  198 => 72,  193 => 71,  188 => 70,  181 => 69,  176 => 68,  168 => 64,  166 => 62,  165 => 61,  164 => 60,  162 => 59,  157 => 58,  152 => 57,  148 => 56,  145 => 55,  140 => 54,  136 => 53,  130 => 51,  125 => 50,  121 => 49,  115 => 47,  110 => 46,  106 => 45,  100 => 43,  95 => 42,  91 => 41,  77 => 38,  71 => 35,  67 => 34,  63 => 32,  59 => 31,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "image-form-edit.twig", "/srv/xibo-cms/modules/image-form-edit.twig");
    }
}

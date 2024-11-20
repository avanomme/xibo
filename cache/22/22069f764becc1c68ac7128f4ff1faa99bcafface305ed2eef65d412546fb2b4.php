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

/* region-form-edit.twig */
class __TwigTemplate_a857ce805fbbd57a3a4d7a9d7aeed2c7ced66e26c22c387b8db96a1ea12b51b6 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "region-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "region-form-edit.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Region Options");
    }

    // line 31
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <div class=\"row\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#generalTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("General");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#positioningTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 36
        echo __("Positioning");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#transitionTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 37
        echo __("Transition");
        echo "</span></a></li>
        </ul>

        <div class=\"col-md-12\">
            <form id=\"regionEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "regionId", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"generalTab\">
                        ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Name of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "name", [], "any", false, false, false, 46), ($context["helpText"] ?? null)], 46, $context, $this->getSourceContext());
        echo "

                        ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Loop?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("If there is only one item in this region should it loop?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["loop", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", [0 => "loop", 1 => 0], "method", false, false, false, 50), ($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
        echo "

                        ";
        // line 52
        $context["message"] = __("When should the Region Loop be enabled?");
        // line 53
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert-info"], 53, $context, $this->getSourceContext());
        echo "
                        ";
        // line 54
        $context["message2"] = __("* If your Region contains more than one Widget, Loop should not be enabled.");
        // line 55
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message2"] ?? null), "alert-info"], 55, $context, $this->getSourceContext());
        echo "
                        ";
        // line 56
        $context["message3"] = __("* If your Region contains one Widget, and that Widget is a 'fixed' item (eg Text), Loop should not be enabled.");
        // line 57
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message3"] ?? null), "alert-info"], 57, $context, $this->getSourceContext());
        echo "
                        ";
        // line 58
        $context["message4"] = __("* If your Region contains one Widget, and that Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout.");
        // line 59
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message4"] ?? null), "alert-info"], 59, $context, $this->getSourceContext());
        echo "

                    </div>

                    <div class=\"tab-pane\" id=\"positioningTab\">
                        ";
        // line 64
        ob_start(function () { return ''; });
        echo __("Top");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Offset from the Top Corner");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["top", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "top", [], "any", false, false, false, 66), ($context["helpText"] ?? null)], 66, $context, $this->getSourceContext());
        echo "

                        ";
        // line 68
        ob_start(function () { return ''; });
        echo __("Left");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Offset from the Left Corner");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["left", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "left", [], "any", false, false, false, 70), ($context["helpText"] ?? null)], 70, $context, $this->getSourceContext());
        echo "

                        ";
        // line 72
        ob_start(function () { return ''; });
        echo __("Width");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Width of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["width", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "width", [], "any", false, false, false, 74), ($context["helpText"] ?? null)], 74, $context, $this->getSourceContext());
        echo "

                        ";
        // line 76
        ob_start(function () { return ''; });
        echo __("Height");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Height of the Region");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["height", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "height", [], "any", false, false, false, 78), ($context["helpText"] ?? null)], 78, $context, $this->getSourceContext());
        echo "

                        ";
        // line 80
        ob_start(function () { return ''; });
        echo __("Layer");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The layering order of this region (z-index). Advanced use only.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_number", ["zIndex", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "zIndex", [], "any", false, false, false, 82), ($context["helpText"] ?? null)], 82, $context, $this->getSourceContext());
        echo "

                        ";
        // line 84
        ob_start(function () { return ''; });
        echo __("Make this Region full screen, dimensions will be set to [width] by [height].");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "                        <div>
                            <button type=\"button\" id=\"setFullScreenButton\" class=\"btn btn-block btn-outline-primary\">";
        // line 86
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</button>
                        </div>
                    </div>

                    <div class=\"tab-pane\" id=\"transitionTab\">
                        ";
        // line 91
        ob_start(function () { return ''; });
        echo __("Exit Transition");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("What transition should be applied when this region is finished?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["transitionType", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", [0 => "transitionType"], "method", false, false, false, 93), twig_array_merge([0 => ["code" => null, "transition" => ""]], twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "out", [], "any", false, false, false, 93)), "code", "transition", ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
        echo "

                        ";
        // line 95
        echo twig_call_macro($macros["forms"], "macro_number", ["transitionDuration", "Duration", twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", [0 => "transitionDuration"], "method", false, false, false, 95), "The duration for this transition, in milliseconds.", "transition-group"], 95, $context, $this->getSourceContext());
        echo "

                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Direction");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The direction for this transition. Only appropriate for transitions that move, such as Fly.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["transitionDirection", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["region"] ?? null), "getOptionValue", [0 => "transitionDirection"], "method", false, false, false, 99), twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "compassPoints", [], "any", false, false, false, 99), "id", "name", ($context["helpText"] ?? null), "transition-group transition-direction"], 99, $context, $this->getSourceContext());
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
        return "region-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 99,  265 => 98,  261 => 97,  256 => 95,  250 => 93,  245 => 92,  241 => 91,  233 => 86,  230 => 85,  226 => 84,  220 => 82,  215 => 81,  211 => 80,  205 => 78,  200 => 77,  196 => 76,  190 => 74,  185 => 73,  181 => 72,  175 => 70,  170 => 69,  166 => 68,  160 => 66,  155 => 65,  151 => 64,  142 => 59,  140 => 58,  135 => 57,  133 => 56,  128 => 55,  126 => 54,  121 => 53,  119 => 52,  113 => 50,  108 => 49,  104 => 48,  98 => 46,  93 => 45,  89 => 44,  83 => 41,  76 => 37,  72 => 36,  68 => 35,  63 => 32,  59 => 31,  54 => 28,  50 => 27,  45 => 24,  43 => 25,  36 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "region-form-edit.twig", "/srv/xibo-cms/views/region-form-edit.twig");
    }
}

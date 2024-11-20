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

/* module-form-transition.twig */
class __TwigTemplate_814f7ce67bd9772ad23d98f622d02f31d43725fd4a50b352d3c772074ca0846e extends Template
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
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-transition.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-transition.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getName", [], "method", false, false, false, 28);
        // line 29
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Edit %type% Transition for %name%"), array("%type%" => ($context["type"] ?? null), "%name%" => ($context["name"] ?? null), ));
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 34
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 35
        echo __("Save");
        echo ", \$(\"#moduleTransitionEditForm\").submit()
";
    }

    // line 38
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    [{
    \"field\": \"transitionType\",
    \"trigger\": \"init\",
    \"value\": 0,
    \"operation\": \"equals\",
    \"actions\": {
    \".transition-group\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"transitionType\",
    \"trigger\": \"init\",
    \"value\": 0,
    \"operation\": \"not\",
    \"actions\": {
    \".transition-group\": { \"display\": \"\" }
    }
    },{
    \"field\": \"transitionType\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"equals\",
    \"actions\": {
    \".transition-group\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"transitionType\",
    \"trigger\": \"change\",
    \"value\": 0,
    \"operation\": \"not\",
    \"actions\": {
    \".transition-group\": { \"display\": \"\" }
    }
    }]
";
    }

    // line 74
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"moduleTransitionEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit", ["type" => ($context["type"] ?? null), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 77), "widgetId", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\">
                ";
        // line 78
        if ((0 === twig_compare(($context["type"] ?? null), "in"))) {
            // line 79
            echo "                    ";
            $context["transitionsWithEmpty"] = twig_array_merge([0 => ["code" => "", "transition" => ""]], twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "in", [], "any", false, false, false, 79));
            // line 80
            echo "                    ";
            $context["trans"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "transIn", 1 => null], "method", false, false, false, 80);
            // line 81
            echo "                    ";
            $context["transDuration"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "transInDuration", 1 => null], "method", false, false, false, 81);
            // line 82
            echo "                    ";
            $context["transDirection"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "transInDirection"], "method", false, false, false, 82);
            // line 83
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("What transition should be applied when this item starts?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo "                ";
        } elseif ((0 === twig_compare(($context["type"] ?? null), "out"))) {
            // line 85
            echo "                    ";
            $context["transitionsWithEmpty"] = twig_array_merge([0 => ["transitionId" => null, "transition" => ""]], twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "out", [], "any", false, false, false, 85));
            // line 86
            echo "                    ";
            $context["trans"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "transOut", 1 => null], "method", false, false, false, 86);
            // line 87
            echo "                    ";
            $context["transDuration"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "transOutDuration", 1 => null], "method", false, false, false, 87);
            // line 88
            echo "                    ";
            $context["transDirection"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "transOutDirection"], "method", false, false, false, 88);
            // line 89
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("What transition should be applied when this item finishes?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "                ";
        } else {
            // line 91
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("Unknown Transition Type Requested");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 92, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 94
        echo "
                ";
        // line 95
        ob_start(function () { return ''; });
        echo __("Transition");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["transitionType", "single", ($context["title"] ?? null), ($context["trans"] ?? null), ($context["transitionsWithEmpty"] ?? null), "code", "transition", ($context["helpText"] ?? null)], 96, $context, $this->getSourceContext());
        echo "

                ";
        // line 98
        ob_start(function () { return ''; });
        echo __("Duration");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                ";
        ob_start(function () { return ''; });
        echo __("The duration for this transition, in milliseconds.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_number", ["transitionDuration", ($context["title"] ?? null), ($context["transDuration"] ?? null), ($context["helpText"] ?? null)], 100, $context, $this->getSourceContext());
        echo "

                ";
        // line 102
        ob_start(function () { return ''; });
        echo __("Direction");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                ";
        ob_start(function () { return ''; });
        echo __("The direction for this transition. Only appropriate for transitions that move, such as Fly.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["transitionDirection", "single", ($context["title"] ?? null), ($context["transDirection"] ?? null), twig_get_attribute($this->env, $this->source, ($context["transitions"] ?? null), "compassPoints", [], "any", false, false, false, 104), "id", "name", ($context["helpText"] ?? null), "transition-group transition-direction"], 104, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "module-form-transition.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 104,  223 => 103,  219 => 102,  213 => 100,  208 => 99,  204 => 98,  198 => 96,  194 => 95,  191 => 94,  185 => 92,  180 => 91,  177 => 90,  172 => 89,  169 => 88,  166 => 87,  163 => 86,  160 => 85,  157 => 84,  152 => 83,  149 => 82,  146 => 81,  143 => 80,  140 => 79,  138 => 78,  134 => 77,  130 => 75,  126 => 74,  89 => 39,  85 => 38,  79 => 35,  75 => 34,  68 => 33,  64 => 32,  59 => 29,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-transition.twig", "/srv/xibo-cms/views/module-form-transition.twig");
    }
}

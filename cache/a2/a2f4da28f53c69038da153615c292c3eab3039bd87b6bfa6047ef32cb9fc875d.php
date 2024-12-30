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

/* command-form-add.twig */
class __TwigTemplate_84a6061721323b7b20dfa7aa552b0cd2cd0279ee470400e73a1cbc96891ad80b extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "command-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "command-form-add.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Add Command");
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
        echo ", \$(\"#commandAddForm\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("Description");
        echo "</span></a></li>
            </ul>
            <form id=\"commandAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.add"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 47
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name for this Command");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["command", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 49, $context, $this->getSourceContext());
        echo "

                        ";
        // line 51
        ob_start(function () { return ''; });
        echo __("Reference");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("A reference code for this command which is used to identify the command internally.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 53, $context, $this->getSourceContext());
        echo "

                        ";
        // line 55
        $context["fieldId"] = "commandString";
        // line 56
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Command");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Command String for this Command. An override for this can be provided in Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), "", ($context["helpText"] ?? null), "XiboCommand"], 58, $context, $this->getSourceContext());
        echo "

                        ";
        // line 60
        $context["fieldId"] = "validationString";
        // line 61
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Validation");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Validation String for this Command. An override for this can be provided in Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", [($context["fieldId"] ?? null), ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 63, $context, $this->getSourceContext());
        echo "

                        ";
        // line 65
        $context["options"] = [0 => ["optionid" => "android", "option" => "Android"], 1 => ["optionid" => "windows", "option" => "Windows"], 2 => ["optionid" => "lg", "option" => "webOS"], 3 => ["optionid" => "sssp", "option" => "Tizen"], 4 => ["optionid" => "linux", "option" => "Linux"]];
        // line 72
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Available on");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Leave empty if this command should be available on all types of Display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        echo "
                        ";
        // line 75
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["availableOn[]", "dropdownmulti", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null), "selectPicker"], 75, $context, $this->getSourceContext());
        echo "
                    </div>

                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 79
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("This should be a textual description of what the command is trying to achieve. It should not be the command string.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "", 10], 81, $context, $this->getSourceContext());
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
        return "command-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 81,  197 => 80,  193 => 79,  186 => 75,  183 => 74,  178 => 73,  173 => 72,  171 => 65,  165 => 63,  160 => 62,  155 => 61,  153 => 60,  147 => 58,  142 => 57,  137 => 56,  135 => 55,  129 => 53,  124 => 52,  120 => 51,  114 => 49,  109 => 48,  105 => 47,  99 => 44,  94 => 42,  90 => 41,  85 => 38,  81 => 37,  75 => 34,  71 => 33,  64 => 32,  60 => 31,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "command-form-add.twig", "/srv/xibo-cms/views/command-form-add.twig");
    }
}

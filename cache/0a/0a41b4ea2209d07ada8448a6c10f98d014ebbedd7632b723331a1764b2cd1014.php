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

/* layout-form-edit.twig */
class __TwigTemplate_e046373aea3b77dafe99f576feaaa0b56740dcd0cf98235c37249e8a35e801c2 extends Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo __("Edit Layout");
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 32
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 33
        echo __("Save");
        echo ", \$(\"#layoutEditForm\").submit()
";
    }

    // line 36
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 40
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#description\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 41
        echo __("Description");
        echo "</span></a></li>
            </ul>
            <form id=\"layoutEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 46)) {
            // line 47
            echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 48
            echo __("Current Folder");
            echo "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 55
            echo __("Move to Selected Folder:");
            echo "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 57
            echo __("Select Folder");
            echo "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 61
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "folderId", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 63
        echo "
                        ";
        // line 64
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name of the Layout - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 66), ($context["helpText"] ?? null)], 66, $context, $this->getSourceContext());
        echo "

                        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 68)) {
            // line 69
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "tags", [], "any", false, false, false, 71), ($context["helpText"] ?? null), "tags-with-value"], 71, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 75
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 76, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 79
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 80
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 81
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 81, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 85
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 88
        echo "
                        ";
        // line 89
        ob_start(function () { return ''; });
        echo __("Code Identifier");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enter a string to be used as the Code to identify this Layout when used with Interactive Actions.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "code", [], "any", false, false, false, 91), ($context["helpText"] ?? null)], 91, $context, $this->getSourceContext());
        echo "

                        ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Retired");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Retire this layout or not? It will no longer be visible in lists");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["retired", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "retired", [], "any", false, false, false, 95), ($context["helpText"] ?? null), "", "", "", "retired-form"], 95, $context, $this->getSourceContext());
        echo "

                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for this Layout. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["enableStat", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "enableStat", [], "any", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"description\">
                        ";
        // line 102
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("An optional description of the Layout. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "description", [], "any", false, false, false, 104), ($context["helpText"] ?? null)], 104, $context, $this->getSourceContext());
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
        return "layout-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 104,  264 => 103,  260 => 102,  253 => 99,  248 => 98,  244 => 97,  238 => 95,  233 => 94,  229 => 93,  223 => 91,  218 => 90,  214 => 89,  211 => 88,  205 => 85,  197 => 81,  192 => 80,  188 => 79,  181 => 76,  177 => 75,  169 => 71,  164 => 70,  159 => 69,  157 => 68,  151 => 66,  146 => 65,  142 => 64,  139 => 63,  134 => 61,  127 => 57,  122 => 55,  112 => 48,  109 => 47,  107 => 46,  99 => 43,  94 => 41,  90 => 40,  85 => 37,  81 => 36,  75 => 33,  71 => 32,  64 => 31,  60 => 30,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-edit.twig", "/srv/xibo-cms/views/layout-form-edit.twig");
    }
}

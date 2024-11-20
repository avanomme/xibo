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

/* layout-form-add.twig */
class __TwigTemplate_dac320ed4aa53fcbfde224473557a7ee2dcb8c4d8b8a96b664b9e9bb2f7e1d51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-add.twig", 25)->unwrap();
        // line 26
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-form-add.twig", 26)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-add.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        echo __("Add Layout");
    }

    // line 32
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "layoutAddFormOpen";
    }

    // line 34
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"stepwizard\" data-active=\"layout-create-step-1\">
                <div class=\"stepwizard-row stepper-nav\">
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#layout-create-step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                        <p><small>";
        // line 41
        echo twig_escape_filter($this->env, __("Template"), "html", null, true);
        echo "</small></p>
                    </div>
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#layout-create-step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                        <p><small>";
        // line 45
        echo twig_escape_filter($this->env, __("Organise"), "html", null, true);
        echo "</small></p>
                    </div>
                </div>
            </div>
            <div class=\"panel panel-default stepper-panel\" id=\"layout-create-step-1\" data-next=\"layout-create-step-2\" style=\"overflow-y: scroll; height: 65vh;\">
                <div class=\"panel-heading\">
                    <div class=\"XiboFilter card mb-3 bg-light\">
                        <div class=\"card-body\">
                            <form id=\"layout-add-templates-filter\" class=\"form-inline\">
                                ";
        // line 54
        echo twig_call_macro($macros["inline"], "macro_input", ["template", __("Template")], 54, $context, $this->getSourceContext());
        echo "

                                ";
        // line 56
        $context["options"] = [0 => ["id" => "both", "name" => __("All")], 1 => ["id" => "local", "name" => __("Local")], 2 => ["id" => "remote", "name" => __("Remote")]];
        // line 61
        echo "                                ";
        echo twig_call_macro($macros["inline"], "macro_dropdown", ["provider", "single", "From", "both", ($context["options"] ?? null), "id", "name"], 61, $context, $this->getSourceContext());
        echo "
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 67
        echo twig_escape_filter($this->env, __("Please select one of the options below."), "html", null, true);
        echo "</p>
                    <div id=\"layout-add-templates\" class=\"row\"></div>
                </div>
                <div class=\"panel-footer\">
                    <button class=\"btn btn-outline-primary float-right mt-2\" disabled id=\"layout-add-templates-more\">";
        // line 71
        echo twig_escape_filter($this->env, __("More"), "html", null, true);
        echo "</button>
                    <div class=\"spinner-grow d-none float-right mt-2 mr-2\" role=\"status\"><span class=\"sr-only\">";
        // line 72
        echo twig_escape_filter($this->env, __("Loading..."), "html", null, true);
        echo "</span></div>
                </div>
            </div>
            <div class=\"panel panel-default stepper-panel\" style=\"display:none;\" id=\"layout-create-step-2\" data-next=\"finished\">
                <form id=\"layoutAddForm\" class=\"stepwizard-form form-horizontal\" method=\"post\"
                      action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add"), "html", null, true);
        echo "\"
                      data-redirect=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        echo "\"
                      data-gettag=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\"
                      data-help-url=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\"
                >
                    ";
        // line 82
        echo twig_call_macro($macros["forms"], "macro_hidden", ["layoutId", "0|blank"], 82, $context, $this->getSourceContext());
        echo "
                    ";
        // line 83
        echo twig_call_macro($macros["forms"], "macro_hidden", ["source"], 83, $context, $this->getSourceContext());
        echo "
                    ";
        // line 84
        echo twig_call_macro($macros["forms"], "macro_hidden", ["download"], 84, $context, $this->getSourceContext());
        echo "
                    <div class=\"panel-body\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#generalTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 87
        echo __("Organise");
        echo "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#settingsTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 88
        echo __("Settings");
        echo "</span></a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"generalTab\">

                                ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("The Name of the Layout - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 95, $context, $this->getSourceContext());
        echo "

                                ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 97)) {
            // line 98
            echo "                                    <div class=\"form-group row\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 99
            echo __("Folder");
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 101
            echo __("Select Folder");
            echo "</button>
                                            <span id=\"selectedFormFolder\"></span>
                                        </div>
                                    </div>
                                    ";
            // line 105
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId"], 105, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 107
        echo "
                                ";
        // line 108
        ob_start(function () { return ''; });
        echo __("Resolution");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 109
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Choose the resolution this Layout should be designed for.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 110
        echo "                                ";
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.search")], 1 => ["name" => "data-search-term", "value" => "resolution"], 2 => ["name" => "data-id-property", "value" => "resolutionId"], 3 => ["name" => "data-text-property", "value" => "resolution"], 4 => ["name" => "data-initial-value", "value" => "HD"], 5 => ["name" => "data-initial-key", "value" => "partialResolution"]];
        // line 118
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), "", ($context["resolutions"] ?? null), "resolutionId", "resolution", ($context["helpText"] ?? null), "pagedSelect resolution-group", "", "", "", ($context["attributes"] ?? null)], 118, $context, $this->getSourceContext());
        echo "

                                ";
        // line 120
        ob_start(function () { return ''; });
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("An optional description of the Layout. (1 - 250 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_textarea", ["description", ($context["title"] ?? null), "", ($context["helpText"] ?? null), null, null, 5, true], 122, $context, $this->getSourceContext());
        echo "

                                ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 124)) {
            // line 125
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Tags for this Layout - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 127
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 127, $context, $this->getSourceContext());
            echo "

                                    <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                                    ";
            // line 131
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 132, $context, $this->getSourceContext());
            echo "

                                    <div id=\"tagValueContainer\">
                                        ";
            // line 135
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 136
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 137
            echo "                                        ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 137, $context, $this->getSourceContext());
            echo "
                                    </div>

                                    <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                        <p>";
            // line 141
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                                    </div>
                                ";
        }
        // line 144
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"settingsTab\">
                                ";
        // line 146
        ob_start(function () { return ''; });
        echo __("Code Identifier");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Enter a string to be used as the Code to identify this Layout when used with Interactive Actions.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 148, $context, $this->getSourceContext());
        echo "

                                ";
        // line 150
        ob_start(function () { return ''; });
        echo __("Enable Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for this Layout. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 152
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["enableStat", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 152), ($context["helpText"] ?? null)], 152, $context, $this->getSourceContext());
        echo "

                                ";
        // line 154
        ob_start(function () { return ''; });
        echo __("Automatically apply Transitions?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        echo "                                ";
        ob_start(function () { return ''; });
        echo __("When enabled, the default Transition type and duration will be applied to all widgets on this Layout.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo "                                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["autoApplyTransitions", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 156), ($context["helpText"] ?? null)], 156, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 156,  344 => 155,  340 => 154,  334 => 152,  329 => 151,  325 => 150,  319 => 148,  314 => 147,  310 => 146,  306 => 144,  300 => 141,  292 => 137,  287 => 136,  283 => 135,  276 => 132,  272 => 131,  264 => 127,  259 => 126,  254 => 125,  252 => 124,  246 => 122,  241 => 121,  237 => 120,  231 => 118,  228 => 110,  223 => 109,  219 => 108,  216 => 107,  211 => 105,  204 => 101,  199 => 99,  196 => 98,  194 => 97,  188 => 95,  183 => 94,  179 => 93,  171 => 88,  167 => 87,  161 => 84,  157 => 83,  153 => 82,  148 => 80,  144 => 79,  140 => 78,  136 => 77,  128 => 72,  124 => 71,  117 => 67,  107 => 61,  105 => 56,  100 => 54,  88 => 45,  81 => 41,  73 => 35,  69 => 34,  62 => 32,  57 => 29,  53 => 28,  48 => 24,  46 => 26,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-add.twig", "/srv/xibo-cms/views/layout-form-add.twig");
    }
}

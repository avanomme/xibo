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

/* layout-form-background.twig */
class __TwigTemplate_9f53a0224139bca7727c89aded2bf443fa2c9106c385dc2a42e5b4852010d541 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-background.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-background.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Edit Layout");
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
        echo ", \$(\"#layoutEditForm\").submit()
";
    }

    // line 37
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "backGroundFormSetup";
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 42
        echo __("General");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"layoutEditForm\" class=\"form-horizontal\" method=\"put\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.background", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 48
        ob_start(function () { return ''; });
        echo __("Background Colour");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Use the colour picker to select the background colour");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_colorPicker", ["backgroundColor", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "backgroundColor", [], "any", false, false, false, 50), ($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
        echo "

                        <div class=\"form-group row\">

                            <label class=\"col-sm-2 control-label\">
                                ";
        // line 55
        echo __("Background Image");
        // line 56
        echo "                            </label>

                            <div class=\"col-sm-10\">
                                <div class=\"text-center background-image-add editable\">
                                    <div id=\"bg_not_found_icon\">
                                        <i class=\"fa bg_not_found_icon\"></i>
                                        <div>";
        // line 62
        echo __("No Image set, add from Toolbar or Upload!");
        echo "</div>
                                    </div>

                                    <img id=\"bg_image_image\" data-url=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "?preview=1&width=200&height=100\" alt=\"";
        echo __("Background thumbnail");
        echo "\" />
                                    <div class=\"background-image-drop\">";
        // line 66
        echo __("Add background image");
        echo "</div>
                                </div>

                                <div class=\"background-image-actions text-center\">
                                    <div class=\"btn-group\">
                                        <button id=\"backgroundUploadButton\" class=\"btn btn-outline-secondary\" type=\"button\" data-add-new-background-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-upload\"></i>
                                            ";
        // line 73
        echo __("Upload");
        // line 74
        echo "                                        </button>

                                        <button id=\"backgroundRemoveButton\" class=\"btn btn-outline-danger\" type=\"button\">
                                            <i class=\"fa fa-remove\"></i>
                                            ";
        // line 78
        echo __("Remove");
        // line 79
        echo "                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 86
        echo twig_call_macro($macros["forms"], "macro_hidden", ["backgroundImageId", ($context["backgroundId"] ?? null)], 86, $context, $this->getSourceContext());
        echo "
                        </div>

                        ";
        // line 89
        ob_start(function () { return ''; });
        echo __("Resolution");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Change the resolution");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["resolution"] ?? null), "resolutionId", [], "any", false, false, false, 91), ($context["resolutions"] ?? null), "resolutionId", "resolution", ($context["helpText"] ?? null), "resolution-group"], 91, $context, $this->getSourceContext());
        echo "

                        ";
        // line 93
        ob_start(function () { return ''; });
        echo __("Layer");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The layering order of the background image (z-index). Advanced use only.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["backgroundzIndex", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "backgroundzIndex", [], "any", false, false, false, 95), ($context["helpText"] ?? null)], 95, $context, $this->getSourceContext());
        echo "

                        ";
        // line 97
        ob_start(function () { return ''; });
        echo __("Automatically apply Transitions?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("When enabled, the default Transition type and duration will be applied to all widgets on this Layout.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["autoApplyTransitions", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "autoApplyTransitions", [], "any", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
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
        return "layout-form-background.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 99,  221 => 98,  217 => 97,  211 => 95,  206 => 94,  202 => 93,  196 => 91,  191 => 90,  187 => 89,  181 => 86,  172 => 79,  170 => 78,  164 => 74,  162 => 73,  157 => 71,  149 => 66,  143 => 65,  137 => 62,  129 => 56,  127 => 55,  118 => 50,  113 => 49,  109 => 48,  103 => 45,  97 => 42,  93 => 40,  89 => 39,  82 => 37,  76 => 34,  72 => 33,  65 => 32,  61 => 31,  56 => 28,  52 => 27,  47 => 24,  45 => 25,  38 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-background.twig", "/srv/xibo-cms/views/layout-form-background.twig");
    }
}

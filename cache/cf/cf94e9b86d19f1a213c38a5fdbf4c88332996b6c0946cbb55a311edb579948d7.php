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

/* displayprofile-form-add.twig */
class __TwigTemplate_c81a684e45b05c05ede5f1715f29aa2ac2bb699f454de717bd2b884b55abe350 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "displayprofile-form-add.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Add Profile");
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
        echo ", \$(\"#displayProfileAddForm\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayProfileAddForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.add"), "html", null, true);
        echo "\"
                  data-next-form-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayProfile.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\">
                ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                ";
        ob_start(function () { return ''; });
        echo __("The Name for this Display Profile");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", "required"], 44, $context, $this->getSourceContext());
        echo "

                ";
        // line 46
        ob_start(function () { return ''; });
        echo __("Display Type");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                ";
        ob_start(function () { return ''; });
        echo __("What type of display is this profile intended for?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", ($context["types"] ?? null), "typeId", "type", ($context["helpText"] ?? null)], 48, $context, $this->getSourceContext());
        echo "

                ";
        // line 50
        ob_start(function () { return ''; });
        echo __("Default Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Is this the default profile for all Displays of this type? Only 1 profile can be the default.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDefault", ($context["title"] ?? null), ($context["isDefault"] ?? null), ($context["helpText"] ?? null)], 52, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  131 => 51,  127 => 50,  121 => 48,  116 => 47,  112 => 46,  106 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 38,  81 => 37,  75 => 34,  71 => 33,  64 => 32,  60 => 31,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-add.twig", "/srv/xibo-cms/views/displayprofile-form-add.twig");
    }
}

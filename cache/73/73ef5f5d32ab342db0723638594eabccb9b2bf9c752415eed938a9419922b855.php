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

/* displayprofile-form-edit.twig */
class __TwigTemplate_d63e6087ef0128a65e4fc227bc60ffefe9dceeaee201076e4d4a751247bd4a72 extends Template
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
            'callBack' => [$this, 'block_callBack'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "displayprofile-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo __("Edit Profile");
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
        echo ", displayProfileEditFormSubmit()
";
    }

    // line 36
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    [
        {
        \"field\": \"statsEnabled\", \"trigger\": \"init\",
        \"operation\": \"is:checked\", \"value\": false,
        \"actions\": { \".aggregation-level\": { \"display\": \"none\" } }
        },{
        \"field\": \"statsEnabled\", \"trigger\": \"change\",
        \"operation\": \"is:checked\", \"value\": false,
        \"actions\": { \".aggregation-level\": { \"display\": \"none\" } }
        },
        {
        \"field\": \"statsEnabled\", \"trigger\": \"init\",
        \"operation\": \"is:checked\", \"value\": true,
        \"actions\": { \".aggregation-level\": { \"display\": \"\" } }
        },{
        \"field\": \"statsEnabled\", \"trigger\": \"change\",
        \"operation\": \"is:checked\", \"value\": true,
        \"actions\": { \".aggregation-level\": { \"display\": \"\" } }
        }
    ]
";
    }

    // line 59
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "displayProfileFormOpen";
    }

    // line 61
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 63), "android"))) {
            // line 64
            echo "        ";
            echo twig_include($this->env, $context, "displayprofile-form-edit-android.twig");
            echo "
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 65
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 65), "windows"))) {
            // line 66
            echo "        ";
            echo twig_include($this->env, $context, "displayprofile-form-edit-windows.twig");
            echo "
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 67
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 67), "linux"))) {
            // line 68
            echo "        ";
            echo twig_include($this->env, $context, "displayprofile-form-edit-linux.twig");
            echo "
    ";
        } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 69
($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 69), "lg")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 69), "sssp")))) {
            // line 70
            echo "        ";
            echo twig_include($this->env, $context, "displayprofile-form-edit-soc.twig");
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 71
($context["displayProfile"] ?? null), "isCustom", [], "method", false, false, false, 71)) {
            // line 72
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getCustomEditTemplate", [], "method", false, false, false, 72));
            echo "
    ";
        } else {
            // line 74
            echo "        ";
            ob_start(function () { return ''; });
            echo __("This is an unknown type of Player and there are no special settings for it.");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            echo "        ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 75, $context, $this->getSourceContext());
            echo "

        ";
            // line 77
            echo twig_include($this->env, $context, "displayprofile-form-edit-common-fields.twig");
            echo "
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        echo twig_include($this->env, $context, "displayprofile-form-edit-javascript.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 80,  177 => 79,  172 => 77,  166 => 75,  161 => 74,  155 => 72,  153 => 71,  148 => 70,  146 => 69,  141 => 68,  139 => 67,  134 => 66,  132 => 65,  127 => 64,  124 => 63,  122 => 62,  118 => 61,  111 => 59,  87 => 37,  83 => 36,  77 => 33,  73 => 32,  66 => 31,  62 => 30,  57 => 27,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit.twig", "/srv/xibo-cms/views/displayprofile-form-edit.twig");
    }
}

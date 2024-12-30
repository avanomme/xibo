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

/* user-form-permissions.twig */
class __TwigTemplate_a1169852ddf8c54cd736937471c07f28c1cc7462ebe832d7534fdf55869416ea extends Template
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
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "user-form-permissions.twig", 24)->unwrap();
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "user-form-permissions.twig", 25)->unwrap();
        // line 27
        $context["randomId"] = twig_random($this->env);
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "user-form-permissions.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        if (($context["objectNameOverride"] ?? null)) {
            // line 31
            echo "        ";
            $context["objectName"] = ($context["objectNameOverride"] ?? null);
            // line 32
            echo "    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isLayoutSpecific", [], "any", false, false, false, 32), 1))) {
            // line 33
            echo "        ";
            $context["objectName"] = __("Layout");
            // line 34
            echo "    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "isDisplaySpecific", [], "any", false, false, false, 34), 1))) {
            // line 35
            echo "        ";
            $context["objectName"] = __("Display");
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            $context["objectName"] = __(($context["entity"] ?? null));
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    ";
        // line 40
        /* xgettext:no-php-format */        echo strtr(__("Sharing for %objectName%"), array("%objectName%" => ($context["objectName"] ?? null), ));
    }

    // line 43
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["help"] ?? null), "permissions", [], "any", false, false, false, 44), "html", null, true);
        echo "\")
    ";
        // line 45
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 46
        echo __("Save");
        echo ", permissionsFormSubmit(\"";
        echo twig_escape_filter($this->env, ($context["randomId"] ?? null), "html", null, true);
        echo "\")
";
    }

    // line 49
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "permissionsFormOpen";
    }

    // line 51
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <div class=\"permissions-form\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"XiboGrid permissionsGrid\" id=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["randomId"] ?? null), "html", null, true);
        echo "\"
                     data-url=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions", ["entity" => ($context["entity"] ?? null), "id" => ($context["objectId"] ?? null)]), "html", null, true);
        echo "\"
                     data-permissions=\"";
        // line 57
        echo twig_escape_filter($this->env, json_encode(($context["permissions"] ?? null)), "html", null, true);
        echo "\">
                    <div class=\"permissionsTableFilter\">
                        <div class=\"XiboFilter card mb-3 bg-light\">
                            <div class=\"FilterDiv card-body\" id=\"Filter\">
                                <form class=\"form-inline\">
                                    ";
        // line 62
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                                    ";
        echo twig_call_macro($macros["inline"], "macro_input", ["name", ($context["title"] ?? null)], 63, $context, $this->getSourceContext());
        echo "
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"XiboData card pt-3\">
                        <table id=\"permissionsTable\" class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 72
        echo __("Name");
        echo "</th>
                                <th>";
        // line 73
        echo __("View");
        echo "</th>
                                <th>";
        // line 74
        echo __("Edit");
        echo "</th>
                                <th>";
        // line 75
        echo __("Delete");
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 86
        if (($context["canSetOwner"] ?? null)) {
            // line 87
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 89
            ob_start(function () { return ''; });
            echo __("Owner");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "                ";
            ob_start(function () { return ''; });
            echo __("Change the Owner of this item. Leave empty to keep the current owner.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            echo "                ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["ownerId", "single", ($context["title"] ?? null), "", twig_array_merge([0 => ["userId" => null, "userName" => ""]], ($context["owners"] ?? null)), "userId", "userName", ($context["helpText"] ?? null)], 91, $context, $this->getSourceContext());
            echo "
            </div>
        </div>
        ";
        }
        // line 95
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "user-form-permissions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 95,  207 => 91,  202 => 90,  198 => 89,  194 => 87,  192 => 86,  178 => 75,  174 => 74,  170 => 73,  166 => 72,  153 => 63,  149 => 62,  141 => 57,  137 => 56,  133 => 55,  128 => 52,  124 => 51,  117 => 49,  109 => 46,  105 => 45,  98 => 44,  94 => 43,  90 => 40,  87 => 39,  84 => 38,  81 => 37,  78 => 36,  75 => 35,  72 => 34,  69 => 33,  66 => 32,  63 => 31,  60 => 30,  56 => 29,  51 => 23,  49 => 27,  47 => 25,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form-permissions.twig", "/srv/xibo-cms/views/user-form-permissions.twig");
    }
}

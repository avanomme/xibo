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

/* install-step1.twig */
class __TwigTemplate_b293e14d2f6890990c15f4205949acdd8b16243d25581946cde14a735b8673f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'jumboTron' => [$this, 'block_jumboTron'],
            'stepContent' => [$this, 'block_stepContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-install.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step1.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step1.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_jumboTron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            ";
        // line 7
        $context["themeName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "app_name"], "method", false, false, false, 7);
        // line 8
        echo "            ";
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %themeName% Installation"), array("%themeName%" => ($context["themeName"] ?? null), ));
        $context["header"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "            <h1>";
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "</h1>
            <p>";
        // line 10
        /* xgettext:no-php-format */        echo strtr(__("Thank you for choosing %themeName%. This installation wizard will take you through
                setting up %themeName% one step at a time. There are 6 steps in total, the first one is below."), array("%themeName%" => ($context["themeName"] ?? null), "%themeName%" =>         // line 11
($context["themeName"] ?? null), ));
        // line 12
        echo "            </p>
            <p><a class=\"btn btn-primary btn-lg\" role=\"button\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "cms_install_url"], "method", false, false, false, 13), "html", null, true);
        echo "\" target=\"_blank\">";
        echo __("Installation guide");
        echo " &raquo;</a></p>
        </div>
    </div>
";
    }

    // line 18
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 21
        $context["themeName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "app_name"], "method", false, false, false, 21);
        // line 22
        echo "            <p>";
        /* xgettext:no-php-format */        echo strtr(__("First we need to check if your server meets %themeName%'s requirements."), array("%themeName%" => ($context["themeName"] ?? null), ));
        echo "</p>
            <table id=\"sessions\" class=\"table table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 26
        echo __("Item");
        echo "</th>
                    <th>";
        // line 27
        echo __("Status");
        echo "</th>
                    <th>";
        // line 28
        echo __("Advice");
        echo "</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, __("Settings File System Permissions"), "html", null, true);
        echo "</td>
                        <td>
                            ";
        // line 35
        if (($context["isSettingsPathWriteable"] ?? null)) {
            // line 36
            echo "                                <span class=\"fa fa-check\"></span>
                            ";
        } else {
            // line 38
            echo "                                <span class=\"fa fa-times\"></span>
                            ";
        }
        // line 40
        echo "                        </td>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, __("Write permissions are required for web/settings.php"), "html", null, true);
        echo "</td>
                    </tr>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "checkEnvironment", [], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["check"]) {
            // line 44
            echo "                    <tr>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["check"], "item", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 47
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["check"], "status", [], "any", false, false, false, 47), 0))) {
                // line 48
                echo "                                <span class=\"fa fa-times\"></span>
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 49
$context["check"], "status", [], "any", false, false, false, 49), 1))) {
                // line 50
                echo "                                <span class=\"fa fa-check\"></span>
                            ";
            } else {
                // line 52
                echo "                                <span class=\"fa fa-exclamation\"></span>
                            ";
            }
            // line 54
            echo "                        </td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["check"], "advice", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['check'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </tbody>
            </table>
            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "environmentFault", [], "method", false, false, false, 60)) {
            // line 61
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 1]), "html", null, true);
            echo "\" class=\"form-inline\">
                    ";
            // line 62
            ob_start(function () { return ''; });
            echo __("Retest");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 63, $context, $this->getSourceContext());
            echo "
                </form>
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 65
($context["config"] ?? null), "environmentWarning", [], "method", false, false, false, 65)) {
            // line 66
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 2]), "html", null, true);
            echo "\" class=\"form-inline\">
                    ";
            // line 67
            ob_start(function () { return ''; });
            echo __("Retest");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 68
            echo "                    ";
            $context["link"] = $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 1]);
            // line 69
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "link", ($context["link"] ?? null)], 69, $context, $this->getSourceContext());
            echo "

                    ";
            // line 71
            ob_start(function () { return ''; });
            echo __("Next");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit", ($context["link"] ?? null)], 72, $context, $this->getSourceContext());
            echo "
                </form>
            ";
        } else {
            // line 75
            echo "                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 2]), "html", null, true);
            echo "\" class=\"form-inline\">
                    ";
            // line 76
            ob_start(function () { return ''; });
            echo __("Next");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 77
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 77, $context, $this->getSourceContext());
            echo "
                </form>
            ";
        }
        // line 80
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "install-step1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 80,  244 => 77,  240 => 76,  235 => 75,  228 => 72,  224 => 71,  218 => 69,  215 => 68,  211 => 67,  206 => 66,  204 => 65,  198 => 63,  194 => 62,  189 => 61,  187 => 60,  183 => 58,  174 => 55,  171 => 54,  167 => 52,  163 => 50,  161 => 49,  158 => 48,  156 => 47,  151 => 45,  148 => 44,  144 => 43,  139 => 41,  136 => 40,  132 => 38,  128 => 36,  126 => 35,  121 => 33,  113 => 28,  109 => 27,  105 => 26,  97 => 22,  95 => 21,  91 => 19,  87 => 18,  77 => 13,  74 => 12,  72 => 11,  70 => 10,  65 => 9,  60 => 8,  58 => 7,  54 => 5,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step1.twig", "/srv/xibo-cms/views/install-step1.twig");
    }
}

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

/* base-install.twig */
class __TwigTemplate_f89d9652396d5fe5bdc7cc048b054c2567127168219c12db8c344d4cfd774436 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'jumboTron' => [$this, 'block_jumboTron'],
            'stepContent' => [$this, 'block_stepContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_title"], "method", false, false, false, 4), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
        echo "\"/>
        <meta name=\"public-path\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 9), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/favicon.ico"], "method", false, false, false, 10), "html", null, true);
        echo "\" />

        ";
        // line 13
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 13), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/xibo.css"], "method", false, false, false, 14), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/install.css"], "method", false, false, false, 15), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    </head>

    <body>
        <!-- Copyright 2006-2021 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->

        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    ";
        // line 24
        $context["themeName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "app_name"], "method", false, false, false, 24);
        // line 25
        echo "                    ";
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("%themeName% Installation"), array("%themeName%" => ($context["themeName"] ?? null), ));
        $context["header"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                    <a class=\"navbar-brand\" href=\"#\">";
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>

        ";
        // line 31
        $this->displayBlock('jumboTron', $context, $blocks);
        // line 34
        echo "
        <div class=\"container main-container\">
            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "error", [], "any", false, false, false, 36)) {
            // line 37
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["error"] ?? null) : null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('stepContent', $context, $blocks);
        // line 45
        echo "        </div>

        <div class=\"footer\">
            <div class=\"container text-center\">
                <img class=\"logo\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 49), "html", null, true);
        echo "\">
            </div>
        </div>

        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 53), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 54), "html", null, true);
        echo "dist/core/install.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 31
    public function block_jumboTron($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
        ";
    }

    // line 42
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "base-install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 43,  172 => 42,  167 => 32,  163 => 31,  152 => 54,  144 => 53,  137 => 49,  131 => 45,  129 => 42,  126 => 41,  120 => 38,  117 => 37,  115 => 36,  111 => 34,  109 => 31,  100 => 26,  95 => 25,  93 => 24,  81 => 15,  73 => 14,  64 => 13,  59 => 10,  55 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base-install.twig", "/srv/xibo-cms/views/base-install.twig");
    }
}

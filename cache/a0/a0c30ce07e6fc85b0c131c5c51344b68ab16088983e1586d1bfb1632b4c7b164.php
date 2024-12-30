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

/* non-authed.twig */
class __TwigTemplate_cf28873c350296da03d052e1fc4ad1369684df34e3adf3e347c2776f662c4857 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'contentClass' => [$this, 'block_contentClass'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_title"], "method", false, false, false, 26), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 30), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/favicon.ico"], "method", false, false, false, 31), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 33), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

        <!-- Copyright 2006-2023 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <style type=\"text/css\">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .login-logo {
                width: 200px;
            }

        </style>
        ";
        // line 65
        $this->displayBlock('style', $context, $blocks);
        // line 66
        echo "    </head>
    <body>
        <div class=\"container\">
            <div class=\"";
        // line 69
        $this->displayBlock('contentClass', $context, $blocks);
        echo "\">
                ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
                ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "            </div>

            <p class=\"text-center\">";
        // line 75
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        echo "</p>
        </div> <!-- /container -->
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 77), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 65
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 69
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "form-signin text-center";
    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_url"], "method", false, false, false, 70), "html", null, true);
        echo "\"><img class=\"login-logo\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 70), "html", null, true);
        echo "\" alt=\"Logo\"></a></p>";
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "non-authed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 72,  161 => 70,  154 => 69,  148 => 65,  142 => 26,  130 => 77,  125 => 75,  121 => 73,  119 => 72,  116 => 71,  114 => 70,  110 => 69,  105 => 66,  103 => 65,  64 => 33,  59 => 31,  55 => 30,  47 => 26,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "non-authed.twig", "/srv/xibo-cms/views/non-authed.twig");
    }
}

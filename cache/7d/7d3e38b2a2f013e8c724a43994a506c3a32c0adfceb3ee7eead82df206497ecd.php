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

/* login.twig */
class __TwigTemplate_cbe9148081b6ec1f2af68ef4f1ff6b9814e01c6d4a034601fa8ba124dcd7bbea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
    <!-- Import CSS bundle from dist -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 12), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

    <!-- Copyright 2006-2023 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        html {
            font-size: 14px;
        }

        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            font-size: 1rem;
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
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 1.15rem;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        .login-logo {
            width: 200px;
        }

    </style>
    <!-- Import user made CSS from theme -->
    <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/override.css"], "method", false, false, false, 57), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
</head>
<body>
    <div class=\"container\">
        ";
        // line 61
        if (($context["authCASEnabled"] ?? null)) {
            // line 62
            echo "        <form id=\"cas-login-form\" class=\"form-signin text-center\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("cas.login"), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
            foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
                // line 64
                echo "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $context["priorRoute"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            <p><img alt=\"Logo\" class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 66), "html", null, true);
            echo "\"></p>

            <p>";
            // line 68
            echo __("Connect with the Central Authentication Server");
            echo "</p>

            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("cas_login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 71
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["loginMessage"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
            <p><button class=\"btn btn-primary\" type=\"submit\" name=\"logincas\">";
            // line 74
            echo __("CAS Login");
            echo "</button></p>
        </form>
        ";
        } else {
            // line 77
            echo "        <form id=\"login-form\" class=\"form-signin text-center\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login"), "html", null, true);
            echo "\" method=\"post\">
            ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("priorRoute"));
            foreach ($context['_seq'] as $context["_key"] => $context["priorRoute"]) {
                // line 79
                echo "                <input name=\"priorRoute\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $context["priorRoute"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priorRoute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["csrfKey"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
            echo "\" />
            <p><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_url"], "method", false, false, false, 82), "html", null, true);
            echo "\"><img class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 82), "html", null, true);
            echo "\"></a></p>

            <p>";
            // line 84
            echo __("Please provide your credentials");
            echo "</p>

            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 86
            echo __("User");
            echo "\" autofocus autocomplete=\"username\">
            <input id=\"password\" class=\"form-control input-block-level\" name=\"password\" type=\"password\" placeholder=\"";
            // line 87
            echo __("Password");
            echo "\" autocomplete=\"current-password\">

            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 90
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["loginMessage"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
            <p><button class=\"btn btn-primary\" type=\"submit\">";
            // line 93
            echo __("Login");
            echo "</button></p>

            ";
            // line 95
            if (($context["passwordReminderEnabled"] ?? null)) {
                echo "<p><a href=\"#\" id=\"reminder-form-toggle\">";
                echo __("Forgotten your password?");
                echo "</a></p>";
            }
            // line 96
            echo "        </form>
        ";
        }
        // line 98
        echo "
        ";
        // line 99
        if (($context["passwordReminderEnabled"] ?? null)) {
            // line 100
            echo "        <form id=\"reminder-form\" class=\"form-signin text-center d-none\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("login.forgotten"), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["csrfKey"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
            echo "\" />
            <p><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_url"], "method", false, false, false, 102), "html", null, true);
            echo "\"><img class=\"login-logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 102), "html", null, true);
            echo "\"></a></p>

            <p>";
            // line 104
            echo __("Please provide your user name");
            echo "</p>
            <input id=\"username\" class=\"form-control input-block-level\" name=\"username\" type=\"text\" placeholder=\"";
            // line 105
            echo __("User");
            echo "\">

            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Xibo\Twig\TwigMessages']->getMessages("login_message"));
            foreach ($context['_seq'] as $context["_key"] => $context["loginMessage"]) {
                // line 108
                echo "                <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["loginMessage"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "
            <p><button class=\"btn btn-primary\" type=\"submit\">";
            // line 111
            echo __("Send Reset");
            echo "</button></p>

            <p><a href=\"#\" id=\"login-form-toggle\">";
            // line 113
            echo __("Login instead?");
            echo "</a></p>
        </form>
        ";
        }
        // line 116
        echo "
        <p class=\"text-center\">";
        // line 117
        /* xgettext:no-php-format */        echo strtr(__("Version %version%"), array("%version%" => ($context["version"] ?? null), ));
        // line 118
        echo "            | <a id=\"source-link\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "cms_source_url"], "method", false, false, false, 118), "html", null, true);
        echo "\">";
        echo __("Source");
        echo "</a>
            | <a id=\"about-link\" class=\"XiboFormButton\" href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About");
        echo "\">";
        echo __("About");
        echo "</a>
        </p>
    </div> <!-- /container -->
    <!-- Import JS bundle from dist -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 123), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#reminder-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").addClass(\"d-none\");
                \$(\"#reminder-form\").removeClass(\"d-none\");
            });

            \$(\"#login-form-toggle\").on(\"click\", function (e) {
                e.preventDefault();

                \$(\"#login-form\").removeClass(\"d-none\");
                \$(\"#reminder-form\").addClass(\"d-none\");
            });
        });
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 123,  324 => 119,  317 => 118,  315 => 117,  312 => 116,  306 => 113,  301 => 111,  298 => 110,  289 => 108,  285 => 107,  280 => 105,  276 => 104,  269 => 102,  263 => 101,  258 => 100,  256 => 99,  253 => 98,  249 => 96,  243 => 95,  238 => 93,  235 => 92,  226 => 90,  222 => 89,  217 => 87,  213 => 86,  208 => 84,  201 => 82,  194 => 81,  185 => 79,  181 => 78,  176 => 77,  170 => 74,  167 => 73,  158 => 71,  154 => 70,  149 => 68,  143 => 66,  134 => 64,  130 => 63,  125 => 62,  123 => 61,  114 => 57,  62 => 12,  57 => 10,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig", "/srv/xibo-cms/views/login.twig");
    }
}

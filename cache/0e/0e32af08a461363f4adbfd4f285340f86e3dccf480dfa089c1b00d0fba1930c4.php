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

/* install-step2.twig */
class __TwigTemplate_2449717105720a60c6872c6c860f973abf571eb1b5ffd93bf515c89c822e147d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step2.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step2.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stepContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 7
        $context["themeName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "app_name"], "method", false, false, false, 7);
        // line 8
        echo "            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#new\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 9
        echo __("New");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#existing\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 10
        echo __("Existing");
        echo "</span></a></li>
            </ul>
            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 3]), "html", null, true);
        echo "\" class=\"form-horizontal\" method=\"post\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"new\">
                        ";
        // line 15
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs to set-up a connection to your MySQL database."), array("%themeName%" => ($context["themeName"] ?? null), ));
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 16, $context, $this->getSourceContext());
        echo "

                        ";
        // line 18
        ob_start(function () { return ''; });
        echo __("If you have not yet created an empty database and database user for Xibo to use, and know the user name / password of a MySQL administrator stay on this tab, otherwise click \"Use Existing\".");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 19, $context, $this->getSourceContext());
        echo "

                        ";
        // line 21
        ob_start(function () { return ''; });
        echo __("Create a new database");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select to create a new database");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_radio", ["db_create", "db_create1", ($context["title"] ?? null), (($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["db_create"] ?? null) : null), ($context["helpText"] ?? null), "", "", 1], 23, $context, $this->getSourceContext());
        echo "

                        ";
        // line 25
        ob_start(function () { return ''; });
        echo __("Host");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the hostname for the MySQL server. This is usually localhost.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["host", ($context["title"] ?? null), (($__internal_compile_1 = ($context["session"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["new_db_host"] ?? null) : null), ($context["helpText"] ?? null)], 27, $context, $this->getSourceContext());
        echo "

                        ";
        // line 29
        ob_start(function () { return ''; });
        echo __("Admin Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the user name of an account that has administrator privileges on the MySQL server.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["admin_username", ($context["title"] ?? null), (($__internal_compile_2 = ($context["session"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["db_admin_user"] ?? null) : null), ($context["helpText"] ?? null)], 31, $context, $this->getSourceContext());
        echo "

                        ";
        // line 33
        ob_start(function () { return ''; });
        echo __("Admin Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter password for the Admin account.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_password", ["admin_password", ($context["title"] ?? null), (($__internal_compile_3 = ($context["session"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["db_admin_pass"] ?? null) : null), ($context["helpText"] ?? null)], 35, $context, $this->getSourceContext());
        echo "

                        ";
        // line 37
        ob_start(function () { return ''; });
        echo __("Database Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the name of the database that should be created.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["db_name", ($context["title"] ?? null), (($__internal_compile_4 = ($context["session"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["new_db_name"] ?? null) : null), ($context["helpText"] ?? null)], 39, $context, $this->getSourceContext());
        echo "

                        ";
        // line 41
        ob_start(function () { return ''; });
        echo __("Database Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the name of the database user that should be created.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["db_username", ($context["title"] ?? null), (($__internal_compile_5 = ($context["session"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["new_db_user"] ?? null) : null), ($context["helpText"] ?? null)], 43, $context, $this->getSourceContext());
        echo "

                        ";
        // line 45
        ob_start(function () { return ''; });
        echo __("Database Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter a password for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_password", ["db_password", ($context["title"] ?? null), (($__internal_compile_6 = ($context["session"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["new_db_pass"] ?? null) : null), ($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        echo "

                        ";
        // line 49
        ob_start(function () { return ''; });
        echo __("CA File");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("To connect to a MySQL server over SSL, enter the path to the CA file.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["db_ssl_ca", ($context["title"] ?? null), (($__internal_compile_7 = ($context["session"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["new_db_ssl_ca"] ?? null) : null), ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
        echo "

                        ";
        // line 53
        ob_start(function () { return ''; });
        echo __("Verify CA Identity?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Turn this off for self-signed certificates.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["db_ssl_verify", ($context["title"] ?? null), (($__internal_compile_8 = ($context["session"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["new_db_ssl_verify"] ?? null) : null), ($context["helpText"] ?? null)], 55, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"existing\">
                        ";
        // line 58
        ob_start(function () { return ''; });
        echo __("Use an existing database");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Select to use an existing database. Please note that when you use an existing database it must be empty of all other contents.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_radio", ["db_create", "db_create2", ($context["title"] ?? null), (($__internal_compile_9 = ($context["session"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["db_create"] ?? null) : null), ($context["helpText"] ?? null), "", "", 2], 60, $context, $this->getSourceContext());
        echo "

                        ";
        // line 62
        ob_start(function () { return ''; });
        echo __("Host");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the hostname for the MySQL server. This is usually localhost.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["existing_host", ($context["title"] ?? null), (($__internal_compile_10 = ($context["session"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["existing_db_host"] ?? null) : null), ($context["helpText"] ?? null)], 64, $context, $this->getSourceContext());
        echo "

                        ";
        // line 66
        ob_start(function () { return ''; });
        echo __("Database Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the name of the database that should be used.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["existing_db_name", ($context["title"] ?? null), (($__internal_compile_11 = ($context["session"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["existing_db_name"] ?? null) : null), ($context["helpText"] ?? null)], 68, $context, $this->getSourceContext());
        echo "

                        ";
        // line 70
        ob_start(function () { return ''; });
        echo __("Database Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter the name of the database user that should be used.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["existing_db_username", ($context["title"] ?? null), (($__internal_compile_12 = ($context["session"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["existing_db_user"] ?? null) : null), ($context["helpText"] ?? null)], 72, $context, $this->getSourceContext());
        echo "

                        ";
        // line 74
        ob_start(function () { return ''; });
        echo __("Database Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Please enter a password for this user.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_password", ["existing_db_password", ($context["title"] ?? null), (($__internal_compile_13 = ($context["session"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["existing_db_pass"] ?? null) : null), ($context["helpText"] ?? null)], 76, $context, $this->getSourceContext());
        echo "

                        ";
        // line 78
        ob_start(function () { return ''; });
        echo __("CA File");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("To connect to a MySQL server over SSL, enter the path to the CA file.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["existing_db_ssl_ca", ($context["title"] ?? null), (($__internal_compile_14 = ($context["session"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["existing_db_ssl_ca"] ?? null) : null), ($context["helpText"] ?? null)], 80, $context, $this->getSourceContext());
        echo "

                        ";
        // line 82
        ob_start(function () { return ''; });
        echo __("Verify CA Identity?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Turn this off for self-signed certificates.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["existing_db_ssl_verify", ($context["title"] ?? null), (($__internal_compile_15 = ($context["session"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["existing_db_ssl_verify"] ?? null) : null), ($context["helpText"] ?? null)], 84, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>

                ";
        // line 88
        ob_start(function () { return ''; });
        echo __("Next");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 89, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "install-step2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 89,  340 => 88,  332 => 84,  327 => 83,  323 => 82,  317 => 80,  312 => 79,  308 => 78,  302 => 76,  297 => 75,  293 => 74,  287 => 72,  282 => 71,  278 => 70,  272 => 68,  267 => 67,  263 => 66,  257 => 64,  252 => 63,  248 => 62,  242 => 60,  237 => 59,  233 => 58,  226 => 55,  221 => 54,  217 => 53,  211 => 51,  206 => 50,  202 => 49,  196 => 47,  191 => 46,  187 => 45,  181 => 43,  176 => 42,  172 => 41,  166 => 39,  161 => 38,  157 => 37,  151 => 35,  146 => 34,  142 => 33,  136 => 31,  131 => 30,  127 => 29,  121 => 27,  116 => 26,  112 => 25,  106 => 23,  101 => 22,  97 => 21,  91 => 19,  87 => 18,  81 => 16,  77 => 15,  71 => 12,  66 => 10,  62 => 9,  59 => 8,  57 => 7,  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step2.twig", "/srv/xibo-cms/views/install-step2.twig");
    }
}

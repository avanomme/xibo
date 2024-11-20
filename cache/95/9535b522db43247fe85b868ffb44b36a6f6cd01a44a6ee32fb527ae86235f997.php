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

/* install-step4.twig */
class __TwigTemplate_4b56a9db60d680ca9bb9de835bf6f196152ee6db1e20df8cc2c01ae935374757 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step4.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step4.twig", 1);
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
        echo "
            <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 5]), "html", null, true);
        echo "\" class=\"form-horizontal\" method=\"post\">

                ";
        // line 11
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs an administrator user account to be the first user account that has access to the CMS. Please enter your chosen details below."), array("%themeName%" => ($context["themeName"] ?? null), ));
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 12, $context, $this->getSourceContext());
        echo "

                ";
        // line 14
        ob_start(function () { return ''; });
        echo __("Admin Username");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please enter a user name for the first administrator account.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["admin_username", ($context["title"] ?? null), (($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["db_admin_user"] ?? null) : null), ($context["helpText"] ?? null)], 16, $context, $this->getSourceContext());
        echo "

                ";
        // line 18
        ob_start(function () { return ''; });
        echo __("Admin Password");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please enter a password for this user. This user will have full access to the system");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_password", ["admin_password", ($context["title"] ?? null), (($__internal_compile_1 = ($context["session"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["db_admin_pass"] ?? null) : null), ($context["helpText"] ?? null)], 20, $context, $this->getSourceContext());
        echo "

                ";
        // line 22
        ob_start(function () { return ''; });
        echo __("Next");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 23, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "install-step4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  107 => 22,  101 => 20,  96 => 19,  92 => 18,  86 => 16,  81 => 15,  77 => 14,  71 => 12,  67 => 11,  62 => 9,  59 => 8,  57 => 7,  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step4.twig", "/srv/xibo-cms/views/install-step4.twig");
    }
}

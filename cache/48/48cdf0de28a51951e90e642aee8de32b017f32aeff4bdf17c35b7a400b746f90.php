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

/* install-step6.twig */
class __TwigTemplate_71c9d4e6c391a85e0719efc168da8729fdb7981ca617063c3f4a21673665dc7e extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "install-step6.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base-install.twig", "install-step6.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("install", ["step" => 7]), "html", null, true);
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
        echo __("Library Location");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "                ";
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs somewhere to store the things you upload to be shown. Ideally, this should be somewhere outside the root of your web server - that is such that is not accessible by a web browser. Please input the full path to this folder. If the folder does not already exist, we will attempt to create it for you."), array("%themeName%" => ($context["themeName"] ?? null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["library_location", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 16, $context, $this->getSourceContext());
        echo "

                ";
        // line 18
        ob_start(function () { return ''; });
        echo __("Server Key");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "                ";
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("%themeName% needs you to choose a \"key\". This will be required each time you set-up a new client. It should be complicated, and hard to remember. It is visible in the CMS interface, so it need not be written down separately."), array("%themeName%" => ($context["themeName"] ?? null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["server_key", ($context["title"] ?? null), ($context["serverKey"] ?? null), ($context["helpText"] ?? null)], 20, $context, $this->getSourceContext());
        echo "

                ";
        // line 22
        ob_start(function () { return ''; });
        echo __("Statistics");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "                ";
        ob_start(function () { return ''; });
        /* xgettext:no-php-format */        echo strtr(__("We'd love to know you're running %theme_name%. If you're happy for us to collect anonymous statistics (version number, number of displays) then please leave the box ticked. Please un tick the box if your server does not have direct access to the internet."), array("%theme_name%" => ($context["theme_name"] ?? null), ));
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["stats", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 24, $context, $this->getSourceContext());
        echo "

                ";
        // line 26
        ob_start(function () { return ''; });
        echo __("Next");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_button", [($context["title"] ?? null), "submit"], 27, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "install-step6.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  122 => 26,  116 => 24,  111 => 23,  107 => 22,  101 => 20,  96 => 19,  92 => 18,  86 => 16,  81 => 15,  77 => 14,  71 => 12,  67 => 11,  62 => 9,  59 => 8,  57 => 7,  53 => 5,  49 => 4,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install-step6.twig", "/srv/xibo-cms/views/install-step6.twig");
    }
}

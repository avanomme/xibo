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

/* module-form-expiry.twig */
class __TwigTemplate_de2cdbf6de947fdc4aaf1862bcaa26f73309c5476b93990af271ae1a92dac6c6 extends Template
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
        // line 21
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-expiry.twig", 22)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-expiry.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getName", [], "method", false, false, false, 25);
        // line 26
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Expiry for %name%"), array("%name%" => ($context["name"] ?? null), ));
    }

    // line 29
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 31
        echo __("Save");
        echo ", \$(\"#widgetExpiryForm\").submit()
";
    }

    // line 34
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"widgetExpiryForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 38), "widgetId", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\">
                ";
        // line 39
        ob_start(function () { return ''; });
        echo __("Start Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Select the start time for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), ($context["fromDt"] ?? null), ($context["helpText"] ?? null), "starttime-control"], 41, $context, $this->getSourceContext());
        echo "

                ";
        // line 43
        ob_start(function () { return ''; });
        echo __("End Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Select the end time for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), ($context["toDt"] ?? null), ($context["helpText"] ?? null), "endtime-control"], 45, $context, $this->getSourceContext());
        echo "

                ";
        // line 47
        ob_start(function () { return ''; });
        echo __("Delete on Expiry?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When the End Time for this Widget passes should the Widget be removed from the Playlist?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["deleteOnExpiry", ($context["title"] ?? null), ($context["deleteOnExpiry"] ?? null), ($context["helpText"] ?? null)], 49, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "module-form-expiry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  125 => 48,  121 => 47,  115 => 45,  110 => 44,  106 => 43,  100 => 41,  95 => 40,  91 => 39,  87 => 38,  82 => 35,  78 => 34,  72 => 31,  67 => 30,  63 => 29,  58 => 26,  55 => 25,  51 => 24,  46 => 21,  44 => 22,  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-expiry.twig", "/srv/xibo-cms/views/module-form-expiry.twig");
    }
}

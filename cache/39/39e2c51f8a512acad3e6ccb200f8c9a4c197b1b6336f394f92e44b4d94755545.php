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

/* layout-form-publish.twig */
class __TwigTemplate_eb10076b237da594a08b756d3c9516abf25065e5ac24b7b481f84db51c820743 extends Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-publish.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-publish.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $context["layout"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 28);
        // line 29
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Publish %layout%"), array("%layout%" => ($context["layout"] ?? null), ));
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Publish");
        echo ", \$(\"#layoutPublishForm\").submit()
";
    }

    // line 37
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    [{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"\" }
    }
    },{
    \"field\": \"publishNow\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".publish-date-control\": { \"display\": \"\" }
    }
    }]
";
    }

    // line 73
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "layoutPublishFormOpen";
    }

    // line 75
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutPublishForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish", ["id" => twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 78)]), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 79
        echo twig_call_macro($macros["forms"], "macro_message", [__("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.")], 79, $context, $this->getSourceContext());
        echo "

                ";
        // line 81
        ob_start(function () { return ''; });
        echo __("Publish Now?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When selected, layout will be published immediately, if it should be published at a specific time, uncheck this checkbox and pick a date in the field below");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["publishNow", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 83, $context, $this->getSourceContext());
        echo "

                ";
        // line 85
        ob_start(function () { return ''; });
        echo __("Publish Date");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Select the date and time to publish the layout");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dateTime", ["publishDate", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "publishedDate", [], "any", false, false, false, 87), ($context["helpText"] ?? null), "publish-date-control", ""], 87, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-publish.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 87,  164 => 86,  160 => 85,  154 => 83,  149 => 82,  145 => 81,  140 => 79,  136 => 78,  132 => 76,  128 => 75,  121 => 73,  84 => 38,  80 => 37,  74 => 34,  69 => 33,  65 => 32,  60 => 29,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-publish.twig", "/srv/xibo-cms/views/layout-form-publish.twig");
    }
}

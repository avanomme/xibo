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

/* layout-form-assign-to-campaign.twig */
class __TwigTemplate_9bca21a2acf62892701e787f7c64ba3a2c7851aae8d814a439ce8812edec83ef extends Template
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
        // line 24
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "layout-form-assign-to-campaign.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "layout-form-assign-to-campaign.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layout", [], "any", false, false, false, 28);
        // line 29
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Assign %name% to a Campaign"), array("%name%" => ($context["name"] ?? null), ));
    }

    // line 32
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 34
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 35
        echo __("Assign");
        echo ", assignLayoutToCampaignFormSubmit()
";
    }

    // line 38
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"layoutAssignCampaignForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.assign.layout", ["id" => ":id"]), "html", null, true);
        echo "\" data-layout-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Campaign");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                ";
        $context["attributes"] = [0 => ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], 1 => ["name" => "data-search-term", "value" => "name"], 2 => ["name" => "data-id-property", "value" => "campaignId"], 3 => ["name" => "data-text-property", "value" => "campaign"]];
        // line 49
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please select the Campaign you would like to assign this Layout to. It will be assigned to the end of the Campaign.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), null, ($context["campaigns"] ?? null), "campaignId", "campaign", ($context["helpText"] ?? null), "pagedSelect", "", "b", "", ($context["attributes"] ?? null)], 50, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout-form-assign-to-campaign.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  105 => 49,  102 => 43,  98 => 42,  92 => 41,  88 => 39,  84 => 38,  78 => 35,  74 => 34,  67 => 33,  63 => 32,  58 => 29,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-form-assign-to-campaign.twig", "/srv/xibo-cms/views/layout-form-assign-to-campaign.twig");
    }
}

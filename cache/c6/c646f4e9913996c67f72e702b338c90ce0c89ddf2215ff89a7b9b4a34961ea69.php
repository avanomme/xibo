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

/* displayprofile-form-edit-common-fields.twig */
class __TwigTemplate_00a6aa618c5612aae5603878eb5a6de2a92e979974e79100321d6808cc8c7703 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "displayprofile-form-edit-common-fields.twig", 23)->unwrap();
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('formHtml', $context, $blocks);
    }

    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        ob_start(function () { return ''; });
        echo __("The Name of the Profile - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "name", [], "any", false, false, false, 28), ($context["helpText"] ?? null)], 28, $context, $this->getSourceContext());
        echo "

";
        // line 30
        ob_start(function () { return ''; });
        echo __("Default Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        ob_start(function () { return ''; });
        echo __("Is this the default profile for all Displays of this type? Only 1 profile can be the default.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDefault", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isDefault", [], "any", false, false, false, 32), ($context["helpText"] ?? null)], 32, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "displayprofile-form-edit-common-fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  67 => 31,  63 => 30,  58 => 28,  54 => 27,  50 => 26,  43 => 25,  40 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-common-fields.twig", "/srv/xibo-cms/views/displayprofile-form-edit-common-fields.twig");
    }
}

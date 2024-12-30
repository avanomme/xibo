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

/* not-found.twig */
class __TwigTemplate_80a91ad5d42c546ea1b64f5afea60d710ef3c99af9e576072778150040d0c3b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "non-authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("non-authed.twig", "not-found.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
    <p>";
        // line 27
        echo __("Sorry we could not find that page.");
        echo "</p>
    <p>";
        // line 28
        echo __("Please press the button below to go to your homepage or press back in your browser");
        echo "</p>
    <a class=\"btn btn-info\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["homeUrl"] ?? null), "html", null, true);
        echo "\">";
        echo __("Home");
        echo "</a>

";
    }

    public function getTemplateName()
    {
        return "not-found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 29,  57 => 28,  53 => 27,  50 => 26,  46 => 25,  35 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "not-found.twig", "/srv/xibo-cms/views/not-found.twig");
    }
}

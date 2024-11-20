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

/* error.twig */
class __TwigTemplate_8ca7b30287a5f3d07ac7260a75fccf491d6e0ec6c4674a2982694abade83e788 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("non-authed.twig", "error.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Error"), "html", null, true);
        echo " | ";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <h3>";
        echo __("Error");
        echo "</h3>
    ";
        // line 29
        if ((0 !== twig_compare(($context["message"] ?? null), ""))) {
            // line 30
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 32
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, __("Sorry there has been an unknown error."), "html", null, true);
            echo "</div>
    ";
        }
        // line 34
        echo "    <p>";
        echo __("Please press the button below to go to your homepage or press back in your browser");
        echo "</p>
    <a class=\"btn btn-info\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["homeUrl"] ?? null), "html", null, true);
        echo "\">";
        echo __("Home");
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  78 => 34,  72 => 32,  66 => 30,  64 => 29,  59 => 28,  55 => 27,  47 => 25,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.twig", "/srv/xibo-cms/views/error.twig");
    }
}

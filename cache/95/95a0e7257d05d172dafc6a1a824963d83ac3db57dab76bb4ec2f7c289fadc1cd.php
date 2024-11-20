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

/* welcome-page_players.twig */
class __TwigTemplate_4de2c6c57da9488f7cdf480e7ff87f30cc466d760ad936a03dd4225f5dff6f7d extends Template
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
        // line 23
        echo "<div class=\"col-12 welcome-title\">";
        echo __("If you have yet to choose a Player application, take a look at the Player options available!");
        echo "</div>
<div class=\"welcome-players-section text-center row\">
    <div class=\"col-4 col-md-2 offset-md-1\">
        <a href=\"https://xibo.org.uk/xibo-for-windows\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/icon_windows.svg"], "method", false, false, false, 26), "html", null, true);
        echo "\" class=\"player-icon tour-link\"/></a>
        <div class=\"player-title\">";
        // line 27
        echo __("Xibo for Windows");
        echo "</div>
    </div>
    <div class=\"col-4 col-md-2\">
        <a href=\"https://xibo.org.uk/xibo-for-linux\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/icon_ubuntu.svg"], "method", false, false, false, 30), "html", null, true);
        echo "\" class=\"player-icon tour-link\"/></a>
        <div class=\"player-title\">";
        // line 31
        echo __("Xibo for Linux");
        echo "</div>
    </div>
    <div class=\"col-4 col-md-2\">
        <a href=\"https://xibo.org.uk/xibo-for-android\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/icon_android.svg"], "method", false, false, false, 34), "html", null, true);
        echo "\" class=\"player-icon tour-link\"/></a>
        <div class=\"player-title\">";
        // line 35
        echo __("Xibo for Android");
        echo "</div>
    </div>
    <div class=\"col-6 col-md-2\">
        <a href=\"https://xibo.org.uk/xibo-for-webos\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/icon_lg.svg"], "method", false, false, false, 38), "html", null, true);
        echo "\" class=\"player-icon tour-link\"/></a>
        <div class=\"player-title\">";
        // line 39
        echo __("Xibo for webOS");
        echo "</div>
    </div>
    <div class=\"col-6 col-md-2\">
        <a href=\"https://xibo.org.uk/xibo-for-tizen\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/icon_tizen.svg"], "method", false, false, false, 42), "html", null, true);
        echo "\" class=\"player-icon tour-link\"/></a>
        <div class=\"player-title\">";
        // line 43
        echo __("Xibo for Tizen");
        echo "</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "welcome-page_players.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 43,  84 => 42,  78 => 39,  74 => 38,  68 => 35,  64 => 34,  58 => 31,  54 => 30,  48 => 27,  44 => 26,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome-page_players.twig", "/srv/xibo-cms/views/welcome-page_players.twig");
    }
}

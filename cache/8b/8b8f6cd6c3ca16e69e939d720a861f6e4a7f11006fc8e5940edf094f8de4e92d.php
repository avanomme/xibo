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

/* layout-preview.twig */
class __TwigTemplate_77a2062237472f4403c8d336842c8a82ab30e1c7c14840ef1b4c41f33e92180d extends Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 26
        echo __("Preview for Layout");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 26), "html", null, true);
        echo "</title>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"public-path\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 31), "html", null, true);
        echo "\"/>
        
        <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/favicon.ico"], "method", false, false, false, 33), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 34), "html", null, true);
        echo "dist/preview/html-preview.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/html-preview.css"], "method", false, false, false, 35), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 38
        $this->loadTemplate("layout-preview-partial.twig", "layout-preview.twig", 38)->display(twig_array_merge($context, ["layout" => ($context["layout"] ?? null), "previewOptions" => ($context["previewOptions"] ?? null)]));
        // line 39
        echo "        ";
        // line 40
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 40), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 41), "html", null, true);
        echo "dist/vendor/html5preloader/html5Preloader.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 42), "html", null, true);
        echo "dist/preview/html-preview.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">

            var previewTranslations = {};
            // Translations we want always available
            ";
        // line 48
        echo "                previewTranslations.actionControllerTitle = \"";
        echo twig_escape_filter($this->env, __("Webhook Controller"), "js", null, true);
        echo "\";
                previewTranslations.navigateToLayout = \"";
        // line 49
        echo twig_escape_filter($this->env, __("Navigate to layout with code [layoutTag]?"), "js", null, true);
        echo "\";
                previewTranslations.emptyRegionMessage = \"";
        // line 50
        echo twig_escape_filter($this->env, __("Empty Region"), "js", null, true);
        echo "\";
                previewTranslations.next = \"";
        // line 51
        echo twig_escape_filter($this->env, __("Next Item"), "js", null, true);
        echo "\";
                previewTranslations.previous = \"";
        // line 52
        echo twig_escape_filter($this->env, __("Previous Item"), "js", null, true);
        echo "\";
                previewTranslations.navWidget = \"";
        // line 53
        echo twig_escape_filter($this->env, __("Navigate to Widget"), "js", null, true);
        echo "\";
                previewTranslations.navLayout = \"";
        // line 54
        echo twig_escape_filter($this->env, __("Navigate to Layout"), "js", null, true);
        echo "\";
                previewTranslations.widgetId = \"";
        // line 55
        echo twig_escape_filter($this->env, __("Widget ID"), "js", null, true);
        echo "\";
                previewTranslations.layoutCode = \"";
        // line 56
        echo twig_escape_filter($this->env, __("Layout Code"), "js", null, true);
        echo "\";
                previewTranslations.target = \"";
        // line 57
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\";
            ";
        // line 59
        echo "
            (function(\$){
              \$(document).ready(function(){
                dsInit(";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 62), "html", null, true);
        echo ", ";
        echo json_encode(($context["previewOptions"] ?? null));
        echo ", true)
              });
            }(jQuery));
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  145 => 59,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  104 => 48,  92 => 42,  84 => 41,  75 => 40,  73 => 39,  71 => 38,  65 => 35,  61 => 34,  57 => 33,  52 => 31,  42 => 26,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-preview.twig", "/srv/xibo-cms/modules/layout-preview.twig");
    }
}

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

/* get-resource.twig */
class __TwigTemplate_2c3e08fdfafc4f20a060a7d6ee298599b00734d95cd6246145cc97a6e2026203 extends Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>Xibo Open Source Digital Signage</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=";
        // line 28
        echo twig_escape_filter($this->env, ($context["viewPortWidth"] ?? null), "html", null, true);
        echo "\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!-- Copyright 2006-2021 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
    <style type=\"text/css\">
        body {
            margin: 0;
            overflow: hidden;
            font-family: sans-serif, Arial, Verdana, \"Trebuchet MS\";
        }
        h1, h2, h3, h4, p {
            margin-top: 0;
        }
        #iframe {
            border: 0;
        }
        .cycle-slide p, p.cycle-slide {
            margin-bottom:0;
        }
    </style>
    ";
        // line 47
        echo ($context["styleSheet"] ?? null);
        echo "
    ";
        // line 48
        echo ($context["head"] ?? null);
        echo "
</head>
<!--[if lt IE 7 ]><body class=\"ie6\"><![endif]-->
<!--[if IE 7 ]><body class=\"ie7\"><![endif]-->
<!--[if IE 8 ]><body class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><body class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->
<div id=\"content\">";
        // line 55
        echo ($context["body"] ?? null);
        echo "</div>
</body>
";
        // line 57
        echo ($context["javaScript"] ?? null);
        echo "
</html>
";
        // line 59
        echo ($context["controlMeta"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "get-resource.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 59,  85 => 57,  80 => 55,  70 => 48,  66 => 47,  44 => 28,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "get-resource.twig", "/srv/xibo-cms/modules/get-resource.twig");
    }
}

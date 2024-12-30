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

/* welcome-page_support.twig */
class __TwigTemplate_b9846504bc5e13088eaecac13d7feaa59f4c6994eb31482c4c60ba60d5a5ecb8 extends Template
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
        echo "
<p class=\"col-12\">";
        // line 24
        echo __("Head over to our Community site (<a href='https://community.xibo.org.uk/'>https://community.xibo.org.uk/</a>) for additional support and advice. The Community has extensive archives with answers to many many questions!");
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "welcome-page_support.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome-page_support.twig", "/srv/xibo-cms/views/welcome-page_support.twig");
    }
}

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

/* region-form-timeline.twig */
class __TwigTemplate_30b4a8dcfa8f54889969d438e6581237df1ff5f2db8ca303cbc8e9be1dde82fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form-base.twig", "region-form-timeline.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "playlistEditorFormOpen";
    }

    // line 27
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        // line 29
        echo "    <div class=\"modal editor-modal\">  
        <div class=\"modal-dialog modal-xl editor-modal-dialog\">
            <div class=\"modal-content editor-modal-content\">
                <div class=\"modal-header editor-modal-header\">
                    <h4 class=\"modal-title editor-modal-title\">
                        ";
        // line 34
        $context["playlistName"] = twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 34);
        // line 35
        echo "                        ";
        /* xgettext:no-php-format */        echo strtr(__("Edit Playlist - %playlistName%"), array("%playlistName%" => ($context["playlistName"] ?? null), ));
        // line 36
        echo "                    </h4>
                    
                    <div class=\"\">
                        <button type=\"button\" class=\"close editor-modal-close pl-2\" onclick=\"pE.close()\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                        <button type=\"button\" class=\"close editor-modal-help mr-0 px-2\" onclick=\"XiboHelpRender('";
        // line 42
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "')\">
                            <i class=\"fa fa-question-circle\"></i>
                        </button>
                    </div>
                </div>

                <div class=\"modal-body editor-modal-body\">
                    <div id=\"playlist-editor\" playlist-id=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 49), "html", null, true);
        echo "\"></div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            // Load the editor to populate the modal
            pE.loadEditor();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "region-form-timeline.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 49,  80 => 42,  72 => 36,  69 => 35,  67 => 34,  60 => 29,  58 => 28,  54 => 27,  47 => 25,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "region-form-timeline.twig", "/srv/xibo-cms/views/region-form-timeline.twig");
    }
}

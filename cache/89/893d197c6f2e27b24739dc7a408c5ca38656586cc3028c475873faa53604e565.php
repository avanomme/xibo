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

/* playlist-form-selectfolder.twig */
class __TwigTemplate_29971850f8b79832802920f9a10726da3034bffc1a6f490d84b73895c343f97f extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-selectfolder.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-selectfolder.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 28);
        // line 29
        echo "    ";
        /* xgettext:no-php-format */        echo strtr(__("Playlist %name%"), array("%name%" => ($context["name"] ?? null), ));
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
        echo __("Save");
        echo ", \$(\"#playlistSelectFolderForm\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"playlistSelectFolderForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.selectfolder", ["id" => twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
        // line 42
        echo __("Current Folder");
        echo "</label>
                    <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                        <span id=\"originalFormFolder\"></span>
                    </div>
                </div>

                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\">";
        // line 49
        echo __("Move to Selected Folder:");
        echo "</label>
                    <div class=\"col-sm-10\">
                        <div class=\"card p-3 mb-3 bg-light\" id=\"container-folder-form-tree\"></div>
                    </div>
                </div>

                ";
        // line 55
        echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "folderId", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
        echo "
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "playlist-form-selectfolder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 55,  101 => 49,  91 => 42,  86 => 40,  82 => 38,  78 => 37,  72 => 34,  67 => 33,  63 => 32,  58 => 29,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-selectfolder.twig", "/srv/xibo-cms/views/playlist-form-selectfolder.twig");
    }
}

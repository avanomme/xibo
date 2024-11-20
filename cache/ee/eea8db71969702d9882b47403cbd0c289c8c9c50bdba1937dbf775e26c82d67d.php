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

/* library-form-delete.twig */
class __TwigTemplate_893dacdf5bb4484dd9973fcfe92de6dd2bd20fe3f5241647abbc09d5e1b8bd70 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "library-form-delete.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "library-form-delete.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Delete Media");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "\")
    ";
        // line 33
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 34
        echo __("Yes");
        echo ", \$(\"#libraryDeleteForm\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"libraryDeleteForm\" class=\"XiboForm form-horizontal\" method=\"delete\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">
                ";
        // line 41
        ob_start(function () { return ''; });
        echo __("Are you sure you want to delete this file?");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 42, $context, $this->getSourceContext());
        echo "

                ";
        // line 44
        ob_start(function () { return ''; });
        echo __("Deleting a file cannot be reversed.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 45, $context, $this->getSourceContext());
        echo "

                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "isUsed", [], "method", false, false, false, 47)) {
            // line 48
            echo "
                    ";
            // line 49
            ob_start(function () { return ''; });
            echo __("Force delete from any existing layouts, assignments, etc");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            echo "                    ";
            ob_start(function () { return ''; });
            echo __("This library item has been used somewhere in the system. You will only be allowed to delete it if you check this.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["forceDelete", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 51, $context, $this->getSourceContext());
            echo "

                    ";
            // line 53
            ob_start(function () { return ''; });
            echo __("Please note that removing a media item from the Library will also delete it from the Published version of this Layout and you won't be able to undo that action by discarding your changes. Displays will also be immediately effected.");
            $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "                    ";
            echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null), "alert alert-info"], 54, $context, $this->getSourceContext());
            echo "

                ";
        }
        // line 57
        echo "
                ";
        // line 58
        ob_start(function () { return ''; });
        echo __("Add to Purge list?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "                ";
        ob_start(function () { return ''; });
        echo __("When set, each Display that has this Media in its local storage, will be notified to remove it.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["purge", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 60, $context, $this->getSourceContext());
        echo "

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "library-form-delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 60,  151 => 59,  147 => 58,  144 => 57,  137 => 54,  133 => 53,  127 => 51,  122 => 50,  118 => 49,  115 => 48,  113 => 47,  107 => 45,  103 => 44,  97 => 42,  93 => 41,  89 => 40,  85 => 38,  81 => 37,  75 => 34,  71 => 33,  64 => 32,  60 => 31,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "library-form-delete.twig", "/srv/xibo-cms/views/library-form-delete.twig");
    }
}

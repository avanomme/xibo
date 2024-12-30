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

/* display-form-addViaCode.twig */
class __TwigTemplate_41f31333404efab400919323ef916f255e4b7df158ce717159f52eea84fe277c extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-addViaCode.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-addViaCode.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Add Display via Code");
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
        echo __("Save");
        echo ", \$(\"#displayAddViaCodeForm\").submit()
";
    }

    // line 37
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <form id=\"displayAddViaCodeForm\" class=\"XiboForm form-horizontal\" method=\"post\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.addViaCode"), "html", null, true);
        echo "\">
                <div class=\"alert alert-info\">
                    ";
        // line 42
        $context["message"] = __("After submitting this form with valid code, your CMS Address and Key will be sent and stored in the temporary storage in our Authentication Service.");
        // line 43
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 43, $context, $this->getSourceContext());
        echo "
                    ";
        // line 44
        $context["message2"] = __("The Player linked to the submitted code, will make regular calls to our Authentication Service to retrive the CMS details and configure itself with them.
                     Your details are removed from the temporary storage once the Player is configured");
        // line 46
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message2"] ?? null)], 46, $context, $this->getSourceContext());
        echo "
                    ";
        // line 47
        $context["message3"] = __("Please note that your CMS needs to make a successful call to our Authentication Service for this feature to work.");
        // line 48
        echo "                    ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message3"] ?? null)], 48, $context, $this->getSourceContext());
        echo "
                </div>

                ";
        // line 51
        ob_start(function () { return ''; });
        echo __("Code");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "                ";
        ob_start(function () { return ''; });
        echo __("Please provide the code displayed on the Player screen");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                ";
        echo twig_call_macro($macros["forms"], "macro_input", ["user_code", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
        echo "

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "display-form-addViaCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 53,  122 => 52,  118 => 51,  111 => 48,  109 => 47,  104 => 46,  101 => 44,  96 => 43,  94 => 42,  89 => 40,  85 => 38,  81 => 37,  75 => 34,  71 => 33,  64 => 32,  60 => 31,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-addViaCode.twig", "/srv/xibo-cms/views/display-form-addViaCode.twig");
    }
}

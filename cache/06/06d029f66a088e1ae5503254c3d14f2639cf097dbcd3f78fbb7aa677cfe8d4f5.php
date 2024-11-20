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

/* module-form-install-list.twig */
class __TwigTemplate_98e9a76de7bf2ba55d10b6bdd6b5640487fbee22349e579fc04ee646a230ab7b extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "module-form-install-list.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "module-form-install-list.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Install Module");
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
    }

    // line 36
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modulesToInstall"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 40
            echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a class=\"XiboFormButton\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.install.form", ["name" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "author", [], "any", false, false, false, 42), "html", null, true);
            echo "</a><br />
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "module-form-install-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  93 => 42,  89 => 40,  85 => 39,  81 => 37,  77 => 36,  71 => 33,  64 => 32,  60 => 31,  55 => 28,  51 => 27,  46 => 24,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "module-form-install-list.twig", "/srv/xibo-cms/views/module-form-install-list.twig");
    }
}

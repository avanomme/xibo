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

/* forms.twig */
class __TwigTemplate_80a5752e9ff9839cfad585c9e0085b7355dca603c45c72341c9bc19d98a2d459 extends Template
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
        // line 1
        echo "
";
        // line 11
        echo "
";
        // line 15
        echo "
";
        // line 23
        echo "
";
        // line 31
        echo "
";
        // line 37
        echo "
";
        // line 49
        echo "
";
        // line 59
        echo "
";
        // line 74
        echo "
";
        // line 92
        echo "
";
        // line 120
        echo "
";
        // line 130
        echo "
";
        // line 140
        echo "
";
        // line 150
        echo "
";
        // line 169
        echo "
";
        // line 181
        echo "
";
        // line 193
        echo "
";
        // line 268
        echo "
";
        // line 282
        echo "
";
        // line 296
        echo "
";
        // line 310
        echo "
";
        // line 324
        echo "
";
        // line 343
        echo "
";
        // line 355
        echo "
";
    }

    // line 2
    public function macro_disabled($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\">";
            // line 4
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</p>
            <small class=\"form-text text-muted\">";
            // line 7
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_hidden($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 13
            echo "    <input name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_raw($__text__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 17
            echo "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 18
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 19
            echo ($context["text"] ?? null);
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_message($__message__ = null, $__groupClass__ = null, $__messageStyleClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "groupClass" => $__groupClass__,
            "messageStyleClass" => $__messageStyleClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    <div class=\"row\">
        <div class=\"";
            // line 26
            if (($context["messageStyleClass"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["messageStyleClass"] ?? null), "html", null, true);
            }
            echo " col-sm-12 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
            <p>";
            // line 27
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_alert($__message__ = null, $__alertType__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "alertType" => $__alertType__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "    <div class=\"row\">
        <div class=\"alert alert-";
            // line 34
            if (($context["alertType"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["alertType"] ?? null), "html", null, true);
            } else {
                echo "primary";
            }
            echo " col-sm-12 ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\" role=\"alert\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 38
    public function macro_button($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, $__id__ = null, $__buttonClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "id" => $__id__,
            "buttonClass" => $__buttonClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 39
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            ";
            // line 41
            if ((0 === twig_compare(($context["type"] ?? null), "link"))) {
                // line 42
                echo "            <a class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    echo "btn-white";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 44
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    echo twig_escape_filter($this->env, ($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    echo "btn-white";
                }
                echo " ml-0\" type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</button>
            ";
            }
            // line 46
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 50
    public function macro_input($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 51
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 60
    public function macro_colorPicker($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 61
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10 colorpicker-input\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <i class=\"input-group-text input-group-addon\" id=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_label\"></i>
                </div>
                <input class=\"form-control\" name=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" aria-describedby=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_label\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            </div>
            <small class=\"form-text text-muted\">";
            // line 70
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 75
    public function macro_inputWithButton($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__buttonId__ = null, $__buttonTitle__ = null, $__buttonType__ = null, $__buttonLink__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "buttonId" => $__buttonId__,
            "buttonTitle" => $__buttonTitle__,
            "buttonType" => $__buttonType__,
            "buttonLink" => $__buttonLink__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 76
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " aria-describedby=\"";
            echo twig_escape_filter($this->env, ($context["buttonId"] ?? null), "html", null, true);
            echo "\" />

            <div class=\"input-group-append\">
                ";
            // line 82
            if ((0 === twig_compare(($context["buttonType"] ?? null), "link"))) {
                // line 83
                echo "                    <a class=\"btn btn-white\" href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["buttonTitle"] ?? null), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 85
                echo "                    <button id=\"";
                echo twig_escape_filter($this->env, ($context["buttonId"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-white\" type=\"";
                echo twig_escape_filter($this->env, ($context["buttonType"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["buttonTitle"] ?? null), "html", null, true);
                echo "</button>
                ";
            }
            // line 87
            echo "            </div>
        </div>
        <small class=\"form-text offset-2 px-4 text-muted\">";
            // line 89
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 93
    public function macro_inputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, $__logicalOperatorTitle__ = null, $__exactTagValue__ = null, $__logicalOperatorValue__ = null, $__autoCompleteEnabled__ = 1, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "exactTag" => $__exactTag__,
            "exactTagTitle" => $__exactTagTitle__,
            "logicalOperatorTitle" => $__logicalOperatorTitle__,
            "exactTagValue" => $__exactTagValue__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "autoCompleteEnabled" => $__autoCompleteEnabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 94
            echo "        ";
            if (($context["exactTag"] ?? null)) {
                // line 95
                echo "            <div class=\"form-group tags-input-addons-wide row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 96
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" accesskey=\"";
                echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"input-group input-group-tags-exact col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 98
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputForm\" ";
                if ((0 === twig_compare(($context["autoCompleteEnabled"] ?? null), 1))) {
                    echo " data-auto-complete-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    echo "?allTags=1\" ";
                }
                echo " ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
                // line 101
                echo twig_escape_filter($this->env, ($context["exactTagTitle"] ?? null), "html", null, true);
                echo "\" type=\"checkbox\" id=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["exactTag"] ?? null), "html", null, true);
                echo "\" ";
                if (($context["exactTagValue"] ?? null)) {
                    echo "checked";
                }
                echo ">
                    </div>
                    <select class=\"custom-select\" id=\"logicalOperator\" name=\"logicalOperator\" title=\"";
                // line 103
                echo twig_escape_filter($this->env, ($context["logicalOperatorTitle"] ?? null), "html", null, true);
                echo "\" >
                        <option value=\"OR\" ";
                // line 104
                if ((0 !== twig_compare(($context["logicalOperatorValue"] ?? null), "AND"))) {
                    echo "selected";
                }
                echo ">OR</option>
                        <option value=\"AND\" ";
                // line 105
                if ((0 === twig_compare(($context["logicalOperatorValue"] ?? null), "AND"))) {
                    echo "selected";
                }
                echo ">AND</option>
                    </select>
                </div>
                <small class=\"form-text text-muted\">";
                // line 108
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
            </div>
        ";
            } else {
                // line 111
                echo "            <div class=\"form-group tags-input-wide row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 112
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" accesskey=\"";
                echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 114
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" type=\"text\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" data-role=\"tagsInputForm\" ";
                if ((0 === twig_compare(($context["autoCompleteEnabled"] ?? null), 1))) {
                    echo " data-auto-complete-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    echo "?allTags=1\" ";
                }
                echo "  ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo " />
                <small class=\"form-text text-muted\">";
                // line 115
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
            </div>
        ";
            }
            // line 118
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 121
    public function macro_number($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__maxNumber__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "maxNumber" => $__maxNumber__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 122
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 125
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["maxNumber"] ?? null)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, ($context["maxNumber"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo "type=\"number\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 126
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 131
    public function macro_email($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 132
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 133
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 135
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 136
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 141
    public function macro_password($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 142
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 143
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <small class=\"form-text text-muted\">";
            // line 146
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 151
    public function macro_textarea($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__rows__ = null, $__inline__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "rows" => $__rows__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 152
            echo "    ";
            if ((0 === twig_compare(($context["inline"] ?? null), true))) {
                // line 153
                echo "        <div class=\"form-group row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 154
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"col-sm-10\">
                <textarea class=\"form-control\" name=\"";
                // line 156
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" rows=\"";
                echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "</textarea>
                <small class=\"form-text text-muted\">";
                // line 157
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
            </div>
        </div>
    ";
            } else {
                // line 161
                echo "        <div class=\"form-group row ";
                echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
                echo "\">
            <div class=\"col-sm-12\">
                <small class=\"form-text text-muted\">";
                // line 163
                echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
                echo "</small>
                <textarea class=\"form-control\" name=\"";
                // line 164
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" rows=\"";
                echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "</textarea>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 170
    public function macro_checkbox($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, $__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 171
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" ";
            // line 174
            if (($context["id"] ?? null)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo " id=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(($context["value"] ?? null), 1))) {
                echo "checked";
            }
            echo " ";
            if ((0 === twig_compare(($context["disabled"] ?? null), 1))) {
                echo "disabled";
            }
            echo ">
                <label class=\"form-check-label\" ";
            // line 175
            if (($context["id"] ?? null)) {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo " accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 177
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 182
    public function macro_radio($__name__ = null, $__id__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__setValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "id" => $__id__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "setValue" => $__setValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 183
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" id=\"";
            // line 186
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["setValue"] ?? null), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(($context["value"] ?? null), ($context["setValue"] ?? null)))) {
                echo "checked";
            }
            echo ">
                <label class=\"form-check-label\" for=\"";
            // line 187
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 189
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 194
    public function macro_dropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, $__optionImageValue__ = null, $__optionFilter__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "type" => $__type__,
            "title" => $__title__,
            "value" => $__value__,
            "options" => $__options__,
            "optionId" => $__optionId__,
            "optionValue" => $__optionValue__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "callBack" => $__callBack__,
            "dataAttributes" => $__dataAttributes__,
            "optionGroups" => $__optionGroups__,
            "optionImageValue" => $__optionImageValue__,
            "optionFilter" => $__optionFilter__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 195
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 196
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" ";
            // line 198
            if ((0 === twig_compare(($context["type"] ?? null), "dropdownmulti"))) {
                echo "multiple";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["callBack"] ?? null), "html", null, true);
            echo "
                ";
            // line 199
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["dataAttributes"] ?? null)), 0))) {
                // line 200
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 201
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 201), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 201), "html", null, true);
                    echo "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                echo "                ";
            }
            // line 204
            echo "            ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo ">

            ";
            // line 206
            $context["hasGroups"] = (1 === twig_compare(twig_length_filter($this->env, ($context["optionGroups"] ?? null)), 0));
            // line 207
            echo "            ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 208
                echo "                ";
                $context["optionGroups"] = ["label" => "General"];
                // line 209
                echo "            ";
            }
            // line 210
            echo "
            ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["optionGroups"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 212
                echo "                ";
                if (($context["hasGroups"] ?? null)) {
                    // line 213
                    echo "                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 213), "html", null, true);
                    echo "\">
                    ";
                    // line 214
                    $context["tempOptions"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 214), [], "any", false, false, false, 214);
                    // line 215
                    echo "                ";
                } else {
                    // line 216
                    echo "                    ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 217
                    echo "                ";
                }
                // line 218
                echo "
                ";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tempOptions"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 220
                    echo "
                    ";
                    // line 221
                    if ((0 === twig_compare(($context["optionId"] ?? null), ""))) {
                        // line 222
                        echo "                        ";
                        $context["itemOptionId"] = $context["option"];
                        // line 223
                        echo "                        ";
                        $context["itemOptionValue"] = $context["option"];
                        // line 224
                        echo "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 225
                            echo "                            ";
                            $context["itemOptionImageValue"] = $context["option"];
                            // line 226
                            echo "                        ";
                        }
                        // line 227
                        echo "                    ";
                    } else {
                        // line 228
                        echo "                        ";
                        $context["itemOptionId"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionId"] ?? null), [], "any", false, false, false, 228);
                        // line 229
                        echo "                        ";
                        $context["itemOptionValue"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionValue"] ?? null), [], "any", false, false, false, 229);
                        // line 230
                        echo "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 231
                            echo "                            ";
                            $context["itemOptionImageValue"] = twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionImageValue"] ?? null), [], "any", false, false, false, 231);
                            // line 232
                            echo "                        ";
                        }
                        // line 233
                        echo "                    ";
                    }
                    // line 234
                    echo "
                    ";
                    // line 235
                    if ((0 === twig_compare(($context["type"] ?? null), "dropdownmulti"))) {
                        // line 236
                        echo "                        ";
                        $context["selected"] = twig_in_filter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 237
                        echo "                    ";
                    } else {
                        // line 238
                        echo "                        ";
                        $context["selected"] = (0 === twig_compare(($context["itemOptionId"] ?? null), ($context["value"] ?? null)));
                        // line 239
                        echo "                    ";
                    }
                    // line 240
                    echo "
                    <option value=\"";
                    // line 241
                    echo twig_escape_filter($this->env, ($context["itemOptionId"] ?? null), "html", null, true);
                    echo "\" ";
                    if (($context["selected"] ?? null)) {
                        echo "selected";
                    }
                    // line 242
                    echo "                            ";
                    if (($context["itemOptionImageValue"] ?? null)) {
                        // line 243
                        echo "                                data-content=\"<span class='media'><span class='media-left mr-2'><img style='max-width: 100px; max-height: 80px;' src='";
                        echo twig_escape_filter($this->env, ($context["itemOptionImageValue"] ?? null), "html", null, true);
                        echo "' /></span> <span class='media-body'>";
                        echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                        echo "</span></span>\"
                            ";
                    }
                    // line 245
                    echo "
                            ";
                    // line 246
                    if (($context["optionFilter"] ?? null)) {
                        // line 247
                        echo "                                ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["optionFilter"] ?? null), 0, [], "array", true, true, false, 247)) {
                            // line 248
                            echo "                                    data-filter-class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], ($context["optionFilter"] ?? null), [], "any", false, false, false, 248), "html", null, true);
                            echo "\"
                                ";
                        } else {
                            // line 250
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["optionFilter"] ?? null));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                                // line 251
                                echo "                                        data-filter";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 251), "html", null, true);
                                echo "-class=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], $context["filter"], [], "any", false, false, false, 251), "html", null, true);
                                echo "\"
                                    ";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 253
                            echo "                                ";
                        }
                        // line 254
                        echo "                            ";
                    }
                    // line 255
                    echo "                    >";
                    echo twig_escape_filter($this->env, ($context["itemOptionValue"] ?? null), "html", null, true);
                    echo "</option>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 257
                echo "
                ";
                // line 258
                if (($context["hasGroups"] ?? null)) {
                    // line 259
                    echo "                    </optgroup>
                ";
                }
                // line 261
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "
            </select>
            <small class=\"form-text text-muted\">";
            // line 264
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 269
    public function macro_date($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 270
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 271
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control datePicker dateControl\" type=\"text\" ";
            // line 275
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 278
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 283
    public function macro_dateTime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 284
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 285
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateTimePicker dateControl\" type=\"text\" ";
            // line 289
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 292
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 297
    public function macro_dateMonth($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 298
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" title=\"";
            // line 299
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateMonthPicker dateControl\" type=\"text\" ";
            // line 303
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 306
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 311
    public function macro_time($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__customFormat__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "customFormat" => $__customFormat__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 312
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 313
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control timePicker dateControl\" type=\"text\" ";
            // line 317
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["customFormat"] ?? null)) {
                echo "data-custom-format=\"";
                echo twig_escape_filter($this->env, ($context["customFormat"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 320
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 325
    public function macro_switch($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "labelWidth" => $__labelWidth__,
            "switchSize" => $__switchSize__,
            "onText" => $__onText__,
            "offText" => $__offText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 326
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"checkbox\" title=\"";
            // line 328
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 329
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 330
            if ((0 === twig_compare(($context["value"] ?? null), 1))) {
                echo "checked";
            }
            // line 331
            echo "                    ";
            if ((0 === twig_compare(($context["disabled"] ?? null), 1))) {
                echo "disabled";
            }
            // line 332
            echo "                    data-label-text=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"
                    ";
            // line 333
            if (!twig_in_filter(($context["onText"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-on-text=\"";
                echo twig_escape_filter($this->env, ($context["onText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 334
            echo "                    ";
            if (!twig_in_filter(($context["offText"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-off-text=\"";
                echo twig_escape_filter($this->env, ($context["offText"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 335
            echo "                    ";
            if (!twig_in_filter(($context["switchSize"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo "data-size=\"";
                echo twig_escape_filter($this->env, ($context["switchSize"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "data-size=\"small\"";
            }
            // line 336
            echo "                    ";
            if (!twig_in_filter(($context["labelWidth"] ?? null), [0 => null, 1 => ($context["undefined"] ?? null), 2 => ""])) {
                echo " data-label-width=\"";
                echo twig_escape_filter($this->env, ($context["labelWidth"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 337
            echo "                    >
            </div>
            <small class=\"form-text text-muted\">";
            // line 339
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 344
    public function macro_playerCompat($__android__ = null, $__linux__ = null, $__tizen__ = null, $__webos__ = null, $__windows__ = null, $__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "android" => $__android__,
            "linux" => $__linux__,
            "tizen" => $__tizen__,
            "webos" => $__webos__,
            "windows" => $__windows__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 345
            echo "    <span class=\"fa fa-info-circle\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\"
          data-content='";
            // line 346
            if (($context["message"] ?? null)) {
                echo "<p>";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</p>";
            }
            echo "<ul class=\"player-compatibility\">
                ";
            // line 347
            if (($context["android"] ?? null)) {
                echo "<li><span class=\"fa fa-android\"></span> ";
                echo twig_escape_filter($this->env, ($context["android"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 348
            echo "                ";
            if (($context["linux"] ?? null)) {
                echo "<li><span class=\"fa fa-linux\"></span> ";
                echo twig_escape_filter($this->env, ($context["linux"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 349
            echo "                ";
            if (($context["tizen"] ?? null)) {
                echo "<li>Tizen: ";
                echo twig_escape_filter($this->env, ($context["tizen"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 350
            echo "                ";
            if (($context["webos"] ?? null)) {
                echo "<li>webOS: ";
                echo twig_escape_filter($this->env, ($context["webos"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 351
            echo "                ";
            if (($context["windows"] ?? null)) {
                echo "<li><span class=\"fa fa-windows\"></span> ";
                echo twig_escape_filter($this->env, ($context["windows"] ?? null), "html", null, true);
                echo "</li>";
            }
            // line 352
            echo "            </ul>'>
    </span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 356
    public function macro_inputWithLogicalOperator($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__logicalOperatorValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 357
            echo "    <div class=\"form-group row ";
            echo twig_escape_filter($this->env, ($context["groupClass"] ?? null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 358
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, ($context["accessKey"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 360
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["validation"] ?? null), "html", null, true);
            echo " />
            <div class=\"input-group-append input-group-addon\">
                <select class=\"custom-select\" id=\"logicalOperatorName\" name=\"logicalOperatorName\" title=\"";
            // line 362
            echo __("When filtering by multiple names, which logical operator should be used?");
            echo "\">
                        <option value=\"OR\" ";
            // line 363
            if ((0 !== twig_compare(($context["logicalOperatorValue"] ?? null), "AND"))) {
                echo "selected";
            }
            echo ">OR</option>
                        <option value=\"AND\" ";
            // line 364
            if ((0 === twig_compare(($context["logicalOperatorValue"] ?? null), "AND"))) {
                echo "selected";
            }
            echo ">AND</option>
                </select>
            </div>
            <small class=\"form-text text-muted\">";
            // line 367
            echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "forms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1946 => 367,  1938 => 364,  1932 => 363,  1928 => 362,  1917 => 360,  1908 => 358,  1903 => 357,  1883 => 356,  1872 => 352,  1865 => 351,  1858 => 350,  1851 => 349,  1844 => 348,  1838 => 347,  1830 => 346,  1827 => 345,  1809 => 344,  1796 => 339,  1792 => 337,  1785 => 336,  1776 => 335,  1769 => 334,  1763 => 333,  1758 => 332,  1753 => 331,  1749 => 330,  1741 => 329,  1737 => 328,  1731 => 326,  1708 => 325,  1695 => 320,  1677 => 317,  1666 => 313,  1661 => 312,  1641 => 311,  1628 => 306,  1616 => 303,  1603 => 299,  1598 => 298,  1579 => 297,  1566 => 292,  1554 => 289,  1543 => 285,  1538 => 284,  1519 => 283,  1506 => 278,  1494 => 275,  1483 => 271,  1478 => 270,  1459 => 269,  1446 => 264,  1442 => 262,  1428 => 261,  1424 => 259,  1422 => 258,  1419 => 257,  1402 => 255,  1399 => 254,  1396 => 253,  1377 => 251,  1359 => 250,  1353 => 248,  1350 => 247,  1348 => 246,  1345 => 245,  1337 => 243,  1334 => 242,  1328 => 241,  1325 => 240,  1322 => 239,  1319 => 238,  1316 => 237,  1313 => 236,  1311 => 235,  1308 => 234,  1305 => 233,  1302 => 232,  1299 => 231,  1296 => 230,  1293 => 229,  1290 => 228,  1287 => 227,  1284 => 226,  1281 => 225,  1278 => 224,  1275 => 223,  1272 => 222,  1270 => 221,  1267 => 220,  1250 => 219,  1247 => 218,  1244 => 217,  1241 => 216,  1238 => 215,  1236 => 214,  1231 => 213,  1228 => 212,  1211 => 211,  1208 => 210,  1205 => 209,  1202 => 208,  1199 => 207,  1197 => 206,  1191 => 204,  1188 => 203,  1177 => 201,  1172 => 200,  1170 => 199,  1158 => 198,  1149 => 196,  1144 => 195,  1116 => 194,  1103 => 189,  1094 => 187,  1082 => 186,  1075 => 183,  1055 => 182,  1042 => 177,  1025 => 175,  1003 => 174,  996 => 171,  976 => 170,  954 => 164,  950 => 163,  944 => 161,  937 => 157,  925 => 156,  918 => 154,  913 => 153,  910 => 152,  890 => 151,  877 => 146,  867 => 145,  858 => 143,  853 => 142,  834 => 141,  821 => 136,  811 => 135,  802 => 133,  797 => 132,  778 => 131,  765 => 126,  749 => 125,  740 => 123,  735 => 122,  715 => 121,  705 => 118,  699 => 115,  683 => 114,  674 => 112,  669 => 111,  663 => 108,  655 => 105,  649 => 104,  645 => 103,  632 => 101,  614 => 98,  605 => 96,  600 => 95,  597 => 94,  572 => 93,  560 => 89,  556 => 87,  546 => 85,  538 => 83,  536 => 82,  522 => 79,  513 => 77,  508 => 76,  485 => 75,  472 => 70,  459 => 68,  454 => 66,  443 => 62,  438 => 61,  419 => 60,  406 => 55,  396 => 54,  387 => 52,  382 => 51,  363 => 50,  352 => 46,  336 => 44,  322 => 42,  320 => 41,  314 => 39,  296 => 38,  276 => 34,  273 => 33,  258 => 32,  245 => 27,  237 => 26,  234 => 25,  219 => 24,  206 => 19,  202 => 18,  199 => 17,  185 => 16,  169 => 13,  155 => 12,  142 => 7,  138 => 6,  133 => 4,  128 => 3,  111 => 2,  106 => 355,  103 => 343,  100 => 324,  97 => 310,  94 => 296,  91 => 282,  88 => 268,  85 => 193,  82 => 181,  79 => 169,  76 => 150,  73 => 140,  70 => 130,  67 => 120,  64 => 92,  61 => 74,  58 => 59,  55 => 49,  52 => 37,  49 => 31,  46 => 23,  43 => 15,  40 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms.twig", "/srv/xibo-cms/views/forms.twig");
    }
}

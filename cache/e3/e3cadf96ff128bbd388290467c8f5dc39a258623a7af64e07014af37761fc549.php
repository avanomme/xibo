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

/* authed.twig */
class __TwigTemplate_2b517dc9fbcac2f0960d0eab9286f87e8ed6aec774aafdeb19486413ef0d3ab9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'pageFooter' => [$this, 'block_pageFooter'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "authed.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $context["horizontalNav"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", [0 => "navigationMenuPosition", 1 => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method", false, false, false, 26)], "method", false, false, false, 26), "horizontal"));
        // line 27
        echo "
    ";
        // line 28
        if ( !($context["hideNavigation"] ?? null)) {
            // line 29
            echo "        ";
            $context["hideNavigation"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", [0 => "hideNavigation", 1 => "0"], "method", false, false, false, 29);
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    <div ";
        // line 32
        if ((((0 === twig_compare(($context["hideNavigation"] ?? null), "0")) &&  !($context["horizontalNav"] ?? null)) &&  !($context["forceHide"] ?? null))) {
            echo "id=\"page-wrapper\"";
        }
        echo " class=\"active\">

        ";
        // line 34
        if (((0 === twig_compare(($context["hideNavigation"] ?? null), "0")) &&  !($context["forceHide"] ?? null))) {
            // line 35
            echo "            ";
            if (($context["horizontalNav"] ?? null)) {
                // line 36
                echo "                <nav class=\"navbar navbar-default navbar-expand-lg\">
                    <a class=\"navbar-brand xibo-logo-container\" href=\"#\">
                        <img class=\"xibo-logo\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 38), "html", null, true);
                echo "\">
                    </a>

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
                        <span class=\"fa fa-bars\"></span>
                    </button>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"navbar-collapse collapse justify-content-between\" id=\"navbar-collapse-1\">
                        ";
                // line 48
                $this->loadTemplate("authed-topbar.twig", "authed.twig", 48)->display($context);
                // line 49
                echo "
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
                // line 51
                $__internal_compile_0 = null;
                try {
                    $__internal_compile_0 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 51);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_0) {
                    $__internal_compile_0->display($context);
                }
                // line 52
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "drawer"], "method", false, false, false, 52)) {
                    // line 53
                    echo "                                ";
                    $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 53)->display($context);
                    // line 54
                    echo "                            ";
                }
                // line 55
                echo "                            ";
                $this->loadTemplate("authed-user-menu.twig", "authed.twig", 55)->display($context);
                // line 56
                echo "                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            ";
            } else {
                // line 60
                echo "                <div class=\"navbar-collapse navbar-collapse-side collapse\" id=\"navbar-collapse-1\">
                    ";
                // line 61
                $this->loadTemplate("authed-sidebar.twig", "authed.twig", 61)->display($context);
                // line 62
                echo "                </div>
            ";
            }
            // line 64
            echo "        ";
        }
        // line 65
        echo "

        <div id=\"content-wrapper\">
            <div class=\"page-content\">
                ";
        // line 69
        if ((( !($context["horizontalNav"] ?? null) || (0 === twig_compare(($context["hideNavigation"] ?? null), "1"))) || ($context["forceHide"] ?? null))) {
            // line 70
            echo "                <div class=\"row header header-side\">
                    <div class=\"col-sm-12\">
                        <div class=\"meta pull-left xibo-logo-container\">
                            <div class=\"page\"><img class=\"xibo-logo\" src=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/xibologo.png"], "method", false, false, false, 73), "html", null, true);
            echo "\"></div>
                        </div>
                        ";
            // line 75
            if ( !($context["forceHide"] ?? null)) {
                // line 76
                echo "                            ";
                if ((0 === twig_compare( !($context["hideNavigation"] ?? null), "1"))) {
                    // line 77
                    echo "                                <button type=\"button\" class=\"pull-right navbar-toggler navbar-toggler-side\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
                                    <span class=\"fa fa-bars\"></span>
                                </button>
                            ";
                }
                // line 81
                echo "                            <div class=\"user pull-right\">
                                ";
                // line 82
                $this->loadTemplate("authed-user-menu.twig", "authed.twig", 82)->display($context);
                // line 83
                echo "                            </div>
                            ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "drawer"], "method", false, false, false, 84)) {
                    // line 85
                    echo "                            <div class=\"user user-notif pull-right\">
                                ";
                    // line 86
                    $this->loadTemplate("authed-notification-drawer.twig", "authed.twig", 86)->display($context);
                    // line 87
                    echo "                            </div>
                            ";
                }
                // line 89
                echo "                            ";
                $__internal_compile_1 = null;
                try {
                    $__internal_compile_1 =                     $this->loadTemplate("authed-theme-topbar.twig", "authed.twig", 89);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_1) {
                    $__internal_compile_1->display($context);
                }
                // line 90
                echo "                        ";
            }
            // line 91
            echo "                    </div>
                </div>
                ";
        }
        // line 94
        echo "                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 96
        $this->displayBlock('actionMenu', $context, $blocks);
        // line 97
        echo "                        ";
        $this->displayBlock('pageContent', $context, $blocks);
        // line 98
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 102
        $this->displayBlock('pageFooter', $context, $blocks);
        // line 103
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 96
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 97
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 102
    public function block_pageFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 110
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "
    <script type=\"text/javascript\">
        var userPreferencesUrl = \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        echo "\";

        // TODO: Change this to a call to all route permissions ( something like currentUser.getRoutePermissions() )
        var userRoutePermissions = {
            tags: \"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 117), "html", null, true);
        echo "\"
        };

        // Equals helper for the templates below
        Handlebars.registerHelper('eq', function(v1, v2, opts) {
            if (v1 === v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });

        Handlebars.registerHelper('neq', function(v1, v2, opts) {
            if (v1 !== v2) {
                return opts.fn(this);
            } else {
                return opts.inverse(this);
            }
        });
    </script>

    ";
        // line 140
        echo "
    <script type=\"text/x-handlebars-template\" id=\"buttons-template\">
        <div class=\"btn-group pull-right dropdown-menu-container\" title=\"";
        echo __("Row Menu");
        // line 195
        echo "\">
            <button class=\"btn btn-white dropdown-toggle\" data-toggle=\"dropdown\"></button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                {{#each buttons}}
                    {{#if divider}}
                        <div class=\"dropdown-divider\"></div>
                    {{else multiSelectOnly}}
                        <a {{#each dataAttributes}}
                            data-{{ name }}=\"{{ value }}\"
                            {{/each}}
                            class=\"dropdown-item multi-select-button {{#if class}}{{ class }}{{else}}XiboMultiHiddenButton{{/if}} {{ id }}\" style=\"display: none;\" tabindex=\"-1\" href=\"#\">
                            {{ text }}
                        </a>
                    {{else}}
                        {{#if external}}
                            <a class=\"dropdown-item {{ id }}\" tabindex=\"-1\" target=\"{{ linkType }}\" onclick=\"{{ onclick }}\" href=\"{{ url }}\"{{#if title}} title=\"{{title}}\"{{/if}}>{{ text }}</a>
                        {{/if}}

                        {{#unless external}}
                            <a {{#each dataAttributes}}
                                data-{{ name }}=\"{{ value }}\"
                                {{/each}}
                                class=\"dropdown-item {{#if multi-select}}multi-select-button{{/if}} {{#if class}}{{ class }}{{else}}XiboFormButton{{/if}} {{ id }}\" href=\"{{ url }}\"{{#if title}} title=\"{{title}}\"{{/if}} tabindex=\"-1\" href=\"#\">
                                {{ text }}
                            </a>
                        {{/unless}}
                    {{/if}}
                {{/each}}
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"multiselect-button-template\">
        <div class=\"btn-group dropup mr-2\">
            <button class=\"btn btn-primary select-all\" data-toggle=\"selectAll\">
                {{ selectAll }}
            </button>
            <button class=\"btn btn-white dropdown-toggle\" data-toggle=\"dropdown\">
                {{ withSelected }}
            </button>
            <div class=\"dropdown-menu\">
                {{#each buttons}}
                    {{#if divider}}
                        <div class=\"dropdown-divider\"></div>
                    {{else}}
                        <a class=\"dropdown-item XiboMultiSelectFormButton\" data-custom-handler=\"{{ customHandler }}\" data-custom-handler-url=\"{{ customHandlerUrl }}\" data-button-id=\"{{ id }}\" data-grid-id=\"{{ gridId }}\" data-content-type=\"{{ contentType }}\" data-content-id-name=\"{{ contentIdName }}\" tabindex=\"-1\" href=\"#\">{{ text }}</a>
                    {{/if}}
                {{/each}}
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-main-template\">

        <div class=\"form-check pull-right\">
            <input type=\"checkbox\" class=\"show-command-preview form-check-input\" id=\"showCommandPreview{{ unique }}\" name=\"showCommandPreview{{ unique }}\" title=\"";
        echo __("Show command preview!");
        // line 196
        echo "\">
            <label for=\"showCommandPreview{{ unique }}\" class=\"show-command-preview-label form-check-label\">";
        echo __("Show command preview!");
        // line 206
        echo "</label>
        </div>

        <select class=\"command-type form-control form-control-inline\">
            {{#each types}}
                <option value=\"{{ @key }}\" {{#eq @key ../type}}selected=\"selected\"{{/eq}}>{{ this }}</option>
            {{/each}}
        </select>
        <div class=\"command-inputs panel panel-default\"></div>

        <div disabled=\"disabled\" class=\"command-preview bg-primary p-2 w-100\" data-invalid-message=\"";
        echo __("Invalid command!");
        // line 217
        echo "\">
          <code class=\"text-white\"></code>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-freetext-template\">
        <input class=\"free-text form-control form-control-inline\" value=\"{{ initVal }}\">
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-tpv_led-template\">
        <select name=\"tpv_ledCommand{{ unique }}\" id=\"tpv_ledCommand{{ unique }}\" class=\"tpv-led-command form-control form-control-inline\" style=\"width:100%\">
            <option value=\"off\" {{#eq value \"off\"}}selected=\"selected\"{{/eq}}>";
        echo __("Off");
        // line 218
        echo "</option>
            <option value=\"red\" {{#eq value \"red\"}}selected=\"selected\"{{/eq}}>";
        echo __("Red");
        // line 219
        echo "</option>
            <option value=\"green\" {{#eq value \"green\"}}selected=\"selected\"{{/eq}}>";
        echo __("Green");
        // line 220
        echo "</option>
            <option value=\"blue\" {{#eq value \"blue\"}}selected=\"selected\"{{/eq}}>";
        echo __("Blue");
        // line 221
        echo "</option>
            <option value=\"white\" {{#eq value \"white\"}}selected=\"selected\"{{/eq}}>";
        echo __("White");
        // line 227
        echo "</option>
        </select>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-rs232-template\">
        <div class=\"form-group-command form-group-device form-group-rs232\">
            <input class=\"form-control form-control-inline validated-element rs232-text-input rs232-device-name\" placeholder=\"";
        echo __("Device Name/COM");
        // line 228
        echo "\" value=\"{{ value.cs.deviceName }}\">
            <input class=\"form-control form-control-inline validated-element rs232-text-input rs232-baud-rate\" placeholder=\"";
        echo __("Baud Rate");
        // line 229
        echo "\" value=\"{{ value.cs.baudRate }}\">
            <input class=\"form-control form-control-inline validated-element rs232-text-input rs232-data-bits\" placeholder=\"";
        echo __("Data Bits");
        // line 233
        echo "\" value=\"{{ value.cs.dataBits }}\">
        </div>
        <div class=\"form-group-command form-group-rs232\">
            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232Parity{{ unique }}\">";
        echo __("Parity:");
        // line 244
        echo "</label>
                <select name=\"rs232Parity{{ unique }}\" id=\"rs232Parity{{ unique }}\" class=\"rs232-parity form-control\">
                    <option value=\"None\" {{#eq value.cs.parity \"None\"}}selected=\"selected\"{{/eq}}>None</option>
                    <option value=\"Odd\" {{#eq value.cs.parity \"Odd\"}}selected=\"selected\"{{/eq}}>Odd</option>
                    <option value=\"Even\" {{#eq value.cs.parity \"Even\"}}selected=\"selected\"{{/eq}}>Even</option>
                    <option value=\"Mark\" {{#eq value.cs.parity \"Mark\"}}selected=\"selected\"{{/eq}}>Mark</option>
                    <option value=\"Space\" {{#eq value.cs.parity \"Space\"}}selected=\"selected\"{{/eq}}>Space</option>
                </select>
            </div>

            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232StopBits{{ unique }}\">";
        echo __("Stop Bits:");
        // line 254
        echo "</label>
                <select name=\"rs232StopBits{{ unique }}\" id=\"rs232StopBits{{ unique }}\" class=\"rs232-stop-bits form-control\">
                    <option value=\"None\" {{#eq value.cs.stopBits \"None\"}}selected=\"selected\"{{/eq}}>None</option>
                    <option value=\"One\" {{#eq value.cs.stopBits \"One\"}}selected=\"selected\"{{/eq}}>One</option>
                    <option value=\"Two\" {{#eq value.cs.stopBits \"Two\"}}selected=\"selected\"{{/eq}}>Two</option>
                    <option value=\"OnePointFive\" {{#eq value.cs.stopBits \"OnePointFive\"}}selected=\"selected\"{{/eq}}>OnePointFive</option>
                </select>
            </div>

            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232Handshake{{ unique }}\">";
        echo __("Handshake:");
        // line 264
        echo "</label>
                <select name=\"rs232Handshake{{ unique }}\" id=\"rs232Handshake{{ unique }}\" class=\"rs232-handshake form-control\">
                    <option value=\"None\" {{#eq value.cs.handshake \"None\"}}selected=\"selected\"{{/eq}}>None</option>
                    <option value=\"XOnXOff\" {{#eq value.cs.handshake \"XOnXOff\"}}selected=\"selected\"{{/eq}}>XOnXOff</option>
                    <option value=\"RequestToSend\" {{#eq value.cs.handshake \"RequestToSend\"}}selected=\"selected\"{{/eq}}>RequestToSend</option>
                    <option value=\"RequestToSendXOnXOff\" {{#eq value.cs.handshake \"RequestToSendXOnXOff\"}}selected=\"selected\"{{/eq}}>RequestToSendXOnXOff</option>
                </select>
            </div>
            
            <div class=\"col-12 col-sm-6\">
                <label for=\"rs232HexSupport{{ unique }}\">";
        echo __("HexSupport:");
        // line 273
        echo "</label>
                <select name=\"rs232HexSupport{{ unique }}\" id=\"rs232HexSupport{{ unique }}\" class=\"rs232-hex-support form-control\">
                    <option value=\"0\" {{#eq value.cs.hexSupport \"0\"}}selected=\"selected\"{{/eq}}>0</option>
                    <option value=\"1\" {{#eq value.cs.hexSupport \"1\"}}selected=\"selected\"{{/eq}}>1</option>
                    <option value=\"default 0\" {{#eq value.cs.hexSupport \"default 0\"}}selected=\"selected\"{{/eq}}>default 0</option>
                </select>
            </div>
        </div>
        <div class=\"form-group-command form-group-rs232 command-group\">
            <input class=\"form-control rs232-command\" placeholder=\"";
        echo __("Command");
        // line 279
        echo "\" value=\"{{ value.command }}\">
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-intent-template\">
        <div class=\"form-group-command\">
            <label for=\"intentType{{ unique }}\">";
        echo __("Type:");
        // line 287
        echo "</label>
            <select name=\"intentType{{ unique }}\" id=\"intentType{{ unique }}\" class=\"intent-type form-control form-control-inline\">
                <option value=\"activity\" {{#eq value.type \"activity\"}}selected=\"selected\"{{/eq}}>activity</option>
                <option value=\"service\" {{#eq value.type \"service\"}}selected=\"selected\"{{/eq}}>service</option>
                <option value=\"broadcast\" {{#eq value.type \"broadcast\"}}selected=\"selected\"{{/eq}}>broadcast</option>
            </select>
        </div>

        <input name=\"intentName{{ unique }}\" id=\"intentName{{ unique }}\" class=\"intent-name form-control validated-element form-control-inline\" placeholder=\"";
        echo __("Intent");
        // line 290
        echo "\" value=\"{{ value.name }}\">

        <div class=\"form-group-command\">
            <label for=\"intentExtraContainer{{ unique }}\" class=\"intent-extra-container-label\">";
        echo __("Extra:");
        // line 301
        echo "</label>
            <button class=\"intent-add-extra btn btn-info btn-sm pull-right\" type=\"button\">
                <i class=\"fa fa-plus\"></i>
            </button>

            <div id=\"intentExtraContainer{{ unique }}\" class=\"intent-extra-container\"></div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-intent-extra-template\">
        <div class=\"intent-extra-element\">
            <input class=\"form-control form-control-inline validated-element extra-name\" placeholder=\"";
        echo __("Name");
        // line 308
        echo "\" value=\"{{ name }}\">
            <select class=\"form-control form-control-inline extra-type\">
                <option value=\"string\" {{#eq type \"string\"}}selected=\"selected\"{{/eq}}>string</option>
                <option value=\"int\" {{#eq type \"int\"}}selected=\"selected\"{{/eq}}>int</option>
                <option value=\"bool\" {{#eq type \"bool\"}}selected=\"selected\"{{/eq}}>bool</option>
                <option value=\"intArray\" {{#eq type \"intArray\"}}selected=\"selected\"{{/eq}}>intArray</option
            </select>
            <input class=\"form-control form-control-inline validated-element extra-value\" placeholder=\"";
        echo __("Value");
        // line 315
        echo "\" value=\"{{ value }}\">
            <button type=\"button\" class=\"btn btn-sm btn-warning pull-right intent-remove-extra\"><i class=\"fa fa-minus fa-plus\"></i></button>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-http-template\">
        {{! URL }}
        <label for=\"httpURL{{ unique }}\" class=\"http-url-label form-check-label\">";
        echo __("URL");
        // line 316
        echo "</label>
        <input name=\"httpURL{{ unique }}\" id=\"httpURL{{ unique }}\" class=\"http-url w-100 validated-element form-control form-control-inline\" placeholder=\"";
        echo __("URL");
        // line 321
        echo "\" value=\"{{ value.url }}\">

        {{! Query params }}
        <div class=\"request-params request-section mt-2\">
            <div class=\"form-check w-100\">
                <input type=\"checkbox\" data-toggle-element=\".query-builder-container\"  data-toggle-class=\"d-inline-block\" class=\"show-query-builder ignore-change form-check-input\" id=\"queryParamsBuilder{{ unique }}\" name=\"queryParamsBuilder{{ unique }}\" title=\"";
        echo __("Query params builder");
        // line 322
        echo "\" checked>
                <label for=\"queryParamsBuilder{{ unique }}\" class=\"show-query-builder-label form-check-label\">";
        echo __("Query builder");
        // line 325
        echo "</label>
            </div>
            <div class=\"form-group-command query-builder-container w-100 bg-white p-2 d-none d-inline-block\">
                <label for=\"queryBuilderContainer{{ unique }}\" class=\"http-key-value-container-label\">";
        echo __("Query params:");
        // line 336
        echo "</label>
                <button class=\"http-key-value-add btn btn-info btn-sm pull-right\" type=\"button\">
                    <i class=\"fa fa-plus\"></i>
                </button>

                <div id=\"queryBuilderContainer{{ unique }}\" class=\"http-key-value-container\"></div>
            </div>
        </div>

        {{! Method }}
        <div class=\"form-group-command mt-2\">
            <label for=\"httpMethod{{ unique }}\">";
        echo __("Request method:");
        // line 353
        echo "</label>
            <select name=\"httpMethod{{ unique }}\" id=\"httpMethod{{ unique }}\" class=\"http-method pl-1 form-control form-control-inline\">
                <option value=\"GET\" {{#eq value.requestOptions.method \"GET\"}}selected=\"selected\"{{/eq}}>GET</option>
                <option value=\"POST\" {{#eq value.requestOptions.method \"POST\"}}selected=\"selected\"{{/eq}}>POST</option>
                <option value=\"PUT\" {{#eq value.requestOptions.method \"PUT\"}}selected=\"selected\"{{/eq}}>PUT</option>
                <option value=\"DELETE\" {{#eq value.requestOptions.method \"DELETE\"}}selected=\"selected\"{{/eq}}>DELETE</option>
                <option value=\"CONNECT\" {{#eq value.requestOptions.method \"CONNECT\"}}selected=\"selected\"{{/eq}}>CONNECT</option>
                <option value=\"HEAD\" {{#eq value.requestOptions.method \"HEAD\"}}selected=\"selected\"{{/eq}}>HEAD</option>
                <option value=\"OPTIONS\" {{#eq value.requestOptions.method \"OPTIONS\"}}selected=\"selected\"{{/eq}}>OPTIONS</option>
                <option value=\"PATCH\" {{#eq value.requestOptions.method \"PATCH\"}}selected=\"selected\"{{/eq}}>PATCH</option>
                <option value=\"TRACE\" {{#eq value.requestOptions.method \"TRACE\"}}selected=\"selected\"{{/eq}}>TRACE</option>
            </select>
        </div>

        {{! Headers }}
        <div class=\"request-headers request-section mt-2\">
          <div class=\"form-check w-100\">
              <input type=\"checkbox\" data-toggle-element=\".http-headers\" data-toggle-element-reverse=\".http-headers-container\" data-toggle-class=\"d-inline-block\" class=\"show-raw-headers ignore-change form-check-input\" id=\"showRawHeaders{{ unique }}\" name=\"showRawHeaders{{ unique }}\" title=\"";
        echo __("Show raw headers");
        // line 354
        echo "\">
              <label for=\"showRawHeaders{{ unique }}\" class=\"show-raw-headers-label form-check-label\">";
        echo __("Show raw headers");
        // line 356
        echo "</label>
          </div>
          <textarea name=\"httpHeaders{{ unique }}\" id=\"httpHeaders{{ unique }}\" class=\"http-headers w-100 d-none form-control validated-element form-control-inline\" placeholder=\"";
        echo __("Headers");
        // line 358
        echo "\"></textarea>
          <div class=\"form-group-command http-headers-container w-100 bg-white p-2 d-none d-inline-block\">
              <label for=\"httpHeadersContainer{{ unique }}\" class=\"http-key-value-container-label\">";
        echo __("Headers");
        // line 371
        echo "</label>
              <button class=\"http-key-value-add btn btn-info btn-sm pull-right\" type=\"button\">
                  <i class=\"fa fa-plus\"></i>
              </button>

              <div id=\"httpHeadersContainer{{ unique }}\" class=\"http-key-value-container\"></div>
          </div>
        </div>

        {{! Body }}
        <div class=\"request-body request-section mt-2\">
            {{! Content type }}
            <div class=\"form-group-command\">
                <label for=\"httpContentType{{ unique }}\" class=\"pl-1\">";
        echo __("Content Type:");
        // line 381
        echo "</label>
                <select name=\"httpContentType{{ unique }}\" id=\"httpContentType{{ unique }}\" class=\"http-contenttype form-control form-control-inline\">
                    <option value=\"application/x-www-form-urlencoded\" {{#eq value.contenttype \"application/x-www-form-urlencoded\"}}selected=\"selected\"{{/eq}}>urlencoded</option>
                    <option value=\"application/json\" {{#eq value.contenttype \"application/json\"}}selected=\"selected\"{{/eq}}>json</option>
                    <option value=\"text/plain\" {{#eq value.contenttype \"text/plain\"}}selected=\"selected\"{{/eq}}>textplain</option>
                </select>
            </div>

            {{! Body data }}
            <div class=\"form-check w-100 mt-2\">
                <input type=\"checkbox\" data-toggle-element=\".http-data\" data-toggle-element-reverse=\".http-data-container\" data-toggle-class=\"d-inline-block\" class=\"show-raw-data ignore-change form-check-input\" id=\"showRawData{{ unique }}\" name=\"showRawData{{ unique }}\" title=\"";
        echo __("Show raw body data");
        // line 382
        echo "\">
                <label for=\"showRawData{{ unique }}\" class=\"show-raw-data-label form-check-label\">";
        echo __("Show raw data");
        // line 384
        echo "</label>
            </div>
            <textarea name=\"httpData{{ unique }}\" id=\"httpData{{ unique }}\" class=\"http-data w-100 validated-element d-none form-control form-control-inline\" placeholder=\"";
        echo __("Body data");
        // line 386
        echo "\"></textarea>
            <div class=\"form-group-command http-data-container w-100 bg-white p-2 d-none d-inline-block\">
                <label for=\"httpDataContainer{{ unique }}\" class=\"http-key-value-container-label\">";
        echo __("Body data");
        // line 398
        echo "</label>
                <button class=\"http-key-value-add btn btn-info btn-sm pull-right\" type=\"button\">
                    <i class=\"fa fa-plus\"></i>
                </button>

                <div id=\"httpDataContainer{{ unique }}\" class=\"http-key-value-container\"></div>
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"command-input-http-key-value-template\">
        <div class=\"http-key-value-element mt-1\">
            <input class=\"form-control validated-element form-control-inline http-key\" placeholder=\"";
        echo __("Key");
        // line 399
        echo "\" value=\"{{ key }}\">
            <input class=\"form-control validated-element form-control-inline http-value\" placeholder=\"";
        echo __("Value");
        // line 403
        echo "\" value=\"{{ value }}\">
            <button type=\"button\" class=\"btn btn-sm btn-warning pull-right http-key-value-remove\"><i class=\"fa fa-minus fa-plus\"></i></button>
        </div>
    </script>
    ";
        echo "

    <script type=\"text/x-handlebars-template\" id=\"multiselect-tag-edit-form-template\">
        <form id=\"multiselectTagEditForm\" data-gettag=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
            <input type=\"hidden\" id=\"requestURL\" name=\"requestURL\" value=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.editMultiple", ["type" => "[type]"]), "html", null, true);
        echo "\">
            <div class=\"form-group tags-with-value tags-input-wide row\">
                <label class=\"col-sm-2 control-label\" for=\"tagsToAdd\">";
        // line 409
        echo __("New tags");
        echo "</label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" name=\"tagsToAdd\" type=\"email\" id=\"tagsToAdd\" data-role=\"tagsInputForm\" data-auto-complete-url=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        echo "\" />
                    <span class=\"help-block\">";
        // line 412
        echo __("A comma separated list of tags to add to the selected elements.");
        echo "</span>
                </div>
            </div>

            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

            <div class=\"form-group row\">
                <label class=\"col-sm-2 control-label\" for=\"tagValue\" title=\"\" accesskey=\"\">";
        // line 419
        echo __("Tag value");
        echo "</label>
                <div class=\"col-sm-10\">
                    <select class=\"form-control\" name=\"tagValue\" id=\"tagValue\"></select>
                </div>
            </div>

            <div id=\"tagValueContainer\" style=\"display: none;\">
                <div class=\"form-group row\">
                    <label class=\"col-sm-2 control-label\" for=\"tagValueInput\" accesskey=\"\">";
        // line 427
        echo __("Tag value");
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input class=\"form-control\" name=\"tagValueInput\" type=\"text\" id=\"tagValueInput\" value=\"\">
                        <span class=\"help-block\">";
        // line 430
        echo __("Provide an optional Value for this Tag. If no Value is required, this field can be left blank.");
        echo "</span>
                    </div>
                </div>
            </div>

            <div id=\"tagValueRequired\" class=\"alert alert-info d-none\">
                <p>";
        // line 436
        echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
        echo "</p>
            </div>

            <div id=\"tagsToRemoveContainer\" class=\"form-group tags-with-value tags-input-wide row\">
                <label class=\"col-sm-2 control-label\" for=\"tagsToRemove\">";
        // line 440
        echo __("Existing tags");
        echo "</label>
                <div class=\"col-sm-10\">
                    <input class=\"form-control\" name=\"tagsToRemove\" type=\"email\" id=\"tagsToRemove\" data-role=\"tagsInputForm\" data-auto-complete-url=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        echo "\" />
                    <span class=\"help-block\">";
        // line 443
        echo __("Remove tags from the list to remove them from elements that contain them.");
        echo "</span>
                </div>
            </div>
        </form>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"display-status-window-template\">
        <div style=\"margin-top:5px; max-height: 400px; overflow-y: auto;\">
            ";
        // line 453
        echo "
            {{#if data}}
            ";
        echo "
            ";
        // line 454
        echo __("Player Status Window");
        echo ":
            ";
        // line 471
        echo "
                {{#eq type \"android\"}}
                    <div class=\"card p-3 mb-3 bg-light\">
                          <span>{{{data}}}</span>
                    </div>
                {{/eq}}
                {{#neq type \"android\"}}
                    <div class=\"card p-3 mb-3 bg-light\">
                        <ul>
                            {{#each data as |value key|}}
                            <li>{{key}}: {{value}}</li>
                            {{/each}}
                        </ul>
                    </div>
                {{/neq}}
            {{/if}}
            ";
        echo "
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"auto-submit-field-template\">
        <div class=\"checkbox\">
            <label for=\"autoSubmit\" accesskey=\"a\" title=\"";
        // line 477
        echo __("When enabled, this form will automatically submit in future. Reset this in your User Profile.");
        echo "\">
                <input type=\"checkbox\" id=\"autoSubmit\" name=\"autoSubmit\">
                ";
        // line 479
        echo __("Automatically submit this form?");
        // line 480
        echo "            </label>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"folder-tree-template\">
        <!-- Modal -->
        ";
        // line 488
        echo "
        <div id=\"{{ modal }}\" class=\"modal fade inner-modal\" role=\"dialog\">
         ";
        echo "
            <div class=\"modal-dialog modal-sm\" style=\"width:450px;\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
        // line 494
        echo __("Select Folder");
        echo "</h4>
                        <button type=\"button\" class=\"close btnCloseInnerModal\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group card p-3 mb-3 bg-light\">
                            ";
        // line 501
        echo "
                                <div id=\"{{ container }}\"></div>
                            ";
        echo "
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-white btnCloseInnerModal\">";
        // line 505
        echo __("Done");
        echo "</button>
                    </div>
                </div>

            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"mini-player-template\">
        <div id=\"miniLayoutPreview\" class=\"mini-layout-preview\">
            <div id=\"playBtn\" class=\"fa fa-play preview-button\" title=\"";
        // line 515
        echo __("Play Preview");
        echo "\"></div>
            <div id=\"closeBtn\" class=\"fa fa-close preview-button\" title=\"";
        // line 516
        echo __("Close Preview");
        echo "\"></div>
            <div id=\"sizeBtn\" class=\"fa fa-plus-square preview-button\" title=\"";
        // line 517
        echo __("Change window size");
        echo "\"></div>
            <div id=\"newTabBtn\" class=\"fa fa-external-link-square preview-button\" title=\"";
        // line 518
        echo __("Preview in new window");
        echo "\"></div>
            <div id=\"content\"></div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"php-date-format-table\">
        <div class=\"popover-content-container\">
            <div class=\"scrollable-popover-table\">
                <table>
                    <thead>
                    <tr>
                        <th>Format character</th>
                        <th>Description</th>
                        <th>Example returned values</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Day</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>d</td>
                        <td>Day of the month, 2 digits with leading zeros</td>
                        <td>01 to 31</td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td>A textual representation of a day, three letters</td>
                        <td>Mon through Sun</td>
                    </tr>
                    <tr>
                        <td>j</td>
                        <td>Day of the month without leading zeros</td>
                        <td>1 to 31</td>
                    </tr>
                    <tr>
                        <td>l</td>
                        <td>(lowercase ‘L’) A full textual representation of the day of the week</td>
                        <td>Sunday through Saturday</td>
                    </tr>
                    <tr>
                        <td>N</td>
                        <td>ISO-8601 numeric representation of the day of the week (added in PHP 5.1.0)</td>
                        <td>1 (for Monday) through 7 (for Sunday)</td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>English ordinal suffix for the day of the month, 2 characters</td>
                        <td>st, nd, rd or th. Works well with j</td>
                    </tr>
                    <tr>
                        <td>w</td>
                        <td>Numeric representation of the day of the week</td>
                        <td>0 (for Sunday) through 6 (for Saturday)</td>
                    </tr>
                    <tr>
                        <td>z</td>
                        <td>The day of the year (starting from 0)</td>
                        <td>0 through 365</td>
                    </tr>
                    <tr>
                        <td>Week</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>W</td>
                        <td>ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
                        <td>42 (the 42nd week in the year)</td>
                    </tr>
                    <tr>
                        <td>Month</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>A full textual representation of a month, such as January or March</td>
                        <td>January through December</td>
                    </tr>
                    <tr>
                        <td>m</td>
                        <td>Numeric representation of a month, with leading zeros</td>
                        <td>01 through 12</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>A short textual representation of a month, three letters</td>
                        <td>Jan through Dec</td>
                    </tr>
                    <tr>
                        <td>n</td>
                        <td>Numeric representation of a month, without leading zeros</td>
                        <td>1 through 12</td>
                    </tr>
                    <tr>
                        <td>t</td>
                        <td>Number of days in the given month</td>
                        <td>28 through 31</td>
                    </tr>
                    <tr>
                        <td>Year</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>Whether it’s a leap year</td>
                        <td>1 if it is a leap year, 0 otherwise.</td>
                    </tr>
                    <tr>
                        <td>o</td>
                        <td>ISO-8601 year number. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. (added in PHP 5.1.0)</td>
                        <td>1999 or 2003</td>
                    </tr>
                    <tr>
                        <td>Y</td>
                        <td>A full numeric representation of a year, 4 digits</td>
                        <td>1999 or 2003</td>
                    </tr>
                    <tr>
                        <td>y</td>
                        <td>A two digit representation of a year</td>
                        <td>99 or 03</td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>Lowercase Ante meridiem and Post meridiem</td>
                        <td>am or pm</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>Uppercase Ante meridiem and Post meridiem</td>
                        <td>AM or PM</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>Swatch Internet time</td>
                        <td>000 through 999</td>
                    </tr>
                    <tr>
                        <td>g</td>
                        <td>12-hour format of an hour without leading zeros</td>
                        <td>1 through 12</td>
                    </tr>
                    <tr>
                        <td>G</td>
                        <td>24-hour format of an hour without leading zeros</td>
                        <td>0 through 23</td>
                    </tr>
                    <tr>
                        <td>h</td>
                        <td>12-hour format of an hour with leading zeros</td>
                        <td>01 through 12</td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>24-hour format of an hour with leading zeros</td>
                        <td>00 through 23</td>
                    </tr>
                    <tr>
                        <td>i</td>
                        <td>Minutes with leading zeros</td>
                        <td>00 to 59</td>
                    </tr>
                    <tr>
                        <td>s</td>
                        <td>Seconds, with leading zeros</td>
                        <td>00 through 59</td>
                    </tr>
                    <tr>
                        <td>u</td>
                        <td>Microseconds (added in PHP 5.2.2). Note that date() will always generate 000000 since it takes an integer parameter, whereas DateTime::format() does support microseconds if DateTime was created with microseconds.</td>
                        <td>654321</td>
                    </tr>
                    <tr>
                        <td>Timezone</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>e</td>
                        <td>Timezone identifier (added in PHP 5.1.0)</td>
                        <td>UTC, GMT, Atlantic/Azores</td>
                    </tr>
                    <tr>
                        <td>I</td>
                        <td>(capital i) Whether or not the date is in daylight saving time</td>
                        <td>1 if Daylight Saving Time, 0 otherwise.</td>
                    </tr>
                    <tr>
                        <td>O</td>
                        <td>Difference to Greenwich time (GMT) in hours</td>
                        <td>+0200</td>
                    </tr>
                    <tr>
                        <td>P</td>
                        <td>Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
                        <td>+02:00</td>
                    </tr>
                    <tr>
                        <td>T</td>
                        <td>Timezone abbreviation</td>
                        <td>EST, MDT …</td>
                    </tr>
                    <tr>
                        <td>Z</td>
                        <td>Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive.</td>
                        <td>-43200 through 50400</td>
                    </tr>
                    <tr>
                        <td>Full Date/Time</td>
                        <td>—</td>
                        <td>—</td>
                    </tr>
                    <tr>
                        <td>c</td>
                        <td>ISO 8601 date (added in PHP 5)</td>
                        <td>2004-02-12T15:19:21+00:00</td>
                    </tr>
                    <tr>
                        <td>r</td>
                        <td>» RFC 2822 formatted date</td>
                        <td>Thu, 21 Dec 2000 16:01:07 +0200</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </script>

    <script  type=\"text/javascript\">
        function moveFolderMultiSelectFormOpen(dialog) {
            // make bootstrap happy.
            if (\$('#folder-tree-form-modal').length != 0) {
                \$('#folder-tree-form-modal').remove();
            }

            var folderContainer = '<div class=\"card p-3 mb-3 bg-light\" id=\"container-folder-form-tree\"></div>';
            var \$hiddenInput = \$('<input name=\"folderId\" type=\"hidden\" id=\"formFolderId\">');

            \$hiddenInput.on('change', function() {
                dialog.data().commitData = {folderId: \$(this).val()};
            });

            \$(dialog).find('.modal-body').append(folderContainer);
            \$(dialog).find('.modal-body').append(\$hiddenInput);
            initJsTreeAjax('#container-folder-form-tree', \"multi-select-folder\", true, 600000);
        }

        function triggerWebhookMultiSelectFormOpen(dialog) {
            var \$triggerCode =   \$(
                '<div class=\"form-group row\">' +
                '<label class=\"col-sm-2 control-label\" for=\"triggerCode\" accesskey=\"\">";
        // line 778
        echo __("Trigger Code");
        echo "</label>' +
                '<div class=\"col-sm-10\">' +
                '<input class=\"form-control\" name=\"triggerCode\" type=\"text\" id=\"triggerCode\" value=\"\">' +
                '<span class=\"help-block\">";
        // line 781
        echo __("Enter the code associated with the web hook you wish to trigger. Please note that for this action to work, the webhook trigger code has to be added to Interactive Actions in scheduled content for this Player.");
        echo "</span>' +
                '</div>' +
                '</div>'
            );

            \$(dialog).find('.modal-body').append(\$triggerCode);

            \$('#triggerCode').on('change', function() {

                dialog.data().commitData = {
                    triggerCode: \$('#triggerCode').val()
                };
            });
        }
    </script>

    ";
        // line 798
        echo "    ";
        $this->loadTemplate("include-file-upload.twig", "authed.twig", 798)->display($context);
    }

    public function getTemplateName()
    {
        return "authed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1156 => 798,  1137 => 781,  1131 => 778,  868 => 518,  864 => 517,  860 => 516,  856 => 515,  843 => 505,  834 => 501,  826 => 494,  815 => 488,  807 => 480,  805 => 479,  800 => 477,  775 => 471,  771 => 454,  765 => 453,  754 => 443,  750 => 442,  745 => 440,  738 => 436,  729 => 430,  723 => 427,  712 => 419,  702 => 412,  698 => 411,  693 => 409,  688 => 407,  684 => 406,  674 => 403,  670 => 399,  655 => 398,  650 => 386,  645 => 384,  641 => 382,  628 => 381,  612 => 371,  607 => 358,  602 => 356,  598 => 354,  578 => 353,  564 => 336,  558 => 325,  554 => 322,  546 => 321,  542 => 316,  532 => 315,  522 => 308,  508 => 301,  502 => 290,  491 => 287,  482 => 279,  470 => 273,  457 => 264,  444 => 254,  430 => 244,  423 => 233,  419 => 229,  415 => 228,  406 => 227,  402 => 221,  398 => 220,  394 => 219,  390 => 218,  376 => 217,  363 => 206,  359 => 196,  301 => 195,  296 => 140,  272 => 117,  265 => 113,  261 => 111,  257 => 110,  251 => 102,  245 => 97,  239 => 96,  230 => 103,  228 => 102,  222 => 98,  219 => 97,  217 => 96,  213 => 94,  208 => 91,  205 => 90,  194 => 89,  190 => 87,  188 => 86,  185 => 85,  183 => 84,  180 => 83,  178 => 82,  175 => 81,  169 => 77,  166 => 76,  164 => 75,  159 => 73,  154 => 70,  152 => 69,  146 => 65,  143 => 64,  139 => 62,  137 => 61,  134 => 60,  128 => 56,  125 => 55,  122 => 54,  119 => 53,  116 => 52,  106 => 51,  102 => 49,  100 => 48,  87 => 38,  83 => 36,  80 => 35,  78 => 34,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  60 => 28,  57 => 27,  54 => 26,  50 => 25,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed.twig", "/srv/xibo-cms/views/authed.twig");
    }
}

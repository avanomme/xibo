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

/* settings-page.twig */
class __TwigTemplate_530519edf71cc964e994546a90db6a09314e97a1fb80201c10be3e5dc1ab9f09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "settings-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "settings-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Settings"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 30)) {
            // line 31
            echo "            <button class=\"btn btn-danger XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("maintenance.libraryTidy.form"), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            echo "</button>
        ";
        }
        // line 33
        echo "    </div>
";
    }

    // line 36
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 38
        echo __("Settings");
        echo "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab_config\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Configuration");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_defaults\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Defaults");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Displays");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("General");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_maint\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Maintenance");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_network\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Network");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_permissions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Sharing");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_regional\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Regional");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_troubleshooting\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 51
        echo __("Troubleshooting");
        echo "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_users\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 52
        echo __("Users");
        echo "</span></a></li>
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("settings.update"), "html", null, true);
        echo "\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_config\">
                                <h3 class=\"section-heading\">";
        // line 57
        echo __("Configuration");
        echo "</h3>

                                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_LOCATION"], "method", false, false, false, 59)) {
            // line 60
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Library Location");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The fully qualified path to the CMS library location.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            echo "
                                    ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_LOCATION"], "method", false, false, false, 63)) {
                // line 64
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["LIBRARY_LOCATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_LOCATION"], "method", false, false, false, 64), ($context["helpText"] ?? null), "required"], 64, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 66
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["LIBRARY_LOCATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_LOCATION"], "method", false, false, false, 66), ($context["helpText"] ?? null)], 66, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 68
            echo "                                ";
        }
        // line 69
        echo "
                                ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SERVER_KEY"], "method", false, false, false, 70)) {
            // line 71
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("CMS Secret Key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This key must be entered into each Player to authenticate the Player with the CMS.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            echo "
                                    ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SERVER_KEY"], "method", false, false, false, 74)) {
                // line 75
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["SERVER_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SERVER_KEY"], "method", false, false, false, 75), ($context["helpText"] ?? null), "required"], 75, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 77
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SERVER_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SERVER_KEY"], "method", false, false, false, 77), ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 79
            echo "                                    <div class=\"form-group row\">
                                        <label class=\"col-sm-2 control-label\"></label>
                                        <div class=\"col-sm-10\">
                                            <p><i>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getPhoneticKey", [], "method", false, false, false, 82), "html", null, true);
            echo "</i></p>
                                        </div>
                                    </div>
                                ";
        }
        // line 86
        echo "
                                ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "GLOBAL_THEME_NAME"], "method", false, false, false, 87)) {
            // line 88
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("CMS Theme");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Theme to apply to all pages by default");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            echo "
                                    ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "GLOBAL_THEME_NAME"], "method", false, false, false, 91)) {
                // line 92
                echo "                                        ";
                if (($context["hideThemes"] ?? null)) {
                    // line 93
                    echo "                                            ";
                    // line 94
                    echo "                                            ";
                    echo twig_call_macro($macros["forms"], "macro_input", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "GLOBAL_THEME_NAME"], "method", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
                    echo "
                                        ";
                } else {
                    // line 96
                    echo "                                            ";
                    echo twig_call_macro($macros["forms"], "macro_dropdown", ["GLOBAL_THEME_NAME", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "GLOBAL_THEME_NAME"], "method", false, false, false, 96), ($context["themes"] ?? null), "id", "value", ($context["helpText"] ?? null)], 96, $context, $this->getSourceContext());
                    echo "
                                        ";
                }
                // line 98
                echo "                                    ";
            } else {
                // line 99
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "GLOBAL_THEME_NAME"], "method", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 101
            echo "                                ";
        }
        // line 102
        echo "
                                ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "NAVIGATION_MENU_POSITION"], "method", false, false, false, 103)) {
            // line 104
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Navigation Menu");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select where the Navigation Menu should be positioned by default. Users can set an alternate view in their Preferences under their User Profile.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            echo "
                                    ";
            // line 107
            ob_start(function () { return ''; });
            echo __("Horizontal along the top");
            $context["horizontalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Vertically on the left");
            $context["verticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            echo "                                    ";
            $context["options"] = [0 => ["id" => "horizontal", "value" =>             // line 110
($context["horizontalOption"] ?? null)], 1 => ["id" => "vertical", "value" =>             // line 111
($context["verticalOption"] ?? null)]];
            // line 113
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "NAVIGATION_MENU_POSITION"], "method", false, false, false, 113)) {
                // line 114
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["NAVIGATION_MENU_POSITION", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method", false, false, false, 114), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 116
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["NAVIGATION_MENU_POSITION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method", false, false, false, 116), ($context["helpText"] ?? null)], 116, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 118
            echo "                                ";
        }
        // line 119
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_defaults\">
                                <h3 class=\"section-heading\">";
        // line 121
        echo __("Defaults");
        echo "</h3>

                                ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 123)) {
            // line 124
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default update media in all layouts");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default the checkbox for updating media on all layouts when editing in the library");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            echo "
                                    ";
            // line 127
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 127), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 127)], 127, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 129
        echo "
                                ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 130)) {
            // line 131
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default copy media when copying a layout?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default the checkbox for making duplicates of media when copying layouts");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            echo "
                                    ";
            // line 134
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LAYOUT_COPY_MEDIA_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 134), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 134)], 134, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 136
        echo "
                                ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 137)) {
            // line 138
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default for \"Delete old version of Media\" checkbox. Shown when Editing Library Media.");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default the checkbox for Deleting Old Version of media when a new file is being uploaded to the library.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            echo "
                                    ";
            // line 141
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 141), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 141)], 141, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 143
        echo "
                                ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 144)) {
            // line 145
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should Layouts be automatically Published?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("When enabled draft Layouts will be automatically published 30 minutes after the last edit");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            echo "
                                    ";
            // line 148
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 148), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 148)], 148, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 150
        echo "
                                ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_IN"], "method", false, false, false, 151)) {
            // line 152
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition In");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition In that should be applied to widgets");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 154
            echo "
                                    ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_IN"], "method", false, false, false, 155)) {
                // line 156
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], 2 => ["name" => "data-search-term", "value" => "transition"], 3 => ["name" => "data-id-property", "value" => "code"], 4 => ["name" => "data-text-property", "value" => "transition"], 5 => ["name" => "data-filter-options", "value" => "{\"availableAsIn\":\"1\"}"]];
                // line 164
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_IN", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_IN"], "method", false, false, false, 164), [0 => ($context["defaultTransitionIn"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 164, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 166
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_IN", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_IN"], "method", false, false, false, 166), ""], 166, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 168
            echo "                                ";
        }
        // line 169
        echo "
                                ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_OUT"], "method", false, false, false, 170)) {
            // line 171
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition Out");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 172
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition Out that should be applied to widgets");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            echo "
                                    ";
            // line 174
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_OUT"], "method", false, false, false, 174)) {
                // line 175
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], 2 => ["name" => "data-search-term", "value" => "transition"], 3 => ["name" => "data-id-property", "value" => "code"], 4 => ["name" => "data-text-property", "value" => "transition"], 5 => ["name" => "data-filter-options", "value" => "{\"availableAsOut\":\"1\"}"]];
                // line 183
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_OUT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_OUT"], "method", false, false, false, 183), [0 => ($context["defaultTransitionOut"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 183, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 185
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_OUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_OUT"], "method", false, false, false, 185), ""], 185, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 187
            echo "                                ";
        }
        // line 188
        echo "
                                ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 189)) {
            // line 190
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Transition duration");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 191
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default duration for in and out transitions");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 192
            echo "
                                    ";
            // line 193
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 193)) {
                // line 194
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_DURATION", 1 => 0], "method", false, false, false, 194), ($context["helpText"] ?? null)], 194, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 196
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_DURATION", 1 => 0], "method", false, false, false, 196), ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 198
            echo "                                ";
        }
        // line 199
        echo "
                                ";
        // line 200
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 200)) {
            // line 201
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default value for \"Automatically apply Transitions?.\" checkbox on Layout add form");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 202
            echo "
                                    ";
            // line 203
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DEFAULT_TRANSITION_AUTO_APPLY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 203), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 203)], 203, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 205
        echo "
                                ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 206)) {
            // line 207
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Resize Threshold");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The maximum dimensions to be considered when an image is resized, based on the longest side");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 209
            echo "
                                    ";
            // line 210
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 210)) {
                // line 211
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_THRESHOLD", 1 => 0], "method", false, false, false, 211), ($context["helpText"] ?? null)], 211, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 213
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_THRESHOLD", 1 => 0], "method", false, false, false, 213), ($context["helpText"] ?? null)], 213, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 215
            echo "                                ";
        }
        // line 216
        echo "
                                ";
        // line 217
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 217)) {
            // line 218
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Resize Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Images that exceed the resize limit, based on the longest side, will not be processed");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            echo "
                                    ";
            // line 221
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 221)) {
                // line 222
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_LIMIT", 1 => 0], "method", false, false, false, 222), ($context["helpText"] ?? null)], 222, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 224
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_RESIZE_LIMIT", 1 => 0], "method", false, false, false, 224), ($context["helpText"] ?? null)], 224, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 226
            echo "                                ";
        }
        // line 227
        echo "
                                ";
        // line 228
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 228)) {
            // line 229
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("DataSet maximum number of Rows");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 230
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The maximum number of rows per DataSet, once the limit is met the limit policy defined per DataSet will dictate further action.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 231
            echo "
                                    ";
            // line 232
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 232)) {
                // line 233
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DATASET_HARD_ROW_LIMIT", 1 => 0], "method", false, false, false, 233), ($context["helpText"] ?? null)], 233, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 235
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DATASET_HARD_ROW_LIMIT", 1 => 0], "method", false, false, false, 235), ($context["helpText"] ?? null)], 235, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 237
            echo "                                ";
        }
        // line 238
        echo "
                                ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 239)) {
            // line 240
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default ttl, in days, for records in purge_list table");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 241
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Entries in purge_list table with expiry date older than specified ttl will be removed.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 242
            echo "
                                    ";
            // line 243
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 243)) {
                // line 244
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_PURGE_LIST_TTL", 1 => 7], "method", false, false, false, 244), ($context["helpText"] ?? null)], 244, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 246
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_PURGE_LIST_TTL", 1 => 7], "method", false, false, false, 246), ($context["helpText"] ?? null)], 246, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 248
            echo "                                ";
        }
        // line 249
        echo "
                                ";
        // line 250
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 250)) {
            // line 251
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default value for max number of items on a new dynamic Playlist");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 252
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This value can be adjusted on a per dynamic Playlist basis, it cannot exceed value set in the Limit below");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            echo "
                                    ";
            // line 254
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 254)) {
                // line 255
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 1 => 30], "method", false, false, false, 255), ($context["helpText"] ?? null), "", "", "", twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 1 => 100], "method", false, false, false, 255)], 255, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 257
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 1 => 30], "method", false, false, false, 257), ($context["helpText"] ?? null)], 257, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 259
            echo "                                ";
        }
        // line 260
        echo "
                                ";
        // line 261
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 261)) {
            // line 262
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default upper limit of items that can be assigned to a dynamic Playlist");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 263
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("When matching Media by Tags and name to a dynamic Playlist, this is the maximum number of allowed items that can be assigned to a dynamic Playlist");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 264
            echo "
                                    ";
            // line 265
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 265)) {
                // line 266
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 1 => 100], "method", false, false, false, 266), ($context["helpText"] ?? null)], 266, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 268
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 1 => 100], "method", false, false, false, 268), ($context["helpText"] ?? null)], 268, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 270
            echo "                                ";
        }
        // line 271
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_displays\">
                                <h3 class=\"section-heading\">";
        // line 273
        echo __("Displays");
        echo "</h3>

                                ";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LAYOUT"], "method", false, false, false, 275)) {
            // line 276
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Layout");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 277
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default layout to assign for new displays and displays which have their current default deleted.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 278
            echo "
                                    ";
            // line 279
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LAYOUT"], "method", false, false, false, 279)) {
                // line 280
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], 2 => ["name" => "data-search-term", "value" => "layout"], 3 => ["name" => "data-search-term-tags", "value" => "tags"], 4 => ["name" => "data-id-property", "value" => "layoutId"], 5 => ["name" => "data-text-property", "value" => "layout"], 6 => ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
                // line 289
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_LAYOUT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["defaultLayout"] ?? null), "layoutId", [], "any", false, false, false, 289), [0 => ($context["defaultLayout"] ?? null)], "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 289, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 291
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LAYOUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAYOUT"], "method", false, false, false, 291), ($context["helpText"] ?? null)], 291, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 293
            echo "                                ";
        }
        // line 294
        echo "
                                ";
        // line 295
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "XMR_ADDRESS"], "method", false, false, false, 295)) {
            // line 296
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("XMR Private Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 297
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Please enter the private address for XMR.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 298
            echo "
                                    ";
            // line 299
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "XMR_ADDRESS"], "method", false, false, false, 299)) {
                // line 300
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["XMR_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "XMR_ADDRESS", 1 => "tcp:://localhost:5555"], "method", false, false, false, 300), ($context["helpText"] ?? null), "required"], 300, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 302
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["XMR_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "XMR_ADDRESS", 1 => "tcp:://localhost:5555"], "method", false, false, false, 302), ($context["helpText"] ?? null)], 302, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 304
            echo "                                ";
        }
        // line 305
        echo "
                                ";
        // line 306
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "XMR_PUB_ADDRESS"], "method", false, false, false, 306)) {
            // line 307
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("XMR Public Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 308
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Please enter the public address for XMR.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 309
            echo "
                                    ";
            // line 310
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "XMR_PUB_ADDRESS"], "method", false, false, false, 310)) {
                // line 311
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "XMR_PUB_ADDRESS"], "method", false, false, false, 311), ($context["helpText"] ?? null)], 311, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 313
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "XMR_PUB_ADDRESS"], "method", false, false, false, 313), ($context["helpText"] ?? null)], 313, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 315
            echo "                                ";
        }
        // line 316
        echo "
                                ";
        // line 317
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LAT"], "method", false, false, false, 317)) {
            // line 318
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Latitude");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 319
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Latitude to apply for any Geo aware Previews");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 320
            echo "
                                    ";
            // line 321
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LAT"], "method", false, false, false, 321)) {
                // line 322
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["DEFAULT_LAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAT", 1 => "51.504"], "method", false, false, false, 322), ($context["helpText"] ?? null), "required"], 322, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 324
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LAT", 1 => "51.504"], "method", false, false, false, 324), ($context["helpText"] ?? null)], 324, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 326
            echo "                                ";
        }
        // line 327
        echo "
                                ";
        // line 328
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LONG"], "method", false, false, false, 328)) {
            // line 329
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Longitude");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The longitude to apply for any Geo aware Previews");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 331
            echo "
                                    ";
            // line 332
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LONG"], "method", false, false, false, 332)) {
                // line 333
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["DEFAULT_LONG", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LONG", 1 => "-0.104"], "method", false, false, false, 333), ($context["helpText"] ?? null), "required"], 333, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 335
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LONG", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LONG", 1 => "-0.104"], "method", false, false, false, 335), ($context["helpText"] ?? null)], 335, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 337
            echo "                                ";
        }
        // line 338
        echo "
                                ";
        // line 339
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 339)) {
            // line 340
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Add a link to the Display name using this format mask?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 341
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Turn the display name in display management into a link using the IP address last collected. The %s is replaced with the IP address. Leave blank to disable.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 342
            echo "
                                    ";
            // line 343
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 343)) {
                // line 344
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 344), ($context["helpText"] ?? null)], 344, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 346
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 346), ($context["helpText"] ?? null)], 346, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 348
            echo "                                ";
        }
        // line 349
        echo "
                                ";
        // line 350
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 350)) {
            // line 351
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The target attribute for the above link");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 352
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If the display name is shown as a link in display management, what target should the link have? Set _top to open the link in the same window or _blank to open in a new window.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 353
            echo "
                                    ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 354)) {
                // line 355
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNC_TGT", 1 => "_top"], "method", false, false, false, 355), ($context["helpText"] ?? null)], 355, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 357
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SHOW_DISPLAY_AS_VNC_TGT", 1 => "_top"], "method", false, false, false, 357), ($context["helpText"] ?? null)], 357, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 359
            echo "                                ";
        }
        // line 360
        echo "
                                ";
        // line 361
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAX_LICENSED_DISPLAYS"], "method", false, false, false, 361)) {
            // line 362
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Number of display slots");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 363
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The maximum number of licensed Players for this server installation. 0 = unlimited");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 364
            echo "
                                    ";
            // line 365
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAX_LICENSED_DISPLAYS"], "method", false, false, false, 365)) {
                // line 366
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAX_LICENSED_DISPLAYS", 1 => 0], "method", false, false, false, 366), ($context["helpText"] ?? null)], 366, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 368
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAX_LICENSED_DISPLAYS", 1 => 0], "method", false, false, false, 368), ($context["helpText"] ?? null)], 368, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 370
            echo "                                ";
        }
        // line 371
        echo "
                                ";
        // line 372
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 372)) {
            // line 373
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Aggregation level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 374
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the Default setting to use for the level of collection for Proof of Play Statistics to be applied to Layouts / Media and Widget items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 375
            echo "
                                    ";
            // line 376
            ob_start(function () { return ''; });
            echo __("Individual");
            $context["individualOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 377
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Hourly");
            $context["hourlyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 378
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Daily");
            $context["dailyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 379
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Individual", "value" =>             // line 380
($context["individualOption"] ?? null)], 1 => ["id" => "Hourly", "value" =>             // line 381
($context["hourlyOption"] ?? null)], 2 => ["id" => "Daily", "value" =>             // line 382
($context["dailyOption"] ?? null)]];
            // line 384
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 384)) {
                // line 385
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 385), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 385, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 387
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 387), ($context["helpText"] ?? null)], 387, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 389
            echo "                                ";
        }
        // line 390
        echo "
                                ";
        // line 391
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 391)) {
            // line 392
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 393
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the Default Settings for Proof of Play statistics to apply to all Displays. This can be toggled off by using Display Profiles.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 394
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_STATS_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 394), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 394)], 394, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 396
        echo "
                                ";
        // line 397
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 397)) {
            // line 398
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Layout Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 399
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Layout Items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 400
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["LAYOUT_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 400), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 400)], 400, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 402
        echo "
                                ";
        // line 403
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 403)) {
            // line 404
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Media Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 405
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Media Items.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 406
            echo "
                                    ";
            // line 407
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 408
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 409
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 410
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 411
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 412
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>             // line 413
($context["inheritOption"] ?? null)]];
            // line 415
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 415)) {
                // line 416
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["MEDIA_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 416), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 416, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 418
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MEDIA_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 418), ($context["helpText"] ?? null)], 418, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 420
            echo "                                ";
        }
        // line 421
        echo "
                                ";
        // line 422
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 422)) {
            // line 423
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Playlist Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 424
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Playlists.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 425
            echo "
                                    ";
            // line 426
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 427
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 428
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 429
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 430
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 431
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>             // line 432
($context["inheritOption"] ?? null)]];
            // line 434
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 434)) {
                // line 435
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["PLAYLIST_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 435), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 435, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 437
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PLAYLIST_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 437), ($context["helpText"] ?? null)], 437, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 439
            echo "                                ";
        }
        // line 440
        echo "
                                ";
        // line 441
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 441)) {
            // line 442
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Widget Stats Collection?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 443
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Select the Default setting to use for the collection for Proof of Play statistics for all Widgets.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 444
            echo "
                                    ";
            // line 445
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 446
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 447
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Inherit");
            $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 448
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 449
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 450
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>             // line 451
($context["inheritOption"] ?? null)]];
            // line 453
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 453)) {
                // line 454
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["WIDGET_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 454), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 454, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 456
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["WIDGET_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 456), ($context["helpText"] ?? null)], 456, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 458
            echo "                                ";
        }
        // line 459
        echo "
                                ";
        // line 460
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 460)) {
            // line 461
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable the option to report the current layout status?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 462
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 462), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 462)], 462, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 464
        echo "
                                ";
        // line 465
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 465)) {
            // line 466
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Lock the Display Name to the device name provided by the Player?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 467
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_LOCK_NAME_TO_DEVICENAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 467), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 467)], 467, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 469
        echo "
                                ";
        // line 470
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 470)) {
            // line 471
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable the option to set the screenshot interval?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 472
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 472), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 472)], 472, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 474
        echo "
                                ";
        // line 475
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 475)) {
            // line 476
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Display Screenshot Default Size");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 477
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default size in pixels for the Display Screenshots");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 478
            echo "
                                    ";
            // line 479
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 479)) {
                // line 480
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 1 => 200], "method", false, false, false, 480), ($context["helpText"] ?? null)], 480, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 482
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 1 => 200], "method", false, false, false, 482), ($context["helpText"] ?? null)], 482, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 484
            echo "                                ";
        }
        // line 485
        echo "
                                ";
        // line 486
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 486)) {
            // line 487
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Display screenshot Time to keep (days)");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 488
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Display screenshots older than the TTL will be automatically removed. Set to 0 to never remove old screenshots.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 489
            echo "
                                    ";
            // line 490
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 490)) {
                // line 491
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_SCREENSHOT_TTL", 1 => 0], "method", false, false, false, 491), ($context["helpText"] ?? null)], 491, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 493
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_SCREENSHOT_TTL", 1 => 0], "method", false, false, false, 493), ($context["helpText"] ?? null)], 493, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 495
            echo "                                ";
        }
        // line 496
        echo "
                                ";
        // line 497
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DISPLAY_AUTO_AUTH"], "method", false, false, false, 497)) {
            // line 498
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Automatically authorise new Displays?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 499
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If checked all new Displays registering with the CMS using the correct CMS key will automatically be set to authorised and display the Default Layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 500
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DISPLAY_AUTO_AUTH", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DISPLAY_AUTO_AUTH", 1 => 0], "method", false, false, false, 500), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DISPLAY_AUTO_AUTH"], "method", false, false, false, 500)], 500, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 502
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_general\">
                                <h3 class=\"section-heading\">";
        // line 504
        echo __("General");
        echo "</h3>

                                ";
        // line 506
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "HELP_BASE"], "method", false, false, false, 506)) {
            // line 507
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Location of the Manual");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 508
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The address of the user manual, which will be used as a prefix for all help links.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 509
            echo "
                                    ";
            // line 510
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "HELP_BASE"], "method", false, false, false, 510)) {
                // line 511
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["HELP_BASE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "HELP_BASE", 1 => "https://xibo.org.uk/manual/"], "method", false, false, false, 511), ($context["helpText"] ?? null), "required"], 511, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 513
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["HELP_BASE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "HELP_BASE", 1 => "https://xibo.org.uk/manual/"], "method", false, false, false, 513), ($context["helpText"] ?? null)], 513, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 515
            echo "                                ";
        }
        // line 516
        echo "
                                ";
        // line 517
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "QUICK_CHART_URL"], "method", false, false, false, 517)) {
            // line 518
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Quick Chart URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 519
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enter the URL to a Quick Chart service. This is used to draw charts in emailed reports and for showing a QR code during two factor authentication.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 520
            echo "
                                    ";
            // line 521
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "QUICK_CHART_URL"], "method", false, false, false, 521)) {
                // line 522
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["QUICK_CHART_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "QUICK_CHART_URL", 1 => "https://quickchart.io"], "method", false, false, false, 522), ($context["helpText"] ?? null), "required"], 522, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 524
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["QUICK_CHART_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "QUICK_CHART_URL", 1 => "https://quickchart.io"], "method", false, false, false, 524), ($context["helpText"] ?? null)], 524, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 526
            echo "                                ";
        }
        // line 527
        echo "
                                ";
        // line 528
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME"], "method", false, false, false, 528)) {
            // line 529
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow usage tracking?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 530
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS send anonymous statistics to help improve the software?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 531
            echo "
                                    ";
            // line 532
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["PHONE_HOME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME"], "method", false, false, false, 532), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME"], "method", false, false, false, 532)], 532, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 534
        echo "
                                ";
        // line 535
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME_KEY"], "method", false, false, false, 535)) {
            // line 536
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Phone home key");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 537
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Key used to distinguish each CMS instance. This is generated randomly based on the time you first installed the CMS, and is completely untraceable.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 538
            echo "
                                    ";
            // line 539
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME_KEY"], "method", false, false, false, 539)) {
                // line 540
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PHONE_HOME_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_KEY"], "method", false, false, false, 540), ($context["helpText"] ?? null)], 540, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 542
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PHONE_HOME_KEY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_KEY"], "method", false, false, false, 542), ($context["helpText"] ?? null)], 542, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 544
            echo "                                ";
        }
        // line 545
        echo "
                                ";
        // line 546
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME_DATE"], "method", false, false, false, 546)) {
            // line 547
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Phone home time");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 548
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The last time we PHONED_HOME in seconds since the epoch");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 549
            echo "
                                    ";
            // line 550
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME_DATE"], "method", false, false, false, 550)) {
                // line 551
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PHONE_HOME_DATE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_DATE"], "method", false, false, false, 551), ($context["helpText"] ?? null)], 551, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 553
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PHONE_HOME_DATE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_DATE"], "method", false, false, false, 553), ($context["helpText"] ?? null)], 553, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 555
            echo "                                ";
        }
        // line 556
        echo "
                                ";
        // line 557
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PHONE_HOME_URL"], "method", false, false, false, 557)) {
            // line 558
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Phone home URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 559
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The URL to connect to to PHONE_HOME (if enabled)");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 560
            echo "
                                    ";
            // line 561
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PHONE_HOME_URL"], "method", false, false, false, 561)) {
                // line 562
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PHONE_HOME_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_URL", 1 => "https://xibo.org.uk/api/stats/track"], "method", false, false, false, 562), ($context["helpText"] ?? null)], 562, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 564
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PHONE_HOME_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PHONE_HOME_URL", 1 => "https://xibo.org.uk/api/stats/track"], "method", false, false, false, 564), ($context["helpText"] ?? null)], 564, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 566
            echo "                                ";
        }
        // line 567
        echo "
                                ";
        // line 568
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SCHEDULE_LOOKAHEAD"], "method", false, false, false, 568)) {
            // line 569
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Send Schedule in advance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 570
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS send future schedule information to Players?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 571
            echo "
                                    ";
            // line 572
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SCHEDULE_LOOKAHEAD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SCHEDULE_LOOKAHEAD", 1 => 1], "method", false, false, false, 572), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SCHEDULE_LOOKAHEAD"], "method", false, false, false, 572)], 572, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 574
        echo "
                                ";
        // line 575
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "EVENT_SYNC"], "method", false, false, false, 575)) {
            // line 576
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Show Synchronise this Event checkbox on applicable events?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 577
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If checked you will have an option to enable Synchronise this Event checkbox for applicable events");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 578
            echo "
                                    ";
            // line 579
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["EVENT_SYNC", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "EVENT_SYNC", 1 => 0], "method", false, false, false, 579), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "EVENT_SYNC"], "method", false, false, false, 579)], 579, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 581
        echo "
                                ";
        // line 582
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 582)) {
            // line 583
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Send files in advance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 584
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("How many seconds in to the future should the calls to RequiredFiles look?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 585
            echo "
                                    ";
            // line 586
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 586)) {
                // line 587
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "REQUIRED_FILES_LOOKAHEAD", 1 => "172800"], "method", false, false, false, 587), ($context["helpText"] ?? null)], 587, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 589
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "REQUIRED_FILES_LOOKAHEAD", 1 => "172800"], "method", false, false, false, 589), ($context["helpText"] ?? null)], 589, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 591
            echo "                                ";
        }
        // line 592
        echo "
                                ";
        // line 593
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SETTING_IMPORT_ENABLED"], "method", false, false, false, 593)) {
            // line 594
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow Import?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 595
            echo "
                                    ";
            // line 596
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SETTING_IMPORT_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SETTING_IMPORT_ENABLED", 1 => 0], "method", false, false, false, 596), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SETTING_IMPORT_ENABLED"], "method", false, false, false, 596)], 596, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 598
        echo "
                                ";
        // line 599
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 599)) {
            // line 600
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Library Tidy?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 601
            echo "
                                    ";
            // line 602
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SETTING_LIBRARY_TIDY_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SETTING_LIBRARY_TIDY_ENABLED", 1 => 1], "method", false, false, false, 602), "", "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 602)], 602, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 604
        echo "
                                ";
        // line 605
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 605)) {
            // line 606
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Status Dashboard Widget");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 607
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("HTML to embed in an iframe on the Status Dashboard");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 608
            echo "
                                    ";
            // line 609
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 609)) {
                // line 610
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 610), ($context["helpText"] ?? null)], 610, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 612
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 612), ($context["helpText"] ?? null)], 612, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 614
            echo "                                ";
        }
        // line 615
        echo "
                                ";
        // line 616
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULTS_IMPORTED"], "method", false, false, false, 616)) {
            // line 617
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Defaults Imported?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 618
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Has the default layout been imported?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 619
            echo "
                                    ";
            // line 620
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DEFAULTS_IMPORTED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULTS_IMPORTED", 1 => 0], "method", false, false, false, 620), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULTS_IMPORTED"], "method", false, false, false, 620)], 620, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 622
        echo "
                                ";
        // line 623
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 623)) {
            // line 624
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Latest News?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 625
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the Dashboard show latest news? The address is provided by the theme.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 626
            echo "
                                    ";
            // line 627
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DASHBOARD_LATEST_NEWS_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DASHBOARD_LATEST_NEWS_ENABLED", 1 => 1], "method", false, false, false, 627), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 627)], 627, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 629
        echo "
                                ";
        // line 630
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "INSTANCE_SUSPENDED"], "method", false, false, false, 630)) {
            // line 631
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Instance Suspended");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 632
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is this instance suspended?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 633
            echo "
                                    ";
            // line 634
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["INSTANCE_SUSPENDED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "INSTANCE_SUSPENDED", 1 => 0], "method", false, false, false, 634), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "INSTANCE_SUSPENDED"], "method", false, false, false, 634)], 634, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 636
        echo "
                                ";
        // line 637
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LATEST_NEWS_URL"], "method", false, false, false, 637)) {
            // line 638
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Latest News URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 639
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("RSS/Atom Feed to be displayed on the Status Dashboard");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 640
            echo "
                                    ";
            // line 641
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LATEST_NEWS_URL"], "method", false, false, false, 641)) {
                // line 642
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["LATEST_NEWS_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LATEST_NEWS_URL"], "method", false, false, false, 642), ($context["helpText"] ?? null)], 642, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 644
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["LATEST_NEWS_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LATEST_NEWS_URL"], "method", false, false, false, 644), ($context["helpText"] ?? null)], 644, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 646
            echo "                                ";
        }
        // line 647
        echo "
                                ";
        // line 648
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 648)) {
            // line 649
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Show the Logo on report exports?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 650
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("When exporting a saved report to PDF, should the logo be shown on the PDF?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 651
            echo "
                                    ";
            // line 652
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["REPORTS_EXPORT_SHOW_LOGO", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "REPORTS_EXPORT_SHOW_LOGO", 1 => 0], "method", false, false, false, 652), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 652)], 652, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 654
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_maint\">
                                <h3 class=\"section-heading\">";
        // line 656
        echo __("Maintenance");
        echo "</h3>

                                ";
        // line 658
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_ENABLED"], "method", false, false, false, 658)) {
            // line 659
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Maintenance?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 660
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow the maintenance script to run if it is called?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 661
            echo "
                                    ";
            // line 662
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 663
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 664
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Protected");
            $context["protectedOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 665
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 666
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>             // line 667
($context["onOption"] ?? null)], 2 => ["id" => "Protected", "value" =>             // line 668
($context["protectedOption"] ?? null)]];
            // line 670
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_ENABLED"], "method", false, false, false, 670)) {
                // line 671
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["MAINTENANCE_ENABLED", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ENABLED", 1 => "Off"], "method", false, false, false, 671), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 671, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 673
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ENABLED", 1 => "Off"], "method", false, false, false, 673), ($context["helpText"] ?? null)], 673, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 675
            echo "                                ";
        }
        // line 676
        echo "
                                ";
        // line 677
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 677)) {
            // line 678
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable Email Alerts?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 679
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Global switch for email alerts to be sent");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 680
            echo "
                                    ";
            // line 681
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["MAINTENANCE_EMAIL_ALERTS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_EMAIL_ALERTS", 1 => 1], "method", false, false, false, 681), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 681)], 681, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 683
        echo "
                                ";
        // line 684
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 684)) {
            // line 685
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Max Log Age");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 686
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Maximum age for log entries in days. Set to 0 to keep logs indefinitely.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 687
            echo "
                                    ";
            // line 688
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 688)) {
                // line 689
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_LOG_MAXAGE", 1 => 30], "method", false, false, false, 689), ($context["helpText"] ?? null)], 689, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 691
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_LOG_MAXAGE", 1 => 30], "method", false, false, false, 691), ($context["helpText"] ?? null)], 691, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 693
            echo "                                ";
        }
        // line 694
        echo "
                                ";
        // line 695
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 695)) {
            // line 696
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Max Statistics Age");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 697
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Maximum age for statistics entries in days. Entries older than this will not be processed and existing entries will be removed. Set to 0 to keep statistics indefinitely.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 698
            echo "
                                    ";
            // line 699
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 699)) {
                // line 700
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_STAT_MAXAGE", 1 => 30], "method", false, false, false, 700), ($context["helpText"] ?? null)], 700, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 702
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_STAT_MAXAGE", 1 => 30], "method", false, false, false, 702), ($context["helpText"] ?? null)], 702, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 704
            echo "                                ";
        }
        // line 705
        echo "
                                ";
        // line 706
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 706)) {
            // line 707
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Max Display Timeout");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 708
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("How long in minutes after the last time a Player connects should we send an alert? Can be overridden on a per Player basis.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 709
            echo "
                                    ";
            // line 710
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 710)) {
                // line 711
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ALERT_TOUT", 1 => 12], "method", false, false, false, 711), ($context["helpText"] ?? null)], 711, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 713
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ALERT_TOUT", 1 => 12], "method", false, false, false, 713), ($context["helpText"] ?? null)], 713, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 715
            echo "                                ";
        }
        // line 716
        echo "
                                ";
        // line 717
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 717)) {
            // line 718
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Send repeat Display Timeouts");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 719
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS send an email if a display is in an error state every time maintenance runs?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 720
            echo "
                                    ";
            // line 721
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["MAINTENANCE_ALWAYS_ALERT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MAINTENANCE_ALWAYS_ALERT", 1 => 0], "method", false, false, false, 721), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 721)], 721, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 723
        echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_network\">
                                <h3 class=\"section-heading\">";
        // line 726
        echo __("Network");
        echo "</h3>

                                ";
        // line 728
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "mail_to"], "method", false, false, false, 728)) {
            // line 729
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Admin email address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 730
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This is the overall CMS adminstrator who will receive copies of all email notifications generated by the CMS.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 731
            echo "
                                    ";
            // line 732
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "mail_to"], "method", false, false, false, 732)) {
                // line 733
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["mail_to", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "mail_to"], "method", false, false, false, 733), ($context["helpText"] ?? null)], 733, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 735
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["mail_to", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "mail_to"], "method", false, false, false, 735), ($context["helpText"] ?? null)], 735, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 737
            echo "                                ";
        }
        // line 738
        echo "
                                ";
        // line 739
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "mail_from"], "method", false, false, false, 739)) {
            // line 740
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sending email address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 741
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Mail will be sent from this address");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 742
            echo "
                                    ";
            // line 743
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "mail_from"], "method", false, false, false, 743)) {
                // line 744
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["mail_from", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "mail_from"], "method", false, false, false, 744), ($context["helpText"] ?? null)], 744, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 746
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["mail_from", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "mail_from"], "method", false, false, false, 746), ($context["helpText"] ?? null)], 746, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 748
            echo "                                ";
        }
        // line 749
        echo "
                                ";
        // line 750
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "mail_from_name"], "method", false, false, false, 750)) {
            // line 751
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sending email name");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 752
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Mail will be sent under this name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 753
            echo "
                                    ";
            // line 754
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "mail_from_name"], "method", false, false, false, 754)) {
                // line 755
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["mail_from_name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "mail_from_name"], "method", false, false, false, 755), ($context["helpText"] ?? null)], 755, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 757
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["mail_from_name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "mail_from_name"], "method", false, false, false, 757), ($context["helpText"] ?? null)], 757, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 759
            echo "                                ";
        }
        // line 760
        echo "
                                ";
        // line 761
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SENDFILE_MODE"], "method", false, false, false, 761)) {
            // line 762
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("File download mode");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 763
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should the CMS use Apache X-Sendfile, Nginx X-Accel, or PHP (Off) to return the files from the library?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 764
            echo "
                                    ";
            // line 765
            ob_start(function () { return ''; });
            echo __("Off");
            $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 766
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 767
($context["offOption"] ?? null)], 1 => ["id" => "Apache", "value" => "Apache"], 2 => ["id" => "Nginx", "value" => "Nginx"]];
            // line 771
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SENDFILE_MODE"], "method", false, false, false, 771)) {
                // line 772
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["SENDFILE_MODE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SENDFILE_MODE", 1 => "Off"], "method", false, false, false, 772), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 772, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 774
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SENDFILE_MODE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SENDFILE_MODE", 1 => "Off"], "method", false, false, false, 774), ($context["helpText"] ?? null)], 774, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 776
            echo "                                ";
        }
        // line 777
        echo "
                                ";
        // line 778
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_HOST"], "method", false, false, false, 778)) {
            // line 779
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy URL");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 780
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Proxy URL");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 781
            echo "
                                    ";
            // line 782
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_HOST"], "method", false, false, false, 782)) {
                // line 783
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PROXY_HOST", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_HOST"], "method", false, false, false, 783), ($context["helpText"] ?? null)], 783, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 785
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_HOST", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_HOST"], "method", false, false, false, 785), ($context["helpText"] ?? null)], 785, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 787
            echo "                                ";
        }
        // line 788
        echo "
                                ";
        // line 789
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_PORT"], "method", false, false, false, 789)) {
            // line 790
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy Port");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 791
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Proxy Port");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 792
            echo "
                                    ";
            // line 793
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_PORT"], "method", false, false, false, 793)) {
                // line 794
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["PROXY_PORT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_PORT", 1 => 0], "method", false, false, false, 794), ($context["helpText"] ?? null)], 794, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 796
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_PORT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_PORT", 1 => 0], "method", false, false, false, 796), ($context["helpText"] ?? null)], 796, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 798
            echo "                                ";
        }
        // line 799
        echo "
                                ";
        // line 800
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_AUTH"], "method", false, false, false, 800)) {
            // line 801
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy Credentials");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 802
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Authentication information for this proxy. username:password");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 803
            echo "
                                    ";
            // line 804
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_AUTH"], "method", false, false, false, 804)) {
                // line 805
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PROXY_AUTH", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_AUTH"], "method", false, false, false, 805), ($context["helpText"] ?? null)], 805, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 807
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_AUTH", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_AUTH"], "method", false, false, false, 807), ($context["helpText"] ?? null)], 807, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 809
            echo "                                ";
        }
        // line 810
        echo "
                                ";
        // line 811
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PROXY_EXCEPTIONS"], "method", false, false, false, 811)) {
            // line 812
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Proxy Exceptions");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 813
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Hosts and Keywords that should not be loaded via the Proxy Specified. These should be comma separated.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 814
            echo "
                                    ";
            // line 815
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PROXY_EXCEPTIONS"], "method", false, false, false, 815)) {
                // line 816
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_EXCEPTIONS"], "method", false, false, false, 816), ($context["helpText"] ?? null)], 816, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 818
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PROXY_EXCEPTIONS"], "method", false, false, false, 818), ($context["helpText"] ?? null)], 818, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 820
            echo "                                ";
        }
        // line 821
        echo "
                                ";
        // line 822
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "CDN_URL"], "method", false, false, false, 822)) {
            // line 823
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("CDN Address");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 824
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Content Delivery Network Address for serving file requests to Players");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 825
            echo "
                                    ";
            // line 826
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "CDN_URL"], "method", false, false, false, 826)) {
                // line 827
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["CDN_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "CDN_URL"], "method", false, false, false, 827), ($context["helpText"] ?? null)], 827, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 829
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["CDN_URL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "CDN_URL"], "method", false, false, false, 829), ($context["helpText"] ?? null)], 829, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 831
            echo "                                ";
        }
        // line 832
        echo "
                                ";
        // line 833
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 833)) {
            // line 834
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Monthly bandwidth Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 835
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("XMDS Transfer Limit in KB/month");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 836
            echo "
                                    ";
            // line 837
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 837)) {
                // line 838
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 838), ($context["helpText"] ?? null)], 838, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 840
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 840), ($context["helpText"] ?? null)], 840, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 842
            echo "                                ";
        }
        // line 843
        echo "
                                ";
        // line 844
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 844)) {
            // line 845
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Library Size Limit");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 846
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Limit for the Library Size in KB");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 847
            echo "
                                    ";
            // line 848
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 848)) {
                // line 849
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 849), ($context["helpText"] ?? null)], 849, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 851
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 851), ($context["helpText"] ?? null)], 851, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 853
            echo "                                ";
        }
        // line 854
        echo "
                                ";
        // line 855
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "FORCE_HTTPS"], "method", false, false, false, 855)) {
            // line 856
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Force HTTPS?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 857
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Force the portal into HTTPS?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 858
            echo "
                                    ";
            // line 859
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["FORCE_HTTPS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "FORCE_HTTPS", 1 => 0], "method", false, false, false, 859), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "FORCE_HTTPS"], "method", false, false, false, 859)], 859, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 861
        echo "
                                ";
        // line 862
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "ISSUE_STS"], "method", false, false, false, 862)) {
            // line 863
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable STS?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 864
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Add STS to the response headers? Make sure you fully understand STS before turning it on as it will prevent access via HTTP after the first successful HTTPS connection.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 865
            echo "
                                    ";
            // line 866
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["ISSUE_STS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "ISSUE_STS", 1 => 0], "method", false, false, false, 866), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "ISSUE_STS"], "method", false, false, false, 866)], 866, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 868
        echo "
                                ";
        // line 869
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "STS_TTL"], "method", false, false, false, 869)) {
            // line 870
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("STS Time out");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 871
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Time to Live (maxage) of the STS header expressed in seconds.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 872
            echo "
                                    ";
            // line 873
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "STS_TTL"], "method", false, false, false, 873)) {
                // line 874
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_number", ["STS_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "STS_TTL", 1 => "600"], "method", false, false, false, 874), ($context["helpText"] ?? null), "", "", "", 999999999], 874, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 876
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["STS_TTL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "STS_TTL", 1 => "600"], "method", false, false, false, 876), ($context["helpText"] ?? null)], 876, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 878
            echo "                                ";
        }
        // line 879
        echo "
                                ";
        // line 880
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 880)) {
            // line 881
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Whitelist Load Balancers");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 882
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If the CMS is behind a load balancer, what are the load balancer IP addresses, comma delimited.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 883
            echo "
                                    ";
            // line 884
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 884)) {
                // line 885
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 885), ($context["helpText"] ?? null)], 885, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 887
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 887), ($context["helpText"] ?? null)], 887, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 889
            echo "                                ";
        }
        // line 890
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_permissions\">
                                <h3 class=\"section-heading\">";
        // line 892
        echo __("Sharing");
        echo "</h3>

                                ";
        // line 894
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "REGION_OPTIONS_COLOURING"], "method", false, false, false, 894)) {
            // line 895
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Widget colouring in Playlist editor");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 896
            echo "
                                    ";
            // line 897
            ob_start(function () { return ''; });
            echo __("Media Colouring");
            $context["privateOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 898
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sharing Colouring");
            $context["groupOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 899
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Media Colouring", "value" =>             // line 900
($context["privateOption"] ?? null)], 1 => ["id" => "Sharing Colouring", "value" =>             // line 901
($context["groupOption"] ?? null)]];
            // line 903
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "REGION_OPTIONS_COLOURING"], "method", false, false, false, 903)) {
                // line 904
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["REGION_OPTIONS_COLOURING", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "REGION_OPTIONS_COLOURING", 1 => "Media Colouring"], "method", false, false, false, 904), ($context["options"] ?? null), "id", "value"], 904, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 906
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["REGION_OPTIONS_COLOURING", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "REGION_OPTIONS_COLOURING", 1 => "Media Colouring"], "method", false, false, false, 906), ($context["helpText"] ?? null)], 906, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 908
            echo "                                ";
        }
        // line 909
        echo "
                                ";
        // line 910
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 910)) {
            // line 911
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Schedule with view sharing?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 912
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Should users with View sharing on displays be allowed to schedule to them?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 913
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SCHEDULE_WITH_VIEW_PERMISSION", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SCHEDULE_WITH_VIEW_PERMISSION", 1 => 0], "method", false, false, false, 913), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 913)], 913, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 915
        echo "
                                ";
        // line 916
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 916)) {
            // line 917
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Show event Layout regardless of User permission?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 918
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("If checked then the Schedule will show the Layout for existing events even if the logged in User does not have permission to see that Layout.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 919
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["SCHEDULE_SHOW_LAYOUT_NAME", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SCHEDULE_SHOW_LAYOUT_NAME", 1 => 0], "method", false, false, false, 919), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 919)], 919, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 921
        echo "
                                ";
        // line 922
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "MODULE_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 922)) {
            // line 923
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Lock Module Config");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 924
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is the module config locked? Useful for Service providers.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 925
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["MODULE_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "MODULE_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 925), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "MODULE_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 925)], 925, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 927
        echo "
                                ";
        // line 928
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 928)) {
            // line 929
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Lock Task Config");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 930
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is the task config locked? Useful for Service providers.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 931
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["TASK_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 931), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 931)], 931, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 933
        echo "
                                ";
        // line 934
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 934)) {
            // line 935
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Is the Transition config locked?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 936
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow modifications to the transition configuration?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 937
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["TRANSITION_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 937), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 937)], 937, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 939
        echo "
                                ";
        // line 940
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 940)) {
            // line 941
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Allow saving in the root folder?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 942
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Users can use the top level folder to store content. Disable to force the use of folders.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 943
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["FOLDERS_ALLOW_SAVE_IN_ROOT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 943), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 943)], 943, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 945
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_regional\">
                                <h3 class=\"section-heading\">";
        // line 947
        echo __("Regional");
        echo "</h3>

                                ";
        // line 949
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_LANGUAGE"], "method", false, false, false, 949)) {
            // line 950
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default Language");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 951
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default language to use");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 952
            echo "
                                    ";
            // line 953
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_LANGUAGE"], "method", false, false, false, 953)) {
                // line 954
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_LANGUAGE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LANGUAGE", 1 => "en_GB"], "method", false, false, false, 954), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null)], 954, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 956
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_LANGUAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_LANGUAGE", 1 => "en_GB"], "method", false, false, false, 956), ($context["helpText"] ?? null)], 956, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 958
            echo "                                ";
        }
        // line 959
        echo "
                                ";
        // line 960
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "defaultTimezone"], "method", false, false, false, 960)) {
            // line 961
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Timezone");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 962
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the default timezone for the application");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 963
            echo "
                                    ";
            // line 964
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "defaultTimezone"], "method", false, false, false, 964)) {
                // line 965
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["defaultTimezone", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "defaultTimezone", 1 => "Europe/London"], "method", false, false, false, 965), ($context["timeZones"] ?? null), "id", "value", ($context["helpText"] ?? null)], 965, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 967
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["defaultTimezone", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "defaultTimezone", 1 => "Europe/London"], "method", false, false, false, 967), ($context["helpText"] ?? null)], 967, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 969
            echo "                                ";
        }
        // line 970
        echo "
                                ";
        // line 971
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DATE_FORMAT"], "method", false, false, false, 971)) {
            // line 972
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Date Format");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 973
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The Date Format to use when displaying dates in the CMS.");
            // line 974
            echo "                                        <span id=\"date-format-table\"
                                              class=\"fa fa-info-circle\"
                                              data-toggle=\"popover\"
                                              data-trigger=\"hover\"
                                              data-placement=\"right\">
                                        </span>
                                    ";
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 981
            echo "
                                    ";
            // line 982
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DATE_FORMAT"], "method", false, false, false, 982)) {
                // line 983
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["DATE_FORMAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DATE_FORMAT", 1 => "Y-m-d"], "method", false, false, false, 983), ($context["helpText"] ?? null), "required"], 983, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 985
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DATE_FORMAT", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DATE_FORMAT", 1 => "Y-m-d"], "method", false, false, false, 985), ($context["helpText"] ?? null)], 985, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 987
            echo "                                ";
        }
        // line 988
        echo "
                                ";
        // line 989
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DETECT_LANGUAGE"], "method", false, false, false, 989)) {
            // line 990
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Detect language?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 991
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Detect the browser language?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 992
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["DETECT_LANGUAGE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DETECT_LANGUAGE"], "method", false, false, false, 992), ($context["helpText"] ?? null), "", "",  !twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DETECT_LANGUAGE"], "method", false, false, false, 992)], 992, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 994
        echo "
                                ";
        // line 995
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "CALENDAR_TYPE"], "method", false, false, false, 995)) {
            // line 996
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Calendar Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 997
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Which Calendar Type should the CMS use?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 998
            echo "
                                    ";
            // line 999
            ob_start(function () { return ''; });
            echo __("Gregorian");
            $context["gregorianOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1000
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Jalali");
            $context["jalaliOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1001
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Gregorian", "value" =>             // line 1002
($context["gregorianOption"] ?? null)], 1 => ["id" => "Jalali", "value" =>             // line 1003
($context["jalaliOption"] ?? null)]];
            // line 1005
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "CALENDAR_TYPE"], "method", false, false, false, 1005)) {
                // line 1006
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["CALENDAR_TYPE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "CALENDAR_TYPE", 1 => "Gregorian"], "method", false, false, false, 1006), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1006, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1008
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["CALENDAR_TYPE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "CALENDAR_TYPE", 1 => "Gregorian"], "method", false, false, false, 1008), ($context["helpText"] ?? null)], 1008, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1010
            echo "                                ";
        }
        // line 1011
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_troubleshooting\">
                                <h3 class=\"section-heading\">";
        // line 1013
        echo __("Troubleshooting");
        echo "</h3>

                                ";
        // line 1015
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "RESTING_LOG_LEVEL"], "method", false, false, false, 1015)) {
            // line 1016
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Resting Log Level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1017
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the level of the resting log level. The CMS will revert to this log level after an elevated period ends. In production systems \"error\" is recommended.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1018
            echo "
                                    ";
            // line 1019
            ob_start(function () { return ''; });
            echo __("Emergency");
            $context["emergencyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1020
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Alert");
            $context["alertOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1021
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Critical");
            $context["criticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1022
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Error");
            $context["errorOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1023
            echo "                                    ";
            $context["options"] = [0 => ["id" => "emergency", "value" =>             // line 1024
($context["emergencyOption"] ?? null)], 1 => ["id" => "alert", "value" =>             // line 1025
($context["alertOption"] ?? null)], 2 => ["id" => "critical", "value" =>             // line 1026
($context["criticalOption"] ?? null)], 3 => ["id" => "error", "value" =>             // line 1027
($context["errorOption"] ?? null)]];
            // line 1029
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "RESTING_LOG_LEVEL"], "method", false, false, false, 1029)) {
                // line 1030
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["RESTING_LOG_LEVEL", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "RESTING_LOG_LEVEL", 1 => "error"], "method", false, false, false, 1030), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1030, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1032
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["RESTING_LOG_LEVEL", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "RESTING_LOG_LEVEL", 1 => "error"], "method", false, false, false, 1032), ($context["helpText"] ?? null)], 1032, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1034
            echo "                                ";
        }
        // line 1035
        echo "
                                ";
        // line 1036
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "audit"], "method", false, false, false, 1036)) {
            // line 1037
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Log Level");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1038
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Set the level of logging the CMS should record. In production systems \"error\" is recommended.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1039
            echo "
                                    ";
            // line 1040
            ob_start(function () { return ''; });
            echo __("Emergency");
            $context["emergencyOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1041
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Alert");
            $context["alertOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1042
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Critical");
            $context["criticalOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1043
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Error");
            $context["errorOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1044
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Warning");
            $context["warningOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1045
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Notice");
            $context["noticeOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1046
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Information");
            $context["infoOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1047
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Debug");
            $context["debugOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1048
            echo "                                    ";
            $context["options"] = [0 => ["id" => "emergency", "value" =>             // line 1049
($context["emergencyOption"] ?? null)], 1 => ["id" => "alert", "value" =>             // line 1050
($context["alertOption"] ?? null)], 2 => ["id" => "critical", "value" =>             // line 1051
($context["criticalOption"] ?? null)], 3 => ["id" => "error", "value" =>             // line 1052
($context["errorOption"] ?? null)], 4 => ["id" => "warning", "value" =>             // line 1053
($context["warningOption"] ?? null)], 5 => ["id" => "notice", "value" =>             // line 1054
($context["noticeOption"] ?? null)], 6 => ["id" => "info", "value" =>             // line 1055
($context["infoOption"] ?? null)], 7 => ["id" => "debug", "value" =>             // line 1056
($context["debugOption"] ?? null)]];
            // line 1058
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "audit"], "method", false, false, false, 1058)) {
                // line 1059
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["audit", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "audit", 1 => "error"], "method", false, false, false, 1059), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1059, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1061
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["audit", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "audit", 1 => "error"], "method", false, false, false, 1061), ($context["helpText"] ?? null)], 1061, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1063
            echo "                                ";
        }
        // line 1064
        echo "
                                ";
        // line 1065
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "ELEVATE_LOG_UNTIL"], "method", false, false, false, 1065)) {
            // line 1066
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Elevate Log Until");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1067
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Elevate the log level until this date.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1068
            echo "
                                    ";
            // line 1069
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "ELEVATE_LOG_UNTIL"], "method", false, false, false, 1069)) {
                // line 1070
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dateTime", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1070, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1072
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1072, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1074
            echo "                                ";
        }
        // line 1075
        echo "
                                ";
        // line 1076
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SERVER_MODE"], "method", false, false, false, 1076)) {
            // line 1077
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Server Mode");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1078
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("This should only be set if you want to display the maximum allowed error messaging through the user interface. <br /> Useful for capturing critical php errors and environment issues.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1079
            echo "
                                    ";
            // line 1080
            ob_start(function () { return ''; });
            echo __("Production");
            $context["productionOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1081
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Test");
            $context["testOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1082
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Production", "value" =>             // line 1083
($context["productionOption"] ?? null)], 1 => ["id" => "Test", "value" =>             // line 1084
($context["testOption"] ?? null)]];
            // line 1086
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SERVER_MODE"], "method", false, false, false, 1086)) {
                // line 1087
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["SERVER_MODE", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SERVER_MODE", 1 => "Production"], "method", false, false, false, 1087), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1087, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1089
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SERVER_MODE", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SERVER_MODE", 1 => "Production"], "method", false, false, false, 1089), ($context["helpText"] ?? null)], 1089, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1091
            echo "                                ";
        }
        // line 1092
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_users\">
                                <h3 class=\"section-heading\">";
        // line 1094
        echo __("Users");
        echo "</h3>

                                ";
        // line 1096
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "SYSTEM_USER"], "method", false, false, false, 1096)) {
            // line 1097
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("System User");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1098
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The system User for this CMS");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1099
            echo "
                                    ";
            // line 1100
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "SYSTEM_USER"], "method", false, false, false, 1100)) {
                // line 1101
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], 2 => ["name" => "data-search-term", "value" => "userName"], 3 => ["name" => "data-search-term-tags", "value" => "tags"], 4 => ["name" => "data-id-property", "value" => "userId"], 5 => ["name" => "data-text-property", "value" => "userName"], 6 => ["name" => "data-filter-options", "value" => "{\"userTypeId\":\"1\"}"]];
                // line 1110
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["SYSTEM_USER", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["systemUser"] ?? null), "userId", [], "any", false, false, false, 1110), [0 => ($context["systemUser"] ?? null)], "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1110, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1112
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["SYSTEM_USER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "SYSTEM_USER"], "method", false, false, false, 1112), ($context["helpText"] ?? null)], 1112, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1114
            echo "                                ";
        }
        // line 1115
        echo "
                                ";
        // line 1116
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "DEFAULT_USERGROUP"], "method", false, false, false, 1116)) {
            // line 1117
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default User Group");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1118
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("The default User Group for new Users");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1119
            echo "
                                    ";
            // line 1120
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "DEFAULT_USERGROUP"], "method", false, false, false, 1120)) {
                // line 1121
                echo "                                        ";
                $context["attributes"] = [0 => ["name" => "data-width", "value" => "100%"], 1 => ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], 2 => ["name" => "data-search-term", "value" => "group"], 3 => ["name" => "data-id-property", "value" => "groupId"], 4 => ["name" => "data-text-property", "value" => "group"]];
                // line 1128
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["DEFAULT_USERGROUP", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["defaultUserGroup"] ?? null), "groupId", [], "any", false, false, false, 1128), [0 => ($context["defaultUserGroup"] ?? null)], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1128, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1130
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["DEFAULT_USERGROUP", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "DEFAULT_USERGROUP"], "method", false, false, false, 1130), ($context["helpText"] ?? null)], 1130, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1132
            echo "                                ";
        }
        // line 1133
        echo "
                                ";
        // line 1134
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "defaultUsertype"], "method", false, false, false, 1134)) {
            // line 1135
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Default User Type");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1136
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Sets the default user type selected when creating a user. We recommend that this is set to User");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1137
            echo "
                                    ";
            // line 1138
            ob_start(function () { return ''; });
            echo __("User");
            $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1139
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Group Admin");
            $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1140
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Super Admin");
            $context["option3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1141
            echo "                                    ";
            $context["options"] = [0 => ["id" => "User", "value" =>             // line 1142
($context["option1"] ?? null)], 1 => ["id" => "Group Admin", "value" =>             // line 1143
($context["option2"] ?? null)], 2 => ["id" => "Super Admin", "value" =>             // line 1144
($context["option3"] ?? null)]];
            // line 1146
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "defaultUsertype"], "method", false, false, false, 1146)) {
                // line 1147
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["defaultUsertype", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "defaultUsertype", 1 => "User"], "method", false, false, false, 1147), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1147, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1149
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["defaultUsertype", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "defaultUsertype", 1 => "User"], "method", false, false, false, 1149), ($context["helpText"] ?? null)], 1149, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1151
            echo "                                ";
        }
        // line 1152
        echo "
                                ";
        // line 1153
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "USER_PASSWORD_POLICY"], "method", false, false, false, 1153)) {
            // line 1154
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Password Policy Regular Expression");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1155
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Regular Expression for password complexity, leave blank for no policy.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1156
            echo "
                                    ";
            // line 1157
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "USER_PASSWORD_POLICY"], "method", false, false, false, 1157)) {
                // line 1158
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_POLICY"], "method", false, false, false, 1158), ($context["helpText"] ?? null)], 1158, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1160
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_POLICY"], "method", false, false, false, 1160), ($context["helpText"] ?? null)], 1160, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1162
            echo "                                ";
        }
        // line 1163
        echo "
                                ";
        // line 1164
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "USER_PASSWORD_ERROR"], "method", false, false, false, 1164)) {
            // line 1165
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Description of Password Policy");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1166
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("A text description of this password policy will be shown to users if they enter a password that does not meet the policy requirements set above.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1167
            echo "
                                    ";
            // line 1168
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "USER_PASSWORD_ERROR"], "method", false, false, false, 1168)) {
                // line 1169
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_ERROR"], "method", false, false, false, 1169), ($context["helpText"] ?? null)], 1169, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1171
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "USER_PASSWORD_ERROR"], "method", false, false, false, 1171), ($context["helpText"] ?? null)], 1171, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1173
            echo "                                ";
        }
        // line 1174
        echo "
                                ";
        // line 1175
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1175)) {
            // line 1176
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Password Reminder");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1177
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Enable password reminder on CMS login page? Valid sending email address is required");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1178
            echo "
                                    ";
            // line 1179
            ob_start(function () { return ''; });
            echo __("Off");
            $context["option1"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1180
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On except Admin");
            $context["option2"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1181
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("On");
            $context["option3"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1182
            echo "                                    ";
            $context["options"] = [0 => ["id" => "Off", "value" =>             // line 1183
($context["option1"] ?? null)], 1 => ["id" => "On except Admin", "value" =>             // line 1184
($context["option2"] ?? null)], 2 => ["id" => "On", "value" =>             // line 1185
($context["option3"] ?? null)]];
            // line 1187
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1187)) {
                // line 1188
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_dropdown", ["PASSWORD_REMINDER_ENABLED", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PASSWORD_REMINDER_ENABLED", 1 => "Off"], "method", false, false, false, 1188), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1188, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1190
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["PASSWORD_REMINDER_ENABLED", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PASSWORD_REMINDER_ENABLED", 1 => "Off"], "method", false, false, false, 1190), ($context["helpText"] ?? null)], 1190, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1192
            echo "                                ";
        }
        // line 1193
        echo "
                                ";
        // line 1194
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", [0 => "TWOFACTOR_ISSUER"], "method", false, false, false, 1194)) {
            // line 1195
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Two Factor Issuer");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1196
            echo "                                    ";
            ob_start(function () { return ''; });
            echo __("Name that should appear as Issuer when two factor authorisation is enabled");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1197
            echo "
                                    ";
            // line 1198
            if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", [0 => "TWOFACTOR_ISSUER"], "method", false, false, false, 1198)) {
                // line 1199
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_input", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "TWOFACTOR_ISSUER"], "method", false, false, false, 1199), ($context["helpText"] ?? null)], 1199, $context, $this->getSourceContext());
                echo "
                                    ";
            } else {
                // line 1201
                echo "                                        ";
                echo twig_call_macro($macros["forms"], "macro_disabled", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "TWOFACTOR_ISSUER"], "method", false, false, false, 1201), ($context["helpText"] ?? null)], 1201, $context, $this->getSourceContext());
                echo "
                                    ";
            }
            // line 1203
            echo "                                ";
        }
        // line 1204
        echo "                            </div>
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>";
        // line 1206
        echo __("Save");
        echo "</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 1214
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1215
        echo "    <script type=\"text/javascript\">
        \$(function () {
            var phpDateFormatTable = Handlebars.compile(\$('#php-date-format-table').html());
            \$('#date-format-table').popover({
                content: phpDateFormatTable,
                html: true,
                placement: \"right\",
                sanitize: false,
                trigger: \"manual\",
                container: \"form\"
            }).on(\"mouseenter\", function() {
                \$(this).popover(\"show\");
                \$(\".popover\").on(\"mouseleave\", function() {
                    \$(this).popover('hide');
                });
            }).on(\"mouseleave\", function() {
                setTimeout(function() {
                    if (!\$(\".popover:hover\").length) {
                        \$(this).popover(\"hide\");
                    }
                }, 300);
            });
        })
    </script>

    <style>
        .popover{
            max-width: 25%;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "settings-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3594 => 1215,  3590 => 1214,  3579 => 1206,  3575 => 1204,  3572 => 1203,  3566 => 1201,  3560 => 1199,  3558 => 1198,  3555 => 1197,  3550 => 1196,  3545 => 1195,  3543 => 1194,  3540 => 1193,  3537 => 1192,  3531 => 1190,  3525 => 1188,  3522 => 1187,  3520 => 1185,  3519 => 1184,  3518 => 1183,  3516 => 1182,  3511 => 1181,  3506 => 1180,  3502 => 1179,  3499 => 1178,  3494 => 1177,  3489 => 1176,  3487 => 1175,  3484 => 1174,  3481 => 1173,  3475 => 1171,  3469 => 1169,  3467 => 1168,  3464 => 1167,  3459 => 1166,  3454 => 1165,  3452 => 1164,  3449 => 1163,  3446 => 1162,  3440 => 1160,  3434 => 1158,  3432 => 1157,  3429 => 1156,  3424 => 1155,  3419 => 1154,  3417 => 1153,  3414 => 1152,  3411 => 1151,  3405 => 1149,  3399 => 1147,  3396 => 1146,  3394 => 1144,  3393 => 1143,  3392 => 1142,  3390 => 1141,  3385 => 1140,  3380 => 1139,  3376 => 1138,  3373 => 1137,  3368 => 1136,  3363 => 1135,  3361 => 1134,  3358 => 1133,  3355 => 1132,  3349 => 1130,  3343 => 1128,  3340 => 1121,  3338 => 1120,  3335 => 1119,  3330 => 1118,  3325 => 1117,  3323 => 1116,  3320 => 1115,  3317 => 1114,  3311 => 1112,  3305 => 1110,  3302 => 1101,  3300 => 1100,  3297 => 1099,  3292 => 1098,  3287 => 1097,  3285 => 1096,  3280 => 1094,  3276 => 1092,  3273 => 1091,  3267 => 1089,  3261 => 1087,  3258 => 1086,  3256 => 1084,  3255 => 1083,  3253 => 1082,  3248 => 1081,  3244 => 1080,  3241 => 1079,  3236 => 1078,  3231 => 1077,  3229 => 1076,  3226 => 1075,  3223 => 1074,  3217 => 1072,  3211 => 1070,  3209 => 1069,  3206 => 1068,  3201 => 1067,  3196 => 1066,  3194 => 1065,  3191 => 1064,  3188 => 1063,  3182 => 1061,  3176 => 1059,  3173 => 1058,  3171 => 1056,  3170 => 1055,  3169 => 1054,  3168 => 1053,  3167 => 1052,  3166 => 1051,  3165 => 1050,  3164 => 1049,  3162 => 1048,  3157 => 1047,  3152 => 1046,  3147 => 1045,  3142 => 1044,  3137 => 1043,  3132 => 1042,  3127 => 1041,  3123 => 1040,  3120 => 1039,  3115 => 1038,  3110 => 1037,  3108 => 1036,  3105 => 1035,  3102 => 1034,  3096 => 1032,  3090 => 1030,  3087 => 1029,  3085 => 1027,  3084 => 1026,  3083 => 1025,  3082 => 1024,  3080 => 1023,  3075 => 1022,  3070 => 1021,  3065 => 1020,  3061 => 1019,  3058 => 1018,  3053 => 1017,  3048 => 1016,  3046 => 1015,  3041 => 1013,  3037 => 1011,  3034 => 1010,  3028 => 1008,  3022 => 1006,  3019 => 1005,  3017 => 1003,  3016 => 1002,  3014 => 1001,  3009 => 1000,  3005 => 999,  3002 => 998,  2997 => 997,  2992 => 996,  2990 => 995,  2987 => 994,  2981 => 992,  2976 => 991,  2971 => 990,  2969 => 989,  2966 => 988,  2963 => 987,  2957 => 985,  2951 => 983,  2949 => 982,  2946 => 981,  2937 => 974,  2933 => 973,  2928 => 972,  2926 => 971,  2923 => 970,  2920 => 969,  2914 => 967,  2908 => 965,  2906 => 964,  2903 => 963,  2898 => 962,  2893 => 961,  2891 => 960,  2888 => 959,  2885 => 958,  2879 => 956,  2873 => 954,  2871 => 953,  2868 => 952,  2863 => 951,  2858 => 950,  2856 => 949,  2851 => 947,  2847 => 945,  2841 => 943,  2836 => 942,  2831 => 941,  2829 => 940,  2826 => 939,  2820 => 937,  2815 => 936,  2810 => 935,  2808 => 934,  2805 => 933,  2799 => 931,  2794 => 930,  2789 => 929,  2787 => 928,  2784 => 927,  2778 => 925,  2773 => 924,  2768 => 923,  2766 => 922,  2763 => 921,  2757 => 919,  2752 => 918,  2747 => 917,  2745 => 916,  2742 => 915,  2736 => 913,  2731 => 912,  2726 => 911,  2724 => 910,  2721 => 909,  2718 => 908,  2712 => 906,  2706 => 904,  2703 => 903,  2701 => 901,  2700 => 900,  2698 => 899,  2693 => 898,  2689 => 897,  2686 => 896,  2681 => 895,  2679 => 894,  2674 => 892,  2670 => 890,  2667 => 889,  2661 => 887,  2655 => 885,  2653 => 884,  2650 => 883,  2645 => 882,  2640 => 881,  2638 => 880,  2635 => 879,  2632 => 878,  2626 => 876,  2620 => 874,  2618 => 873,  2615 => 872,  2610 => 871,  2605 => 870,  2603 => 869,  2600 => 868,  2595 => 866,  2592 => 865,  2587 => 864,  2582 => 863,  2580 => 862,  2577 => 861,  2572 => 859,  2569 => 858,  2564 => 857,  2559 => 856,  2557 => 855,  2554 => 854,  2551 => 853,  2545 => 851,  2539 => 849,  2537 => 848,  2534 => 847,  2529 => 846,  2524 => 845,  2522 => 844,  2519 => 843,  2516 => 842,  2510 => 840,  2504 => 838,  2502 => 837,  2499 => 836,  2494 => 835,  2489 => 834,  2487 => 833,  2484 => 832,  2481 => 831,  2475 => 829,  2469 => 827,  2467 => 826,  2464 => 825,  2459 => 824,  2454 => 823,  2452 => 822,  2449 => 821,  2446 => 820,  2440 => 818,  2434 => 816,  2432 => 815,  2429 => 814,  2424 => 813,  2419 => 812,  2417 => 811,  2414 => 810,  2411 => 809,  2405 => 807,  2399 => 805,  2397 => 804,  2394 => 803,  2389 => 802,  2384 => 801,  2382 => 800,  2379 => 799,  2376 => 798,  2370 => 796,  2364 => 794,  2362 => 793,  2359 => 792,  2354 => 791,  2349 => 790,  2347 => 789,  2344 => 788,  2341 => 787,  2335 => 785,  2329 => 783,  2327 => 782,  2324 => 781,  2319 => 780,  2314 => 779,  2312 => 778,  2309 => 777,  2306 => 776,  2300 => 774,  2294 => 772,  2291 => 771,  2289 => 767,  2287 => 766,  2283 => 765,  2280 => 764,  2275 => 763,  2270 => 762,  2268 => 761,  2265 => 760,  2262 => 759,  2256 => 757,  2250 => 755,  2248 => 754,  2245 => 753,  2240 => 752,  2235 => 751,  2233 => 750,  2230 => 749,  2227 => 748,  2221 => 746,  2215 => 744,  2213 => 743,  2210 => 742,  2205 => 741,  2200 => 740,  2198 => 739,  2195 => 738,  2192 => 737,  2186 => 735,  2180 => 733,  2178 => 732,  2175 => 731,  2170 => 730,  2165 => 729,  2163 => 728,  2158 => 726,  2153 => 723,  2148 => 721,  2145 => 720,  2140 => 719,  2135 => 718,  2133 => 717,  2130 => 716,  2127 => 715,  2121 => 713,  2115 => 711,  2113 => 710,  2110 => 709,  2105 => 708,  2100 => 707,  2098 => 706,  2095 => 705,  2092 => 704,  2086 => 702,  2080 => 700,  2078 => 699,  2075 => 698,  2070 => 697,  2065 => 696,  2063 => 695,  2060 => 694,  2057 => 693,  2051 => 691,  2045 => 689,  2043 => 688,  2040 => 687,  2035 => 686,  2030 => 685,  2028 => 684,  2025 => 683,  2020 => 681,  2017 => 680,  2012 => 679,  2007 => 678,  2005 => 677,  2002 => 676,  1999 => 675,  1993 => 673,  1987 => 671,  1984 => 670,  1982 => 668,  1981 => 667,  1980 => 666,  1978 => 665,  1973 => 664,  1968 => 663,  1964 => 662,  1961 => 661,  1956 => 660,  1951 => 659,  1949 => 658,  1944 => 656,  1940 => 654,  1935 => 652,  1932 => 651,  1927 => 650,  1922 => 649,  1920 => 648,  1917 => 647,  1914 => 646,  1908 => 644,  1902 => 642,  1900 => 641,  1897 => 640,  1892 => 639,  1887 => 638,  1885 => 637,  1882 => 636,  1877 => 634,  1874 => 633,  1869 => 632,  1864 => 631,  1862 => 630,  1859 => 629,  1854 => 627,  1851 => 626,  1846 => 625,  1841 => 624,  1839 => 623,  1836 => 622,  1831 => 620,  1828 => 619,  1823 => 618,  1818 => 617,  1816 => 616,  1813 => 615,  1810 => 614,  1804 => 612,  1798 => 610,  1796 => 609,  1793 => 608,  1788 => 607,  1783 => 606,  1781 => 605,  1778 => 604,  1773 => 602,  1770 => 601,  1765 => 600,  1763 => 599,  1760 => 598,  1755 => 596,  1752 => 595,  1747 => 594,  1745 => 593,  1742 => 592,  1739 => 591,  1733 => 589,  1727 => 587,  1725 => 586,  1722 => 585,  1717 => 584,  1712 => 583,  1710 => 582,  1707 => 581,  1702 => 579,  1699 => 578,  1694 => 577,  1689 => 576,  1687 => 575,  1684 => 574,  1679 => 572,  1676 => 571,  1671 => 570,  1666 => 569,  1664 => 568,  1661 => 567,  1658 => 566,  1652 => 564,  1646 => 562,  1644 => 561,  1641 => 560,  1636 => 559,  1631 => 558,  1629 => 557,  1626 => 556,  1623 => 555,  1617 => 553,  1611 => 551,  1609 => 550,  1606 => 549,  1601 => 548,  1596 => 547,  1594 => 546,  1591 => 545,  1588 => 544,  1582 => 542,  1576 => 540,  1574 => 539,  1571 => 538,  1566 => 537,  1561 => 536,  1559 => 535,  1556 => 534,  1551 => 532,  1548 => 531,  1543 => 530,  1538 => 529,  1536 => 528,  1533 => 527,  1530 => 526,  1524 => 524,  1518 => 522,  1516 => 521,  1513 => 520,  1508 => 519,  1503 => 518,  1501 => 517,  1498 => 516,  1495 => 515,  1489 => 513,  1483 => 511,  1481 => 510,  1478 => 509,  1473 => 508,  1468 => 507,  1466 => 506,  1461 => 504,  1457 => 502,  1451 => 500,  1446 => 499,  1441 => 498,  1439 => 497,  1436 => 496,  1433 => 495,  1427 => 493,  1421 => 491,  1419 => 490,  1416 => 489,  1411 => 488,  1406 => 487,  1404 => 486,  1401 => 485,  1398 => 484,  1392 => 482,  1386 => 480,  1384 => 479,  1381 => 478,  1376 => 477,  1371 => 476,  1369 => 475,  1366 => 474,  1360 => 472,  1355 => 471,  1353 => 470,  1350 => 469,  1344 => 467,  1339 => 466,  1337 => 465,  1334 => 464,  1328 => 462,  1323 => 461,  1321 => 460,  1318 => 459,  1315 => 458,  1309 => 456,  1303 => 454,  1300 => 453,  1298 => 451,  1297 => 450,  1296 => 449,  1294 => 448,  1289 => 447,  1284 => 446,  1280 => 445,  1277 => 444,  1272 => 443,  1267 => 442,  1265 => 441,  1262 => 440,  1259 => 439,  1253 => 437,  1247 => 435,  1244 => 434,  1242 => 432,  1241 => 431,  1240 => 430,  1238 => 429,  1233 => 428,  1228 => 427,  1224 => 426,  1221 => 425,  1216 => 424,  1211 => 423,  1209 => 422,  1206 => 421,  1203 => 420,  1197 => 418,  1191 => 416,  1188 => 415,  1186 => 413,  1185 => 412,  1184 => 411,  1182 => 410,  1177 => 409,  1172 => 408,  1168 => 407,  1165 => 406,  1160 => 405,  1155 => 404,  1153 => 403,  1150 => 402,  1144 => 400,  1139 => 399,  1134 => 398,  1132 => 397,  1129 => 396,  1123 => 394,  1118 => 393,  1113 => 392,  1111 => 391,  1108 => 390,  1105 => 389,  1099 => 387,  1093 => 385,  1090 => 384,  1088 => 382,  1087 => 381,  1086 => 380,  1084 => 379,  1079 => 378,  1074 => 377,  1070 => 376,  1067 => 375,  1062 => 374,  1057 => 373,  1055 => 372,  1052 => 371,  1049 => 370,  1043 => 368,  1037 => 366,  1035 => 365,  1032 => 364,  1027 => 363,  1022 => 362,  1020 => 361,  1017 => 360,  1014 => 359,  1008 => 357,  1002 => 355,  1000 => 354,  997 => 353,  992 => 352,  987 => 351,  985 => 350,  982 => 349,  979 => 348,  973 => 346,  967 => 344,  965 => 343,  962 => 342,  957 => 341,  952 => 340,  950 => 339,  947 => 338,  944 => 337,  938 => 335,  932 => 333,  930 => 332,  927 => 331,  922 => 330,  917 => 329,  915 => 328,  912 => 327,  909 => 326,  903 => 324,  897 => 322,  895 => 321,  892 => 320,  887 => 319,  882 => 318,  880 => 317,  877 => 316,  874 => 315,  868 => 313,  862 => 311,  860 => 310,  857 => 309,  852 => 308,  847 => 307,  845 => 306,  842 => 305,  839 => 304,  833 => 302,  827 => 300,  825 => 299,  822 => 298,  817 => 297,  812 => 296,  810 => 295,  807 => 294,  804 => 293,  798 => 291,  792 => 289,  789 => 280,  787 => 279,  784 => 278,  779 => 277,  774 => 276,  772 => 275,  767 => 273,  763 => 271,  760 => 270,  754 => 268,  748 => 266,  746 => 265,  743 => 264,  738 => 263,  733 => 262,  731 => 261,  728 => 260,  725 => 259,  719 => 257,  713 => 255,  711 => 254,  708 => 253,  703 => 252,  698 => 251,  696 => 250,  693 => 249,  690 => 248,  684 => 246,  678 => 244,  676 => 243,  673 => 242,  668 => 241,  663 => 240,  661 => 239,  658 => 238,  655 => 237,  649 => 235,  643 => 233,  641 => 232,  638 => 231,  633 => 230,  628 => 229,  626 => 228,  623 => 227,  620 => 226,  614 => 224,  608 => 222,  606 => 221,  603 => 220,  598 => 219,  593 => 218,  591 => 217,  588 => 216,  585 => 215,  579 => 213,  573 => 211,  571 => 210,  568 => 209,  563 => 208,  558 => 207,  556 => 206,  553 => 205,  548 => 203,  545 => 202,  540 => 201,  538 => 200,  535 => 199,  532 => 198,  526 => 196,  520 => 194,  518 => 193,  515 => 192,  510 => 191,  505 => 190,  503 => 189,  500 => 188,  497 => 187,  491 => 185,  485 => 183,  482 => 175,  480 => 174,  477 => 173,  472 => 172,  467 => 171,  465 => 170,  462 => 169,  459 => 168,  453 => 166,  447 => 164,  444 => 156,  442 => 155,  439 => 154,  434 => 153,  429 => 152,  427 => 151,  424 => 150,  419 => 148,  416 => 147,  411 => 146,  406 => 145,  404 => 144,  401 => 143,  396 => 141,  393 => 140,  388 => 139,  383 => 138,  381 => 137,  378 => 136,  373 => 134,  370 => 133,  365 => 132,  360 => 131,  358 => 130,  355 => 129,  350 => 127,  347 => 126,  342 => 125,  337 => 124,  335 => 123,  330 => 121,  326 => 119,  323 => 118,  317 => 116,  311 => 114,  308 => 113,  306 => 111,  305 => 110,  303 => 109,  298 => 108,  294 => 107,  291 => 106,  286 => 105,  281 => 104,  279 => 103,  276 => 102,  273 => 101,  267 => 99,  264 => 98,  258 => 96,  252 => 94,  250 => 93,  247 => 92,  245 => 91,  242 => 90,  237 => 89,  232 => 88,  230 => 87,  227 => 86,  220 => 82,  215 => 79,  209 => 77,  203 => 75,  201 => 74,  198 => 73,  193 => 72,  188 => 71,  186 => 70,  183 => 69,  180 => 68,  174 => 66,  168 => 64,  166 => 63,  163 => 62,  158 => 61,  153 => 60,  151 => 59,  146 => 57,  140 => 54,  135 => 52,  131 => 51,  127 => 50,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  91 => 38,  88 => 37,  84 => 36,  79 => 33,  69 => 31,  67 => 30,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings-page.twig", "/srv/xibo-cms/views/settings-page.twig");
    }
}

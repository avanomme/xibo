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

/* subplaylist-form-edit.twig */
class __TwigTemplate_5e6f5e9ced94c8ce7802bfdb09aeff01f59372244907d954be8f83b67ac4486c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'extra' => [$this, 'block_extra'],
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
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "subplaylist-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "subplaylist-form-edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo __("Edit Sub-Playlist");
    }

    // line 30
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getExtra", [0 => twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "userId", [], "any", false, false, false, 30)], "method", false, false, false, 30));
    }

    // line 32
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <div class=\"row\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 35
        echo __("General");
        echo "</span></a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#configurationTab\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 36
        echo __("Configuration");
        echo "</span></a></li>
        </ul>
        <div class=\"col-md-12\">
            <form id=\"subPlaylistForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 39), "widgetId", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" data-playlist-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "widget", [], "any", false, false, false, 39), "playlistId", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 42
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("An optional name for this widget");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "name"], "method", false, false, false, 44), ($context["helpText"] ?? null)], 44, $context, $this->getSourceContext());
        echo "

                        ";
        // line 46
        ob_start(function () { return ''; });
        echo __("Please select one or more Playlists to embed. If selecting more than one use the Configuration tab to adjust how each Playlist is combined.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 47, $context, $this->getSourceContext());
        echo "

                        ";
        // line 49
        ob_start(function () { return ''; });
        echo __("Optionally set Spot options to expand or shrink each Playlist to a particular size or duration. Leave the Spot options empty to use the count of Widgets in each Playlist.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 50, $context, $this->getSourceContext());
        echo "

                        ";
        // line 52
        ob_start(function () { return ''; });
        echo __("Setting Spots to 0 will omit the first Playlist from the play order, and will be used as a Spot Fill option.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["helpText"] ?? null)], 53, $context, $this->getSourceContext());
        echo "

                        <div class=\"row\">
                            <div class=\"col-sm-12 d-none sub-playlist-no-playlists-message\">
                                <p>";
        // line 57
        echo __("You don't have available playlists");
        echo "</p>
                            </div>
                        </div>

                        <div class=\"row row-special\">
                            <div class=\"col-sm-1 text-right\" for=\"subPlaylistId[]\">#</div>
                            <div class=\"col-sm-3 text-center\">
                                ";
        // line 64
        echo twig_escape_filter($this->env, __("Playlists"), "html", null, true);
        echo "
                            </div>
                            ";
        // line 66
        ob_start(function () { return ''; });
        echo __("How many spots would you like on this Sub-Playlist? This is used before ordering to expand or shrink the list to the specified size. Leave empty to use the count of Widgets.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "                            <div class=\"col-sm-2 text-center\" title=\"";
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                                ";
        // line 68
        echo twig_escape_filter($this->env, __("Spots"), "html", null, true);
        echo "
                            </div>
                            ";
        // line 70
        ob_start(function () { return ''; });
        echo __("Set the duration of all Widgets in the Playlist to a specific value in seconds. Leave empty to use each Widget duration.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                            <div class=\"col-sm-2 text-center\" title=\"";
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                                ";
        // line 72
        echo twig_escape_filter($this->env, __("Spot Length"), "html", null, true);
        echo "
                            </div>
                            ";
        // line 74
        ob_start(function () { return ''; });
        echo __("If there are not enough Widgets fill all spots, how should the remaining spots be filled?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "                            <div class=\"col-sm-3 text-center\" title=\"";
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                                ";
        // line 76
        echo twig_escape_filter($this->env, __("Spot Fill"), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-sm-1 text-center\" title=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["helpText"] ?? null), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">
                            </div>
                        </div>

                        <div class=\"sub-playlists\"></div>
                    </div>

                    <div class=\"tab-pane\" id=\"configurationTab\">
                        ";
        // line 86
        ob_start(function () { return ''; });
        echo __("Playlist Ordering");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("How would you like the Widgets on these Playlists to be ordered?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Play all - Playlists will play in their entirety one after the other in the order they appear on the General tab");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Round Robin - take one Widget from each Playlist in the order they appear on the General tab and repeat");
        $context["robinOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Auto - ensure Widgets are played evenly from each Playlist using the total count of Widgets on all Playlists");
        $context["evenOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "                        ";
        $context["options"] = [0 => ["id" => "none", "value" =>         // line 92
($context["noneOption"] ?? null)], 1 => ["id" => "roundrobin", "value" =>         // line 93
($context["robinOption"] ?? null)], 2 => ["id" => "even", "value" =>         // line 94
($context["evenOption"] ?? null)]];
        // line 96
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["arrangement", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "arrangement"], "method", false, false, false, 96), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 96, $context, $this->getSourceContext());
        echo "

                        ";
        // line 98
        ob_start(function () { return ''; });
        echo __("Remaining Widgets");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("If there are Widgets left unordered at the end, what should be done with these Widgets?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Add - After ordering any remaining Widgets are to be added to the end");
        $context["noneOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Discard - Uses the Playlist with the least Widgets and ignores remaining Widgets on the longer Playlists");
        $context["dropOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Repeat - Uses the Playlist with the most Widgets and repeats remaining Widgets on the shorter Playlists");
        $context["repeatOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "                        ";
        $context["options"] = [0 => ["id" => "none", "value" =>         // line 104
($context["noneOption"] ?? null)], 1 => ["id" => "drop", "value" =>         // line 105
($context["dropOption"] ?? null)], 2 => ["id" => "repeat", "value" =>         // line 106
($context["repeatOption"] ?? null)]];
        // line 108
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["remainder", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "remainder"], "method", false, false, false, 108), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 108, $context, $this->getSourceContext());
        echo "

                        ";
        // line 110
        if (($context["isTopLevel"] ?? null)) {
            // line 111
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("Enable cycle based playback?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("When cycle based playback is enabled only 1 Widget from this Sub-Playlist will be played each time the Layout is shown. The same Widget will be shown until the 'Play count' is achieved.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 113
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["cyclePlaybackEnabled", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "cyclePlaybackEnabled"], "method", false, false, false, 113), ($context["helpText"] ?? null)], 113, $context, $this->getSourceContext());
            echo "

                        ";
            // line 115
            ob_start(function () { return ''; });
            echo __("Play count");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("In cycle based playback, how many plays should each Widget have before moving on?");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_number", ["playCount", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "playCount"], "method", false, false, false, 117), ($context["helpText"] ?? null), "cycle-based-playback"], 117, $context, $this->getSourceContext());
            echo "

                        ";
            // line 119
            ob_start(function () { return ''; });
            echo __("Random Widget each cycle?");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 120
            echo "                        ";
            ob_start(function () { return ''; });
            echo __("When enabled a random Widget will be selected at the start of each cycle and shown until its play count has been met.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 121
            echo "                        ";
            echo twig_call_macro($macros["forms"], "macro_checkbox", ["cycleRandomWidget", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "getOption", [0 => "cycleRandomWidget"], "method", false, false, false, 121), ($context["helpText"] ?? null), "cycle-based-playback"], 121, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 123
        echo "                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "subplaylist-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 123,  322 => 121,  317 => 120,  313 => 119,  307 => 117,  302 => 116,  298 => 115,  292 => 113,  287 => 112,  282 => 111,  280 => 110,  274 => 108,  272 => 106,  271 => 105,  270 => 104,  268 => 103,  263 => 102,  258 => 101,  253 => 100,  248 => 99,  244 => 98,  238 => 96,  236 => 94,  235 => 93,  234 => 92,  232 => 91,  227 => 90,  222 => 89,  217 => 88,  212 => 87,  208 => 86,  197 => 78,  192 => 76,  187 => 75,  183 => 74,  178 => 72,  173 => 71,  169 => 70,  164 => 68,  159 => 67,  155 => 66,  150 => 64,  140 => 57,  132 => 53,  128 => 52,  122 => 50,  118 => 49,  112 => 47,  108 => 46,  102 => 44,  97 => 43,  93 => 42,  85 => 39,  79 => 36,  75 => 35,  71 => 33,  67 => 32,  60 => 30,  55 => 27,  51 => 26,  46 => 23,  44 => 24,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "subplaylist-form-edit.twig", "/srv/xibo-cms/modules/subplaylist-form-edit.twig");
    }
}

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

/* playlist-form-add.twig */
class __TwigTemplate_3c644be456a79f69462602d2f162431f195d1ab2f18a854fd702c400ac4bcd74 extends Template
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
            'callBack' => [$this, 'block_callBack'],
            'formFieldActions' => [$this, 'block_formFieldActions'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-add.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-add.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Add Playlist");
    }

    // line 31
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 33
        echo __("Save");
        echo ", \$(\"#playlistAddForm\").submit()
";
    }

    // line 36
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "playlistFormOpen";
    }

    // line 38
    public function block_formFieldActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    [{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": false,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"none\" },
    \".static-message\": { \"display\": \"\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"init\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"\" },
    \".static-message\": { \"display\": \"none\" }
    }
    },{
    \"field\": \"isDynamic\",
    \"trigger\": \"change\",
    \"value\": true,
    \"operation\": \"is:checked\",
    \"actions\": {
    \".dynamic-message\": { \"display\": \"\" },
    \".static-message\": { \"display\": \"none\" }
    }
    }]
";
    }

    // line 78
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 82
        echo __("General");
        echo "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#populate\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 83
        echo __("Filter");
        echo "</span></a></li>
            </ul>
            <form id=\"playlistAddForm\" class=\"XiboForm form-horizontal playlistForm\" method=\"post\" action=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.add"), "html", null, true);
        echo "\" data-gettag=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "folder.view"], "method", false, false, false, 89)) {
            // line 90
            echo "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 91
            echo __("Folder");
            echo "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 93
            echo __("Select Folder");
            echo "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 97
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId"], 97, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 99
        echo "
                        ";
        // line 100
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name of the Playlist - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 102, $context, $this->getSourceContext());
        echo "

                        ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 104)) {
            // line 105
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Playlist - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "tags-with-value"], 107, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 111
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 112, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 115
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 117, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 121
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 124
        echo "
                        ";
        // line 125
        ob_start(function () { return ''; });
        echo __("Dynamic?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Is the Playlist to have Library media assignments managed automatically by the CMS based on filter criteria? Set a filter on the next tab.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 127, $context, $this->getSourceContext());
        echo "

                        ";
        // line 129
        ob_start(function () { return ''; });
        echo __("Enable Playlist Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for this Playlist. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        echo "
                        ";
        // line 132
        ob_start(function () { return ''; });
        echo __("If you want to prepopulate your Playlist with Media using a search, then you can do so on the filter tab. Leave the Dynamic checkbox unticked to make it a one-time assignment.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_alert", [($context["message"] ?? null), "info"], 133, $context, $this->getSourceContext());
        echo "
                        
                        ";
        // line 135
        ob_start(function () { return ''; });
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 139
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 140
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 141
($context["inheritOption"] ?? null)]];
        // line 143
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 143), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 143, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"populate\">
                        <div class=\"dynamic-message\">
                            ";
        // line 147
        $context["message"] = __("Populate with Library Media matching the criteria below and automatically maintain the Playlist.");
        // line 148
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 148, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"static-message\">
                            ";
        // line 151
        $context["message"] = __("Populate with Library Media matching the criteria below. This is a one time assignment and is not automatically maintained.");
        // line 152
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 152, $context, $this->getSourceContext());
        echo "
                        </div>

                        <div class=\"widget\">
                            <div class=\"widget-title\">";
        // line 156
        echo __("Library Media");
        echo "</div>
                            <div class=\"widget-body\">
                                <div class=\"FilterDiv\" id=\"Filter\">
                                    ";
        // line 159
        ob_start(function () { return ''; });
        echo __("Name filter");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_inputWithLogicalOperator", ["filterMediaName", ($context["title"] ?? null)], 160, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 162)) {
            // line 163
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Tag filter");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 164
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 165
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 166
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated set of tags to match against tags on library media.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 167
            echo "                                        ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["filterMediaTag", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 167, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 169
        echo "
                                    ";
        // line 170
        ob_start(function () { return ''; });
        echo __("Max number of Items");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("The upper limit on number of Media items that can be dynamically assigned to this Playlist");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["maxNumberOfItems", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", [], "any", false, false, false, 172), ($context["helpText"] ?? null), "dynamic-message", "", "", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", [], "any", false, false, false, 172)], 172, $context, $this->getSourceContext());
        echo "
                                </div>

                                <div class=\"XiboData card pt-3\">
                                    <table id=\"playlistLibraryMedia\" class=\"table table-striped\">
                                        <thead>
                                        <tr>
                                            <th>";
        // line 179
        echo __("ID");
        echo "</th>
                                            <th>";
        // line 180
        echo __("Name");
        echo "</th>
                                            <th>";
        // line 181
        echo __("Type");
        echo "</th>
                                            ";
        // line 182
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 182)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 183
        echo "                                            <th>";
        echo __("Duration");
        echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "playlist-form-add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 183,  416 => 182,  412 => 181,  408 => 180,  404 => 179,  393 => 172,  388 => 171,  384 => 170,  381 => 169,  375 => 167,  370 => 166,  365 => 165,  360 => 164,  355 => 163,  353 => 162,  347 => 160,  343 => 159,  337 => 156,  329 => 152,  327 => 151,  320 => 148,  318 => 147,  310 => 143,  308 => 141,  307 => 140,  306 => 139,  304 => 138,  299 => 137,  294 => 136,  290 => 135,  284 => 133,  280 => 132,  277 => 131,  272 => 130,  268 => 129,  262 => 127,  257 => 126,  253 => 125,  250 => 124,  244 => 121,  236 => 117,  231 => 116,  227 => 115,  220 => 112,  216 => 111,  208 => 107,  203 => 106,  198 => 105,  196 => 104,  190 => 102,  185 => 101,  181 => 100,  178 => 99,  173 => 97,  166 => 93,  161 => 91,  158 => 90,  156 => 89,  147 => 85,  142 => 83,  138 => 82,  133 => 79,  129 => 78,  88 => 39,  84 => 38,  77 => 36,  71 => 33,  66 => 32,  62 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-add.twig", "/srv/xibo-cms/views/playlist-form-add.twig");
    }
}

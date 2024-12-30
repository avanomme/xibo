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

/* playlist-form-edit.twig */
class __TwigTemplate_f8edbf4ff76b24c27efc8c3a74470ba6b3794d9967df1467cb438005676d9d55 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "playlist-form-edit.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("form-base.twig", "playlist-form-edit.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        echo __("Edit Playlist");
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
        echo ", \$(\"#playlistEditForm\").submit()
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
            <form id=\"playlistEditForm\" class=\"XiboForm form-horizontal playlistForm\" method=\"put\" action=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "playlistId", [], "any", false, false, false, 85)]), "html", null, true);
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
            echo __("Current Folder");
            echo "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 97
            echo __("Move to Selected Folder:");
            echo "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 99
            echo __("Select Folder");
            echo "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>
                        ";
            // line 103
            echo twig_call_macro($macros["forms"], "macro_hidden", ["folderId", twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "folderId", [], "any", false, false, false, 103)], 103, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 105
        echo "
                        ";
        // line 106
        ob_start(function () { return ''; });
        echo __("Name");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("The Name of the Playlist - (1 - 50 characters)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "name", [], "any", false, false, false, 108), ($context["helpText"] ?? null)], 108, $context, $this->getSourceContext());
        echo "

                        ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 110)) {
            // line 111
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            echo "                            ";
            ob_start(function () { return ''; });
            echo __("Tags for this Playlist - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 113
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "tags", [], "any", false, false, false, 113), ($context["helpText"] ?? null), "tags-with-value"], 113, $context, $this->getSourceContext());
            echo "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 117
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 118, $context, $this->getSourceContext());
            echo "

                            <div id=\"tagValueContainer\">
                                ";
            // line 121
            ob_start(function () { return ''; });
            echo __("Tag value");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            echo "                                ";
            ob_start(function () { return ''; });
            echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 123
            echo "                                ";
            echo twig_call_macro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 123, $context, $this->getSourceContext());
            echo "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 127
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            echo "</p>
                            </div>
                        ";
        }
        // line 130
        echo "
                        ";
        // line 131
        ob_start(function () { return ''; });
        echo __("Dynamic?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Is the Playlist to have Library media assignments managed automatically by the CMS based on filter criteria? Set a filter on the next tab.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_checkbox", ["isDynamic", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "isDynamic", [], "any", false, false, false, 133), ($context["helpText"] ?? null)], 133, $context, $this->getSourceContext());
        echo "

                        ";
        // line 135
        ob_start(function () { return ''; });
        echo __("Enable Playlist Stats Collection?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Enable the collection of Proof of Play statistics for this Playlist. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "
                        ";
        // line 138
        ob_start(function () { return ''; });
        echo __("Off");
        $context["offOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("On");
        $context["onOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        ob_start(function () { return ''; });
        echo __("Inherit");
        $context["inheritOption"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        echo "                        ";
        $context["options"] = [0 => ["id" => "Off", "value" =>         // line 142
($context["offOption"] ?? null)], 1 => ["id" => "On", "value" =>         // line 143
($context["onOption"] ?? null)], 2 => ["id" => "Inherit", "value" =>         // line 144
($context["inheritOption"] ?? null)]];
        // line 146
        echo "                        ";
        echo twig_call_macro($macros["forms"], "macro_dropdown", ["enableStat", "single", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "enableStat", [], "any", false, false, false, 146), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 146, $context, $this->getSourceContext());
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"populate\">
                        <div class=\"dynamic-message\">
                            ";
        // line 150
        $context["message"] = __("Populate with Library Media matching the criteria below and automatically maintain the Playlist.");
        // line 151
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 151, $context, $this->getSourceContext());
        echo "

                            <div class=\"widget\">
                                <div class=\"widget-title\">";
        // line 154
        echo __("Library Media");
        echo "</div>
                                <div class=\"widget-body\">
                                    ";
        // line 156
        ob_start(function () { return ''; });
        echo __("Name filter");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_inputWithLogicalOperator", ["filterMediaName", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaName", [], "any", false, false, false, 157), "", "", "", "", twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaNameLogicalOperator", [], "any", false, false, false, 157)], 157, $context, $this->getSourceContext());
        echo "

                                    ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 159)) {
            // line 160
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Tag filter");
            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 161
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("Exact match?");
            $context["exactTagTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 162
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("When filtering by multiple Tags, which logical operator should be used?");
            $context["logicalOperatorTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 163
            echo "                                        ";
            ob_start(function () { return ''; });
            echo __("A comma separated set of tags run against the Display tag to determine membership.");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 164
            echo "                                        ";
            echo twig_call_macro($macros["forms"], "macro_inputWithTags", ["filterMediaTag", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaTags", [], "any", false, false, false, 164), ($context["helpText"] ?? null), "", null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "filterExactTags", [], "any", false, false, false, 164), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "filterMediaTagsLogicalOperatorTags", [], "any", false, false, false, 164)], 164, $context, $this->getSourceContext());
            echo "
                                    ";
        }
        // line 166
        echo "
                                    ";
        // line 167
        ob_start(function () { return ''; });
        echo __("Max number of Items");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo "                                    ";
        ob_start(function () { return ''; });
        echo __("The upper limit on number of Media items that can be dynamically assigned to this Playlist");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        echo "                                    ";
        echo twig_call_macro($macros["forms"], "macro_number", ["maxNumberOfItems", ($context["title"] ?? null), twig_get_attribute($this->env, $this->source, ($context["playlist"] ?? null), "maxNumberOfItems", [], "any", false, false, false, 169), ($context["helpText"] ?? null), "dynamic-message", "", "", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", [], "any", false, false, false, 169)], 169, $context, $this->getSourceContext());
        echo "

                                    <div class=\"XiboData card pt-3\">
                                        <table id=\"playlistLibraryMedia\" class=\"table table-striped\" style=\"width:100%\">
                                            <thead>
                                            <tr>
                                                <th>";
        // line 175
        echo __("ID");
        echo "</th>
                                                <th>";
        // line 176
        echo __("Name");
        echo "</th>
                                                <th>";
        // line 177
        echo __("Type");
        echo "</th>
                                                ";
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.tagging"], "method", false, false, false, 178)) {
            echo "<th>";
            echo __("Tags");
            echo "</th>";
        }
        // line 179
        echo "                                                <th>";
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

                        <div class=\"static-message\">
                            ";
        // line 192
        $context["message"] = __("Filter options are not available on a Playlist which isn't dynamic.");
        // line 193
        echo "                            ";
        echo twig_call_macro($macros["forms"], "macro_message", [($context["message"] ?? null)], 193, $context, $this->getSourceContext());
        echo "
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
        return "playlist-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 193,  426 => 192,  409 => 179,  403 => 178,  399 => 177,  395 => 176,  391 => 175,  381 => 169,  376 => 168,  372 => 167,  369 => 166,  363 => 164,  358 => 163,  353 => 162,  348 => 161,  343 => 160,  341 => 159,  335 => 157,  331 => 156,  326 => 154,  319 => 151,  317 => 150,  309 => 146,  307 => 144,  306 => 143,  305 => 142,  303 => 141,  298 => 140,  293 => 139,  289 => 138,  286 => 137,  281 => 136,  277 => 135,  271 => 133,  266 => 132,  262 => 131,  259 => 130,  253 => 127,  245 => 123,  240 => 122,  236 => 121,  229 => 118,  225 => 117,  217 => 113,  212 => 112,  207 => 111,  205 => 110,  199 => 108,  194 => 107,  190 => 106,  187 => 105,  182 => 103,  175 => 99,  170 => 97,  161 => 91,  158 => 90,  156 => 89,  147 => 85,  142 => 83,  138 => 82,  133 => 79,  129 => 78,  88 => 39,  84 => 38,  77 => 36,  71 => 33,  66 => 32,  62 => 31,  57 => 28,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "playlist-form-edit.twig", "/srv/xibo-cms/views/playlist-form-edit.twig");
    }
}

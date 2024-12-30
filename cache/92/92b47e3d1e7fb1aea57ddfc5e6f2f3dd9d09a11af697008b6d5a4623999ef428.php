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

/* common.twig */
class __TwigTemplate_a9cc5e1d48f2dfe235d58819a4221c90cdb0b42bc1e4ac22f52f7d8b96b8239c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('javaScript', $context, $blocks);
    }

    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <script type=\"text/javascript\">

        // COMMON VARIABLES
        var serverMode = \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "SERVER_MODE", [], "any", false, false, false, 9), "html", null, true);
        echo "\";
        var playlistRegionColouring =  \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "REGION_OPTIONS_COLOURING", [], "any", false, false, false, 10), "html", null, true);
        echo "\";
        var libraryUpload = ";
        // line 11
        echo json_encode(($context["libraryUpload"] ?? null));
        echo ";
        var librarySearchUrl = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search.all"), "html", null, true);
        echo "\";
        var libraryAddUrl = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.add"), "html", null, true);
        echo "\";
        var imageDownloadUrl = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "?preview=1\";
        var defaultThumbnailUrl = '";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 15), "html", null, true);
        echo "theme/default/img/thumbs/placeholder.png';
        var uploadFormUpdateAllDefault = ";
        // line 16
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", [], "any", false, false, false, 16), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        var uploadFormDeleteOldDefault = ";
        // line 17
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", [], "any", false, false, false, 17), 1))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
        var tooltipDelay = {'show': 250, 'hide': 0};
        var playlistEditorUrl = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.timeline.form", ["id" => ":id"]), "html", null, true);
        echo "\";
        
        // Save navbar position
        var navbarPosition = 'vertical';
        ";
        // line 23
        $context["horizontalNav"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", [0 => "navigationMenuPosition", 1 => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method", false, false, false, 23)], "method", false, false, false, 23), "horizontal"));
        // line 24
        echo "        ";
        if (($context["horizontalNav"] ?? null)) {
            // line 25
            echo "            navbarPosition = 'horizontal';
        ";
        }
        // line 27
        echo "
        // MODULES LIST
        var modulesList = [];
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 31
            echo "            modulesList.push(";
            echo json_encode(twig_get_attribute($this->env, $this->source, $context["module"], "getModule", [], "method", false, false, false, 31));
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        // USERS LIST
        var usersList = [];
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "            usersList.push(";
            echo json_encode($context["user"]);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        // Structure with API URLs
        var urlsForApi = {
            layout: {
                designer: {
                    url: \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                get: {
                    url: \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getForm: {
                    url: \"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.background.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.edit.background", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                downloadBackground: {
                    url: \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.download.background", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                preview: {
                    url: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                checkout: {
                    url: \"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.checkout", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                publish: {
                    url: \"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                discard: {
                    url: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.discard", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                delete: {
                    url: \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                unlock: {
                    url: \"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.lock.release", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                list: {
                    url: \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
        echo "\"
                },
                status: {
                    url: \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.status", ["id" => ":id"]), "html", null, true);
        echo "\"
                },
                designer: {
                    url: \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.designer", ["id" => ":id"]), "html", null, true);
        echo "\"
                },
                schedule: {
                    url: \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.now.form", ["from" => "Layout", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveTemplate: {
                    url: \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.from.layout.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                publishForm: {
                    url: \"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.publish.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                discardForm: {
                    url: \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.discard.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                deleteForm: {
                    url: \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.delete.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addActionForm: {
                    url: \"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.add.form", ["source" => "layout", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addDrawer: {
                    url: \"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.add.drawer", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                saveDrawer: {
                    url: \"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.save.drawer", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                addThumbnail: {
                  url: '";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.thumbnail.add", ["id" => ":id"]), "html", null, true);
        echo "',
                  type: 'POST'
                }
            },
            region: {
                transform: {
                    url: \"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.position.all", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT',
                    useMainObjectId: true
                },
                getForm: {
                    url: \"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.edit", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                create: {
                    url: \"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.add", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST',
                    useMainObjectId: true
                },
                delete: {
                    url: \"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                preview: {
                    url: \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getPermissions:  {
                    url: \"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => "Region", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addActionForm: {
                    url: \"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.add.form", ["source" => "region", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            widget: {
                getForm: {
                    url: \"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveForm: {
                    url: \"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.edit", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                preview: {
                    url: \"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                delete: {
                    url: \"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.delete", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'DELETE'
                },
                getAudio: {
                    url: \"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveAudio:  {
                    url: \"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.audio", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getExpiry: {
                    url: \"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveExpiry:  {
                    url: \"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.expiry", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getTransition: {
                    url: \"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit.form", ["id" => ":id", "type" => ":type"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                saveTransition:  {
                    url: \"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.transition.edit", ["id" => ":id", "type" => ":type"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                },
                getPermissions:  {
                    url: \"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => "Widget", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addActionForm: {
                    url: \"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("action.add.form", ["source" => "widget", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                setRegion: {
                    url: \"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.set.region", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'PUT'
                }
            },
            library: {
                get: {
                    url: \"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                connectorImport: {
                    url: \"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.connector.import"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
            },
            playlist: {
                get: {
                    url: \"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                getForm: {
                    url: \"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.edit.form", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                addMedia: {
                    url: \"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.library.assign", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                addWidget: {
                    url: \"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.widget.add", ["type" => ":type", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                preview: {
                    url: \"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("region.preview", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                order: {
                    url: \"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.order", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'POST'
                }
            },
            user: {
                getPref: {
                    url: \"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    type: 'GET'
                },
                savePref: {
                    url: \"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        echo "\",
                    type: 'POST'
                },
                permissions: {
                    url: \"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.permissions.form", ["entity" => ":entity", "id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            },
            media: {
                isUsed: {
                    url: \"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.isused", ["id" => ":id"]), "html", null, true);
        echo "\",
                    type: 'GET'
                }
            }
        };

        ";
        // line 282
        echo "            // TRANSLATIONS
            var editorsTrans = {
                deleteTitle: \"";
        // line 284
        echo twig_escape_filter($this->env, __("Delete %obj%"), "js", null, true);
        echo "\",
                deleteMultipleTitle: \"";
        // line 285
        echo twig_escape_filter($this->env, __("Delete selected elements"), "js", null, true);
        echo "\",
                deleteConfirm: \"";
        // line 286
        echo twig_escape_filter($this->env, __("Are you sure? All changes related to this object will be erased"), "js", null, true);
        echo "\",
                yes: \"";
        // line 287
        echo twig_escape_filter($this->env, __("Yes"), "js", null, true);
        echo "\",
                no: \"";
        // line 288
        echo twig_escape_filter($this->env, __("No"), "js", null, true);
        echo "\",
                selectAll: \"";
        // line 289
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\",
                allChangesSaved: \"";
        // line 290
        echo twig_escape_filter($this->env, __("All changes saved!"), "js", null, true);
        echo "\",
                back: \"";
        // line 291
        echo twig_escape_filter($this->env, __("Back"), "js", null, true);
        echo "\",
                loadPropertyForObject: \"";
        // line 292
        echo twig_escape_filter($this->env, __("Load %prop% for %obj%"), "js", null, true);
        echo "\",
                loading: \"";
        // line 293
        echo twig_escape_filter($this->env, __("Loading"), "js", null, true);
        echo "\",
                resetTourNotification: \"";
        // line 294
        echo twig_escape_filter($this->env, __("Layout Designer Tour enabled!"), "js", null, true);
        echo "\",
                tooltipsDisabled: \"";
        // line 295
        echo twig_escape_filter($this->env, __("Tooltips disabled!"), "js", null, true);
        echo "\",
                tooltipsEnabled: \"";
        // line 296
        echo twig_escape_filter($this->env, __("Tooltips enabled!"), "js", null, true);
        echo "\",
                retire: \"";
        // line 297
        echo twig_escape_filter($this->env, __("Retire"), "js", null, true);
        echo "\",
                publish: \"";
        // line 298
        echo twig_escape_filter($this->env, __("Publish"), "js", null, true);
        echo "\",
                discard: \"";
        // line 299
        echo twig_escape_filter($this->env, __("Discard"), "js", null, true);
        echo "\",
                copyToClipboard: \"";
        // line 300
        echo twig_escape_filter($this->env, __("Copy to Clipboard"), "js", null, true);
        echo "\",
                couldNotCopy: \"";
        // line 301
        echo twig_escape_filter($this->env, __("Could not copy"), "js", null, true);
        echo "\",
                copied: \"";
        // line 302
        echo twig_escape_filter($this->env, __("Copied!"), "js", null, true);
        echo "\",
                invalidModule:  \"";
        // line 303
        echo twig_escape_filter($this->env, __("Module not enabled!"), "js", null, true);
        echo "\",
                timeline: \"";
        // line 304
        echo twig_escape_filter($this->env, __("Timeline"), "js", null, true);
        echo "\",
            };

            var uploadTrans = {
                uploadMessage: \"";
        // line 308
        echo twig_escape_filter($this->env, __("Upload media"), "js", null, true);
        echo "\",
                addFiles: \"";
        // line 309
        echo twig_escape_filter($this->env, __("Add files"), "js", null, true);
        echo "\",
                startUpload: \"";
        // line 310
        echo twig_escape_filter($this->env, __("Start upload"), "js", null, true);
        echo "\",
                cancelUpload: \"";
        // line 311
        echo twig_escape_filter($this->env, __("Cancel upload"), "js", null, true);
        echo "\",
                processing: \"";
        // line 312
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                viewLibrary: \"";
        // line 313
        echo twig_escape_filter($this->env, __("View Library"), "js", null, true);
        echo "\",
                widgetFromDt: \"";
        // line 314
        echo twig_escape_filter($this->env, __("Start time"), "js", null, true);
        echo "\",
                widgetToDt: \"";
        // line 315
        echo twig_escape_filter($this->env, __("End time"), "js", null, true);
        echo "\",
                widgetExpiryDates: \"";
        // line 316
        echo twig_escape_filter($this->env, __("Set Expiry Dates"), "js", null, true);
        echo "\",
                widgetExpiryDatesMessage: \"";
        // line 317
        echo twig_escape_filter($this->env, __("Use the check box to set Start and End dates and times for Widgets"), "js", null, true);
        echo "\",
                widgetFromDtMessage: \"";
        // line 318
        echo twig_escape_filter($this->env, __("Select the start time for this widget"), "js", null, true);
        echo "\",
                widgetToDtMessage: \"";
        // line 319
        echo twig_escape_filter($this->env, __("Select the end time for this widget"), "js", null, true);
        echo "\",
                deleteOnExpiry: \"";
        // line 320
        echo twig_escape_filter($this->env, __("Delete on Expiry"), "js", null, true);
        echo "\",
                deleteOnExpiryMessage: \"";
        // line 321
        echo twig_escape_filter($this->env, __("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        echo "\",
                applyToMedia: \"";
        // line 322
        echo twig_escape_filter($this->env, __("Delete from Library"), "js", null, true);
        echo "\",
                applyToMediaMessage: \"";
        // line 323
        echo twig_escape_filter($this->env, __("Remove file from the Media Library"), "js", null, true);
        echo "\",
                selectFolder: \"";
        // line 324
        echo twig_escape_filter($this->env, __("Select Folder"), "js", null, true);
        echo "\",
                selectFolderTitle: \"";
        // line 325
        echo twig_escape_filter($this->env, __("Change Current Folder location"), "js", null, true);
        echo "\",
                selectedFolder: \"";
        // line 326
        echo twig_escape_filter($this->env, __("Current Folder"), "js", null, true);
        echo ":\",
                selectedFolderTitle: \"";
        // line 327
        echo twig_escape_filter($this->env, __("Upload files to this Folder"), "js", null, true);
        echo ":\"
            };

            var deleteMenuTrans = {
                mainMessage: \"";
        // line 331
        echo twig_escape_filter($this->env, __("Are you sure you want to remove this %obj%? This action cannot be undone."), "js", null, true);
        echo "\",
                infoDeleteMessage: \"";
        // line 332
        echo twig_escape_filter($this->env, __("This widget is linked to Media in the Library which is also in use elsewhere. If this should be deleted then please do so from the Library page."), "js", null, true);
        echo "\",
                deleteMediaFromLibraryTitle: \"";
        // line 333
        echo twig_escape_filter($this->env, __("Also delete from the Library?"), "js", null, true);
        echo "\",
                deleteMediaFromLibraryMessage: \"";
        // line 334
        echo twig_escape_filter($this->env, __("This widget is linked to Media in the Library. Check this option to also delete that Media."), "js", null, true);
        echo "\",
                deleteMultipleObjects: \"";
        // line 335
        echo twig_escape_filter($this->env, __("Are you sure you want to remove these elements? This action cannot be undone."), "js", null, true);
        echo "\"
            };

            var contextMenuTrans = {
                editAudio: \"";
        // line 339
        echo twig_escape_filter($this->env, __("Edit Attached Audio"), "js", null, true);
        echo "\",
                editExpiry: \"";
        // line 340
        echo twig_escape_filter($this->env, __("Edit Expiry Dates"), "js", null, true);
        echo "\",
                editTransIn: \"";
        // line 341
        echo twig_escape_filter($this->env, __("Edit Transition In"), "js", null, true);
        echo "\",
                editTransOut: \"";
        // line 342
        echo twig_escape_filter($this->env, __("Edit Transition Out"), "js", null, true);
        echo "\",
                editPermissions: \"";
        // line 343
        echo twig_escape_filter($this->env, __("Edit Sharing"), "js", null, true);
        echo "\",
                moveLeft: \"";
        // line 344
        echo twig_escape_filter($this->env, __("Move one step left"), "js", null, true);
        echo "\",
                moveRight: \"";
        // line 345
        echo twig_escape_filter($this->env, __("Move one step right"), "js", null, true);
        echo "\",
                moveTopLeft: \"";
        // line 346
        echo twig_escape_filter($this->env, __("Move to the top left"), "js", null, true);
        echo "\",
                moveTopRight: \"";
        // line 347
        echo twig_escape_filter($this->env, __("Move to the top right"), "js", null, true);
        echo "\",
                delete: \"";
        // line 348
        echo twig_escape_filter($this->env, __("Delete"), "js", null, true);
        echo "\"
            };

            var propertiesPanelTrans = {
                width: \"";
        // line 352
        echo twig_escape_filter($this->env, __("Width"), "js", null, true);
        echo "\",
                height: \"";
        // line 353
        echo twig_escape_filter($this->env, __("Height"), "js", null, true);
        echo "\",
                scale: \"";
        // line 354
        echo twig_escape_filter($this->env, __("Scale"), "js", null, true);
        echo "\",
                targetDrawer: \"";
        // line 355
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\",
                selectATarget: \"";
        // line 356
        echo twig_escape_filter($this->env, __("Select a target region!"), "js", null, true);
        echo "\"
            };

            var toolbarTrans = {
                toolbarTagsMessage: \"";
        // line 360
        echo twig_escape_filter($this->env, __("%tagCount% tags"), "js", null, true);
        echo "\",
                deleteObject: \"";
        // line 361
        echo twig_escape_filter($this->env, __("Delete selected %object%"), "js", null, true);
        echo "\",
                selectMultipleWidgets: \"";
        // line 362
        echo twig_escape_filter($this->env, __("Select multiple widgets"), "js", null, true);
        echo "\",
                changeLayout: \"";
        // line 363
        echo twig_escape_filter($this->env, __("Change Layout"), "js", null, true);
        echo "\",
                options: \"";
        // line 364
        echo twig_escape_filter($this->env, __("Options"), "js", null, true);
        echo "\",
                displayTooltipsName: \"";
        // line 365
        echo twig_escape_filter($this->env, __("Tooltips?"), "js", null, true);
        echo "\",
                displayTooltipsTitle: \"";
        // line 366
        echo twig_escape_filter($this->env, __("Show/Hide Tooltips"), "js", null, true);
        echo "\",
                resetTour: \"";
        // line 367
        echo twig_escape_filter($this->env, __("Show tour!"), "js", null, true);
        echo "\",
                resetTourTitle: \"";
        // line 368
        echo twig_escape_filter($this->env, __("Show Layout Designer tour"), "js", null, true);
        echo "\",
                createNewTab: \"";
        // line 369
        echo twig_escape_filter($this->env, __("Library Media Search"), "js", null, true);
        echo "\",
                closeAllTabs: \"";
        // line 370
        echo twig_escape_filter($this->env, __("Close all tabs"), "js", null, true);
        echo "\",
                actions: \"";
        // line 371
        echo twig_escape_filter($this->env, __("Actions"), "js", null, true);
        echo "\",
                search: \"";
        // line 372
        echo twig_escape_filter($this->env, __("Search"), "js", null, true);
        echo "\",
                select: \"";
        // line 373
        echo twig_escape_filter($this->env, __("Select"), "js", null, true);
        echo "\",
                deselect: \"";
        // line 374
        echo twig_escape_filter($this->env, __("Deselect"), "js", null, true);
        echo "\",
                duration: \"";
        // line 375
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                preview: \"";
        // line 376
        echo twig_escape_filter($this->env, __("Preview media"), "js", null, true);
        echo "\",
                add: \"";
        // line 377
        echo twig_escape_filter($this->env, __("Add"), "js", null, true);
        echo "\",
                grab: \"";
        // line 378
        echo twig_escape_filter($this->env, __("Grab"), "js", null, true);
        echo "\",
                addAsFavourite: \"";
        // line 379
        echo twig_escape_filter($this->env, __("Mark as favourite"), "js", null, true);
        echo "\",
                addedToFavourites: \"";
        // line 380
        echo twig_escape_filter($this->env, __("Module added to favourites!"), "js", null, true);
        echo "\",
                moduleNavStart: \"";
        // line 381
        echo twig_escape_filter($this->env, __("Scroll to the start!"), "js", null, true);
        echo "\",
                moduleNavEnd: \"";
        // line 382
        echo twig_escape_filter($this->env, __("Scroll to the end!"), "js", null, true);
        echo "\",
                moduleNavLeft: \"";
        // line 383
        echo twig_escape_filter($this->env, __("Scroll left!"), "js", null, true);
        echo "\",
                moduleNavRight: \"";
        // line 384
        echo twig_escape_filter($this->env, __("Scroll right!"), "js", null, true);
        echo "\",
                removedFromFavourites: \"";
        // line 385
        echo twig_escape_filter($this->env, __("Module removed from favourites!"), "js", null, true);
        echo "\",
                upload: \"";
        // line 386
        echo twig_escape_filter($this->env, __("Upload new"), "js", null, true);
        echo "\",
                searchFilters: {
                    search: \"";
        // line 388
        echo twig_escape_filter($this->env, __("Search"), "js", null, true);
        echo "\",
                    name: \"";
        // line 389
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    tag: \"";
        // line 390
        echo twig_escape_filter($this->env, __("Tag"), "js", null, true);
        echo "\",
                    type: \"";
        // line 391
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    owner: \"";
        // line 392
        echo twig_escape_filter($this->env, __("Owner"), "js", null, true);
        echo "\",
                    orientation: \"";
        // line 393
        echo twig_escape_filter($this->env, __("Orientation"), "js", null, true);
        echo "\",
                    provider: \"";
        // line 394
        echo twig_escape_filter($this->env, __("Provider"), "js", null, true);
        echo "\",
                },
                orientationValues: {
                  all: \"";
        // line 397
        echo twig_escape_filter($this->env, __("All"), "js", null, true);
        echo "\",
                  landscape: \"";
        // line 398
        echo twig_escape_filter($this->env, __("Landscape"), "js", null, true);
        echo "\",
                  portrait: \"";
        // line 399
        echo twig_escape_filter($this->env, __("Portrait"), "js", null, true);
        echo "\"
                },
                providerValues: {
                  both: \"";
        // line 402
        echo twig_escape_filter($this->env, __("All"), "js", null, true);
        echo "\",
                  local: \"";
        // line 403
        echo twig_escape_filter($this->env, __("Local"), "js", null, true);
        echo "\",
                  remote: \"";
        // line 404
        echo twig_escape_filter($this->env, __("Remote"), "js", null, true);
        echo "\"
                },
                tabName: \"";
        // line 406
        echo twig_escape_filter($this->env, __("Library Search %tagId%"), "js", null, true);
        echo "\",
                tableHeader: {
                    toolsName: \"";
        // line 408
        echo twig_escape_filter($this->env, __("Tools"), "js", null, true);
        echo "\",
                    id: \"";
        // line 409
        echo twig_escape_filter($this->env, __("Id"), "js", null, true);
        echo "\",
                    name: \"";
        // line 410
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                    type: \"";
        // line 411
        echo twig_escape_filter($this->env, __("Type"), "js", null, true);
        echo "\",
                    tags: \"";
        // line 412
        echo twig_escape_filter($this->env, __("Tags"), "js", null, true);
        echo "\",
                    thumbnail: \"";
        // line 413
        echo twig_escape_filter($this->env, __("Thumbnail"), "js", null, true);
        echo "\"
                },
                queue: {
                    title: \"";
        // line 416
        echo twig_escape_filter($this->env, __("Media Add Queue"), "js", null, true);
        echo "\",
                    clear: \"";
        // line 417
        echo twig_escape_filter($this->env, __("Clear Queue"), "js", null, true);
        echo "\",
                    addToRegion: \"";
        // line 418
        echo twig_escape_filter($this->env, __("Add to Selected Region"), "js", null, true);
        echo "\",
                    addToPlaylist: \"";
        // line 419
        echo twig_escape_filter($this->env, __("Add to Playlist"), "js", null, true);
        echo "\",
                    selectRegion: \"";
        // line 420
        echo twig_escape_filter($this->env, __("Click in Region to Add"), "js", null, true);
        echo "\",
                    cancel: \"";
        // line 421
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\"
                },
                menuItems: {
                    widgetsName: \"";
        // line 424
        echo twig_escape_filter($this->env, __("Widgets"), "js", null, true);
        echo "\",
                    widgetsTitle: \"";
        // line 425
        echo twig_escape_filter($this->env, __("Layout Designer widgets"), "js", null, true);
        echo "\",
                    imageName: \"";
        // line 426
        echo twig_escape_filter($this->env, __("Image"), "js", null, true);
        echo "\",
                    imageTitle: \"";
        // line 427
        echo twig_escape_filter($this->env, __("Library image search"), "js", null, true);
        echo "\",
                    audioName: \"";
        // line 428
        echo twig_escape_filter($this->env, __("Audio"), "js", null, true);
        echo "\",
                    audioTitle: \"";
        // line 429
        echo twig_escape_filter($this->env, __("Library audio search"), "js", null, true);
        echo "\",
                    videoName: \"";
        // line 430
        echo twig_escape_filter($this->env, __("Video"), "js", null, true);
        echo "\",
                    videoTitle: \"";
        // line 431
        echo twig_escape_filter($this->env, __("Library video search"), "js", null, true);
        echo "\",
                    libraryName: \"";
        // line 432
        echo twig_escape_filter($this->env, __("Other"), "js", null, true);
        echo "\",
                    libraryTitle: \"";
        // line 433
        echo twig_escape_filter($this->env, __("Library other media search"), "js", null, true);
        echo "\"
                },
                window: {
                    drag: \"";
        // line 436
        echo twig_escape_filter($this->env, __("Move Window"), "js", null, true);
        echo "\",
                    close: \"";
        // line 437
        echo twig_escape_filter($this->env, __("Close Window"), "js", null, true);
        echo "\",
                    minimise: \"";
        // line 438
        echo twig_escape_filter($this->env, __("Minimise Window"), "js", null, true);
        echo "\",
                    newTab: \"";
        // line 439
        echo twig_escape_filter($this->env, __("New Tab"), "js", null, true);
        echo "\"
                },
                widgets: \"";
        // line 441
        echo twig_escape_filter($this->env, __("Widgets"), "js", null, true);
        echo "\",
                favourites: \"";
        // line 442
        echo twig_escape_filter($this->env, __("Favourites"), "js", null, true);
        echo "\",
                closeTab: \"";
        // line 443
        echo twig_escape_filter($this->env, __("Close content"), "js", null, true);
        echo "\",
                noWidgetsToShow: \"";
        // line 444
        echo twig_escape_filter($this->env, __("No widgets to display"), "js", null, true);
        echo "\",
                noMediaToShow: \"";
        // line 445
        echo twig_escape_filter($this->env, __("No media to display!"), "js", null, true);
        echo "\",
                showMore: \"";
        // line 446
        echo twig_escape_filter($this->env, __("Show more"), "js", null, true);
        echo "\",
                noShowMore: \"";
        // line 447
        echo twig_escape_filter($this->env, __("No more results for this filter!"), "js", null, true);
        echo "\",
                mediaPreview: {
                    close: \"";
        // line 449
        echo twig_escape_filter($this->env, __("Close Preview"), "js", null, true);
        echo "\",
                    change: \"";
        // line 450
        echo twig_escape_filter($this->env, __("Change window size"), "js", null, true);
        echo "\",
                    select: \"";
        // line 451
        echo twig_escape_filter($this->env, __("Select media to add"), "js", null, true);
        echo "\",
                    dimensions: \"";
        // line 452
        echo twig_escape_filter($this->env, __("Dimensions"), "js", null, true);
        echo "\",
                    size: \"";
        // line 453
        echo twig_escape_filter($this->env, __("Size"), "js", null, true);
        echo "\",
                },
            };

            var topbarTrans = {
                name: \"";
        // line 458
        echo twig_escape_filter($this->env, __("Name"), "js", null, true);
        echo "\",
                nameDetail: \"";
        // line 459
        echo twig_escape_filter($this->env, __("Layout name"), "js", null, true);
        echo "\",
                duration: \"";
        // line 460
        echo twig_escape_filter($this->env, __("Duration"), "js", null, true);
        echo "\",
                durationDetail: \"";
        // line 461
        echo twig_escape_filter($this->env, __("Layout duration"), "js", null, true);
        echo "\",
                dimensions: \"";
        // line 462
        echo twig_escape_filter($this->env, __("Dimensions"), "js", null, true);
        echo "\",
                dimensionsDetail: \"";
        // line 463
        echo twig_escape_filter($this->env, __("Layout dimensions"), "js", null, true);
        echo "\",
                layoutActions: \"";
        // line 464
        echo twig_escape_filter($this->env, __("Layout Actions:"), "js", null, true);
        echo "\",
                onlyMyLayouts: \"";
        // line 465
        echo twig_escape_filter($this->env, __("My Layouts?"), "js", null, true);
        echo "\"
            };

            var historyManagerTrans = {
                revert: {
                    saveForm: \"";
        // line 470
        echo twig_escape_filter($this->env, __("Revert %target% form save"), "js", null, true);
        echo "\",
                    order: \"";
        // line 471
        echo twig_escape_filter($this->env, __("Revert %target% order"), "js", null, true);
        echo "\",
                    transform: \"";
        // line 472
        echo twig_escape_filter($this->env, __("Revert %target% transformation"), "js", null, true);
        echo "\",
                    addWidget: \"";
        // line 473
        echo twig_escape_filter($this->env, __("Revert %target% creation"), "js", null, true);
        echo "\",
                    addMedia: \"";
        // line 474
        echo twig_escape_filter($this->env, __("Revert %target% assignment"), "js", null, true);
        echo "\",
                    create: \"";
        // line 475
        echo twig_escape_filter($this->env, __("Revert %target% creation"), "js", null, true);
        echo "\"
                }
            };

            var playlistAddFilesTrans = {
                uploadMessage: \"";
        // line 480
        echo twig_escape_filter($this->env, __("Replace"), "js", null, true);
        echo "\",
                addFiles: \"";
        // line 481
        echo twig_escape_filter($this->env, __("Add Replacement"), "js", null, true);
        echo "\",
                startUpload: \"";
        // line 482
        echo twig_escape_filter($this->env, __("Start Replace"), "js", null, true);
        echo "\",
                cancelUpload: \"";
        // line 483
        echo twig_escape_filter($this->env, __("Cancel Replace"), "js", null, true);
        echo "\",
                selectFolder: \"";
        // line 484
        echo twig_escape_filter($this->env, __("Select Folder"), "js", null, true);
        echo "\",
                selectFolderTitle: \"";
        // line 485
        echo twig_escape_filter($this->env, __("Change Current Folder location"), "js", null, true);
        echo "\",
                processing: \"";
        // line 486
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                updateInLayouts: {
                    title: \"";
        // line 488
        echo twig_escape_filter($this->env, __("Update this media in all layouts it is assigned to?"), "js", null, true);
        echo "\",
                    helpText: \"";
        // line 489
        echo twig_escape_filter($this->env, __("Note: It will only be updated in layouts you have permission to edit."), "js", null, true);
        echo "\"
                },
                deleteOldRevisions: {
                    title: \"";
        // line 492
        echo twig_escape_filter($this->env, __("Delete the old version?"), "js", null, true);
        echo "\",
                    helpText: \"";
        // line 493
        echo twig_escape_filter($this->env, __("Completely remove the old version of this media item if a new file is being uploaded."), "js", null, true);
        echo "\"
                },
                widgetExpiryDates: \"";
        // line 495
        echo twig_escape_filter($this->env, __("Set Expiry Dates"), "js", null, true);
        echo "\",
                widgetExpiryDatesMessage: \"";
        // line 496
        echo twig_escape_filter($this->env, __("Use the check box to set Start and End dates and times for Widgets"), "js", null, true);
        echo "\",
                widgetFromDtMessage: \"";
        // line 497
        echo twig_escape_filter($this->env, __("Select the start time for this widget"), "js", null, true);
        echo "\",
                widgetToDtMessage: \"";
        // line 498
        echo twig_escape_filter($this->env, __("Select the end time for this widget"), "js", null, true);
        echo "\",
                deleteOnExpiry: \"";
        // line 499
        echo twig_escape_filter($this->env, __("Delete on Expiry"), "js", null, true);
        echo "\",
                deleteOnExpiryMessage: \"";
        // line 500
        echo twig_escape_filter($this->env, __("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        echo "\",
                
            };

            var errorMessagesTrans = {
                error: \"";
        // line 505
        echo twig_escape_filter($this->env, __("ERROR"), "js", null, true);
        echo "\",
                loadingLayout: \"";
        // line 506
        echo twig_escape_filter($this->env, __("There was a problem loading the Layout!"), "js", null, true);
        echo "\",
                loadingPlaylist: \"";
        // line 507
        echo twig_escape_filter($this->env, __("There was a problem loading the Playlist!"), "js", null, true);
        echo "\",
                userSavePreferencesFailed: \"";
        // line 508
        echo twig_escape_filter($this->env, __("User save preferences failed!"), "js", null, true);
        echo "\",
                userLoadPreferencesFailed: \"";
        // line 509
        echo twig_escape_filter($this->env, __("User load preferences failed!"), "js", null, true);
        echo "\",
                libraryLoadFailed: \"";
        // line 510
        echo twig_escape_filter($this->env, __("Library load failed!"), "js", null, true);
        echo "\",
                formLoadFailed: \"";
        // line 511
        echo twig_escape_filter($this->env, __("Form load failed!"), "js", null, true);
        echo "\",
                revertFailed: \"";
        // line 512
        echo twig_escape_filter($this->env, __("Revert failed: %error%"), "js", null, true);
        echo "\",
                saveOrderFailed: \"";
        // line 513
        echo twig_escape_filter($this->env, __("Save order failed: %error%"), "js", null, true);
        echo "\",
                deleteFailed: \"";
        // line 514
        echo twig_escape_filter($this->env, __("Object delete failed: %error%"), "js", null, true);
        echo "\",
                saveAllChangesFailed: \"";
        // line 515
        echo twig_escape_filter($this->env, __("Save all changes failed!"), "js", null, true);
        echo "\",
                removeAllChangesFailed: \"";
        // line 516
        echo twig_escape_filter($this->env, __("Remove all changes failed!!"), "js", null, true);
        echo "\",
                importingMediaFailed: \"";
        // line 517
        echo twig_escape_filter($this->env, __("Importing media failed!!"), "js", null, true);
        echo "\",
                addMediaFailed: \"";
        // line 518
        echo twig_escape_filter($this->env, __("Add media failed: %error%"), "js", null, true);
        echo "\",
                addModuleFailed: \"";
        // line 519
        echo twig_escape_filter($this->env, __("Add module failed: %error%"), "js", null, true);
        echo "\",
                createRegionFailed: \"";
        // line 520
        echo twig_escape_filter($this->env, __("Create region failed: %error%"), "js", null, true);
        echo "\",
                listOrderNotChanged: \"";
        // line 521
        echo twig_escape_filter($this->env, __("List order not Changed!"), "js", null, true);
        echo "\",
                playlistOrderSave: \"";
        // line 522
        echo twig_escape_filter($this->env, __("Playlist save order failed!"), "js", null, true);
        echo "\",
                getFormFailed: \"";
        // line 523
        echo twig_escape_filter($this->env, __("Get form failed!"), "js", null, true);
        echo "\",
                transformRegionFailed: \"";
        // line 524
        echo twig_escape_filter($this->env, __("Transform region failed!"), "js", null, true);
        echo "\",
                previewFailed: \"";
        // line 525
        echo twig_escape_filter($this->env, __("Preview failed!"), "js", null, true);
        echo "\",
                noWidgetsNeedSaving: \"";
        // line 526
        echo twig_escape_filter($this->env, __("No widgets need saving!"), "js", null, true);
        echo "\"
            };

            var widgetStatusTrans = {
                setToStart: \"";
        // line 530
        echo twig_escape_filter($this->env, __("Set to start"), "js", null, true);
        echo "\",
                setToExpire: \"";
        // line 531
        echo twig_escape_filter($this->env, __("Set to expire"), "js", null, true);
        echo "\",
                expired: \"";
        // line 532
        echo twig_escape_filter($this->env, __("Expired"), "js", null, true);
        echo "\",
                startTime: \"";
        // line 533
        echo twig_escape_filter($this->env, __("Start Time"), "js", null, true);
        echo "\",
                endTime: \"";
        // line 534
        echo twig_escape_filter($this->env, __("End Time"), "js", null, true);
        echo "\"
            };

            var datasetQueryBuilderTranslations = {
                ascTitle: \"";
        // line 538
        echo twig_escape_filter($this->env, __("Ascending"), "js", null, true);
        echo "\",
                descTitle: \"";
        // line 539
        echo twig_escape_filter($this->env, __("Descending"), "js", null, true);
        echo "\",
                filterOptions: [
                    {
                        id: \"starts-with\",
                        value: \"";
        // line 543
        echo twig_escape_filter($this->env, __("starts with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"ends-with\",
                        value: \"";
        // line 546
        echo twig_escape_filter($this->env, __("ends with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"contains\",
                        value: \"";
        // line 549
        echo twig_escape_filter($this->env, __("contains"), "js", null, true);
        echo "\"
                    }, {
                        id: \"equals\",
                        value: \"";
        // line 552
        echo twig_escape_filter($this->env, __("equals"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-starts-with\",
                        value: \"";
        // line 555
        echo twig_escape_filter($this->env, __("does not start with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-ends-with\",
                        value: \"";
        // line 558
        echo twig_escape_filter($this->env, __("does not end with"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-contains\",
                        value: \"";
        // line 561
        echo twig_escape_filter($this->env, __("does not contain"), "js", null, true);
        echo "\"
                    }, {
                        id: \"not-equals\",
                        value: \"";
        // line 564
        echo twig_escape_filter($this->env, __("does not equal"), "js", null, true);
        echo "\"
                    }, {
                        id: \"greater-than\",
                        value: \"";
        // line 567
        echo twig_escape_filter($this->env, __("greater than"), "js", null, true);
        echo "\"
                    }, {
                        id: \"less-than\",
                        value: \"";
        // line 570
        echo twig_escape_filter($this->env, __("less than"), "js", null, true);
        echo "\"
                    }
                ],
                filterOperatorOptions: [
                    {
                        id: \"OR\",
                        value: \"";
        // line 576
        echo twig_escape_filter($this->env, __("Or"), "js", null, true);
        echo "\"
                    }, {
                        id: \"AND\",
                        value: \"";
        // line 579
        echo twig_escape_filter($this->env, __("And"), "js", null, true);
        echo "\"
                    }
                ]
            };

            var actionsTranslations = {
                tableHeaders: {
                    name: \"";
        // line 586
        echo twig_escape_filter($this->env, __("Actions"), "js", null, true);
        echo "\",
                    id: \"";
        // line 587
        echo twig_escape_filter($this->env, __("Id"), "js", null, true);
        echo "\",
                    ownerId: \"";
        // line 588
        echo twig_escape_filter($this->env, __("Owner Id"), "js", null, true);
        echo "\",
                    triggerType: \"";
        // line 589
        echo twig_escape_filter($this->env, __("Trigger Type"), "js", null, true);
        echo "\",
                    triggerCode: \"";
        // line 590
        echo twig_escape_filter($this->env, __("Trigger Code"), "js", null, true);
        echo "\",
                    actionType: \"";
        // line 591
        echo twig_escape_filter($this->env, __("Action Type"), "js", null, true);
        echo "\",
                    target: \"";
        // line 592
        echo twig_escape_filter($this->env, __("Target Type"), "js", null, true);
        echo "\",
                    targetId: \"";
        // line 593
        echo twig_escape_filter($this->env, __("Target"), "js", null, true);
        echo "\",
                    widgetId: \"";
        // line 594
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                    layoutCode: \"";
        // line 595
        echo twig_escape_filter($this->env, __("Layout Code"), "js", null, true);
        echo "\",
                },
                button: {
                    name: \"";
        // line 598
        echo twig_escape_filter($this->env, __("Add Action"), "js", null, true);
        echo "\",
                    description: \"";
        // line 599
        echo twig_escape_filter($this->env, __("Click to Add a new Action"), "js", null, true);
        echo "\"
                }
            };

            var menuBoardTranslations = {
                maxNumElementsPerZone: \"";
        // line 604
        echo twig_escape_filter($this->env, __("There can only be one category per zone!"), "js", null, true);
        echo "\",
            };
        ";
        // line 607
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "common.twig";
    }

    public function getDebugInfo()
    {
        return array (  1560 => 607,  1555 => 604,  1547 => 599,  1543 => 598,  1537 => 595,  1533 => 594,  1529 => 593,  1525 => 592,  1521 => 591,  1517 => 590,  1513 => 589,  1509 => 588,  1505 => 587,  1501 => 586,  1491 => 579,  1485 => 576,  1476 => 570,  1470 => 567,  1464 => 564,  1458 => 561,  1452 => 558,  1446 => 555,  1440 => 552,  1434 => 549,  1428 => 546,  1422 => 543,  1415 => 539,  1411 => 538,  1404 => 534,  1400 => 533,  1396 => 532,  1392 => 531,  1388 => 530,  1381 => 526,  1377 => 525,  1373 => 524,  1369 => 523,  1365 => 522,  1361 => 521,  1357 => 520,  1353 => 519,  1349 => 518,  1345 => 517,  1341 => 516,  1337 => 515,  1333 => 514,  1329 => 513,  1325 => 512,  1321 => 511,  1317 => 510,  1313 => 509,  1309 => 508,  1305 => 507,  1301 => 506,  1297 => 505,  1289 => 500,  1285 => 499,  1281 => 498,  1277 => 497,  1273 => 496,  1269 => 495,  1264 => 493,  1260 => 492,  1254 => 489,  1250 => 488,  1245 => 486,  1241 => 485,  1237 => 484,  1233 => 483,  1229 => 482,  1225 => 481,  1221 => 480,  1213 => 475,  1209 => 474,  1205 => 473,  1201 => 472,  1197 => 471,  1193 => 470,  1185 => 465,  1181 => 464,  1177 => 463,  1173 => 462,  1169 => 461,  1165 => 460,  1161 => 459,  1157 => 458,  1149 => 453,  1145 => 452,  1141 => 451,  1137 => 450,  1133 => 449,  1128 => 447,  1124 => 446,  1120 => 445,  1116 => 444,  1112 => 443,  1108 => 442,  1104 => 441,  1099 => 439,  1095 => 438,  1091 => 437,  1087 => 436,  1081 => 433,  1077 => 432,  1073 => 431,  1069 => 430,  1065 => 429,  1061 => 428,  1057 => 427,  1053 => 426,  1049 => 425,  1045 => 424,  1039 => 421,  1035 => 420,  1031 => 419,  1027 => 418,  1023 => 417,  1019 => 416,  1013 => 413,  1009 => 412,  1005 => 411,  1001 => 410,  997 => 409,  993 => 408,  988 => 406,  983 => 404,  979 => 403,  975 => 402,  969 => 399,  965 => 398,  961 => 397,  955 => 394,  951 => 393,  947 => 392,  943 => 391,  939 => 390,  935 => 389,  931 => 388,  926 => 386,  922 => 385,  918 => 384,  914 => 383,  910 => 382,  906 => 381,  902 => 380,  898 => 379,  894 => 378,  890 => 377,  886 => 376,  882 => 375,  878 => 374,  874 => 373,  870 => 372,  866 => 371,  862 => 370,  858 => 369,  854 => 368,  850 => 367,  846 => 366,  842 => 365,  838 => 364,  834 => 363,  830 => 362,  826 => 361,  822 => 360,  815 => 356,  811 => 355,  807 => 354,  803 => 353,  799 => 352,  792 => 348,  788 => 347,  784 => 346,  780 => 345,  776 => 344,  772 => 343,  768 => 342,  764 => 341,  760 => 340,  756 => 339,  749 => 335,  745 => 334,  741 => 333,  737 => 332,  733 => 331,  726 => 327,  722 => 326,  718 => 325,  714 => 324,  710 => 323,  706 => 322,  702 => 321,  698 => 320,  694 => 319,  690 => 318,  686 => 317,  682 => 316,  678 => 315,  674 => 314,  670 => 313,  666 => 312,  662 => 311,  658 => 310,  654 => 309,  650 => 308,  643 => 304,  639 => 303,  635 => 302,  631 => 301,  627 => 300,  623 => 299,  619 => 298,  615 => 297,  611 => 296,  607 => 295,  603 => 294,  599 => 293,  595 => 292,  591 => 291,  587 => 290,  583 => 289,  579 => 288,  575 => 287,  571 => 286,  567 => 285,  563 => 284,  559 => 282,  550 => 275,  541 => 269,  534 => 265,  527 => 261,  518 => 255,  511 => 251,  504 => 247,  497 => 243,  490 => 239,  483 => 235,  474 => 229,  467 => 225,  458 => 219,  451 => 215,  444 => 211,  437 => 207,  430 => 203,  423 => 199,  416 => 195,  409 => 191,  402 => 187,  395 => 183,  388 => 179,  381 => 175,  374 => 171,  365 => 165,  358 => 161,  351 => 157,  344 => 153,  336 => 148,  329 => 144,  322 => 140,  314 => 135,  305 => 129,  298 => 125,  291 => 121,  284 => 117,  277 => 113,  270 => 109,  263 => 105,  256 => 101,  249 => 97,  243 => 94,  237 => 91,  231 => 88,  224 => 84,  217 => 80,  210 => 76,  203 => 72,  196 => 68,  189 => 64,  182 => 60,  175 => 56,  168 => 52,  161 => 48,  154 => 44,  147 => 39,  138 => 37,  134 => 36,  129 => 33,  120 => 31,  116 => 30,  111 => 27,  107 => 25,  104 => 24,  102 => 23,  95 => 19,  86 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "common.twig", "/srv/xibo-cms/views/common.twig");
    }
}

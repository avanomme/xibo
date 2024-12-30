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

/* layout-designer-page.twig */
class __TwigTemplate_0c3a9cf3e595be5b04cf8d6904aed618e3da7a1a94ab68588edf9474f764ff06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-designer-page.twig", 25)->unwrap();
        // line 29
        $context["hideNavigation"] = "1";
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "layout-designer-page.twig", 24);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Layout Designer"), "html", null, true);
        echo " | ";
    }

    // line 31
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
    <!-- Editor structure -->
    <div id=\"layout-editor\" data-published-layout-id=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["publishedLayoutId"] ?? null), "html", null, true);
        echo "\" data-layout-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 34), "html", null, true);
        echo "\"></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

";
    }

    // line 42
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
        ";
        // line 44
        echo "        ";
        $this->loadTemplate("common.twig", "layout-designer-page.twig", 44)->display($context);
        // line 45
        echo "
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 46), "html", null, true);
        echo "dist/layoutEditor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 47), "html", null, true);
        echo "dist/playlistEditor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">

            ";
        // line 51
        echo "            ";
        // line 52
        echo "                ";
        // line 53
        echo "                var layoutEditorTrans = {
                    back: \"";
        // line 54
        echo __("Back");
        echo "\",
                    exit: \"";
        // line 55
        echo __("Exit");
        echo "\",
                    toggleFullscreen: \"";
        // line 56
        echo __("Toggle Fullscreen Mode");
        echo "\",
                    publishTitle: \"";
        // line 57
        echo __("Publish layout");
        echo "\",
                    discardTitle: \"";
        // line 58
        echo __("Discard draft");
        echo "\",
                    deleteTitle: \"";
        // line 59
        echo __("Delete layout");
        echo "\",
                    publishMessage: \"";
        // line 60
        echo __("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.");
        echo "\",
                    checkoutTitle: \"";
        // line 61
        echo __("Checkout");
        echo "\",
                    scheduleTitle: \"";
        // line 62
        echo __("Schedule Now");
        echo "\",
                    unlockTitle: \"";
        // line 63
        echo __("Unlock layout");
        echo "\",
                    saveTemplateTitle: \"";
        // line 64
        echo __("Save Template");
        echo "\",
                    readOnlyModeTitle: \"";
        // line 65
        echo __("Read Only");
        echo "\",
                    readOnlyModeMessage: \"";
        // line 66
        echo __("You are viewing this Layout in read only mode, checkout by clicking on this message or from the Options menu above!");
        echo "\",
                    lockedModeTitle: \"";
        // line 67
        echo __("Locked Layout");
        echo "\",
                    lockedModeMessage: \"";
        // line 68
        echo __("This layout is being locked by another user. Lock expires on: [expiryDate]");
        echo "\",
                    checkoutMessage: \"";
        // line 69
        echo __("Layout is not editable, please checkout!");
        echo "\",
                    unlockMessage: \"";
        // line 70
        echo __("The current layout will be unlocked to other users. You will also be redirected to the Layouts page");
        echo "\",
                    viewModeTitle: \"";
        // line 71
        echo __("View");
        echo "\",
                    regionEditModeMessage: \"";
        // line 72
        echo __("Editing Regions");
        echo "\",
                    welcomeModalMessage: \"";
        // line 73
        echo __("This Layout is Published and cannot be edited. You can checkout the Layout for editing below, or continue to view it in a read only mode.");
        echo "\"
                };

                var viewerTrans = {
                    inlineEditor: \"";
        // line 77
        echo __("Inline Editor");
        echo "\",
                    nextWidget: \"";
        // line 78
        echo __("Next widget");
        echo "\",
                    previousWidget: \"";
        // line 79
        echo __("Previous widget");
        echo "\"
                };

                var timelineTrans = {
                    zoomIn: \"";
        // line 83
        echo __("Zoom in");
        echo "\",
                    zoomOut: \"";
        // line 84
        echo __("Zoom out");
        echo "\",
                    resetZoom: \"";
        // line 85
        echo __("Reset zoom");
        echo "\",
                    zoomDelta: \"";
        // line 86
        echo __("Visible area time span");
        echo "\",
                    hiddenTimeruler: \"";
        // line 87
        echo __("Zoom out to see timeruler!");
        echo "\",
                    emptyTimeline: \"";
        // line 88
        echo __("No Regions: Add a Region to start creating content by clicking here or the Edit Layout icon below!");
        echo "\",
                    zoomFindSelected: \"";
        // line 89
        echo __("Scroll to selected widget");
        echo "\",
                    startTime: \"";
        // line 90
        echo __("Visible area start time");
        echo "\",
                    endTime: \"";
        // line 91
        echo __("Visible area end time");
        echo "\",
                    layoutName: \"";
        // line 92
        echo __("Layout name");
        echo "\",
                    layoutDuration: \"";
        // line 93
        echo __("Layout duration");
        echo "\",
                    layoutDimensions: \"";
        // line 94
        echo __("Layout dimensions");
        echo "\",
                    emptyRegion: \"";
        // line 95
        echo __("Empty Region");
        echo "\",
                    addToThisPosition: \"";
        // line 96
        echo __("Add to this position");
        echo "\",
                    hiddenContentInWidget: \"";
        // line 97
        echo __("Zoom in to see more details!");
        echo "\",
                    editRegion: \"";
        // line 98
        echo __("Edit region");
        echo "\",
                    openRegionAsPlaylist: \"";
        // line 99
        echo __("Open as playlist");
        echo "\",
                    widgetActions: \"";
        // line 100
        echo __("Widget Actions:");
        echo "\",
                    regionActions: \"";
        // line 101
        echo __("Region Actions:");
        echo "\"
                };

                var bottombarTrans = {
                    edit: \"";
        // line 105
        echo __("Edit layout regions");
        echo "\",
                    addRegion: \"";
        // line 106
        echo __("Add");
        echo "\",
                    addRegionDesc: \"";
        // line 107
        echo __("Add a new region");
        echo "\",
                    deleteRegion: \"";
        // line 108
        echo __("Delete region");
        echo "\",
                    undo: \"";
        // line 109
        echo __("Undo");
        echo "\",
                    undoDesc: \"";
        // line 110
        echo __("Revert last change");
        echo "\",
                    close: \"";
        // line 111
        echo __("Close");
        echo "\",
                    closeDesc: \"";
        // line 112
        echo __("Return to Layout View");
        echo "\",
                    save: \"";
        // line 113
        echo __("Save");
        echo "\",
                    saveDesc: \"";
        // line 114
        echo __("Save changes");
        echo "\",
                    backToLayout: \"";
        // line 115
        echo __("Go back to Layout view");
        echo "\",
                    saveEditorChanges: \"";
        // line 116
        echo __("Save editor changes");
        echo "\",
                    playPreviewLayout: \"";
        // line 117
        echo __("Play Layout preview");
        echo "\",
                    playPreviewLayoutPOTitle: \"";
        // line 118
        echo __("Preview stopped!");
        echo "\",
                    playPreviewLayoutPOMessage: \"";
        // line 119
        echo __("Click to Play again");
        echo "\",
                    editLayout: \"";
        // line 120
        echo __("Edit Layout");
        echo "\",
                    stopPreviewLayout: \"";
        // line 121
        echo __("Stop Layout preview");
        echo "\",
                    nextWidget: \"";
        // line 122
        echo __("Next widget");
        echo "\",
                    previousWidget: \"";
        // line 123
        echo __("Previous widget");
        echo "\",
                    tools: {
                        region: {
                            name: \"";
        // line 126
        echo twig_escape_filter($this->env, __("Region"), "js", null, true);
        echo "\",
                            description: \"";
        // line 127
        echo twig_escape_filter($this->env, __("Add a Region"), "js", null, true);
        echo "\"
                        },
                        audio: {
                            name: \"";
        // line 130
        echo twig_escape_filter($this->env, __("Audio"), "js", null, true);
        echo "\",
                            description: \"";
        // line 131
        echo twig_escape_filter($this->env, __("Upload Audio files to assign to Widgets"), "js", null, true);
        echo "\"
                        },
                        expiry: {
                            name: \"";
        // line 134
        echo twig_escape_filter($this->env, __("Expiry Dates"), "js", null, true);
        echo "\",
                            description: \"";
        // line 135
        echo twig_escape_filter($this->env, __("Enter start and end times for Widgets"), "js", null, true);
        echo "\"
                        },
                        transitionIn: {
                            name: \"";
        // line 138
        echo twig_escape_filter($this->env, __("Transition In"), "js", null, true);
        echo "\",
                            description: \"";
        // line 139
        echo twig_escape_filter($this->env, __("Apply a Transition type for the start of a media item"), "js", null, true);
        echo "\"
                        },
                        transitionOut: {
                            name: \"";
        // line 142
        echo twig_escape_filter($this->env, __("Transition Out"), "js", null, true);
        echo "\",
                            description: \"";
        // line 143
        echo twig_escape_filter($this->env, __("Apply a Transition type for the end of a media item"), "js", null, true);
        echo "\"
                        },
                        permissions: {
                            name: \"";
        // line 146
        echo twig_escape_filter($this->env, __("Sharing"), "js", null, true);
        echo "\",
                            description: \"";
        // line 147
        echo twig_escape_filter($this->env, __("Set View, Edit and Delete Sharing for Widgets and Regions"), "js", null, true);
        echo "\"
                        }
                    }
                };

                var drawerTrans = {
                    title: \"";
        // line 153
        echo __("Drawer");
        echo "\",
                    search: \"";
        // line 154
        echo __("Search");
        echo "\",
                    emptyDrawer: \"";
        // line 155
        echo __("Add widgets to be used as targets in actions");
        echo "\",
                    notInitEmptyDrawer: \"";
        // line 156
        echo __("Drawer is empty!");
        echo "\",
                    toggleDrawer: \"";
        // line 157
        echo __("Toggle drawer");
        echo "\",
                    widgetActions: \"";
        // line 158
        echo __("Widget Actions:");
        echo "\",
                    noTargetRegion: \"";
        // line 159
        echo __("No Target");
        echo "\",
                    noTargetRegionHelp: \"";
        // line 160
        echo __("Please select a target region");
        echo "\"
                };
            ";
        // line 163
        echo "        </script>
        <script type=\"text/javascript\">
            /**
             * Setup the background form.
             */
            function backGroundFormSetup(dialog) {
                var \$backgroundImageId = \$('#backgroundImageId');
                var notFoundIcon = \$('#bg_not_found_icon');
                var backgroundImage = \$('#bg_image_image');
                var initialBackgroundImageId = \$backgroundImageId.val();
                var backgroundChanged = false;

                function backgroundImageChange() {
                    // Want to attach an onchange event to the drop down for the bg-image
                    var id = \$backgroundImageId.val();
                    var src;
                    var isNotDefined = [0, ''].indexOf(id) !== -1;

                    // Disable remove button if no image is defined
                    \$('#backgroundRemoveButton').toggleClass('disabled', isNotDefined);

                    // If the image is not defined
                    if (isNotDefined) {
                        // Show not found icon and hide image
                        notFoundIcon.show();
                        backgroundImage.hide();
                    } else {

                        // Hide not found icon and show image
                        notFoundIcon.hide();
                        backgroundImage.show();

                        // Replace image source
                        src = backgroundImage.data().url.replace(\":id\", id);
                        backgroundImage.attr(\"src\", src);
                    }

                    if (id !== initialBackgroundImageId) {
                        backgroundChanged = true;
                    }
                }

                function backgroundImageHandleDrop(mediaToAdd, fromProvider) {
                    if(fromProvider) {
                        lD.importFromProvider([mediaToAdd]).then((res) =>  {
                            \$backgroundImageId.val(res[0]).trigger('change');
                        }).catch(function() {
                            toastr.error(errorMessagesTrans.importingMediaFailed);
                        });
                    } else {
                        \$backgroundImageId.val(mediaToAdd).trigger('change');
                    }
                    // Deselect drop zones after adding
                    lD.toolbar.deselectCardsAndDropZones();
                }

                // Handle id change
                \$backgroundImageId.change(backgroundImageChange);

                // Call change on form load
                backgroundImageChange();

                // Bind to the background add and remove button click
                \$('#backgroundUploadButton').on('click', function(e) {
                    layoutEditBackgroundButtonClicked(e, dialog);
                });

                \$('#backgroundRemoveButton').on('click', function(e) {
                    if(!\$(this).hasClass('disabled')) {
                        \$backgroundImageId.val('').trigger('change');
                    }
                });

                // Handle droppable area
                \$('.background-image-add').droppable({
                    greedy: true,
                    tolerance: 'pointer',
                    accept: function(el) {
                        return (\$(el).data('type') === 'media' && \$(el).data('subType') === 'image');
                    },
                    drop: _.debounce(function(event, ui) {
                        var \$draggable = \$(ui.draggable[0]);
                        if(\$draggable.hasClass('from-provider')) {
                            backgroundImageHandleDrop(\$draggable.data('providerData'), true);
                        } else {
                            backgroundImageHandleDrop(\$draggable.data('mediaId'));
                        }
                    }, 200)
                });

                // Handle click to add
                \$('.background-image-drop').on('click', function() {
                    var selected = lD.toolbar.selectedQueue[0];
                    backgroundImageHandleDrop(selected, !(typeof selected == 'number'));
                });

                // Bind to the layout form submit
                \$(\"#layoutEditForm\").submit(function(e) {
                    e.preventDefault();

                    var form = \$(this);

                    // Submit via ajax - change the background color on success
                    \$.ajax({
                        type: form.attr(\"method\"),
                        url: form.attr(\"action\"),
                        cache: false,
                        dataType: \"json\",
                        data: \$(form).serialize(),
                        success: function(xhr, textStatus, error) {

                            XiboSubmitResponse(xhr, form);

                            if (xhr.success) {
                                var layout = \$(\"div#layout\");

                                if (layout.length > 0) {
                                    var color = form.find(\"#backgroundColor\").val();
                                    layout.data().backgroundColor = color;
                                    layout.css(\"background-color\", color);

                                    if (backgroundChanged)
                                        window.location.reload();
                                } else {
                                    // We assume we're on the layout page - call render
                                    // If we're not, table is a Chrome/Safari/FireBug global function
                                    if (backgroundChanged && typeof(table) !== 'undefined' && table.hasOwnProperty('ajax'))
                                        table.ajax.reload(null, false);
                                }
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            SystemMessage(xhr.responseText, false);
                        }
                    });
                })
            };

            /**
             * Layout edit background add image button
             * @param e the event
             * @param dialog the dialog
             */
            function layoutEditBackgroundButtonClicked(e, dialog) {
                e.preventDefault();

                // Open an upload form
                openUploadForm({
                    url: \$(e.target).data().addNewBackgroundUrl,
                    title: \"";
        // line 312
        echo __("Add Background Image");
        echo "\",
                    videoImageCovers: false,
                    buttons: {
                        main: {
                            label: \"";
        // line 316
        echo __("Done");
        echo "\",
                            className: \"btn-primary btn-bb-main\",
                            callback: function () {
                                XiboDialogClose();
                            }
                        }
                    },
                    templateOptions: {
                        multi: false,
                        trans: {
                            addFiles: \"";
        // line 326
        echo __("Browse/Add Image");
        echo "\",
                            startUpload: \"";
        // line 327
        echo __("Start Upload");
        echo "\",
                            cancelUpload: \"";
        // line 328
        echo __("Cancel Upload");
        echo "\"
                        },
                        upload: {
                            maxSize: ";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 331), "html", null, true);
        echo ",
                            maxSizeMessage: \"";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 332), "html", null, true);
        echo "\",
                            validExt: \"";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "validImageExt", [], "any", false, false, false, 333), "html", null, true);
        echo "\"
                        }
                    },
                    uploadDoneEvent: function (data) {
                        // Get the mediaId
                        var mediaId = data.result.files[0].mediaId;

                        // Create a hidden field with the mediaId
                        \$(\"#layoutEditForm\").append(\$(\"<input type='hidden' name='backgroundImageId' value='\" + mediaId + \"'/>\"));

                        var \$bgImagePreview = dialog.find(\"#bg_image_image\");
                        \$bgImagePreview
                            .prop(\"src\", \$bgImagePreview.data().url.replace(\":id\", mediaId))
                            .show();

                        dialog.find(\"#bg_not_found_icon\").hide();

                        XiboDialogClose();
                    }
                });
            }

            function layoutPublishFormOpen() {
            }
        </script>

        ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 360
            echo "            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["module"], "layoutDesignerJavaScript", [], "method", false, false, false, 360), ""))) {
                // line 361
                echo "                ";
                $this->loadTemplate((twig_get_attribute($this->env, $this->source, $context["module"], "layoutDesignerJavaScript", [], "method", false, false, false, 361) . ".twig"), "layout-designer-page.twig", 361)->display($context);
                // line 362
                echo "            ";
            }
            // line 363
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "
        ";
        // line 365
        $this->loadTemplate("region-designer-javascript.twig", "layout-designer-page.twig", 365)->display($context);
        // line 366
        echo "        ";
        $this->loadTemplate("action-designer-javascript.twig", "layout-designer-page.twig", 366)->display($context);
        // line 367
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout-designer-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 367,  737 => 366,  735 => 365,  732 => 364,  718 => 363,  715 => 362,  712 => 361,  709 => 360,  692 => 359,  663 => 333,  659 => 332,  655 => 331,  649 => 328,  645 => 327,  641 => 326,  628 => 316,  621 => 312,  470 => 163,  465 => 160,  461 => 159,  457 => 158,  453 => 157,  449 => 156,  445 => 155,  441 => 154,  437 => 153,  428 => 147,  424 => 146,  418 => 143,  414 => 142,  408 => 139,  404 => 138,  398 => 135,  394 => 134,  388 => 131,  384 => 130,  378 => 127,  374 => 126,  368 => 123,  364 => 122,  360 => 121,  356 => 120,  352 => 119,  348 => 118,  344 => 117,  340 => 116,  336 => 115,  332 => 114,  328 => 113,  324 => 112,  320 => 111,  316 => 110,  312 => 109,  308 => 108,  304 => 107,  300 => 106,  296 => 105,  289 => 101,  285 => 100,  281 => 99,  277 => 98,  273 => 97,  269 => 96,  265 => 95,  261 => 94,  257 => 93,  253 => 92,  249 => 91,  245 => 90,  241 => 89,  237 => 88,  233 => 87,  229 => 86,  225 => 85,  221 => 84,  217 => 83,  210 => 79,  206 => 78,  202 => 77,  195 => 73,  191 => 72,  187 => 71,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 57,  127 => 56,  123 => 55,  119 => 54,  116 => 53,  114 => 52,  112 => 51,  102 => 47,  94 => 46,  91 => 45,  88 => 44,  82 => 42,  69 => 34,  65 => 32,  61 => 31,  53 => 27,  48 => 24,  46 => 29,  44 => 25,  37 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-designer-page.twig", "/srv/xibo-cms/views/layout-designer-page.twig");
    }
}

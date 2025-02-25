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

/* user-welcome.twig */
class __TwigTemplate_7ff1db9b81c73a82ec3fb7005ddd9b270cf671644c3f0d12c0c216611fe5b566 extends Template
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
        echo "<script type=\"text/javascript\">

    ";
        // line 3
        $context["appName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "app_name"], "method", false, false, false, 3);
        // line 4
        echo "    ";
        $context["horizontalNav"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", [0 => "navigationMenuPosition", 1 => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", [0 => "NAVIGATION_MENU_POSITION", 1 => "vertical"], "method", false, false, false, 4)], "method", false, false, false, 4), "horizontal"));
        // line 5
        echo "
    \$(document).ready(function () {
        var layoutEditorTour, mainTour, authDisplayTour, schedulingTour, no_nav_template, next_template, final_template, end_tour_message;
        final_template = \"<div class='popover final_template popover-double-width tour' role='tooltip'><div class='arrow'></div><h3 class='popover-header'></h3><div class='popover-body'></div><div class='popover-navigation'><button class='btn btn-primary' data-role='backToWelcome'>";
        // line 8
        echo __("Go back to Welcome Page!");
        echo "</button><button class='btn btn-secondary' data-role='end'>";
        echo __("Close");
        echo "</button></div></div>\";
        final_template_2 = \"<div class='popover final_template_2 popover-double-width tour' role='tooltip'><div class='arrow'></div><h3 class='popover-header'></h3><div class='popover-body'></div><div class='popover-navigation'><button class='btn btn-secondary' data-role='end'>";
        // line 9
        echo __("End Tour");
        echo "</button></div></div>\";
        next_template = \"<div class='popover next_template popover-normal-width tour' role='tooltip'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-header'></h3><div class='popover-body'></div><div class='popover-navigation'><button class='btn btn-primary pull-right' data-role='next'>";
        // line 10
        echo __("Next");
        echo "</button></div></div>\";
        no_nav_template = \"<div class='popover no_nav_template popover-normal-width tour' role='tooltip'><div class='arrow'></div><button type='button' data-role='end' class='close padminus'>&times;</button><h3 class='popover-header'></h3><div class='popover-body'></div></div>\";
        end_tour_message = '";
        // line 12
        echo __("End Tour!");
        echo "';

        window.cmsTours = {
            mainTour: mainTour,
            authDisplayTour: authDisplayTour,
            schedulingTour: schedulingTour,
            layoutEditorTour: layoutEditorTour
        };

        /* 1 [mainTour] : Create contend tour that goes through the layout designer */
        var firstSteps = ";
        // line 22
        if (($context["horizontalNav"] ?? null)) {
            echo " // First steps for the mainTour based on the menu orientation
            [{
                element: \".navbar-nav:eq(0) > li:eq(0)\",
                placement: \"bottom\",
                content: \"";
            // line 26
            echo __("The CMS main menu allows for navigation to all key areas.");
            echo "\",
                template: next_template
            },
            { // 1
                element: '.navbar-nav:eq(0) > li:eq(2) a.dropdown-item[href=\"/layout/view\"]',
                placement: \"right\",
                content: \"";
            // line 32
            echo __("Start by clicking on <b>Layouts</b> under the Design section of the main menu.");
            echo "\",
                reflex: true,
                template: no_nav_template,
                onShow: function (tour) {
                    // Open dropdown
                    \$('.navbar-nav:eq(0) > li:eq(2) .dropdown-menu').addClass('show');
                }
            }];
        ";
        } else {
            // line 41
            echo "            [{
                element: \".sidebar-main\",
                placement: \"right\",
                boundary: \"window\",
                content: \"";
            // line 45
            echo __("The CMS main menu allows for navigation to all key areas.");
            echo "\",
                template: next_template
            },
            { // 1
                element: \"#sidebar-wrapper .sidebar-list:eq(3) a\",
                placement: \"right\",
                boundary: \"window\",
                content: \"";
            // line 52
            echo __("Start by clicking on <b>Layouts</b> under the Design section of the main menu.");
            echo "\",
                reflex: true,
                template: no_nav_template
            }];
        ";
        }
        // line 57
        echo "
        cmsTours.mainTour = new Tour({
            name: 'mainTour',
            debug: false,
            onModalHidden: function(tour, stepNumber) {
                // If the modal is closed in step 4. go to previous step ( 3 )
                // if the step was 5, go to next ( 6 )
                if(stepNumber == 4) {
                    return 3;
                } else if(stepNumber == 5) {
                    return 6;
                }

                return false;
            },
            steps: firstSteps.concat([
                {
                    element: '#layouts_wrapper #layouts',
                    placement: \"top\",
                    backdrop: true,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 5000
                    },
                    content: \"";
        // line 81
        echo __("This is the layout grid and from here is where you can add new and manage existing layouts.");
        echo "\",
                    template: next_template,
                    onElementUnavailableStep: 1
                },
                { // 3
                    element: \".widget-action-menu button.btn-success\",
                    placement: \"left\",
                    content: \"";
        // line 88
        echo __("Create a new layout by clicking on <b>Add Layout</b>");
        echo "\",
                    reflex: true,
                    template: no_nav_template,
                    onElementUnavailableStep: 1
                },
                {
                    element: \".modal-footer #layout-create-stepper-next-button\",
                    placement: \"left\",
                    content: \"";
        // line 96
        echo __("Select a layout template and press <b>Next</b>");
        echo "\",
                    reflex: true,
                    template: no_nav_template,
                    onElementUnavailableStep: 3
                },
                {
                    element: \"#name\",
                    placement: \"bottom\",
                    container: '.bootbox',
                    content: \"";
        // line 105
        echo __("Name your layout so you can easily identify it for scheduling.");
        echo "\",
                    reflex: \"click change\",
                    template: no_nav_template,
                    onElementUnavailableStep: 3
                },
                { // 6
                    element: \"#layout-create-stepper-next-button\",
                    container: '.bootbox',
                    placement: \"top\",
                    reflex: true,
                    content: \"";
        // line 115
        echo __("Press <b>Save</b>.");
        echo "\",
                    template: no_nav_template,
                    onElementUnavailableStep: 3
                },
                {
                    orphan: true,
                    delayOnElement: {
                        delayElement: \"#layout-editor\",
                        maxDelay: 10000
                    },
                    content: \"";
        // line 125
        echo __("This is the layout designer screen where you will add and configure content.");
        echo "\",
                    template: next_template
                },
                {
                    content: \"";
        // line 129
        echo __("A status indicator is shown to show you the current 'play' status of the layout.");
        echo "\",
                    element: \"#layout-editor #layout-info-status i\",
                    placement: \"right\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 5000
                    }
                },
                { // 9
                    content: \"";
        // line 139
        echo __("Hover over the status icon to see further information!");
        echo "\",
                    element: \"#layout-editor #layout-info-status i\",
                    placement: \"bottom\",
                    template: next_template
                },
                {
                    content: \"";
        // line 145
        echo __("The total duration of the layout will be displayed here in seconds.");
        echo "\",
                    element: \"#layout-editor #layoutInfo .layout-info-duration\",
                    placement: \"bottom\",
                    template: next_template
                },
                {
                    content: \"";
        // line 151
        echo __("This is the Layout View, where you can view your designs as you create them.");
        echo "\",
                    element: \"#layout-editor #layout-viewer-container\",
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template
                },
                { // 12
                    content: \"";
        // line 158
        echo __("Here is the Play button which you use to Preview your Layout designs to ensure that it will play as you intend.");
        echo "\",
                    element: \"#layout-editor #layout-editor-bottombar #play-btn\",
                    placement: \"bottom\",
                    template: next_template
                },
                {
                    content: \"";
        // line 164
        echo __("This edit icon will open the Edit Layout mode so you can add, position and resize Regions.");
        echo "\",
                    element: \"#layout-editor #layout-editor-bottombar #navigator-edit-btn\",
                    placement: \"bottom\",
                    template: next_template
                },
                {
                    content: \"";
        // line 170
        echo __("Use the Edit forms to configure all aspects of your Layout including Regions and Widgets.");
        echo "\",
                    element: \"#properties-panel\",
                    placement: \"left\",
                    backdrop: true,
                    template: next_template
                },
                { // 15
                    content: \"";
        // line 177
        echo __("This is the Layout Timeline which displays the the duration of individual Widgets and will give you an overview of how your media will play on the Layout.");
        echo "\",
                    element: \".timeline-panel\",
                    placement: \"top\",
                    backdrop: true,
                    boundary: \"window\",
                    template: next_template
                },
                {
                    content: \"";
        // line 185
        echo __("The Toolbar includes buttons for you to add media items straight from your Library, apply actions using the Tools menu and assign Widgets to your Layouts.");
        echo "\",
                    element: \"#layout-editor-toolbar nav .toolbar-menu-left\",
                    placement: \"right\",
                    template: next_template,
                    onNext: function (tour) {
                        // If navigator edit is on, go to next step
                        if (\$('#layout-navigator').css('display') == 'block') {
                            tour.goTo(18);
                            return false;
                        }
                    }
                },
                {
                    content: \"";
        // line 198
        echo __("Let's create a simple layout...Start by clicking on the edit icon.");
        echo "\",
                    element: \"#layout-editor-bottombar #navigator-edit-btn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                },
                { // 18
                    content: \"";
        // line 205
        echo __("Click on the Add button to create one Region!");
        echo "\",
                    element: \"#layout-editor-bottombar .navigator-navbar #add-btn\",
                    placement: \"top\",
                    template: no_nav_template,
                    reflex: true,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                },
                {
                    content: \"";
        // line 216
        echo __("Click anywhere inside the Region to select it so that we can edit.");
        echo "\",
                    element: '#layout-navigator div[data-type=\"region\"]:last:not(.selected-region)',
                    placement: \"bottom\",
                    reflex: true,
                    template: no_nav_template,
                    delay: 1000,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    onElementUnavailable: function (tour) {
                        // If region is already selected, go to next step
                        if (\$('#layout-navigator div[data-type=\"region\"]:last.selected-region').length > 0) {
                            tour.goTo(20);
                            return false;
                        }
                    }
                },
                {
                    content: \"";
        // line 235
        echo __("Grab the Region handle, and drag to resize.");
        echo "\",
                    element: '#layout-navigator div[data-type=\"region\"].selected-region .ui-resizable-se',
                    placement: \"bottom\",
                    reflex: \"mouseenter\",
                    template: no_nav_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 1000
                    },
                },
                { // 21
                    content: \"";
        // line 246
        echo __("Once positioned, click outside of the Region so that it's deselected or click the blue Save button on the Edit Layout form.");
        echo "\",
                    element: \"#properties-panel button[data-action='save']\",
                    placement: \"bottom\",
                    template: next_template,
                    delay: 1000,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 1000
                    }
                },
                { 
                    content: \"";
        // line 257
        echo __("Click on the back arrow to exit the edit mode and return to the Layout View.");
        echo "\",
                    element: \"#layout-viewer-container:visible #goBackBtn:visible, #layout-navigator:visible #goBackBtn:visible\",
                    placement: \"right\",
                    delay: 500,
                    reflex: true,
                    template: no_nav_template,
                    onElementUnavailable: function (tour) {
                        // If navigator edit is off, go to next step
                        if (\$('#layout-navigator').css('display') == 'none') {
                            tour.goTo(23);
                            return false;
                        }
                    }
                },
                {
                    container: '#layout-editor',
                    content: \"";
        // line 273
        echo __("You will now have an empty Region, resized and positioned on a default black background.");
        echo "\",
                    element: '#layout-timeline',
                    placement: \"bottom\",
                    template: next_template,
                    delay: 1000,
                    boundary: \"window\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                },
                { // 24
                    content: \"";
        // line 285
        echo __("Now let's change the background from black to a colour.");
        echo "\",
                    element: '#properties-panel',
                    placement: \"left\",
                    template: next_template,
                    onShown: function (tour) {
                        // If properties panel is not the right one, go to the leave edit mode step
                        if (\$('#properties-panel #layoutEditForm').length === 0) {
                            tour.goTo(22);
                            return false;
                        }

                        return true;
                    }
                },
                {
                    content: \"";
        // line 300
        echo __("Click in the Background Colour field on the Edit Layout form and select a colour using the colout picker.");
        echo "\",
                    element: '#properties-panel input#backgroundColor',
                    placement: \"left\",
                    boundary: \"window\",
                    template: no_nav_template,
                    reflex: 'click change'
                },
                {
                    content: \"";
        // line 308
        echo __("Click the Save button.");
        echo "\",
                    element: '#properties-panel button#save',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true
                },
                { // 27
                    content: \"";
        // line 315
        echo __("Let's add some content! Click the Widgets button on the toolbar to open.");
        echo "\",
                    element: \"#layout-editor-toolbar #btn-menu-0\",
                    delay: 500,
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If widgets are selected already, go to next step
                        if (\$('#layout-editor-toolbar #btn-menu-0.active').length > 0) {
                            tour.goTo(28);
                            return false;
                        }

                        return true;
                    }
                },
                {
                    content: \"";
        // line 332
        echo __("Scroll or use the search field to find the 'Text' Widget.");
        echo "\",
                    element: \"#layout-editor-toolbar #content-0 .toolbar-pane-container\",
                    placement: \"right\",
                    template: next_template,
                    boundary: \"window\",
                    delay: 500
                },
                {
                    content: \"";
        // line 340
        echo __("Add the Text Widget by using the 'Grab' option and dragging to the Region or click the '+' button to select then click in the target Region. Click Next after adding the Widget.");
        echo "\",
                    element: '#layout-editor-toolbar .toolbar-card[data-sub-type=\"text\"]',
                    boundary: \"window\",
                    placement: \"right\",
                    template: next_template,
                    onShown: function (tour) {
                        // Check if the text widget is into view
                        function isScrolledIntoView(elem, parent) {
                            var parentViewTop = \$(parent).offset().top;
                            var parentViewBottom = parentViewTop + \$(parent).height();

                            var elemTop = \$(elem).offset().top;
                            var elemBottom = elemTop + \$(elem).height();

                            return ((elemBottom <= parentViewBottom) && (elemTop >= parentViewTop));
                        }

                        // Go back if the element isn't still visible
                        if (!isScrolledIntoView('#layout-editor-toolbar .toolbar-card[data-sub-type=\"text\"]', '.toolbar-pane-container')){
                            tour.goTo(28);
                            return false;
                        }

                        return true;
                    },
                    next: 30
                },
                { // 30
                    content: \"";
        // line 368
        echo __("Open the timeline container by clicking here!");
        echo "\",
                    placement: \"top\",
                    template: no_nav_template,
                    element: \".timeline-panel .toggle-container .toggle\",
                    reflex: true,
                    onShown: function (tour) {
                        // If timeline is shown, go to next step
                        if (\$('.timeline-panel').hasClass('opened')) {
                            tour.goTo(31);
                            return false;
                        }
                    },
                    next: 31,
                },
                {
                    content: \"";
        // line 383
        echo __("The Timeline will now update and show that the Text Widget has been added.");
        echo "\",
                    element: '#layout-timeline',
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template,
                    onShown: function (tour) {
                        // If we don't have widget yet, got to the add step
                        if (\$('#layout-timeline .designer-widget').length === 0) {
                            tour.goTo(29);
                            return false;
                        }
                    },
                    next: 32
                },
                {
                    content: \"";
        // line 398
        echo __("We can now edit the Text Widget, Click on the Widget in the Timeline (it will go green once selected).");
        echo "\",
                    element: '#layout-timeline .designer-widget:first',
                    placement: \"top\",
                    template: next_template,
                    boundary: \"window\",
                    onShown: function (tour) {
                        // If the widget is selected, move to the next step
                        if (\$('#layout-timeline .designer-widget').hasClass('selected-widget')) {
                            tour.goTo(33);
                            return false;
                        }
                    },
                },
                { // 33
                    content: \"";
        // line 412
        echo __("Now click on the edit icon so we can easily include some text.");
        echo "\",
                    element: '#layout-viewer .fa-edit',
                    placement: \"right\",
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If properties panel is not the right one, go to previous step
                        if (\$('#properties-panel .form-title-widget').length === 0) {
                            tour.goTo(32);
                            return false;
                        }
                    },
                    reflex: true,
                    delay: 500
                },
                {
                    content: \"";
        // line 427
        echo __("Add / edit text and format using the inline editor. The thin visible line is showing your Region border. Ensure that any text remains within these lines.");
        echo "\",
                    element: '#layout-viewer .viewer-element .cke_editable',
                    placement: \"bottom\",
                    boundary: \"body\",
                    template: next_template,
                    delay: 500
                },
                { // 35
                    content: \"";
        // line 435
        echo __("Click outside the text box to save your changes.");
        echo "\",
                    orphan: true,
                    template: next_template,
                    delay: 500,
                    onShow: function (tour) {
                        // If the overlay is not visible, go to the next step
                        if(\$('#layout-editor.inline-edit-mode .custom-overlay:visible').length === 0) {
                            tour.goTo(36);
                            return false;
                        }

                        return true;
                    },
                },
                {
                    content: \"";
        // line 450
        echo __("You can optionally give this Widget a name for easier identification.");
        echo "\",
                    element: '#properties-panel input#name',
                    placement: \"left\",
                    template: no_nav_template,
                    boundary: \"window\",
                    reflex: 'click change',
                    onShown: function (tour) {
                        // If the overlay is still visible, go to the previous step
                        if(\$('#layout-editor.inline-edit-mode .custom-overlay:visible').length > 0) {
                            tour.goTo(35);
                            return false;
                        }
                    },
                },
                {
                    content: \"";
        // line 465
        echo __("Let's override the default time. Click in the Set a duration box.");
        echo "\",
                    element: '#properties-panel input#useDuration',
                    placement: \"left\",
                    template: no_nav_template,
                    boundary: \"window\",
                    reflex: true,
                    delay: 500
                },
                { // 38
                    content: \"";
        // line 474
        echo __("Enter a time in seconds to override the default.");
        echo "\",
                    element: '#properties-panel input#duration',
                    placement: \"left\",
                    template: no_nav_template,
                    boundary: \"window\",
                    reflex: 'click change',
                    delay: 500
                },
                {
                    content: \"";
        // line 483
        echo __("Click Save!");
        echo "\",
                    element: '#properties-panel button#save',
                    placement: \"left\",
                    template: no_nav_template,
                    reflex: true,
                    delay: 500,
                    onShown: function (tour) {
                        // If the input duration is not visible, go back to the checkbox step
                        if (!\$('#properties-panel input#duration').is(\":visible\")) {
                            tour.goTo(37);
                            return false;
                        }
                    }
                },
                {
                    content: \"";
        // line 498
        echo __("The Text Widget will now show the updated duration for the Region in the Timeline.");
        echo "\",
                    element: '#layout-timeline .designer-widget:first .widgetLabel .widgetDuration',
                    placement: \"top\",
                    boundary: \"window\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                },
                { // 41
                    content: \"";
        // line 509
        echo __("When happy with your Layout, you will need to set it to Publish before scheduling to Displays.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                {
                    content: \"";
        // line 514
        echo __("Do this by clicking on the menu on the top toolbar.");
        echo "\",
                    element: '#layout-editor-topbar li.navbar-submenu-options a#optionsContainerTop',
                    placement: \"left\",
                    reflex: true,
                    template: no_nav_template
                },
                {
                    content: \"";
        // line 521
        echo __("Select Publish!");
        echo "\",
                    element: '#layout-editor-topbar #publishLayout',
                    placement: \"left\",
                    reflex: true,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    template: no_nav_template
                },
                { // 44
                    element: '.bootbox .modal-content button.btn-bb-Publish',
                    placement: \"bottom\",
                    container: '.bootbox',
                    content: \"";
        // line 535
        echo __("You can Publish now or untick this option and provide your own Publish Date, confirm your selection by clicking Publish.");
        echo "\",
                    template: no_nav_template,
                    reflex: true,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                },
                {
                    content: \"";
        // line 544
        echo __("Success! Your Layout is now ready for to be scheduled to Displays / Display Groups!");
        echo "\",
                    orphan: true,
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"#layout-editor.view-mode .container-designer\",
                        maxDelay: 10000
                    }
                },
                {
                    title: \"";
        // line 553
        echo __("Ready for more?");
        echo "\",
                    content: \"";
        // line 554
        echo __("Go back to the Welcome page to learn more about other topics!");
        echo "\",
                    orphan: true,
                    template: final_template
                }
            ])
        });

        /* 2 [schedulingTour] : Scheduling tour */
        cmsTours.schedulingTour = new Tour({
            name: 'schedulingTour',
            debug: false,
            onModalHidden: function(tour, stepNumber) {
                // If the modal is closed between step 6 and 18, go to step 5 automaticaly, if the step was 19 go to next step
                if(stepNumber > 5 && stepNumber < 19) {
                    return 5;
                } else if(stepNumber == 19) {
                    return 20;
                }

                return false;
            },
            steps: [
                { // 0
                    content: \"";
        // line 577
        echo __("Schedule Layouts / Campaigns to tell the system when they should show and on what Display(s).");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                ";
        // line 581
        if (($context["horizontalNav"] ?? null)) {
            // line 582
            echo "                    {
                        element: '.navbar-nav:eq(0) > li:eq(1) a[href=\"/schedule/view\"]',
                        placement: \"right\",
                        content: \"";
            // line 585
            echo __("Start by clicking on Schedule on the main menu.");
            echo "\",
                        reflex: true,
                        template: no_nav_template,
                        onShow: function (tour) {
                            // Open dropdown
                            \$('.navbar-nav:eq(0) > li:eq(1) .dropdown-menu').addClass('show');
                        }
                    },
                ";
        } else {
            // line 594
            echo "                    {
                        element: \".sidebar-list:eq(0)\",
                        placement: \"right\",
                        boundary: \"window\",
                        content: \"";
            // line 598
            echo __("Start by clicking on Schedule on the main menu.");
            echo "\",
                        reflex: true,
                        template: no_nav_template
                    },
                ";
        }
        // line 603
        echo "                { // 2
                    element: '#CalendarContainer',
                    delayOnElement: {
                        delayElement: 'element',
                        maxDelay: 5000
                    },
                    placement: \"top\",
                    backdrop: true,
                    content: \"";
        // line 611
        echo __("This is the schedule view which will show the current month by default.");
        echo "\",
                    template: next_template
                },
                {
                    content: \"";
        // line 615
        echo __("Select the Display / Display Group from the list you want to schedule to.");
        echo "\",
                    element: \".xibo-calendar-controls #DisplayList + span\",
                    placement: \"right\",
                    reflex: 'click change',
                    template: no_nav_template
                },
                { // 4
                    content: \"";
        // line 622
        echo __("Any current schedules in the system will show in the calendar for the selected Display(s).");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                { 
                    element: '.xibo-calendar-controls button.XiboFormButton[href=\"/schedule/form/add\"]',
                    reflex: true,
                    placement: \"bottom\",
                    content: \"";
        // line 630
        echo __("Create a new schedule by clicking the Add Event button.");
        echo "\",
                    template: no_nav_template
                },
                { // 6
                    content: \"";
        // line 634
        echo __("Use the drop down to select the Event type to schedule.");
        echo "\",
                    element: \".bootbox #scheduleAddForm #eventTypeId\",
                    container: '.bootbox',
                    placement: \"top\",
                    template: next_template,
                    //onElementUnavailableStep: 5
                },
                {
                    element: '.bootbox #scheduleAddForm select[id=\"displayGroupIds[]\"] + span',
                    content: \"";
        // line 643
        echo __("Check to make sure the correct Display(s) have been selected.");
        echo "\",
                    placement: \"top\",
                    template: next_template,
                    onElementUnavailableStep: 5
                },
                { // 8
                    content: \"";
        // line 649
        echo __("Now you need to select Custom times or set to be Always showing. You can also select Dayparts from the main menu to create your own predefined chunks of time for selection.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                {
                    content: \"";
        // line 654
        echo __("Use the drop down to select the type of Dayparting needed for the Event.");
        echo "\",
                    element: \".bootbox #scheduleAddForm #dayPartId\",
                    container: '.bootbox',
                    placement: \"top\",
                    template: next_template,
                    onElementUnavailableStep: 10
                },
                { // 10
                    content: \"";
        // line 662
        echo __("Give a Start Time!");
        echo "\",
                    element: \".bootbox #scheduleAddForm .starttime-control .datePickerHelper\",
                    container: '.bootbox',
                    placement: \"top\",
                    reflex: 'focusout',
                    template: no_nav_template,
                    onElementUnavailableStep: 12
                },
                {
                    content: \"";
        // line 671
        echo __("and End Time!");
        echo "\",
                    element: \".bootbox #scheduleAddForm .endtime-control .datePickerHelper\",
                    container: '.bootbox',
                    placement: \"top\",
                    reflex: 'focusout',
                    template: no_nav_template,
                    onElementUnavailableStep: 12
                },
                { // 12
                    content: \"";
        // line 680
        echo __("If you selected an Always Daypart, you do not need to give start and end times.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                {
                    content: \"";
        // line 685
        echo __("Use the Layout / Campaign selector to pick the Layout / Campaign you want to show.");
        echo "\",
                    element: \".bootbox #scheduleAddForm .layout-control .select2-container\",
                    container: '.bootbox',
                    placement: \"top\",
                    template: next_template,
                    onElementUnavailableStep: 14
                },
                { // 14
                    content: \"";
        // line 693
        echo __("Enter a number to determine a Display Order when scheduling more than one Event to show at the same time.");
        echo "\",
                    element: \".bootbox #scheduleAddForm #displayOrder\",
                    container: '.bootbox',
                    placement: \"bottom\",
                    placement: \"top\",
                    template: next_template,
                    onElementUnavailableStep: 5,
                    delay: 500
                },
                {
                    content: \"";
        // line 703
        echo __("When left blank Events scheduled at the same time will be shown in fair rotation.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                { // 16
                    content: \"";
        // line 708
        echo __("Assign a Priority to tell the system that the Event needs to appear in precedence over other Events scheduled at the same time.");
        echo "\",
                    element: \".bootbox #scheduleAddForm #isPriority\",
                    container: '.bootbox',
                    placement: \"top\",
                    template: next_template,
                    onElementUnavailableStep: 5
                },
                {
                    content: \"";
        // line 716
        echo __("A higher Priority number will take precedence over Priorities with a lower number.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                { // 18
                    content: \"";
        // line 721
        echo __("Run at CMS Time should only be used for Events you need to run according to the set Timezone for the CMS and not the local time set on the Player.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                { 
                    element: '.bootbox .save-button',
                    content: \"";
        // line 727
        echo __("Save!");
        echo "\",
                    container: '.bootbox',
                    placement: \"top\",
                    template: no_nav_template,
                    onShow: function() {
                        // Scroll to save button
                        if(\$('.bootbox .save-button').length > 0) {
                            \$('.bootbox').animate({ scrollTop: \$('.bootbox .save-button').offset().top }, 500);
                        }
                    },
                    onElementUnavailableStep: 5
                },
                { // 20
                    content: \"";
        // line 740
        echo __("The created Event icon will now be available to view in the calendar. Mouse over it to see further details and click on it to make any edits.");
        echo "\",
                    template: next_template,
                    orphan: true
                },
                {
                    content: \"";
        // line 745
        echo __("Now you have grasped the basics to create Layouts and Schedule them, take a look at the User Manual for top tips and further guidance!");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                { // 22
                    title: \"Ready for more?\",
                    content: \"";
        // line 751
        echo __("Go back to the Welcome page to learn more about other topics!");
        echo "\",
                    orphan: true,
                    template: final_template
                }
            ]
        });

        /* 3 [authDisplayTour] :  Authorise Displays tour */
        cmsTours.authDisplayTour = new Tour({
            name: 'authDisplayTour',
            debug: false,
            steps: [
                { // 0
                    content: \"";
        // line 764
        echo __("What is a Display? A Display is the connection from the Player to the CMS which groups content and schedule information.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                {
                    content: \"";
        // line 769
        echo __("Once the Player software has been installed, licensed (if applicable) and registered with the CMS");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                { // 2
                    content: \"";
        // line 774
        echo __("Displays can be connected to the CMS over the API using 'XMDS' and entering the CMS URL / Key or by using the Add Display (code) button in the CMS.");
        echo "\",
                    orphan: true,
                    template: next_template
                },
                ";
        // line 778
        if (($context["horizontalNav"] ?? null)) {
            // line 779
            echo "                    {
                        element: '.navbar-nav:eq(0) > li:eq(4) a[href=\"/display/view\"]',
                        placement: \"right\",
                        content: \"";
            // line 782
            echo __("Click on Displays under the Displays section of the main menu.");
            echo "\",
                        reflex: true,
                        template: no_nav_template,
                        onShow: function (tour) {
                            // Open dropdown
                            \$('.navbar-nav:eq(0) > li:eq(4) .dropdown-menu').addClass('show');
                        }
                    },
                ";
        } else {
            // line 791
            echo "                    {
                        element: \".sidebar-list a[href='/display/view']\",
                        boundary: \"window\",
                        placement: \"right\",
                        content: \"";
            // line 795
            echo __("Click on Displays under the Displays section of the main menu.");
            echo "\",
                        reflex: true,
                        template: no_nav_template
                    },
                ";
        }
        // line 800
        echo "                { // 4
                    element: '.widget .XiboGrid #displays',
                    backdrop: true,
                    placement: 'top',
                    delayOnElement: {
                        delayElement: 'element',
                        maxDelay: 5000
                    },
                    content: \"";
        // line 808
        echo __("This is the Display grid which shows all Displays that have been added and registered.");
        echo "\",
                    template: next_template
                },
                {
                    element: 'button[href=\"/display/form/addViaCode\"]',
                    content: \"";
        // line 813
        echo __("The Add Display (code) button allows for connection to the CMS by providing a 6 character 'Activation Code' shown on the Player screen, for supported Players. Please refer to the documentation for more information.");
        echo "\",
                    template: next_template,
                    placement: \"left\"
                },
                { // 6
                    element: 'button#refreshGrid',
                    content: \"";
        // line 819
        echo __("If you have yet to complete the Player Installation you can do that now.  Click 'Refresh' once installation is complete to continue.");
        echo "\",
                    placement: \"bottom\",
                    template: next_template
                },
                { 
                    element: '#displays tbody tr:first td button.dropdown-toggle',
                    content: \"";
        // line 825
        echo __("Use the row menu for the Display!");
        echo "\",
                    reflex: true,
                    placement: \"left\",
                    template: no_nav_template
                },
                { // 8
                    element: '#displays tbody tr:first td div.dropdown-menu .display_button_authorise',
                    content: \"";
        // line 832
        echo __("Now select Authorise!");
        echo "\",
                    reflex: true,
                    placement: \"left\",
                    template: no_nav_template
                },
                { 
                    element: '.bootbox .save-button',
                    content: \"";
        // line 839
        echo __("Click Yes to confirm!");
        echo "\",
                    reflex: true,
                    container: '.bootbox',
                    placement: \"bottom\",
                    template: no_nav_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    onElementUnavailable: function() {
                        // Check if we have a toast success message
                        if(\$('.toast-success').length > 0) {
                            // Go to next step
                            cmsTours.authDisplayTour.next();
                        }
                    }
                },
                { // 10
                    element: '#displays tbody tr:first td button.dropdown-toggle',
                    content: \"";
        // line 858
        echo __("You may also need to select a Default Layout for your new Player to run, so that in the event you have no scheduled content, the Player will always have a Layout to show.");
        echo "\",
                    placement: \"left\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    }
                },
                { 
                    element: '#displays tbody tr:first td button.dropdown-toggle',
                    content: \"";
        // line 868
        echo __("Set this by using the row menu and selecting Default Layout, use the drop down to select the Layout to use.");
        echo "\",
                    placement: \"bottom\",
                    template: next_template
                },
                { // 12
                    title: \"Ready for more?\",
                    content: \"";
        // line 874
        echo __("Go back to the Welcome page to learn more about other topics!");
        echo "\",
                    orphan: true,
                    template: final_template
                }
            ]
        });

        /* 4 [layoutEditorTour] : Tour that runs within the layout designer tool */
        cmsTours.layoutEditorTour = new Tour({
            debug: false,
            name: 'layoutEditorTour',
            steps: [
                {
                    orphan: true,
                    content: \"";
        // line 888
        echo __("This is the layout designer screen where you will add and configure content. By default, your layout is in read-only mode, and needs to be checked out, to enable editing.");
        echo "\",
                    template: next_template,
                },
                { // 1
                    element: \"#layout-editor-toolbar #read-only-message\",
                    container: '#layout-editor-toolbar .container-toolbar',
                    reflex: true,
                    content: \"";
        // line 895
        echo __("Click on this message to checkout the Layout.");
        echo "\",
                    placement: \"top\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 1000
                    },
                    template: no_nav_template,
                    onElementUnavailableStep: 2
                },
                {
                    element: \"#layout-viewer-container\",
                    content: \"";
        // line 906
        echo __("This is the <b>Preview</b> window, that shows previews for layouts, regions and widgets.");
        echo "\",
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template
                },
                { // 3
                    content: \"";
        // line 912
        echo __("This is the <b>Editor</b>, where we can change layout properties, region options and assigned widgets.");
        echo "\",
                    element: \"#properties-panel\",
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template
                },
                { 
                    content: \"";
        // line 919
        echo __("Let's open the Navigator edit mode. Click on the edit button.");
        echo "\",
                    element: \"#layout-editor #layout-editor-bottombar #navigator-edit-btn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                },
                { // 5
                    element: '#layout-navigator',
                    placement: \"bottom\",
                    content: \"";
        // line 928
        echo __("This is the Navigator edit mode, where you can edit regions and change their properties.");
        echo "\",
                    template: next_template
                },
                {
                    content: \"";
        // line 932
        echo __("Click back to go back to the main editor.");
        echo "\",
                    element: \"#layout-navigator #goBackBtn\",
                    placement: \"top\",
                    reflex: true,
                    template: no_nav_template
                },
                { // 7
                    content: \"";
        // line 939
        echo __("This is the <b>Layout Timeline</b>, which shows the total layout duration as well as the duration of assigned media.");
        echo "\",
                    element: \"#layout-timeline\",
                    placement: \"bottom\",
                    backdrop: true,
                    template: next_template
                },
                {
                    content: \"";
        // line 946
        echo __("This is the <b>Toolbar</b>, used to interact with the layout designer.");
        echo "\",
                    element: \"#layout-editor-toolbar nav\",
                    placement: \"right\",
                    boundary: \"window\",
                    template: next_template
                },
                { // 9
                    content: \"";
        // line 953
        echo __("Use the Toolbar tabs to select <b>Widgets</b>");
        echo "\",
                    element: \"#layout-editor-toolbar #btn-menu-0\",
                    placement: \"right\",
                    reflex: true,
                    template: no_nav_template,
                    onShown: function (tour) {
                        // If widgets are selected already, go to next step
                        if (\$('#layout-editor-toolbar #btn-menu-0.active').length > 0) {
                            tour.goTo(10);
                            return false;
                        }
                    }
                },
                {
                    content: \"";
        // line 967
        echo __("These are the widgets you can add.");
        echo "\",
                    element: \"#layout-editor-toolbar #content-0 .toolbar-pane-container\",
                    placement: \"right\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 4000
                    },
                    template: next_template
                },
                { // 11
                    content: \"";
        // line 977
        echo __("You can take a look at how your layout will look on your displays by clicking on the Play button on the Preview window.");
        echo "\",
                    element: '#layout-editor-bottombar #play-btn',
                    placement: \"bottom\",
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    },
                    template: next_template
                },
                {
                    element: '#layout-editor-topbar li.navbar-submenu-options',
                    content: \"";
        // line 988
        echo __("When happy with your layout you will need to publish before being able to schedule to displays.");
        echo "\",
                    placement: \"bottom\",
                    template: next_template,
                    delayOnElement: {
                        delayElement: \"element\",
                        maxDelay: 2000
                    }
                },
                { // 13
                    title: \"Success!\",
                    content: \"";
        // line 998
        echo __("And that is how easy it is to use the layout designer. Ready for more? Jump into the User Manual for guidance and top tips!");
        echo "\",
                    orphan: true,
                    template: final_template_2
                }
            ]
        });

        // Handle back to welcome button click
        \$('body').on('click', '.tour button[data-role=\"backToWelcome\"]', function() {
            var tourPlaying = localStorage.getItem('tour_playing');
            cmsTours[tourPlaying].end();
            window.location.href = '";
        // line 1009
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("welcome.view"), "html", null, true);
        echo "';
        });

        // Fix for close button title: Add the title popup message with jquery
        \$('body').on('mouseenter', '.tour .close', function() {
            \$(this).attr('title', end_tour_message);
        });

        // Check if a tour was playing ( && not ended ) already and restart it
        var tourPlaying = localStorage.getItem('tour_playing');
        if(tourPlaying != '' && tourPlaying != null && localStorage.getItem(tourPlaying + '_end') != 'yes') {
            cmsTours[tourPlaying].start(Number(localStorage[tourPlaying + '_current_step']));
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "user-welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1393 => 1009,  1379 => 998,  1366 => 988,  1352 => 977,  1339 => 967,  1322 => 953,  1312 => 946,  1302 => 939,  1292 => 932,  1285 => 928,  1273 => 919,  1263 => 912,  1254 => 906,  1240 => 895,  1230 => 888,  1213 => 874,  1204 => 868,  1191 => 858,  1169 => 839,  1159 => 832,  1149 => 825,  1140 => 819,  1131 => 813,  1123 => 808,  1113 => 800,  1105 => 795,  1099 => 791,  1087 => 782,  1082 => 779,  1080 => 778,  1073 => 774,  1065 => 769,  1057 => 764,  1041 => 751,  1032 => 745,  1024 => 740,  1008 => 727,  999 => 721,  991 => 716,  980 => 708,  972 => 703,  959 => 693,  948 => 685,  940 => 680,  928 => 671,  916 => 662,  905 => 654,  897 => 649,  888 => 643,  876 => 634,  869 => 630,  858 => 622,  848 => 615,  841 => 611,  831 => 603,  823 => 598,  817 => 594,  805 => 585,  800 => 582,  798 => 581,  791 => 577,  765 => 554,  761 => 553,  749 => 544,  737 => 535,  720 => 521,  710 => 514,  702 => 509,  688 => 498,  670 => 483,  658 => 474,  646 => 465,  628 => 450,  610 => 435,  599 => 427,  581 => 412,  564 => 398,  546 => 383,  528 => 368,  497 => 340,  486 => 332,  466 => 315,  456 => 308,  445 => 300,  427 => 285,  412 => 273,  393 => 257,  379 => 246,  365 => 235,  343 => 216,  329 => 205,  319 => 198,  303 => 185,  292 => 177,  282 => 170,  273 => 164,  264 => 158,  254 => 151,  245 => 145,  236 => 139,  223 => 129,  216 => 125,  203 => 115,  190 => 105,  178 => 96,  167 => 88,  157 => 81,  131 => 57,  123 => 52,  113 => 45,  107 => 41,  95 => 32,  86 => 26,  79 => 22,  66 => 12,  61 => 10,  57 => 9,  51 => 8,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-welcome.twig", "/srv/xibo-cms/views/user-welcome.twig");
    }
}

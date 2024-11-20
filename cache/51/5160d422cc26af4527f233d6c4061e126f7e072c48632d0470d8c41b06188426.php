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

/* region-designer-javascript.twig */
class __TwigTemplate_66ffe3ce90989510d8216031b0d5cc1ad59cf6eeb6ed2128592bced7b65935a6 extends Template
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
        // line 23
        echo "<script type=\"text/javascript\">

    // Runs after form opens
    function regionFormEditOpen() {
        
        // Transition type affects the transition-group visibility
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#transitionType', ['.transition-group'], null, true);

        // Handle set region as fullscreen button
        // Get layout object
        var layout = lD.layout;
        var form = \$(this).find('form');
        var buttonText = form.find('#setFullScreenButton').html();

        // Replace button text tags
        if(buttonText) {
            form.find('#setFullScreenButton').html(buttonText.replace('[width]', layout.width).replace('[height]', layout.height));
        }

        // Handle click action
        form.find('#setFullScreenButton').click(function() {
            // Set position values to 0
            form.find('#top').val(0);
            form.find('#left').val(0);

            // Set dimensions values to be the same as the layout's
            form.find('#width').val(layout.width);
            form.find('#height').val(layout.height);

            formChangesRegion({
                'width': layout.width,
                'height': layout.height,
                'top': 0,
                'left': 0 
            });
        });
        
        form.find('#top, #left, #width, #height').on('change', function(){
            formChangesRegion();
        });

        form.find('#zIndex').on('change', function(){
            formChangesRegionZIndex();
        });

        regionChangesForm();
    }

    function formChangesRegion() {
        var app = lD;
        var layout = app.layout;
        var regionId = app.selectedObject.id;
        var form = \$(app.propertiesPanel.DOMObject).find('form');

        layout.regions[regionId].transform({
            'width': form.find('#width').val(),
            'height': form.find('#height').val(),
            'top': form.find('#top').val(),
            'left': form.find('#left').val()
        }, false);

        app.renderContainer(app.navigator);
    }

    function formChangesRegionZIndex() {
        var app = lD;
        var form = \$(app.propertiesPanel.DOMObject).find('form');
        var newZIndex = parseInt(form.find('#zIndex').val());

        app.navigator.DOMObject.find('#' + app.selectedObject.id).css('zIndex', newZIndex);
        app.selectedObject.zIndex = newZIndex;
    }

    function regionChangesForm() {
        var app = lD;
        var form = \$(app.propertiesPanel.DOMObject).find('form')
        
        // If form not loaded, prevent changes
        if(form.length == 0 || app.layout.regions[app.selectedObject.id] == undefined) {
            return;
        }
        
        var regionDimensions = app.layout.regions[app.selectedObject.id].dimensions;

        form.find('#top').val(regionDimensions.top);
        form.find('#left').val(regionDimensions.left);

        // Set dimensions values to be the same as the layout's
        form.find('#width').val(regionDimensions.width);
        form.find('#height').val(regionDimensions.height);
    }
</script>";
    }

    public function getTemplateName()
    {
        return "region-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "region-designer-javascript.twig", "/srv/xibo-cms/views/region-designer-javascript.twig");
    }
}

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

/* countdown-designer-javascript.twig */
class __TwigTemplate_49e12ab4e88ac63b890eea416ebda58c88e09a3f1faadc103ed0aed08daff49c extends Template
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
        echo "
<script type=\"text/javascript\">

    // Runs after form opens
    function countdown_form_edit_open() {
        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set countdown type input fields, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this), '#countdownType', ['.widget-duration-group', '.duration-group', '.date-group'], [1, 2, 3]);

        // Set override template field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this), '#overrideTemplate', '.template-override-controls', '.template-selector-control');
        
        // Set warning duration fields
        formHelpers.setupCheckboxInputFields(\$(this), '#useWarning', '.template-use-warning-controls', '');

        // Setup form Editor
        formHelpers.setupDualTypeTextArea(this, 'mainTemplate');

        // Setup template override
        formHelpers.setupTemplateOverriding(this, '#overrideTemplate', '#templateId', 
            {
                '#mainTemplate_advanced': 'defaultVisualEditor',
                '#mainTemplate': 'template',
                '#styleSheet': 'css',
                '#widgetOriginalWidth': 'widgetOriginalWidth',
                '#widgetOriginalHeight': 'widgetOriginalHeight'
            });
    }

    // Runs before form submit
    function countdown_form_edit_submit() {  
        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "countdown-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "countdown-designer-javascript.twig", "/srv/xibo-cms/modules/countdown-designer-javascript.twig");
    }
}

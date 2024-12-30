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

/* text-designer-javascript.twig */
class __TwigTemplate_a5ec412d592d8c57e633654c12f54ca1ad1afa0761be0d96b05f0b54c6bb140b extends Template
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

    // Runs after form open
    function text_form_edit_open() {

        // Set duration field, using the helper ()
        formHelpers.setupCheckboxInputFields(\$(this).find('form'), '#useDuration', '.duration-fields');

        // Set effect type input field, using the helper ()
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#effect', ['.effect-controls'], ['none'], true);

        // Setup form Editor
        formHelpers.setupDualTypeTextArea(this, 'ta_text', !\$(this).data('formEditorOnly'));

        // Tidy up colorpickers on modal close
        if(\$(this).hasClass('modal')) {
            \$(this).on(\"hide.bs.modal\", function(e) {
                if(e.namespace === 'bs.modal') {
                    // Remove colour pickers
                    destroyColorPicker(\$(this).find(\".XiboColorPicker\"));
                }
            });
        }
    }

    // Runs before form submit
    function text_form_edit_submit() {     

        // Update text callback fields
        formHelpers.updateCKEditor();
    }

</script>";
    }

    public function getTemplateName()
    {
        return "text-designer-javascript.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "text-designer-javascript.twig", "/srv/xibo-cms/modules/text-designer-javascript.twig");
    }
}

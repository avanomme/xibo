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

/* subplaylist-designer-javascript.twig */
class __TwigTemplate_de77be0f99d89fdd189e0b1de0579bcc842d218db39ad51dab60030b3eec35ce extends Template
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
    function subplaylist_form_edit_open() {

        // Get form object
        var \$dialog = \$(this);
        var \$form = \$dialog.find('form');

        // setup checkbox behaviour for cycle based playback
        formHelpers.setupCheckboxInputFields(\$form, '#cyclePlaybackEnabled', '.cycle-based-playback');

        // Bind our tooltips
        \$form.find('[data-toggle=\"tooltip\"]').tooltip();

        // Translations
        var fillTitle = \"";
        // line 40
        echo __("Fill");
        echo "\";
        var fillHelpText = \"";
        // line 41
        echo __("Fill - use the first Playlist to fill any remaining Spots");
        echo "\";
        var padTitle = \"";
        // line 42
        echo __("Pad");
        echo "\";
        var padHelpText = \"";
        // line 43
        echo __("Pad - use the first Playlist to pad any remaining Spots");
        echo "\";
        var repeatTitle = \"";
        // line 44
        echo __("Repeat");
        echo "\";
        var repeatHelpText = \"";
        // line 45
        echo __("Repeat - repeat the Widgets in this Playlist until the number of Spots have been filled");
        echo "\";

        // Order Clause
        var subPlaylistFields = \$(\".sub-playlists\", \$form);

        // Get template
        var subPlaylistFormTemplate = formHelpers.getTemplate('subPlaylistFormTemplate');

        if(subPlaylistFields.length === 0) {
            return;
        }

        if(\$dialog.data().extra.subPlaylists.length === 0) {
            // Add a template row
            subPlaylistFields.append(subPlaylistFormTemplate({
                title: \"1\",
                subPlaylistId: \"\",
                subPlaylistIdSpots: \"\",
                subPlaylistIdSpotLength: \"\",
                subPlaylistIdSpotFill: \"\",
                buttonGlyph: \"fa-plus\",
                fillTitle: fillTitle,
                padTitle: padTitle,
                repeatTitle: repeatTitle,
                fillHelpText: fillHelpText,
                padHelpText: padHelpText,
                repeatHelpText: repeatHelpText,
            }));
        } else {
            // For each of the existing codes, create form components
            \$.each(\$dialog.data().extra.subPlaylists, function(index, field) {
                subPlaylistFields.append(subPlaylistFormTemplate({
                    title: field.rowNo,
                    subPlaylistId: field.playlistId,
                    subPlaylistIdSpots: field.spots,
                    subPlaylistIdSpotLength: field.spotLength,
                    subPlaylistIdSpotFill: field.spotFill,
                    buttonGlyph: ((field.rowNo === 1) ? 'fa-plus' : 'fa-minus'),
                    fillTitle: fillTitle,
                    padTitle: padTitle,
                    repeatTitle: repeatTitle,
                    fillHelpText: fillHelpText,
                    padHelpText: padHelpText,
                    repeatHelpText: repeatHelpText,
                }));
            });
        }

        // Nabble the resulting buttons
        subPlaylistFields.on(\"click\", \"button\", function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                var \$newRow = \$(subPlaylistFormTemplate({
                    title: subPlaylistFields.find('.row-special').length + 1,
                    subPlaylistId: \"\",
                    subPlaylistIdSpots: \"\",
                    subPlaylistIdSpotLength: \"\",
                    subPlaylistIdSpotFill: \"\",
                    buttonGlyph: \"fa-minus\",
                    fillTitle: fillTitle,
                    padTitle: padTitle,
                    repeatTitle: repeatTitle,
                    fillHelpText: fillHelpText,
                    padHelpText: padHelpText,
                    repeatHelpText: repeatHelpText,
                }));
                subPlaylistFields.append(\$newRow);

                subplaylist_init_row(\$form, \$newRow);
            } else {
                // Remove this row
                \$(this).closest(\".row-special\").remove();
            }
        });

        subPlaylistFields.find('.row').each(function(index, element) {
            subplaylist_init_row(\$form, \$(element));
        });
    }

    function subplaylist_init_row(\$form, \$row) {
        var \$select = \$row.find('.subPlaylistSelect');

        // Get the initial value.
        if (\$select.data('fieldId')) {
            \$.ajax({
                method: 'GET',
                url: '";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "?playlistId=' + \$select.data('fieldId'),
                success: function (response) {
                    if (response.data && response.data.length > 0) {
                        // Append our initial option
                        \$select.append('<option value=\"' + response.data[0].playlistId +
                            '\" data-tags=\"' + response.data[0].tags +
                            '\" selected>' + response.data[0].name + '</option>');

                        subplaylist_init_select2(\$form, \$select);
                    } else {
                        // No permissions.
                        \$select.parent().append('<input type=\"hidden\" value=\"' + \$select.data('fieldId') + '\" name=\"subPlaylistId[]\">' +
                            '<span title=\"";
        // line 146
        echo __("You do not have access to this playlist");
        echo "\"><i class=\"fa fa-lock\"></i>&nbsp;";
        echo __("Playlist Id ");
        echo "' +
                            \$select.data('fieldId') + '</span>');
                        \$select.remove();
                    }
                },
                error: function () {
                    \$select.parent().append('";
        // line 152
        echo __("An unknown error has occurred. Please refresh");
        echo "');
                }
            });
        } else {
            subplaylist_init_select2(\$form, \$select);
        }

        \$row.find('select[name=\"subPlaylistIdSpotFill[]\"]').select2({
            templateResult: function(state) {
                if (!state.id) {
                    return state.text;
                }
                return \$(state.element).data().templateResult;
            },
            dropdownAutoWidth: true,
            minimumResultsForSearch: -1
        });
    }

    function subplaylist_init_select2(\$form, \$el) {
        \$el.select2({
            dropdownAutoWidth: true,
            ajax: {
                url: '";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search"), "html", null, true);
        echo "?notPlaylistId=' + \$form.data('playlistId'),
                dataType: 'json',
                data: function (params) {
                    var query = {
                        start: 0,
                        length: 10,
                        name: params.term
                    };
                    if (params.page != null) {
                        query.start = (params.page - 1) * 10;
                    }
                    return query;
                },
                processResults: function (data, params) {
                    var results = [];

                    \$.each(data.data, function (index, el) {
                        results.push({
                            id: el.playlistId,
                            text: el.name,
                        });
                    });

                    var page = params.page || 1;
                    page = (page > 1) ? page - 1 : page;

                    if (page === 1 && results.length <= 0) {
                        \$form.find('.sub-playlist-no-playlists-message').removeClass('d-none');
                    }

                    return {
                        results: results,
                        pagination: {
                            more: (page * 10 < data.recordsTotal)
                        }
                    };
                }
            },
        });
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "subplaylist-designer-javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 175,  194 => 152,  183 => 146,  168 => 134,  76 => 45,  72 => 44,  68 => 43,  64 => 42,  60 => 41,  56 => 40,  37 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "subplaylist-designer-javascript.twig", "/srv/xibo-cms/modules/subplaylist-designer-javascript.twig");
    }
}

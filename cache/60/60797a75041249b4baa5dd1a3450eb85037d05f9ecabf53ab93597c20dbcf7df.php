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

/* base.twig */
class __TwigTemplate_664bffdafd0af230502f0afbd63923d2efed89d42e82b0e71115d6260922cb7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'headContent' => [$this, 'block_headContent'],
            'content' => [$this, 'block_content'],
            'javaScriptTemplates' => [$this, 'block_javaScriptTemplates'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_title"], "method", false, false, false, 4), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["csrfToken"] ?? null), "html", null, true);
        echo "\"/>
        <meta name=\"public-path\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 9), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/favicon.ico"], "method", false, false, false, 10), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        ";
        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 14), "html", null, true);
        echo "dist/style.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 17
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/dashboard.css"], "method", false, false, false, 17), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/timeline.css"], "method", false, false, false, 18), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/xibo.css"], "method", false, false, false, 19), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/calendar.css"], "method", false, false, false, 20), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/override.css"], "method", false, false, false, 21), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "css/print.css"], "method", false, false, false, 22), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Copyright 2006-2022 Xibo Signage Ltd. Part of the Xibo Open Source Digital Signage Solution. Released under the AGPLv3 or later. -->
        <!-- Please be sure you read this before removing the Source/About links from your theme: http://bit.ly/agplv3 -->
        ";
        // line 26
        $this->displayBlock('headContent', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "        <script type=\"text/javascript\">
            var calendar_type = \"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 31), "html", null, true);
        echo "\";
            var jsLocale = \"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 32), "html", null, true);
        echo "\";
            var jsShortLocale = \"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 33), "html", null, true);
        echo "\";
        </script>

        ";
        // line 37
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 37), "html", null, true);
        echo "dist/vendor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 40
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 40), "html", null, true);
        echo "dist/systemTools.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 43
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 43), "html", null, true);
        echo "dist/vendor/ckeditor/ckeditor.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 44), "html", null, true);
        echo "dist/vendor/bootstrap-fix/bootstrap-ckeditor-fix.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 47
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 47), "html", null, true);
        echo "dist/xibo.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 48), "html", null, true);
        echo "dist/core/xibo-cms.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 49), "html", null, true);
        echo "dist/core/xibo-forms.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 50), "html", null, true);
        echo "dist/core/xibo-preview-timeline.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 51), "html", null, true);
        echo "dist/core/xibo-calendar.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 52), "html", null, true);
        echo "dist/core/xibo-datasets.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\"></script>

        ";
        // line 55
        echo "        ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 55), "Jalali"))) {
            // line 56
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 56), "html", null, true);
            echo "dist/vendor/calendar/js/calendar-jalali.js?v=";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "&rev=";
            echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
            echo "\"></script>
            <script type=\"text/javascript\">
                moment.loadPersian();
            </script>
        ";
        } else {
            // line 61
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 61), "html", null, true);
            echo "dist/vendor/calendar/js/calendar.js?v=";
            echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
            echo "&rev=";
            echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 63
        echo "
        ";
        // line 65
        echo "        ";
        ob_start(function () { return ''; });
        echo "dist/vendor/calendar/js/language/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 65), "html", null, true);
        echo ".js";
        $context["calendarTranslation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "fileExists", [0 => ($context["calendarTranslation"] ?? null)], "method", false, false, false, 66)) {
            // line 67
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 67), "html", null, true);
            echo twig_escape_filter($this->env, ($context["calendarTranslation"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 69
        echo "
        <script type=\"text/javascript\">

            var translations = ";
        // line 72
        echo ($context["translations"] ?? null);
        echo ";
            // Translations we want always available
            ";
        // line 75
        echo "            translations.withselected = \"";
        echo twig_escape_filter($this->env, __("With Selected"), "js", null, true);
        echo "\";
            translations.selectAll = \"";
        // line 76
        echo twig_escape_filter($this->env, __("Select All"), "js", null, true);
        echo "\";
            translations.multiselect = \"";
        // line 77
        echo twig_escape_filter($this->env, __("Multiple Items Selected"), "js", null, true);
        echo "\";
            translations.indeterminate = \"";
        // line 78
        echo twig_escape_filter($this->env, __("Indeterminate State"), "js", null, true);
        echo "\";
            translations.multiselectNoItemsMessage = \"";
        // line 79
        echo twig_escape_filter($this->env, __("Sorry, no items have been selected."), "js", null, true);
        echo "\";
            translations.multiselectMessage = \"";
        // line 80
        echo twig_escape_filter($this->env, __("Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items."), "js", null, true);
        echo "\";
            translations.validExtensions = \"";
        // line 81
        echo twig_escape_filter($this->env, __("Valid extensions are %s"), "js", null, true);
        echo "\";
            translations.save = \"";
        // line 82
        echo twig_escape_filter($this->env, __("Save"), "js", null, true);
        echo "\";
            translations.cancel = \"";
        // line 83
        echo twig_escape_filter($this->env, __("Cancel"), "js", null, true);
        echo "\";
            translations.close = \"";
        // line 84
        echo twig_escape_filter($this->env, __("Close"), "js", null, true);
        echo "\";
            translations.success = \"";
        // line 85
        echo twig_escape_filter($this->env, __("Success"), "js", null, true);
        echo "\";
            translations.failure = \"";
        // line 86
        echo twig_escape_filter($this->env, __("Failure"), "js", null, true);
        echo "\";
            translations.enterText = \"";
        // line 87
        echo twig_escape_filter($this->env, __("Enter text..."), "js", null, true);
        echo "\";
            translations.noDataMessage = \"";
        // line 88
        echo twig_escape_filter($this->env, __("No Data returned from the source"), "js", null, true);
        echo "\";
            translations.statusPending = \"";
        // line 89
        echo twig_escape_filter($this->env, __("Status Pending"), "js", null, true);
        echo "\";
            translations.duplicate = \"";
        // line 90
        echo twig_escape_filter($this->env, __("Duplicate"), "js", null, true);
        echo "\";
            translations.deleteRecurring = \"";
        // line 91
        echo twig_escape_filter($this->env, __("Delete from Schedule"), "js", null, true);
        echo "\";
            translations.spacesWarning = \"";
        // line 92
        echo twig_escape_filter($this->env, __("Warning - starts with or ends with a space, or contains double spaces"), "js", null, true);
        echo "\";
            translations.done = \"";
        // line 93
        echo twig_escape_filter($this->env, __("Done"), "js", null, true);
        echo "\";
            translations.freeTextCommand = \"";
        // line 94
        echo twig_escape_filter($this->env, __("Free Text"), "js", null, true);
        echo "\";
            translations.editTags = \"";
        // line 95
        echo twig_escape_filter($this->env, __("Edit Tags"), "js", null, true);
        echo "\";
            translations.tagInputValueHelpText = \"";
        // line 96
        echo twig_escape_filter($this->env, __("Provide an optional Value for this Tag. If no Value is required, this field can be left blank"), "js", null, true);
        echo "\";
            translations.tagInputValueRequiredHelpText = \"";
        // line 97
        echo twig_escape_filter($this->env, __("Please provide the value for this Tag and confirm by pressing enter on your keyboard."), "js", null, true);
        echo "\";
            translations.videoImageCoverHelpText = \"";
        // line 98
        echo twig_escape_filter($this->env, __("Before Uploading, scroll through the progress bar or play and pause to select a still to be used as the video file thumbnail."), "js", null, true);
        echo "\";
            translations.folderTreeCreate = \"";
        // line 99
        echo twig_escape_filter($this->env, __("Create"), "js", null, true);
        echo "\";
            translations.folderTreeEdit = \"";
        // line 100
        echo twig_escape_filter($this->env, __("Rename"), "js", null, true);
        echo "\";
            translations.folderTreeDelete = \"";
        // line 101
        echo twig_escape_filter($this->env, __("Remove"), "js", null, true);
        echo "\";
            translations.folderTreeShare = \"";
        // line 102
        echo twig_escape_filter($this->env, __("Share"), "js", null, true);
        echo "\";
            translations.folderTreeSetAsHome = \"";
        // line 103
        echo twig_escape_filter($this->env, __("Set as Home"), "js", null, true);
        echo "\";
            translations.folderTreeError = \"";
        // line 104
        echo twig_escape_filter($this->env, __("Cannot modify root folder."), "js", null, true);
        echo "\";
            translations.folderWithContent = \"";
        // line 105
        echo twig_escape_filter($this->env, __("Cannot remove Folder with content"), "js", null, true);
        echo "\";
            translations.folderNew = \"";
        // line 106
        echo twig_escape_filter($this->env, __("New Folder"), "js", null, true);
        echo "\";
            translations.folderTreeMove = \"";
        // line 107
        echo twig_escape_filter($this->env, __("Move Folder"), "js", null, true);
        echo "\";
            translations.dayPartExceptionErrorMessage = \"";
        // line 108
        echo twig_escape_filter($this->env, __("You already set an exception for this day."), "js", null, true);
        echo "\";
            translations.online = \"";
        // line 109
        echo twig_escape_filter($this->env, __("Online"), "js", null, true);
        echo "\";
            translations.offline = \"";
        // line 110
        echo twig_escape_filter($this->env, __("Offline"), "js", null, true);
        echo "\";
            translations.upToDate = \"";
        // line 111
        echo twig_escape_filter($this->env, __("Up to date"), "js", null, true);
        echo "\";
            translations.notUpToDate = \"";
        // line 112
        echo twig_escape_filter($this->env, __("Not up to date"), "js", null, true);
        echo "\";
            translations.publishedStatusFuture = \"";
        // line 113
        echo twig_escape_filter($this->env, __("Publishing"), "js", null, true);
        echo "\";
            translations.publishedStatusFailed = \"";
        // line 114
        echo twig_escape_filter($this->env, __("Publish failed."), "js", null, true);
        echo "\";
            ";
        // line 116
        echo "
            var calendarType = \"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 117), "html", null, true);
        echo "\";
            var language = \"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 118), "html", null, true);
        echo "\";
            var timezone = \"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "defaultTimezone", [], "any", false, false, false, 119), "html", null, true);
        echo "\";
            var dateFormat = \"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT", [], "any", false, false, false, 120), "html", null, true);
        echo "\";
            var jsDateFormat = (calendar_type == \"Jalali\") ? \"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JALALI_JS", [], "any", false, false, false, 121), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JS", [], "any", false, false, false, 121), "html", null, true);
        echo "\";
            var timeFormat = \"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT", [], "any", false, false, false, 122), "html", null, true);
        echo "\";
            var jsTimeFormat = \"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT_JS", [], "any", false, false, false, 123), "html", null, true);
        echo "\";
            var dateOnlyFormat = \"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT", [], "any", false, false, false, 124), "html", null, true);
        echo "\";
            var jsDateOnlyFormat = (calendar_type == \"Jalali\") ? \"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JALALI_JS", [], "any", false, false, false, 125), "html", null, true);
        echo "\" : \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JS", [], "any", false, false, false, 125), "html", null, true);
        echo "\";
            var systemDateFormat = \"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "systemDateFormat", [], "any", false, false, false, 126), "html", null, true);
        echo "\";
            var systemTimeFormat = \"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "systemTimeFormat", [], "any", false, false, false, 127), "html", null, true);
        echo "\";
            var clockUrl = \"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("clock"), "html", null, true);
        echo "\";
            var calendarLanguage = \"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 129), "html", null, true);
        echo "\";
            var pingUrl = \"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ping"), "html", null, true);
        echo "\";
            var foldersUrl = \"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        echo "\";
            var permissionsUrl = \"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.set.permissions.multi", ["entity" => ":entity"]), "html", null, true);
        echo "\";
            var addMediaThumbnailUrl = \"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.thumbnail.add"), "html", null, true);
        echo "\";
            var revokeApplicationAccess = \"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.revoke", ["id" => ":id", "userId" => ":userId"]), "html", null, true);
        echo "\"

            ";
        // line 137
        echo "            var dataTablesLanguage = {
                \"decimal\":        \"\",
                \"emptyTable\":     \"";
        // line 139
        echo twig_escape_filter($this->env, __("No data available in table"), "js", null, true);
        echo "\",
                \"info\":           \"";
        // line 140
        echo twig_escape_filter($this->env, __("Showing _START_ to _END_ of _TOTAL_ entries"), "js", null, true);
        echo "\",
                \"infoEmpty\":      \"";
        // line 141
        echo twig_escape_filter($this->env, __("Showing 0 to 0 of 0 entries"), "js", null, true);
        echo "\",
                \"infoFiltered\":   \"";
        // line 142
        echo twig_escape_filter($this->env, __("(filtered from _MAX_ total entries)"), "js", null, true);
        echo "\",
                \"infoPostFix\":    \"\",
                \"thousands\":      \",\",
                \"lengthMenu\":     \"";
        // line 145
        echo twig_escape_filter($this->env, __("Show _MENU_ entries"), "js", null, true);
        echo "\",
                \"loadingRecords\": \"";
        // line 146
        echo twig_escape_filter($this->env, __("Loading..."), "js", null, true);
        echo "\",
                \"processing\":     \"";
        // line 147
        echo twig_escape_filter($this->env, __("Processing..."), "js", null, true);
        echo "\",
                \"search\":         \"";
        // line 148
        echo twig_escape_filter($this->env, __("Search:"), "js", null, true);
        echo "\",
                \"zeroRecords\":    \"";
        // line 149
        echo twig_escape_filter($this->env, __("No matching records found"), "js", null, true);
        echo "\",
                \"paginate\": {
                    \"first\":      \"";
        // line 151
        echo twig_escape_filter($this->env, __("First"), "js", null, true);
        echo "\",
                    \"last\":       \"";
        // line 152
        echo twig_escape_filter($this->env, __("Last"), "js", null, true);
        echo "\",
                    \"next\":       \"";
        // line 153
        echo twig_escape_filter($this->env, __("Next"), "js", null, true);
        echo "\",
                    \"previous\":   \"";
        // line 154
        echo twig_escape_filter($this->env, __("Previous"), "js", null, true);
        echo "\"
                },
                \"aria\": {
                    \"sortAscending\":  \"";
        // line 157
        echo twig_escape_filter($this->env, __(": activate to sort column ascending"), "js", null, true);
        echo "\",
                    \"sortDescending\": \"";
        // line 158
        echo twig_escape_filter($this->env, __(": activate to sort column descending"), "js", null, true);
        echo "\"
                },
                \"buttons\": {
                    \"colvis\":  \"";
        // line 161
        echo twig_escape_filter($this->env, __("Column visibility"), "js", null, true);
        echo "\",
                    \"print\": \"";
        // line 162
        echo twig_escape_filter($this->env, __("Print"), "js", null, true);
        echo "\"
                }
            };
            var dataTablesTemplate = \"<'row'<'dataTables_folder col-sm-12 col-lg-5'><'col-sm-12 col-lg-7 text-right'<'d-inline-block mr-2'l><'dataTables_buttons d-inline-block'>>>\" +
                \"<'row'<'col-sm-12'tr>>\" +
                \"<'row'<'col-sm-12 col-lg-5'i><'col-lg-7 col-sm-12'p>>\";
            ";
        // line 169
        echo "
            moment.locale(\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 170), "html", null, true);
        echo "\");

            \$(function() {
                var csrf_token = \$('meta[name=\"token\"]').attr('content');
                \$.ajaxSetup({
                    headers: {
                        'X-XSRF-TOKEN': csrf_token
                    }
                });
            });

            toastr.options.positionClass = \"toast-bottom-center\";

            // CKEditor default config
            var CKEDITOR_DEFAULT_CONFIG = {
                contentsCss: [ CKEDITOR.getUrl('contents.css'), \"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        echo "\" ],
                font_names: '";
        // line 186
        echo twig_escape_filter($this->env, ($context["ckeditorConfig"] ?? null), "html", null, true);
        echo "' + CKEDITOR.config.font_names,
                imageDownloadUrl: \"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        echo "?preview=1\"
            }

            // User preference regarding Folder tree state
            var rememberFolderTreeStateGlobally = ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", [0 => "rememberFolderTreeStateGlobally", 1 => "1"], "method", false, false, false, 191), "html", null, true);
        echo "
        </script>

        ";
        // line 194
        $this->displayBlock('javaScriptTemplates', $context, $blocks);
        // line 195
        echo "        ";
        $this->displayBlock('javaScript', $context, $blocks);
        // line 196
        echo "
        ";
        // line 197
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("theme-javascript.twig", "base.twig", 197);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 198
        echo "
        ";
        // line 199
        $this->loadTemplate("user-welcome.twig", "base.twig", 199)->display($context);
        // line 200
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_headContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 194
    public function block_javaScriptTemplates($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 195
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  730 => 195,  724 => 194,  718 => 29,  712 => 26,  706 => 4,  699 => 200,  697 => 199,  694 => 198,  684 => 197,  681 => 196,  678 => 195,  676 => 194,  670 => 191,  663 => 187,  659 => 186,  655 => 185,  637 => 170,  634 => 169,  625 => 162,  621 => 161,  615 => 158,  611 => 157,  605 => 154,  601 => 153,  597 => 152,  593 => 151,  588 => 149,  584 => 148,  580 => 147,  576 => 146,  572 => 145,  566 => 142,  562 => 141,  558 => 140,  554 => 139,  550 => 137,  545 => 134,  541 => 133,  537 => 132,  533 => 131,  529 => 130,  525 => 129,  521 => 128,  517 => 127,  513 => 126,  507 => 125,  503 => 124,  499 => 123,  495 => 122,  489 => 121,  485 => 120,  481 => 119,  477 => 118,  473 => 117,  470 => 116,  466 => 114,  462 => 113,  458 => 112,  454 => 111,  450 => 110,  446 => 109,  442 => 108,  438 => 107,  434 => 106,  430 => 105,  426 => 104,  422 => 103,  418 => 102,  414 => 101,  410 => 100,  406 => 99,  402 => 98,  398 => 97,  394 => 96,  390 => 95,  386 => 94,  382 => 93,  378 => 92,  374 => 91,  370 => 90,  366 => 89,  362 => 88,  358 => 87,  354 => 86,  350 => 85,  346 => 84,  342 => 83,  338 => 82,  334 => 81,  330 => 80,  326 => 79,  322 => 78,  318 => 77,  314 => 76,  309 => 75,  304 => 72,  299 => 69,  292 => 67,  289 => 66,  282 => 65,  279 => 63,  269 => 61,  256 => 56,  253 => 55,  244 => 52,  236 => 51,  228 => 50,  220 => 49,  212 => 48,  203 => 47,  194 => 44,  185 => 43,  175 => 40,  165 => 37,  159 => 33,  155 => 32,  151 => 31,  148 => 30,  146 => 29,  142 => 27,  140 => 26,  134 => 23,  126 => 22,  118 => 21,  110 => 20,  102 => 19,  94 => 18,  85 => 17,  75 => 14,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/srv/xibo-cms/views/base.twig");
    }
}

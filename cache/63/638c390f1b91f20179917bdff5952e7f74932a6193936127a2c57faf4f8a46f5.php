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

/* authed-sidebar.twig */
class __TwigTemplate_1bc15f39d07fae0c6556965f9ed9749c43a96637df1bdff6c16b15253becf6db extends Template
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
        echo "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        echo "\">";
        echo __("Dashboard");
        echo "</a></li>

        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "schedule.view"], "method", false, false, false, 5)) {
            // line 6
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            echo "\">";
            echo __("Schedule");
            echo "</a></li>
        ";
        }
        // line 8
        echo "
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "daypart.view"], "method", false, false, false, 9)) {
            // line 10
            echo "            <li class=\"sidebar-list\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.view"), "html", null, true);
            echo "\">";
            echo __("Dayparting");
            echo "</a></li>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "campaign.view", 1 => "layout.view", 2 => "template.view", 3 => "resolution.view"]], "method", false, false, false, 13);
        // line 14
        echo "        ";
        if ((1 === twig_compare(($context["countViewable"] ?? null), 0))) {
            // line 15
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Design");
            echo "</a></li>
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "campaign.view"], "method", false, false, false, 16)) {
                // line 17
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.view"), "html", null, true);
                echo "\">";
                echo __("Campaigns");
                echo "</a></li>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "layout.view"], "method", false, false, false, 20)) {
                // line 21
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
                echo "\">";
                echo __("Layouts");
                echo "</a></li>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "template.view"], "method", false, false, false, 24)) {
                // line 25
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
                echo "\">";
                echo __("Templates");
                echo "</a></li>
            ";
            }
            // line 27
            echo "
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "resolution.view"], "method", false, false, false, 28)) {
                // line 29
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.view"), "html", null, true);
                echo "\">";
                echo __("Resolutions");
                echo "</a></li>
            ";
            }
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "library.view", 1 => "playlist.view", 2 => "dataset.view", 3 => "menuboard.view"]], "method", false, false, false, 33);
        // line 34
        echo "        ";
        if ((1 === twig_compare(($context["countViewable"] ?? null), 0))) {
            // line 35
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Library");
            echo "</a></li>
            ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "playlist.view"], "method", false, false, false, 36)) {
                // line 37
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.view"), "html", null, true);
                echo "\">";
                echo __("Playlists");
                echo "</a></li>
            ";
            }
            // line 39
            echo "
            ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "library.view"], "method", false, false, false, 40)) {
                // line 41
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
                echo "\">";
                echo __("Media");
                echo "</a></li>
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "dataset.view"], "method", false, false, false, 44)) {
                // line 45
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataset.view"), "html", null, true);
                echo "\">";
                echo __("DataSets");
                echo "</a></li>
            ";
            }
            // line 47
            echo "
            ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "menuboard.view"], "method", false, false, false, 48) &&  !($context["hideMenuBoard"] ?? null))) {
                // line 49
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.view"), "html", null, true);
                echo "\">";
                echo __("Menu Boards");
                echo "</a></li>
            ";
            }
            // line 51
            echo "        ";
        }
        // line 52
        echo "
        ";
        // line 53
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "displays.view", 1 => "displaygroup.view", 2 => "displayprofile.view", 3 => "playersoftware.view", 4 => "command.view"]], "method", false, false, false, 53);
        // line 54
        echo "        ";
        if ((1 === twig_compare(($context["countViewable"] ?? null), 0))) {
            // line 55
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Displays");
            echo "</a></li>
            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displays.view"], "method", false, false, false, 56)) {
                // line 57
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
                echo "\">";
                echo __("Displays");
                echo "</a></li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displaygroup.view"], "method", false, false, false, 60)) {
                // line 61
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displaygroup.view"), "html", null, true);
                echo "\">";
                echo __("Display Groups");
                echo "</a></li>
            ";
            }
            // line 63
            echo "
            ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "displayprofile.view"], "method", false, false, false, 64)) {
                // line 65
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayprofile.view"), "html", null, true);
                echo "\">";
                echo __("Display Settings");
                echo "</a></li>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "playersoftware.view"], "method", false, false, false, 68)) {
                // line 69
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.view"), "html", null, true);
                echo "\">";
                echo __("Player Versions");
                echo "</a></li>
            ";
            }
            // line 71
            echo "
            ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "command.view"], "method", false, false, false, 72)) {
                // line 73
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.view"), "html", null, true);
                echo "\">";
                echo __("Commands");
                echo "</a></li>
            ";
            }
            // line 75
            echo "        ";
        }
        // line 76
        echo "
        ";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "users.view"], "method", false, false, false, 77) && (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 77) || twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 77)))) {
            // line 78
            echo "            ";
            $context["userMenuViewable"] = true;
            // line 79
            echo "        ";
        } else {
            // line 80
            echo "            ";
            $context["userMenuViewable"] = false;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 83
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "usergroup.view", 1 => "module.view", 2 => "transition.view", 3 => "task.view"]], "method", false, false, false, 83);
        // line 84
        echo "        ";
        if (((1 === twig_compare(($context["countViewable"] ?? null), 0)) || ($context["userMenuViewable"] ?? null))) {
            // line 85
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Administration");
            echo "</a></li>

            ";
            // line 87
            if (($context["userMenuViewable"] ?? null)) {
                // line 88
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
                echo "\">";
                echo __("Users");
                echo "</a></li>
            ";
            }
            // line 90
            echo "
            ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "usergroup.view"], "method", false, false, false, 91)) {
                // line 92
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.view"), "html", null, true);
                echo "\">";
                echo __("User Groups");
                echo "</a></li>
            ";
            }
            // line 94
            echo "
            ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 95)) {
                // line 96
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
                echo "\">";
                echo __("Settings");
                echo "</a></li>
            ";
            }
            // line 98
            echo "
            ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 99)) {
                // line 100
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.view"), "html", null, true);
                echo "\">";
                echo __("Applications");
                echo "</a></li>
            ";
            }
            // line 102
            echo "
            ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "module.view"], "method", false, false, false, 103)) {
                // line 104
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.view"), "html", null, true);
                echo "\">";
                echo __("Modules");
                echo "</a></li>
            ";
            }
            // line 106
            echo "
            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "transition.view"], "method", false, false, false, 107)) {
                // line 108
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.view"), "html", null, true);
                echo "\">";
                echo __("Transitions");
                echo "</a></li>
            ";
            }
            // line 110
            echo "
            ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "task.view"], "method", false, false, false, 111)) {
                // line 112
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.view"), "html", null, true);
                echo "\">";
                echo __("Tasks");
                echo "</a></li>
            ";
            }
            // line 114
            echo "
            ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "tag.view"], "method", false, false, false, 115)) {
                // line 116
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.view"), "html", null, true);
                echo "\">";
                echo __("Tags");
                echo "</a></li>
            ";
            }
            // line 118
            echo "
            ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 119)) {
                // line 120
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.view"), "html", null, true);
                echo "\">";
                echo __("Folders");
                echo "</a></li>
            ";
            }
            // line 122
            echo "        ";
        }
        // line 123
        echo "

        ";
        // line 125
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "report.view", 1 => "report.scheduling", 2 => "report.saving"]], "method", false, false, false, 125);
        // line 126
        echo "        ";
        if ((1 === twig_compare(($context["countViewable"] ?? null), 0))) {
            // line 127
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Reporting");
            echo "</a></li>

            ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "report.view"], "method", false, false, false, 129)) {
                // line 130
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
                echo "\">";
                echo __("All Reports");
                echo "</a></li>
            ";
            }
            // line 132
            echo "
            ";
            // line 133
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "report.scheduling"], "method", false, false, false, 133)) {
                // line 134
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
                echo "\">";
                echo __("Report Schedules");
                echo "</a></li>
            ";
            }
            // line 136
            echo "
            ";
            // line 137
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "report.saving"], "method", false, false, false, 137)) {
                // line 138
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
                echo "\">";
                echo __("Saved Reports");
                echo "</a></li>
            ";
            }
            // line 140
            echo "
        ";
        }
        // line 142
        echo "
        ";
        // line 143
        $context["countViewable"] = twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [0 => [0 => "log.view", 1 => "sessions.view", 2 => "auditlog.view", 3 => "fault.view", 4 => "help.view"]], "method", false, false, false, 143);
        // line 144
        echo "        ";
        if ((1 === twig_compare(($context["countViewable"] ?? null), 0))) {
            // line 145
            echo "            <li class=\"sidebar-title\"><a>";
            echo __("Advanced");
            echo "</a></li>

            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "log.view"], "method", false, false, false, 147)) {
                // line 148
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.view"), "html", null, true);
                echo "\">";
                echo __("Log");
                echo "</a></li>
            ";
            }
            // line 150
            echo "
            ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "sessions.view"], "method", false, false, false, 151)) {
                // line 152
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sessions.view"), "html", null, true);
                echo "\">";
                echo __("Sessions");
                echo "</a></li>
            ";
            }
            // line 154
            echo "
            ";
            // line 155
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "auditlog.view"], "method", false, false, false, 155)) {
                // line 156
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditlog.view"), "html", null, true);
                echo "\">";
                echo __("Audit Trail");
                echo "</a></li>
            ";
            }
            // line 158
            echo "
            ";
            // line 159
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "fault.view"], "method", false, false, false, 159)) {
                // line 160
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
                echo "\">";
                echo __("Report Fault");
                echo "</a></li>
            ";
            }
            // line 162
            echo "
            ";
            // line 163
            if (twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", [0 => "help.view"], "method", false, false, false, 163)) {
                // line 164
                echo "                <li class=\"sidebar-list\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("help.view"), "html", null, true);
                echo "\">";
                echo __("Help Links");
                echo "</a></li>
            ";
            }
            // line 166
            echo "        ";
        }
        // line 167
        echo "    </ul>

    <div class=\"sidebar-footer row\">
        <div class=\"col-sm-6\">
            <a class=\"XiboFormButton\" href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("about"), "html", null, true);
        echo "\" title=\"";
        echo __("About the CMS");
        echo "\">";
        echo __("About");
        echo "</a>
        </div>
        <div class=\"col-sm-6\">
            <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpService"] ?? null), "address", [], "method", false, false, false, 174), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo __("Open the Manual in a new Window");
        echo "\">";
        echo __("Manual");
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "authed-sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 174,  567 => 171,  561 => 167,  558 => 166,  550 => 164,  548 => 163,  545 => 162,  537 => 160,  535 => 159,  532 => 158,  524 => 156,  522 => 155,  519 => 154,  511 => 152,  509 => 151,  506 => 150,  498 => 148,  496 => 147,  490 => 145,  487 => 144,  485 => 143,  482 => 142,  478 => 140,  470 => 138,  468 => 137,  465 => 136,  457 => 134,  455 => 133,  452 => 132,  444 => 130,  442 => 129,  436 => 127,  433 => 126,  431 => 125,  427 => 123,  424 => 122,  416 => 120,  414 => 119,  411 => 118,  403 => 116,  401 => 115,  398 => 114,  390 => 112,  388 => 111,  385 => 110,  377 => 108,  375 => 107,  372 => 106,  364 => 104,  362 => 103,  359 => 102,  351 => 100,  349 => 99,  346 => 98,  338 => 96,  336 => 95,  333 => 94,  325 => 92,  323 => 91,  320 => 90,  312 => 88,  310 => 87,  304 => 85,  301 => 84,  299 => 83,  296 => 82,  293 => 81,  290 => 80,  287 => 79,  284 => 78,  282 => 77,  279 => 76,  276 => 75,  268 => 73,  266 => 72,  263 => 71,  255 => 69,  253 => 68,  250 => 67,  242 => 65,  240 => 64,  237 => 63,  229 => 61,  227 => 60,  224 => 59,  216 => 57,  214 => 56,  209 => 55,  206 => 54,  204 => 53,  201 => 52,  198 => 51,  190 => 49,  188 => 48,  185 => 47,  177 => 45,  175 => 44,  172 => 43,  164 => 41,  162 => 40,  159 => 39,  151 => 37,  149 => 36,  144 => 35,  141 => 34,  139 => 33,  136 => 32,  133 => 31,  125 => 29,  123 => 28,  120 => 27,  112 => 25,  110 => 24,  107 => 23,  99 => 21,  97 => 20,  94 => 19,  86 => 17,  84 => 16,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  63 => 10,  61 => 9,  58 => 8,  50 => 6,  48 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-sidebar.twig", "/srv/xibo-cms/views/authed-sidebar.twig");
    }
}

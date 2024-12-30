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

/* welcome-page.twig */
class __TwigTemplate_aa1dc175f313e6922b04b85fdd2a945d314e1ed6e06fab15386900df414f1549 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'headContent' => [$this, 'block_headContent'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "welcome-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "welcome-page.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Welcome"), "html", null, true);
        echo " | ";
    }

    // line 28
    public function block_headContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <style type=\"text/css\">
        .tour-card {
            max-width: 320px;
            min-height: 320px;
            margin: 0 auto;
            position: relative;
            border-radius: 0 0 6px 6px;
        }

        .tour-title {
            font-size: 1.3rem;
            padding: 16px 16px 0px 16px;
        }

        .tour-image {
            width: 100%;
            border-bottom: 6px solid #30426a;
        }

        .tour-text {
            line-height: 18px;
            padding: 6px 16px 16px 16px;
            letter-spacing: 0.25px;
        }

        .tour-icon {
            position: absolute;
            opacity: 0.9;
            right: 16px;
            top: 0;
            padding: 10px 12px;
            background-color: #333;
            color: #f9f9f9;
            border-radius: 0 0 6px 6px;
            font-size: 1.3rem;
        }

        /* running */
        .tour-card.running .tour-image {
            border-color: #e99d1a;
        }

        .tour-card.running .tour-icon {
            background-color: #e99d1a;
        }

        /* done */
        .tour-card.done .tour-image {
            border-color: #5cb85c;
        }

        .tour-card.done .tour-icon {
            background-color: #5cb85c;
        }

        .welcome-title {
            font-size: 1.4rem;
            margin: 20px 0 20px 0;
        }

        /* player icons */
        .welcome-players-section .player-icon {
            width: 60px;
            height: 60px;
            padding: 12px;
            background-color: #337ab7;
            border-radius: 10px;
            display: block;
            margin: 0 auto;
        }

        .player-title {
            margin-top: 8px;
        }

        .tour-cards-section, .welcome-players-section {
            width: 100%;
            max-width: 1200px;
            margin-bottom: 10px;
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .tour-card-container {
            margin-bottom: 20px;
        }

        .tour-link {
            cursor: pointer;
            border-collapse: separate; /* IE fix */
            box-shadow: 0px 0px 10px 1px #00000026;
            opacity: 0.9;
        }

        .tour-link:hover {
            opacity: 1;
            box-shadow: 0px 0px 10px 3px #00000026;
        }
    </style>
";
    }

    // line 130
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "
    <div class=\"container-fluid welcome-container\">
        <div class=\"col-12\">

            ";
        // line 135
        $context["productName"] = twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_title"], "method", false, false, false, 135);
        // line 136
        echo "            <h2>";
        /* xgettext:no-php-format */        echo strtr(__("Welcome to the %productName% CMS"), array("%productName%" => ($context["productName"] ?? null), ));
        echo "</h2>
            <p>";
        // line 137
        /* xgettext:no-php-format */        echo strtr(__("The %productName% system comprises a central content management system (the CMS you are currently logged into) and Player software to download content from the CMS and play on screens."), array("%productName%" => ($context["productName"] ?? null), ));
        echo "</p>
        </div>

        <div class=\"col-12\">
            <div class=\"welcome-title\">";
        // line 141
        echo __("How does it all work?");
        echo "</div>
            <p>";
        // line 142
        echo __("The Player application needs to run on a device attached to each screen that is to be used and will connect over the network to the CMS to download any new content at regular defined intervals.");
        echo "</p>
            <p>";
        // line 143
        echo __("Downloaded content from the CMS is cached to the Player so if there is a problem connecting to the CMS, it can continue to show the stored content until the connection between the CMS and Player is re-established.");
        echo "</p>
            <p>";
        // line 144
        echo __("Once downloaded, the Player checks the schedule it has been sent and will show the appropriate content based on the local date and time.");
        echo "</p>
        </div>

        ";
        // line 148
        echo "        ";
        $this->loadTemplate("welcome-page_players.twig", "welcome-page.twig", 148)->display($context);
        // line 149
        echo "
        <div class=\"col-12 welcome-title\">";
        // line 150
        echo __("We’d like to take you on a tour of the CMS using a series of short tutorials to get you up and running in no time. If you already know your way around, please skip.");
        echo "</div>
        
        <div class=\"tour-cards-section row\">
            <div class=\"col-12 col-sm-6 col-md-4 tour-card-container\">
                <div class=\"tour-card tour-link\" data-tour-name=\"authDisplayTour\">
                    <img class=\"tour-image\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/authDisplayTour.png"], "method", false, false, false, 155), "html", null, true);
        echo "\">
                    <div class=\"tour-title\">";
        // line 156
        echo __("Authorise Displays...");
        echo "</div>
                    <div class=\"tour-text\">";
        // line 157
        echo __("Once you have chosen your Player and installed the software, this tour will take you through the steps needed to connect and authorise Displays with your CMS.");
        echo "</div>
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-4 tour-card-container\">
                <div class=\"tour-card tour-link\" data-tour-name=\"mainTour\">
                    <img class=\"tour-image\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/mainTour.png"], "method", false, false, false, 162), "html", null, true);
        echo "\">
                    <div class=\"tour-title\">";
        // line 163
        echo __("Create Content...");
        echo "</div>
                    <div class=\"tour-text\">";
        // line 164
        echo __("Do you want to see how easy it is to create a basic Layout using the Layout designer? This tutorial will take you through the basics, step by step so you can start creating your own content with ease.");
        echo "</div>
                </div>
            </div>
            <div class=\"col-12 col-sm-6 col-md-4 tour-card-container\">
                <div class=\"tour-card tour-link\" data-tour-name=\"schedulingTour\">
                    <img class=\"tour-image\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "uri", [0 => "img/tours/schedulingTour.png"], "method", false, false, false, 169), "html", null, true);
        echo "\">
                    <div class=\"tour-title\">";
        // line 170
        echo __("Get Scheduling...");
        echo "</div>
                    <div class=\"tour-text\">";
        // line 171
        echo __("Get your content seen at the right time in the right place using flexible scheduling capabilities. This tutorial will take you through each stage needed to create scheduled events with confidence.");
        echo "</div>
                </div>
            </div>
        </div>

        <p class=\"col-12\">";
        // line 176
        echo twig_escape_filter($this->env, twig_replace_filter(__("Explore more of the features and functionality that [[PRODUCTNAME]] has to offer by clicking on the Manual link from the CMS main menu."), ["[[PRODUCTNAME]]" => twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", [0 => "theme_title"], "method", false, false, false, 176)]), "html", null, true);
        echo "</p>

        ";
        // line 179
        echo "        ";
        $this->loadTemplate("welcome-page_support.twig", "welcome-page.twig", 179)->display($context);
        // line 180
        echo "    </div>
";
    }

    // line 183
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.tour-card').click(function() {
                // Handle click to start tour
                var startTourResult = cmsTours[\$(this).data('tourName')].init();

                // Update buttons status
                if(startTourResult) {
                    updateTourCardStatus();
                }
            });

            // Update buttons status
            updateTourCardStatus();
        });


        function updateTourCardStatus() {
            \$('.tour-card').each(function() {
                var tourName = \$(this).data('tourName');
                var tourSeen = (localStorage[tourName + '_seen'] == 1);
                var tourPlaying = (localStorage.tour_playing == tourName);

                // Reset to original state by removing all temporary classes/elements
                \$(this).find('.tour-icon').remove();
                \$(this).removeClass('done running');

                if(tourPlaying) {
                    // Mark tour as playing
                    \$(this).removeClass('done').addClass('running');
                    \$(this).prepend('<span class=\"fa fa-play tour-icon\" title=\"";
        // line 214
        echo __("Tour playing!");
        echo "\"></span>');
                } else if(tourSeen) {
                    // Mark tour as seen
                    \$(this).removeClass('running').addClass('done');
                    \$(this).prepend('<span class=\"fa fa-check tour-icon\" title=\"";
        // line 218
        echo __("Tour seen!");
        echo "\"></span>');
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "welcome-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 218,  320 => 214,  288 => 184,  284 => 183,  279 => 180,  276 => 179,  271 => 176,  263 => 171,  259 => 170,  255 => 169,  247 => 164,  243 => 163,  239 => 162,  231 => 157,  227 => 156,  223 => 155,  215 => 150,  212 => 149,  209 => 148,  203 => 144,  199 => 143,  195 => 142,  191 => 141,  184 => 137,  179 => 136,  177 => 135,  171 => 131,  167 => 130,  64 => 29,  60 => 28,  52 => 26,  47 => 23,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome-page.twig", "/srv/xibo-cms/views/welcome-page.twig");
    }
}

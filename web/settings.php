<?php

/*
 * Xibo - Digital Signage - http://www.xibo.org.uk
 *
 * This file is part of Xibo - and is automatically generated by the installer
 *
 * You should not need to edit this file, unless your SQL connection details have changed.
 */

defined('XIBO') or die(__("Sorry, you are not allowed to directly access this page.") . "<br />" . __("Please press the back button in your browser."));

global $dbhost;
global $dbuser;
global $dbpass;
global $dbname;
global $dbssl;
global $dbsslverify;

$dbhost = 'localhost';
$dbuser = 'smcs';
$dbpass = 'dontpanic43!';
$dbname = 'SMCS';
$dbssl = '';
$dbsslverify = '';

if (!defined('SECRET_KEY'))
    define('SECRET_KEY','f6K20chbZ9F7');;

if (file_exists('/var/www/cms/custom/settings-custom.php'))
    include_once('/var/www/cms/custom/settings-custom.php');

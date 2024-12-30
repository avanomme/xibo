<?php
// Add at the top of the file
if (!file_exists('../settings.php'))
    exit('Not configured');

require '../vendor/autoload.php';

$app = new \RKA\Slim();
$app->setMode('production');

// Get app state
$app->configService = \Xibo\Service\ConfigService::Load('../config/config.php');

// Check if maintenance mode is actually enabled
$maintenanceEnabled = $app->configService->getSetting('MAINTENANCE_ENABLED');

if ($maintenanceEnabled !== 1 && $maintenanceEnabled !== '1' && $maintenanceEnabled !== 'On') {
    // Redirect to index
    header('Location: index.php');
    exit();
} 

sudo git fetch origin
sudo git checkout backup
sudo git pull origin backup
<?php
/******************************************************************************
 * Wikipedia Account Creation Assistance tool                                 *
 * ACC Development Team. Please see team.json for a list of contributors.     *
 *                                                                            *
 * This is free and unencumbered software released into the public domain.    *
 * Please see LICENSE.md for the full licencing statement.                    *
 ******************************************************************************/

namespace Waca;

use Waca\ConsoleTasks\MigrateToDomains;

require_once(__DIR__ . '/../includes/Startup.php');

global $siteConfiguration;

// Override required schema version for this script
$siteConfiguration->setSchemaVersion(36);

$application = new ConsoleStart($siteConfiguration, new MigrateToDomains());

$application->run();

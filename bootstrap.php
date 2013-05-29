<?php

/**
 * This is the bootstrap file for our amazing application.
 */

require_once dirname(__FILE__) . '/src/Emmetog/Application/Application.php';

$application = new Emmetog\Application\Application();
$application->execute();
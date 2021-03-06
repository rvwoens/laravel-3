<?php

// --------------------------------------------------------------
// Define the directory separator for the environment.
// --------------------------------------------------------------
define('DS', DIRECTORY_SEPARATOR);

// --------------------------------------------------------------
// Set the core Laravel path constants.
// --------------------------------------------------------------
require 'paths.php';

// --------------------------------------------------------------
// Bootstrap the Laravel core.
// --------------------------------------------------------------
require path('sys').'core.php';

// --------------------------------------------------------------
// Start the default bundle.
// --------------------------------------------------------------
Laravel\Bundle::start(DEFAULT_BUNDLE);

require_once 'vendor/autoload.php';
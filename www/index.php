<?php
/**
 * @author Chiel Kunkels <hello@chielkunkels.com>
 */
/**
 * Commonly used paths
 */
define('WWW', dirname(__FILE__));
define('ROOT', substr(WWW, 0, -4));
define('LIB', ROOT.'/lib');
define('MOD', ROOT.'/mod');

/**
 * Bootstrap handles the rest
 */
require LIB.'/Bootstrap.php';
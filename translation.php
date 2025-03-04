#!/usr/bin/env php
<?php
/**
 *
 * @package phpBB Translation Validator
 * @copyright (c) 2014 phpBB Ltd.
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

require __DIR__ . '/vendor/autoload.php';

use Phpbb\TranslationValidator\Cli;

// Run the command line script for the Translation Validator
$app = new Cli();
$app->run();

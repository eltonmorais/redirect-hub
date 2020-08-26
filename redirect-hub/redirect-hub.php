<?php

/**
 * @package Redirect Hub
 * @version 1.0.0
 */
/*
Plugin Name: Redirect Hub
Plugin URI: http://autopilottools.com
Description: Gerencie redirecionamentos múltiplos. Ideal para distribuição em grupos WhatsApp.
Author: Auto Pilot Tools
Version: 1.0.0
Author URI: http://autopilottools.com/
*/

define('APTGETCARCREDPLUGINDIR',plugin_dir_path(__FILE__));
require_once(APTGETCARCREDPLUGINDIR. "infrastructure/resources/plugins/acf/acf-config.php");
require_once(APTGETCARCREDPLUGINDIR. "infrastructure/resources/plugins/acf/acf-fields.php");
require_once(APTGETCARCREDPLUGINDIR. "infrastructure/resources/plugins/acf/acf-menu.php");
require_once(APTGETCARCREDPLUGINDIR. "common/extensions/constants.php");
require_once(APTGETCARCREDPLUGINDIR. "domain/initialization/main_plugin.class.php");

MAINPLUGIN::instance();
MAINPLUGIN::pluginDir(APTGETCARCREDPLUGINDIR);
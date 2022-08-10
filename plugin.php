<?php

/**
 * Plugin Name: MHS Interview Task 1
 * Plugin URI: https://rob.soltani.io/
 * Description: A plugin that adds a shortcode to display a notice box based on specified type and message.
 * Version: 0.0.1
 * Requires at least: 5.3
 * Requires PHP: 5.6
 * Author: Rob Soltani
 * Author URI: https://rob.soltani.io
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mhs_interview_task_1
 * Domain Path: /public/lang
 */

// Declare the MHS Interview Task 1 namespace
namespace MHS_INTERVIEW_TASK_1;

// Define a constant to hold the path to the root directory of the plugin
define('MHS_INTERVIEW_TASK_1_ROOT_DIR', plugin_dir_path(__FILE__));

// Import the main plugin class
require_once MHS_INTERVIEW_TASK_1_ROOT_DIR . 'src/Plugin.php';

// Statically (singular instance) initiate the NoticeBox class
NoticeBox::Initiate();
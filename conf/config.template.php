<?php
/* ********************************************	*/
/* Configuration file for Budabot.              */
/* ********************************************	*/

// Account information.
$vars['login']      = "";
$vars['password']   = "";
$vars['name']       = "";
$vars['my_guild']   = "";

// 1 for Atlantean, 2 for Rimor, 4 for Test Live.
$vars['dimension']  = 5;

// Character name of the Super Administrator.
$vars['SuperAdmin'] = "";

// Database information.
$vars['DB Type'] = "Sqlite";		// What type of database should be used? (Sqlite or Mysql)
$vars['DB Name'] = "budabot.db";	// Database name
$vars['DB Host'] = "./data/";		// Hostname or file location
$vars['DB username'] = "";		// MySQL username
$vars['DB password'] = "";		// MySQL password

// Logging options. 1 for enabled, 0 for disabled.
$vars['error_console'] = 1;
$vars['error_file'] = 1;

$vars['info_console'] = 1;
$vars['info_file'] = 1;

$vars['query_console'] = 0;
$vars['query_file'] = 0;

$vars['debug_console'] = 0;
$vars['debug_file'] = 0;

$vars['chat_console'] = 1;
$vars['chat_file'] = 1;

// Show aoml markup in logs/console. 1 for enabled, 0 for disabled.
$vars['show_aoml_markup'] = 0;

// Cache folder for storing organization XML files.
$vars['cachefolder'] = "./cache/";

// Default status for modules. 1 for enabled, 0 for disabled.
$vars['default_module_status'] = 0;

// AO Chat Proxy. 1 for enabled, 0 for disabled.
$vars['use_proxy'] = 0;
$vars['proxy_server'] = "127.0.0.1";
$vars['proxy_port'] = 9993;

?>

<?php
/////////////////////////////////////////////////
/* ********************************************	*/
/* Config file for the bot.                     */
/* To change this settings you can use the      */
/* Ingame Commands(config/settings) for it      */
/* but change these file only when you          */
/* know what you are doing.                     */
/* ********************************************	*/

// Enter your Account info here
$vars['login']		= "towerspammer12";
$vars['password']	= "MizzieSpam1";
$vars['name']		= "Towerspam";
$vars['my guild']	= "";

// Enter 1 for Atlantean, 2 for Rimor, 3 for Die Nueue Welt
$vars['dimension']	= 5;

// Insert the Administrator name here
$settings['Super Admin'] = "Mizzie";

// Default Delay for crons after bot is connected
$settings['CronDelay'] = 5;

// List of characters the bot should ignore (multiple names should be separated by semicolons ';')
$settings['Ignore'] = "";

// Database Information
$vars['DB Type'] = "Sqlite";		// What type of database should be used? (Sqlite or Mysql)
$vars['DB Name'] = "budabot.db";	// Database name
$vars['DB Host'] = "./data/";		// Hostname or file location
$vars['DB username'] = "";		// MySQL username
$vars['DB password'] = "";		// MySQL password

// Logging options.  1 for enabled, 2 for disabled
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

// Show aoml markup (formatting and blobs) in logs/console
$vars['show_aoml_markup'] = 0;

// Cache folder for storing org xml files
$vars['cachefolder'] = "./cache/";

// Default status for modules. 1 for enabled, 0 for disabled.
$vars['default_module_status'] = 0;

// AO Chat Proxy. 1 for enabled, 0 for disabled.
$vars['use_proxy'] = 0;
$vars['proxy_server'] = "127.0.0.1";
$vars['proxy_port'] = 9993;

?>
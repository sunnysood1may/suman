<?php

/**
 * This is core configuration file.
 *
 * Use it to configure core behavior of Cake.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * CakePHP Debug Level:
 *
 * Production Mode:
 * 	0: No error messages, errors, or warnings shown. Flash messages redirect.
 *
 * Development Mode:
 * 	1: Errors and warnings shown, model caches refreshed, flash messages halted.
 * 	2: As in 1, but also with full debug messages and SQL output.
 *
 * In production mode, flash messages redirect after a time interval.
 * In development mode, you need to click the flash message to continue.
 */
	
	
	/*$ip = $_SERVER['REMOTE_ADDR'];//"124.182.54.12";//$_SERVER['REMOTE_ADDR'];
    $json = @file_get_contents("http://api.easyjquery.com/ips/?ip=".$ip."&full=true");
    $json = json_decode($json,true);
	$timezone = $json['LocalTimeZone'];
  	if($timezone=='')
	{$timezone="Australia/Perth";}
	date_default_timezone_set($timezone);*/
	date_default_timezone_set('America/New_York');
	define("MAINTENANCE_MODE", false);
	define("TIMESTAMP_STRING", "America/New_York");
	define("SENDGRID_API_KEY", "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");
        define("TEMPLATE_SESSION_CREATED", "3579d3ab-3894-4eec-a920-9a730a2a279a");
        define("TEMPLATE_ITEMS_SELECTED", "a4c0fbc8-0859-421a-adb3-7e43eba1d556");
	define("TEMPLATE_PACKAGE_DELIVERED", "deb2ff06-a62d-4e44-b1aa-4d6a462fe7de");
	define("TEMPLATE_CHECKOUT", "52aec881-2786-41d9-95ef-74728338ec70");
	define("TEMPLATE_NEW_ACCOUNT", "53ef21a0-bda4-49a7-bf45-aedf366c360e");
	define("TEMPLATE_DELIVERY_STARTED", "6c41e27b-95a2-4603-9fc6-b7facbbfd59f");
	define("TEMPLATE_TRY_US_AGAIN", "e61e4510-b42e-4dbe-a780-0fa3415283f8");
        define("TEMPLATE_SELECT_ITEMS_REMINDER" ,"08838c90-5832-4b2d-8a36-ebcdd2d17c43");
	define("TEMPLATE_CHECKOUT_REMINDER", "29fc884a-88b9-4012-8b33-41a9b6c8c1ed");
	define("NOTIFY_ADMIN_SESSION_CANCELLED", "65dcdf38-7cf4-4636-ba34-57aaf5cd2586");
	define("NO_ITEMS_TEMPLATE", "f777d914-2753-4365-b7c5-6a8779c6d643");
	define("SESSION_CANCELLED_TEMPLATE", "62308ea8-fc83-4894-a2b6-ca42f368612d");

	Configure::write('debug',0);

	define("FOLLOWING_SCREEN_DURATION", "1 WEEK");
	define("SUGGESTED_STYLIST_DURATION", "1 month");
	
	define("ONE_FREE_STYLING_SESSION", 1);          
	define("TWO_FREE_STYLING_SESSION", 2);
	define("THREE_FREE_STYLING_SESSION", 3);

	define("ONE_FREE_SESSION_CHARGE_LOGIC_DATE_THRESHOLD", "2019-04-13 05:00:00");

        define("STRIPE_API_KEY", "sk_live_PJboGOW9UKbNHUSHqnUhNii7");
        define("TAXJAR_API_KEY", "67b3dd81ab05cfdc0f2317e130f44d77");

        define("STYLING_SESSION_STATE_1_THRESHOLD", 72);
        define("STYLING_SESSION_STATE_1_EXPIRES_AFTER", "+".STYLING_SESSION_STATE_1_THRESHOLD." hours");
        define("STYLING_SESSION_STATE_2_THRESHOLD", 120);
        define("STYLING_SESSION_STATE_2_EXPIRES_AFTER", "+".STYLING_SESSION_STATE_2_THRESHOLD." hours");
        define("STYLING_SESSION_STATE_3_THRESHOLD", 2);
        define("STYLING_SESSION_STATE_3_EXPIRES_AFTER", "+".STYLING_SESSION_STATE_3_THRESHOLD." weeks");
        define("STYLING_SESSION_STATE_4_THRESHOLD", 72);
        define("STYLING_SESSION_STATE_4_EXPIRES_AFTER", "+".STYLING_SESSION_STATE_4_THRESHOLD." hours");	
	define("SESSION_CHARGE_LOGIC_DATE_THRESHOLD", "2018-09-01 03:00:00");
        define("PICK_ITEMS_REMINDER_DAYS", 1);
        define("SESSION_CHARGE", 100);
        define("SESSION_CHARGE_NEW", 2000);
        define("USPS_USERNAME", "834FASHO3626");
        define("AUTO_SEND_OUTFITS_INTERVAL", "2 DAY");
        define("SHOPIFY_URL", "https://cf277c1c9098bb6403031d06b61ba658:b1a3654892f76d3f5b3fb31e71e28dea@fashom.myshopify.com/");
        define("SHIPPO_TRACKING_URL", "https://api.goshippo.com/tracks/");
        define("SHOPIFY_REDIRECT_URL", "https://fashom.myshopify.com/");
        define("SHIPPO_API_KEY", "shippo_live_d12c5ff32d994b0480d2da003d6191ca140d8007");

	define("REFERRAL_CREDIT", 1000);
        define("REFERRED_CREDIT", 1000);
	define("TRY_US_AGAIN_REMINDER_INTERVAL", "3 WEEK");
	define("CANCEL_SELECTION_INTERVAL", "5 DAY");

	define("CHAT_EXPIRES_AFTER", "+5 days");
	define("STYLING_SESSION_EXPIRES_AFTER", "+5 days");
        define("SMTP_PORT", 2525);
        define("SMTP_TIMEOUT", 30);
        define("SMTP_HOST", 'smtp.sendgrid1234554322.net');
        define("SMTP_USER", 'fashom_sendgrid');
        define("SMTP_PASS", 'fashom123');
        define("SMTP_CLIENT", 'smtp_helo_hostname');

//	define("BASE_URL", "https://admin.fashom.com/");
	define("BASE_URL", "http://fashom.local/admin/users");
	define("BASE_IP", "34.221.196.250");
//	define("BASE_STYLING_URL", "https://styling.fashom.com");
	define("BASE_STYLING_URL", "http://fashom.local/stylist");
	define("BASE_PATH", "/var/www/admin/");

	//define("IDEABOOK_IMAGE_PATH", "../webroot/img/ideabook/");
	########define("IDEABOOK_IMAGE_PATH","http://59352efae4e95b2530d6-8a17458446b0962c4039146d2f62895e.r78.cf1.rackcdn.com/");
	####define("IDEABOOK_IMAGE_PATH","http://c8f269e512382c12fbc0-8a9578e5212c92162d5f4b62c8fa5f23.r19.cf1.rackcdn.com/");
	#define("IDEABOOK_IMAGE_PATH", "https://dal05.objectstorage.softlayer.net/v1/AUTH_c8aa4ca4-421f-43db-ba4c-45aabd2eb779/live_container/");

	define("IDEABOOK_IMAGE_FULL_PATH_W290", "../webroot/img/ideabook/w290_");
	define("IDEABOOK_IMAGE_PATH_W290", "ideabook/w290_");
	
	## CODE ADDED ON 1 OCT
	define("IDEABOOK_IMAGE_FULL_PATH_W158", "../webroot/img/ideabook/w158_");
	define("IDEABOOK_IMAGE_PATH_W158", "ideabook/w158_");

	define("IDEABOOK_IMAGE_FULL_PATH_W400", "../webroot/img/ideabook/w400_");
	define("IDEABOOK_IMAGE_PATH_W400", "ideabook/w400_");
	
	define("IDEABOOK_IMAGE_FULL_PATH_W640", "../webroot/img/ideabook/w640_");
        define("IDEABOOK_IMAGE_PATH_W640", "ideabook/w640_");

	define("IDEABOOK_IMAGE_FULL_PATH_W613", "../webroot/img/ideabook/w613_");
	define("IDEABOOK_IMAGE_PATH_W613", "ideabook/w613_");

	define("IDEABOOK_IMAGE_FULL_PATH_W373", "../webroot/img/ideabook/w373_");
	define("IDEABOOK_IMAGE_PATH_W373", "ideabook/w373_");
	
	define("IDEABOOK_IMAGE_FULL_PATH_W100", "../webroot/img/ideabook/w100_");
	define("IDEABOOK_IMAGE_PATH_W100", "ideabook/w100_");

	define("IDEABOOK_IMAGE_FULL_PATH_W425", "../webroot/img/ideabook/w425_");
	define("IDEABOOK_IMAGE_PATH_W425", "ideabook/w425_");

	define("IDEABOOK_IMAGE_FULL_PATH_W570", "../webroot/img/ideabook/w570_");
	define("IDEABOOK_IMAGE_PATH_W570", "ideabook/w570_");
	
	define("IDEABOOK_IMAGE_FULL_PATH_W83", "../webroot/img/ideabook/w83_");
	define("IDEABOOK_IMAGE_PATH_W83", "ideabook/w83_");

	define("IDEABOOK_IMAGE_FULL_PATH_W80", "../webroot/img/ideabook/w80_");
	define("IDEABOOK_IMAGE_PATH_W80", "ideabook/w80_");
	
	define("IDEABOOK_IMAGE_FULL_PATH_W200", "../webroot/img/ideabook/w200_");
	define("IDEABOOK_IMAGE_PATH_W200", "ideabook/w200_");

	define("IDEABOOK_IMAGE_FULL_PATH_W120", "../webroot/img/ideabook/w120_");
	define("IDEABOOK_IMAGE_PATH_W120", "ideabook/w120_");
	

	define("MAP_MARKER", "http://www.fashom.com/img/location.png");
	## CODE ADDED ON 1 OCT

	## CODE ADDED ON 3 OCT

	define("CDN_USERNAME", "John.Tadros");

	define("CDN_API", "40493369681b4706b6824843782d4cdd");

	define("CDN_COTAINER", "Fashom Live DB");

	define("CDN_URL", "https://identity.api.rackspacecloud.com/v2.0/");

	#GOOGLE BUCKETS
        define("GOOGLE_BUCKET_API_KEY", "AIzaSyD5cyz-Z3hWuYAU0v7KLve8sU_cnXDE0X4");
        define("GOOGLE_BUCKET", "fashom_live_gcloud_bucket");
        define("GOOGLE_IMAGE_PATH", "https://storage.googleapis.com/".GOOGLE_BUCKET."/");
        define("IDEABOOK_IMAGE_PATH", "https://storage.googleapis.com/".GOOGLE_BUCKET."/");

	#SOFTLAYER
        #define("SL_CONTAINER", "live_container");
        #define("SL_HOST", "https://dal05.objectstorage.softlayer.net");
        #define("SL_USERNAME","SLOS322682-2:SL322682");
        #define("SL_PASSWORD","b9ae89033592febaf454c20de1f8eaf98b78070ff43e6fddf54903449a92ccd5");

	define("MIXPANEL_KEY", "28f69e06dc55d826041f06cf93bc0420");
        define("ANDROID_PUSH_API_KEY", "AIzaSyA5Y3DG65QlcBq4Xf4kLskE15V-M_gOIug");
	define("FIREBASE_PUSH_API_KEY", "AAAATtiIbbk:APA91bEb8LH6-fUPosrzIKM97Gn3gzVySLHxGbd9O7xVVg9eKEn1UImyw7oTS7bHnYrUoYz5u0fuV2zIqgBSACurgR92cv-yE-5eh_MWYcFpKqZL3zjSr-_fD0awhnOh9LXmwUlEniNF");
        define("MIXPANEL_MOBILE_KEY","5145dda69da58c46e56cf9b3c86edbd0");

	define("MAPBOX_KEY", "fashom.hdjdc543"); //DEV

	## CODE ADDED ON 3 OCT

	## CODE ADDED ON 4 OCT
	define("IDEABOOK_IMAGE_UPLOAD_PATH", "/var/www/html/app/webroot/img/ideabook/");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W290", "../webroot/img/ideabook/w290_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W158", "../webroot/img/ideabook/w158_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W400", "../webroot/img/ideabook/w400_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W613", "../webroot/img/ideabook/w613_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W640", "/var/www/html/app/webroot/img/ideabook/w640_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_H560", "../webroot/img/ideabook/h560_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W373", "../webroot/img/ideabook/w373_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W100", "../webroot/img/ideabook/w100_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W425", "../webroot/img/ideabook/w425_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W570", "../webroot/img/ideabook/w570_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W83", "../webroot/img/ideabook/w83_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W30", "../webroot/img/ideabook/w30_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W80", "../webroot/img/ideabook/w80_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W200", "../webroot/img/ideabook/w200_");
	define("IDEABOOK_IMAGE_UPLOAD_FULL_PATH_W120", "../webroot/img/ideabook/w120_");

	## CODE ADDED ON 4 OCT

	## CODE ADDED ON 8 OCT
	define("INSTAGRAM_API", "a82911392a0f477fbc8f309d6275c544");
        define("INSTAGRAM_SECRET", "5ab6b4b7ae2e487288319ae3ca3a40c5");

	define("INSTAGRAM_LOGIN_API", "77f0531db4f54f8ea423beb3990b42d4");
	define("INSTAGRAM_LOGIN_SECRET", "948060c475d74c2ea49900150e4a0057");
	## CODE ADDED ON 8 OCT

	define("INSTAGRAM_API_TOKEN", "552925178.fd72562.d0dd8abfc5ef4c5ba2d596b2aba258a8");
        define("INSTAGRAM_BRAND_LIMIT", 5);
        define("INSTAGRAM_POST_LIMIT", 50);

	## CODE ADDED ON 21 OCT 

	define("SITE_HTTPPATH","https://www.fashom.com/");
	define('FACEBOOK_APP_ID', '160789050794307');
        define('FACEBOOK_APP_SECRET', 'f7d5b75b42c726ef6c4d01a06ac32f69');
	define('YAHOO_PATH','/var/www/html/app/webroot/yahoo/');


	## CODE ADDED ON 21 OCT

	define('GOOGLE_API','ba93f87c80259dd909889e9ad8b031df946fcae864d6e66f2e79a539abb81079');

//	echo $_SERVER['REMOTE_ADDR'];
	/*if($_SERVER['REMOTE_ADDR']=='203.123.36.91')
	{ Configure::write('debug',2); }
	else
	{ Configure::write('debug',0);}*/

/**
 * Configure the Error handler used to handle errors for your application. By default
 * ErrorHandler::handleError() is used. It will display errors using Debugger, when debug > 0
 * and log errors with CakeLog when debug = 0.
 *
 * Options:
 *
 * - `handler` - callback - The callback to handle errors. You can set this to any callable type,
 *   including anonymous functions.
 *   Make sure you add App::uses('MyHandler', 'Error'); when using a custom handler class
 * - `level` - int - The level of errors you are interested in capturing.
 * - `trace` - boolean - Include stack traces for errors in log files.
 *
 * @see ErrorHandler for more information on error handling and configuration.
 */
	Configure::write('Error', array(
		'handler' => 'ErrorHandler::handleError',
		'level' => E_ALL & ~E_DEPRECATED,
		'trace' => true
	));

/**
 * Configure the Exception handler used for uncaught exceptions. By default,
 * ErrorHandler::handleException() is used. It will display a HTML page for the exception, and
 * while debug > 0, framework errors like Missing Controller will be displayed. When debug = 0,
 * framework errors will be coerced into generic HTTP errors.
 *
 * Options:
 *
 * - `handler` - callback - The callback to handle exceptions. You can set this to any callback type,
 *   including anonymous functions.
 *   Make sure you add App::uses('MyHandler', 'Error'); when using a custom handler class
 * - `renderer` - string - The class responsible for rendering uncaught exceptions. If you choose a custom class you
 *   should place the file for that class in app/Lib/Error. This class needs to implement a render method.
 * - `log` - boolean - Should Exceptions be logged?
 *
 * @see ErrorHandler for more information on exception handling and configuration.
 */
	Configure::write('Exception', array(
		'handler' => 'ErrorHandler::handleException',
		'renderer' => 'ExceptionRenderer',
		'log' => true
	));

/**
 * Application wide charset encoding
 */
	Configure::write('App.encoding', 'UTF-8');

/**
 * To configure CakePHP *not* to use mod_rewrite and to
 * use CakePHP pretty URLs, remove these .htaccess
 * files:
 *
 * /.htaccess
 * /app/.htaccess
 * /app/webroot/.htaccess
 *
 * And uncomment the App.baseUrl below. But keep in mind
 * that plugin assets such as images, CSS and Javascript files
 * will not work without url rewriting!
 * To work around this issue you should either symlink or copy
 * the plugin assets into you app's webroot directory. This is
 * recommended even when you are using mod_rewrite. Handling static
 * assets through the Dispatcher is incredibly inefficient and
 * included primarily as a development convenience - and
 * thus not recommended for production applications.
 */
	//Configure::write('App.baseUrl', env('SCRIPT_NAME'));

/**
 * Uncomment the define below to use CakePHP prefix routes.
 *
 * The value of the define determines the names of the routes
 * and their associated controller actions:
 *
 * Set to an array of prefixes you want to use in your application. Use for
 * admin or other prefixed routes.
 *
 * 	Routing.prefixes = array('admin', 'manager');
 *
 * Enables:
 *	`admin_index()` and `/admin/controller/index`
 *	`manager_index()` and `/manager/controller/index`
 *
 */
	//Configure::write('Routing.prefixes', array('admin'));
	
	Configure::write('Routing.prefixes', array('admin'));

/**
 * Turn off all caching application-wide.
 *
 */
	Configure::write('Cache.disable', false);

/**
 * Enable cache checking.
 *
 * If set to true, for view caching you must still use the controller
 * public $cacheAction inside your controllers to define caching settings.
 * You can either set it controller-wide by setting public $cacheAction = true,
 * or in each action using $this->cacheAction = true.
 *
 */
	Configure::write('Cache.check', true);

/**
 * Enable cache view prefixes.
 *
 * If set it will be prepended to the cache name for view file caching. This is
 * helpful if you deploy the same application via multiple subdomains and languages,
 * for instance. Each version can then have its own view cache namespace.
 * Note: The final cache file name will then be `prefix_cachefilename`.
 */
	Configure::write('Cache.viewPrefix', 'prefix');

/**
 * Defines the default error type when using the log() function. Used for
 * differentiating error logging and debugging. Currently PHP supports LOG_DEBUG.
 */
	define('LOG_ERROR', LOG_ERR);

/**
 * Session configuration.
 *
 * Contains an array of settings to use for session configuration. The defaults key is
 * used to define a default preset to use for sessions, any settings declared here will override
 * the settings of the default config.
 *
 * ## Options
 *
 * - `Session.cookie` - The name of the cookie to use. Defaults to 'CAKEPHP'
 * - `Session.timeout` - The number of minutes you want sessions to live for. This timeout is handled by CakePHP
 * - `Session.cookieTimeout` - The number of minutes you want session cookies to live for.
 * - `Session.checkAgent` - Do you want the user agent to be checked when starting sessions? You might want to set the
 *    value to false, when dealing with older versions of IE, Chrome Frame or certain web-browsing devices and AJAX
 * - `Session.defaults` - The default configuration set to use as a basis for your session.
 *    There are four builtins: php, cake, cache, database.
 * - `Session.handler` - Can be used to enable a custom session handler. Expects an array of callables,
 *    that can be used with `session_save_handler`. Using this option will automatically add `session.save_handler`
 *    to the ini array.
 * - `Session.autoRegenerate` - Enabling this setting, turns on automatic renewal of sessions, and
 *    sessionids that change frequently. See CakeSession::$requestCountdown.
 * - `Session.ini` - An associative array of additional ini values to set.
 *
 * The built in defaults are:
 *
 * - 'php' - Uses settings defined in your php.ini.
 * - 'cake' - Saves session files in CakePHP's /tmp directory.
 * - 'database' - Uses CakePHP's database sessions.
 * - 'cache' - Use the Cache class to save sessions.
 *
 * To define a custom session handler, save it at /app/Model/Datasource/Session/<name>.php.
 * Make sure the class implements `CakeSessionHandlerInterface` and set Session.handler to <name>
 *
 * To use database sessions, run the app/Config/Schema/sessions.php schema using
 * the cake shell command: cake schema create Sessions
 *
 */
	Configure::write('Session', array(
		 'defaults' => 'php'
	));


/**
 * A random string used in security hashing methods.
 */
	Configure::write('Security.salt', 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9ssmi');


/**
 * A random numeric string (digits only) used to encrypt/decrypt strings.
 */
	Configure::write('Security.cipherSeed', '76859309657453542496749683645ss');
	Configure::write('Security.level', 'low');
/**
 * Apply timestamps with the last modified time to static assets (js, css, images).
 * Will append a querystring parameter containing the time the file was modified. This is
 * useful for invalidating browser caches.
 *
 * Set to `true` to apply timestamps when debug > 0. Set to 'force' to always enable
 * timestamping regardless of debug value.
 */
	//Configure::write('Asset.timestamp', true);

/**
 * Compress CSS output by removing comments, whitespace, repeating tags, etc.
 * This requires a/var/cache directory to be writable by the web server for caching.
 * and /vendors/csspp/csspp.php
 *
 * To use, prefix the CSS link URL with '/ccss/' instead of '/css/' or use HtmlHelper::css().
 */
	//Configure::write('Asset.filter.css', 'css.php');

/**
 * Plug in your own custom JavaScript compressor by dropping a script in your webroot to handle the
 * output, and setting the config below to the name of the script.
 *
 * To use, prefix your JavaScript link URLs with '/cjs/' instead of '/js/' or use JavaScriptHelper::link().
 */
	//Configure::write('Asset.filter.js', 'custom_javascript_output_filter.php');

/**
 * The classname and database used in CakePHP's
 * access control lists.
 */
	Configure::write('Acl.classname', 'DbAcl');
	Configure::write('Acl.database', 'default');

/**
 * Uncomment this line and correct your server timezone to fix
 * any date & time related errors.
 */
	//date_default_timezone_set('UTC');

/**
 *
 * Cache Engine Configuration
 * Default settings provided below
 *
 * File storage engine.
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'File', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 * 		'path' => CACHE, //[optional] use system tmp directory - remember to use absolute path
 * 		'prefix' => 'cake_', //[optional]  prefix every cache file with this string
 * 		'lock' => false, //[optional]  use file locking
 * 		'serialize' => true, [optional]
 *	));
 *
 * APC (http://pecl.php.net/package/APC)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Apc', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *	));
 *
 * Xcache (http://xcache.lighttpd.net/)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Xcache', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional] prefix every cache file with this string
 *		'user' => 'user', //user from xcache.admin.user settings
 *		'password' => 'password', //plaintext password (xcache.admin.pass)
 *	));
 *
 * Memcache (http://www.danga.com/memcached/)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Memcache', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 * 		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 * 		'servers' => array(
 * 			'127.0.0.1:11211' // localhost, default port 11211
 * 		), //[optional]
 * 		'persistent' => true, // [optional] set this to false for non-persistent connections
 * 		'compress' => false, // [optional] compress data in Memcache (slower, but uses less memory)
 *	));
 *
 *  Wincache (http://php.net/wincache)
 *
 * 	 Cache::config('default', array(
 *		'engine' => 'Wincache', //[required]
 *		'duration' => 3600, //[optional]
 *		'probability' => 100, //[optional]
 *		'prefix' => Inflector::slug(APP_DIR) . '_', //[optional]  prefix every cache file with this string
 *	));
 */

/**
 * Configure the cache handlers that CakePHP will use for internal
 * metadata like class maps, and model schema.
 *
 * By default File is used, but for improved performance you should use APC.
 *
 * Note: 'default' and other application caches should be configured in app/Config/bootstrap.php.
 *       Please check the comments in boostrap.php for more info on the cache engines available
 *       and their settings.
 */
$engine = 'File';

// In development mode, caches should expire quickly.
$duration = '+999 days';
if (Configure::read('debug') > 0) {
	$duration = '+10 seconds';
}

// Prefix each application on the same server with a different string, to avoid Memcache and APC conflicts.
$prefix = 'myapp_';

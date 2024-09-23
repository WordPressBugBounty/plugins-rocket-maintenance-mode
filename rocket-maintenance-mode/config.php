<?php

define( 'WPMMP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

define( 'WPMMP_PLUGIN_URL', plugins_url( '', WPMMP_PLUGIN_FILE ) );

define( 'WPMMP_PLUGIN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );

define( 'WPMMP_PLUGIN_PREFIX', 'wpmmp' );

define( 'WPMMP_PLUGIN_INCLUDE_DIRECTORY_NAME', 'includes' );

define( 'WPMMP_PLUGIN_VIEW_DIRECTORY_NAME', 'views' );

define( 'WPMMP_PLUGIN_CSS_DIRECTORY_NAME', 'css' );

define( 'WPMMP_PLUGIN_JS_DIRECTORY_NAME', 'js' );

define( 'WPMMP_PLUGIN_INCLUDE_DIRECTORY', WPMMP_PLUGIN_PATH .
									  	WPMMP_PLUGIN_INCLUDE_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'WPMMP_PLUGIN_VIEW_DIRECTORY', WPMMP_PLUGIN_PATH .
									  	WPMMP_PLUGIN_VIEW_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'WPMMP_PLUGIN_CSS_DIRECTORY', WPMMP_PLUGIN_PATH .
									  	WPMMP_PLUGIN_CSS_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'WPMMP_PLUGIN_JS_DIRECTORY', WPMMP_PLUGIN_PATH .
									  	WPMMP_PLUGIN_JS_DIRECTORY_NAME
							 		  	. DIRECTORY_SEPARATOR );

define( 'WPMMP_PLUGIN_MAIN_FILE', WPMMP_PLUGIN_PATH . 'wp-wpmmp.php' );

define( 'WPMMP_PLUGIN_VERSION', '3.9' );

define( 'WPMMP_FREE_VERSION_ACTIVATED', true );

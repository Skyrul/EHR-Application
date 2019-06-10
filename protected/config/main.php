<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Engagex - Application For Employment',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Kenji2012',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// enable URLs in path-format
	    'urlManager' => array(
	        'urlFormat' => 'path',
	        'rules' => array(
	            '<controller:\w+>/<id:\d+>' => '<controller>/view',
	            '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
	            '<controller:\w+>/<action:\w+>' => '<controller>/<action>'
	        ),
	        'showScriptName' => false,
	        'caseSensitive' => false
	    ),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'messenger@engagex.com',
	    'messenger'=>'messenger@engagex.com',
	    'recipient'=>array(
	        '1'=>'jim.campbell@engagex.com',
	        '2'=>'kevin.bowman@engagex.com',
	        '3'=>'kevin.bowman@engagex.com',
	        '4'=>'alicia.carter@engagex.com',
	        '5'=>'joven.barola@engagex.com',
	    ),
	    'pdfviewer'=>'http://45.77.171.57/convert.php?web=',
	    'authUrl'=>'admin:LetmeIN'
	),
);

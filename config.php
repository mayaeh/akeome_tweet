<?php


// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set ('Asia/Tokyo') ;

// 環境別設定ファイルが存在すれば読み込む
if (is_readable( __DIR__ . '/environment.inc.php') ) {
	require_once ( __DIR__ . '/environment.inc.php') ;
}


if ( ! defined ('SCRIPT_DIR') ) {
	define ('SCRIPT_DIR', __DIR__ . '/' ) ;
}

define ('OUTPUT_DIR', SCRIPT_DIR . 'output/') ;

// エラーログファイル名
define ('ERR_LOGFILE', OUTPUT_DIR . 'err_log') ;


// oauth 周りの設定は environment.inc.php で行う
if ( ! defined ('CONSUMER_KEY') ) {
	define ('CONSUMER_KEY', '') ;
}

if ( ! defined ('CONSUMER_SECRET') ) {
	define ('CONSUMER_SECRET', '') ;
}

if ( ! defined ('OAUTH_CALLBACK') ) {
	define ('OAUTH_CALLBACK', '') ;
}


// OAuth アプリ登録後表示された値を記述する

if ( ! defined ('OAUTH_ACCESS_TOKEN') ) {
	define ('OAUTH_ACCESS_TOKEN', '') ;
}

if ( ! defined ('OAUTH_ACCESS_TOKEN_SECRET') ) {
	define ('OAUTH_ACCESS_TOKEN_SECRET', '') ;
}

require_once (SCRIPT_DIR . 'include_config.inc.php') ;

?>

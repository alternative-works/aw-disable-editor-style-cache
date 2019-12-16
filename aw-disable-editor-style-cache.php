<?php
/*
Plugin Name: AW Disable Editor Style Cache
Plugin URI: https://careru.jp/
Description: ビジュアルエディタのキャッシュ生成を無効化
Author: Alternative Works
Version: 0.0.1
Author URI: https://careru.jp/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( dirname( __FILE__ ) . '/update-checker/update-checker.php');
require_once( dirname( __FILE__ ) . '/common/main.php' );
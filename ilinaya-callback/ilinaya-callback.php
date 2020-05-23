<?php
/*
Plugin Name: Ilinaya CallBack
Description: Get calls from your website
Author: ilinaya
Version: 1.0.0.0
*/
require_once plugin_dir_path( __FILE__ ).'class.php';

$settings = new IlinayaWidget( "Callback Ilinaya", "callback_ilinaya", __FILE__ );

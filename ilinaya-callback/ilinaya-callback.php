<?php
/*
Plugin Name: Ilinaya CallBack 1.0.0.1
Description: Get calls from your website
Author: ilinaya
*/
require_once plugin_dir_path( __FILE__ ).'class.php';

$settings = new IlinayaWidget( "Callback Ilinaya", "callback_ilinaya", __FILE__ );

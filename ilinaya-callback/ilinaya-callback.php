<?php
/*
Plugin Name: Ilinaya CallBack
Description: Get Calls from your website to your call center
Author: ilinaya
*/
require_once plugin_dir_path( __FILE__ ).'class.php';

$settings = new IlinayaWidget( "Callback Ilinaya", "callback_ilinaya", __FILE__ );

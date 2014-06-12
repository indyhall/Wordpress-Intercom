<?php
/*
Plugin Name: Indy Hall Wordpress Intercom
Plugin URI: http://www.indyhall.org/
Description: Provides an interface to manage intercom access & connects via Twilio to an intercom system
Version: 0.1
Author: Chris Morrell
Author URI: http://cmorrell.com
License: GPL2
*/

require_once __DIR__ . '/vendor/autoload.php';
new \IndyHall\Intercom\Plugin(__FILE__);
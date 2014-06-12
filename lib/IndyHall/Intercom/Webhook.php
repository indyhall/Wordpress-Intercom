<?php

namespace IndyHall\Intercom;

class Webhook
{
	protected $_plugin;

	public function __construct(Plugin $plugin)
	{
		$this->_plugin = $plugin;

		// Twilio requests
		\add_action('wp_ajax_' . $plugin->prefixKey('twilio'), array($this, 'handleRequest'));
		\add_action('wp_ajax_nopriv_' . $plugin->prefixKey('twilio'), array($this, 'handleRequest'));
	}

	public function handleRequest()
	{
		// FIXME
		$result = $_REQUEST;
		\wp_send_json($result);
	}
}
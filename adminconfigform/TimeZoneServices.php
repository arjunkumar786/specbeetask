<?php
/**
 * @file providing the service that will show timezone.
 *
 */
namespace  Drupal\adminconfigform;
class TimeZoneServices {
	protected $timezone;
	public function __construct() {
  	$this->timezone = 'Texting server!';
	}
	public function  sayHello($name = ''){
		$config = \Drupal::config('timezoneform.adminsettings');
		return $config->get('country');
	}
}
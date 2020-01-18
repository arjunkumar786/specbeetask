<?php
/**
 * @file providing the service that will show timezone.
 *
 */
namespace  Drupal\adminconfigform;
use Drupal\Component\Datetime;

class TimeZoneServices {
	
	protected $timezone;
	
	public function __construct() {
  	$this->timezone = \Drupal::config('timezoneform.adminsettings');
	}
	
	public function getTimzonesetting(){
		$date = new \DateTime("now", new \DateTimeZone($this->timezone->get('timezone')));
		return $date->format("jS M Y - H:i zA");
	}
}
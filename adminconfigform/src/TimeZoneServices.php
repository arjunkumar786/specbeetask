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
	
	/**
   * @function return Country.
   *
   */
	public function getCountry(){
		return $this->timezone->get('country');
	}
	
	/**
   * @function return City.
   *
   */
	public function getCity(){
		return $this->timezone->get('city');
	}
	
	/**
	 *@function return current date-time.
   *
   */
	public function getTimzonesetting(){
		$date = new \DateTime("now", new \DateTimeZone($this->timezone->get('timezone')));
		return $date->format("jS M Y - H:i zA");
	}
	
	
}
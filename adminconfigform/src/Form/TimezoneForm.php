<?php
/**  
* @file  
* Contains Drupal\adminconfigform\Form\TimezoneForm.  
*/
namespace Drupal\adminconfigform\Form;  
use Drupal\Core\Form\ConfigFormBase;  
use Drupal\Core\Form\FormStateInterface;  

class TimezoneForm extends ConfigFormBase {
	/**
	 * {@inheritdoc}  
	 */
	protected function getEditableConfigNames() {
		return [  
			'timezoneform.adminsettings',  
		];
	}

	/**  
	 * {@inheritdoc}  
	 */
	public function getFormId() {
		return 'timezone_form';
	}

	/**  
   * {@inheritdoc}
   */
	public function buildForm(array $form, FormStateInterface $form_state) {  
		$config = $this->config('timezoneform.adminsettings');  

		$form['country'] = [
			'#type' => 'textfield',
			'#title' => $this->t('Country'),
			'#description' => $this->t('Please enter country.'),
			'#default_value' => $config->get('country'),
		];

		$form['city'] = [
			'#type' => 'textfield',
			'#title' => $this->t('City'),
			'#description' => $this->t('Please enter city.'),
			'#default_value' => $config->get('city'),
		];

		$form['timezone'] = [
    	'#title' => t('Timezone'),
    	'#type' => 'select',
    	'#description' => 'Select timezone.',
			'#default_value' => $config->get('timezone'),
    	'#options' => [
				'America/Chicago' => $this->t('America/Chicago'),
				'America/New_York' => $this->t('America/New_York'),
				'Asia/Tokyo' => $this->t('Asia/Tokyo'),
				'Asia/Dubai' => $this->t('Asia/Dubai'),
				'Asia/Kolkata' => $this->t('Asia/Kolkata'),
				'Europe/Amsterdam' => $this->t('Europe/Amsterdam'),
				'Europe/Oslo' => $this->t('Europe/Oslo'),
				'Europe/London' => $this->t('Europe/London')
    	],
			
  	];
    return parent::buildForm($form, $form_state);  
  }

	/**  
	* {@inheritdoc}
	*/
	public function submitForm(array &$form, FormStateInterface $form_state) {
		$this->config('timezoneform.adminsettings')  
			->set('country', $form_state->getValue('country'))
			->set('city', $form_state->getValue('city'))
			->set('timezone', $form_state->getValue('timezone'))
			->save();

		parent::submitForm($form, $form_state);
	}

}  
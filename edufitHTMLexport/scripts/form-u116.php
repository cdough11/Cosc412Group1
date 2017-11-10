<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.1.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Log in  Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'cdifon1@students.towson.edu',
		'to' => 'cdifon1@students.towson.edu'
	),
	'fields' => array(
		'custom_U128' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Student ID',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Student ID\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Parent Access Code',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Parent Access Code\' is required.',
				'format' => 'Field \'Parent Access Code\' has an invalid email.'
			)
		)
	)
);

process_form($form);
?>

add-anon-patient
================

Add anonymous patient module

Config
------

Enable module:

	'modules' => array(
		'AnonPatient' => array('class' => 'OEModule\AnonPatient\AnonPatientModule'),
	),

Default to anon patient search:

	'components' => array(
		'urlManager' => array(
			'rules' => array(
				'' => 'AnonPatient/default/search',
			),
		),
	),

Disable standard search:

	'params'=>array(
		'search_tabs' => array(
			'main' => array('position' => null),
		),
	),

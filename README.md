AnonPatient
===========

Anonymous patient module

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

	'params' => array(
		'search_tabs' => array(
			'main' => array('position' => null),
		),
	),

Hide missing patient demographics and forms:

	'params' => array(
		'hide_missing_demographics' => true,
		'hide_patientsummary_forms'=> true,
	),


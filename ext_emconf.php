<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Varnish Helper',
	'description' => 'Clears whole varnish cache on changes to pages table',
	'category' => 'misc',
	'version' => '0.0.1',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-7.9.99',
			'varnish'
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'state' => 'stable',
	'author' => 'Christoph Lehmann',
	'author_email' => 'post@christophlehmann.eu',
	'author_company' => 'networkteam GmbH',
	'_md5_values_when_last_written' => '',
	'uploadfolder' => false,
	'createDirs' => NULL,
	'clearcacheonload' => false,
);

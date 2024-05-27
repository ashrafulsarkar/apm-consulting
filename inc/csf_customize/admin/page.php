<?php
/**
 * APM Consulting Theme page option
 *
 * @package APM Consulting
 */
CSF::createSection( $prefix, array(
	'id'     => 'apm_site_page',
	'title'  => 'Page',
	'icon'   => 'fas fa-pager',
	'fields' => array(
		array(
			'id'      => 'apm-page-height',
			'type'    => 'dimensions',
			'title'   => 'Hero height',
			'output'  => '.apm-hero',
			'width'   => false,
			'default' => array(
				'height' => '428',
				'unit'   => 'px',
			),
		),
	),
) );

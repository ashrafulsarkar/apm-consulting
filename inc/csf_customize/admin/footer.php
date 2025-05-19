<?php
/**
 * APM Consulting Theme footer option
 *
 * @package APM Consulting
 */
CSF::createSection( $prefix, array(
	'id'     => 'apm_footer',
	'title'  => 'Footer',
	'icon'   => 'fa fa-home',
	'fields' => array(
		array(
			'id'       => 'apm-footer-logo',
			'type'     => 'media',
			'title'    => 'Logo',
			'subtitle' => esc_html__( '(153x40)px', 'apm' ),
			'url'      => false,
			'library'  => 'image',
		),
		array(
			'id'                     => 'apm-social-icons-list',
			'type'                   => 'group',
			'title'                  => 'Add Social Icon',
			'accordion_title_prefix' => 'Social Icon:',
			'fields'                 => array(
				array(
					'id'      => 'icon',
					'type'    => 'icon',
					'title'   => 'Social Icon',
					'default' => 'fab fa-linkedin-in',
				),
				array(
					'id'      => 'icon-link',
					'type'    => 'text',
					'title'   => 'Profile Url',
					'default' => '#',
				),
			),
		),
		array(
			'id'      => 'apm-address',
			'type'    => 'textarea',
			'title'   => 'Address',
			'default' => 'apm consulting (schweiz) ag</br>
Trottenstrasse 1</br>
8542 Wiesendangen</br>
Schweiz',
		),
		array(
			'id'      => 'apm-email',
			'type'    => 'text',
			'title'   => 'Email',
			'default' => 'apm@apmconsulting.ch',
		),
		array(
			'id'      => 'apm-phone',
			'type'    => 'text',
			'title'   => 'Phone',
			'default' => '+41(0) 56 610 08 91',
		),
		array(
			'id'      => 'apm-copyright',
			'type'    => 'text',
			'title'   => 'Copyright Text',
			'default' => 'info@excity.ch | Copyright © Excity Marketing',
		),
        array(
			'id'          => 'apm-footer-top-bg',
			'type'        => 'color',
			'title'       => 'Footer Top Background',
			'output'      => '.footer-top',
			'output_mode' => 'background-color',
			'default'     => '#262626'
		),
		array(
			'id'          => 'apm-footer-bottom-bg',
			'type'        => 'color',
			'title'       => 'Footer Bottom Background',
			'output'      => '.footer-bottom',
			'output_mode' => 'background-color',
			'default'     => '#333333'
		),
		array(
			'id'      => 'apm-shortcode',
			'type'    => 'text',
			'title'   => 'Load Shortcode Before Footer',
			'default' => '',
		),
	),
) );
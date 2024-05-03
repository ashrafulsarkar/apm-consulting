<?php
/**
 * APM Consulting Theme header option
 *
 * @package APM Consulting
 */
CSF::createSection( $prefix, array(
    'id'     => 'apm_header',
    'title'  => 'Header',
    'icon'   => 'fas fa-home',
    'fields' => array(
        array(
            'id'       => 'apm-header-logo',
            'type'     => 'media',
            'title'    => 'Header Logo',
            'subtitle' => esc_html__( '(153x40)px', 'apm' ),
            'url'      => false,
            'library'  => 'image',
        ),
        array(
            'id'       => 'apm-header-btn',
            'type'     => 'link',
            'title'    => 'Button',
            'default'  => array(
              'url'    => '#',
              'text'   => 'Demo anfordern'
            ),
        ),
    ),
) );

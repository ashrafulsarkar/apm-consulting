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
            'subtitle' => esc_html__( '(120x50)px', 'apm' ),
            'url'      => false,
            'library'  => 'image',
        ),
    ),
) );

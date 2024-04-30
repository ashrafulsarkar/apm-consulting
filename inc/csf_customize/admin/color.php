<?php
/**
 * APM Consulting Theme page option
 *
 * @package APM Consulting
 */
CSF::createSection( $prefix, array(
    'id'     => 'apm_site_color',
    'title'  => 'Color Settings',
    'icon'   => 'fas fa-eye-dropper',
    'fields' => array(
        array(
            'id'          => 'apm-primary-color',
            'type'        => 'color',
            'title'       => 'Primary Color',
            'default'     => '#BD1C00',
        ),
        array(
            'id'          => 'apm-secondary-color',
            'type'        => 'color',
            'title'       => 'Secondary Color',
            'default'     => '#333333',
        ),
        array(
            'id'          => 'apm-text-color',
            'type'        => 'color',
            'title'       => 'Text Color',
            'default'     => '#262626',
        ),
    ),
) );

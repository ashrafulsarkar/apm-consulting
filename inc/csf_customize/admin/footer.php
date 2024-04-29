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
            'id'      => 'apm-copyright',
            'type'    => 'text',
            'title'   => 'Copyright Text',
            'default' => 'info@excity.ch | Copyright © Excity Marketing',
        ),
    ),
) );
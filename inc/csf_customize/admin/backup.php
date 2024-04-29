<?php
/**
 * APM Consulting Theme page option
 *
 * @package APM Consulting
 */
CSF::createSection( $prefix, array(
    'id'     => 'apm_backup',
    'title'  => 'Backup Option',
    'icon'   => 'fas fa-download',
    'fields' => array(
        array(
            'type' => 'backup',
        ),
    ),
) );

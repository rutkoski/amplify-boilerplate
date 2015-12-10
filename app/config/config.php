<?php

/**
 * debug
 */

// sy_debug_level(SY_DEBUG_NONE);
// sy_debug_level(SY_DEBUG_ERRORS);
sy_debug_level(SY_DEBUG_ALL);

/**
 * db
 */

$config['database'] = array(
    'default' => array(
        '*' => array(
            'host' => 'localhost',
            'username' => '',
            'password' => '',
            'name' => '',
            'charset' => 'utf8'
        ),
        
        'production' => array(
            'host' => 'localhost',
            'username' => '',
            'password' => '',
            'name' => '',
            'charset' => 'utf8',
            'matchHost' => 'domain.com.br'
        )
    )
);

require_once ('routes.php');

<?php
if (! defined('SY_APP_DIR')) {
    die();
}

/**
 * routes
 */

Simplify::router()->match('/', array(
    'controller' => 'HomeController',
    'action' => 'index',
    'as' => 'home'
));

<?php

/**
 * routes
 */

Simplify::router()->match('/', array(
    'controller' => 'HomeController',
    'action' => 'index',
    'as' => 'home'
));

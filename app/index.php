<?php

define('SY_APP_DIR', preg_replace('#[\\\/]+#', '/', __dir__ . '/'));

require_once ('vendor/autoload.php');

Simplify::app()->dispatch();

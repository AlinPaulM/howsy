<?php
session_start();

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../app/core/bootstrap.php';

$app = new Router;
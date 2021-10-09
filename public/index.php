<?php

require '../vendor/autoload.php';
require '../bootstrap/bootstrap.php';

use App\helpers\Request;
use App\helpers\Router;

Router::load('../routes/routes.php')->direct(Request::getURI(), Request::getMethod());

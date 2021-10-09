<?php

use App\database\SQLiteConnector;
use App\helpers\QueryBuilder;
use bootstrap\App;

try {
    App::bind('config', require '../config/config.php');
    App::bind('database', new QueryBuilder(SQLiteConnector::connect(App::get('config')['database'])));
    App::bind('phone_numbers_validators', App::get('config')['phone_numbers_validators']);
    App::bind('countries', App::get('config')['countries']);
} catch (Exception $e) {
    error_log($e->getMessage());
}


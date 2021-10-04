<?php

use App\Controllers\ReportController;
use App\Controllers\UserController;

$router->get( BASE_URL . '/', [ UserController::class, 'index' ] );
$router->post( BASE_URL . '/', [ UserController::class, 'store' ] );
$router->get( BASE_URL . '/reports', [ ReportController::class, 'index' ] );
$router->post( BASE_URL . '/reports', [ ReportController::class, 'filterData' ] );

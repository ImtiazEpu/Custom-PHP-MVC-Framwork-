<?php
use App\Controllers\ReportController;
use App\Controllers\UserController;
$router->controller( '/', UserController::class);
$router->controller( '/reports', ReportController::class);
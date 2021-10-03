<?php
use App\Controllers\ReportController;
use App\Controllers\UserController;
$router->controller( '/', UserController::class);
$router->post( '/', [UserController::class,'store']);
$router->controller( '/reports', ReportController::class);
<?php
use App\Controllers\ReportController;
use App\Controllers\UserController;
$router->get( '/', [UserController::class,'index']);
$router->post( '/', [UserController::class,'store']);
$router->get( '/reports', [ReportController::class,'index']);
$router->post( '/reports', [ReportController::class,'filterData']);
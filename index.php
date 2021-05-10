<?php

use App\Controllers\TaskController;
use App\Core\Request;
use App\Core\Router;

require '_init.php';

Router::make()
    ->get('/', [TaskController::class, 'index'])
    ->post('/create', [TaskController::class, 'store'])
    ->get('/update', [TaskController::class, 'update'])
    ->get('/delete', [TaskController::class, 'delete'])
    ->resolve(
        Request::uri(),
        Request::method()
    );

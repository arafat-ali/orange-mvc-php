<?php

use App\Controllers\UserController;

return [
    "/users/get" => [UserController::class, 'get'],
    "/users/create" => [UserController::class, 'create']
];
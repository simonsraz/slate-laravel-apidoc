<?php

namespace Simonsraz\OwnLaravelPackageTemplate\Http\Controllers;

use Illuminate\Support\Facades\Route;
 
Route::get('own-laravel-package-template', [OwnLaravelPackageTemplateController::class, 'index']);

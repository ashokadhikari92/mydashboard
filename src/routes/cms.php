<?php

Route::middleware([])->namespace('MyPackage\Dashboard\Controllers')->prefix('cms')
    ->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });

<?php

namespace Tee\News;
use Route, Config;

Route::group(['prefix' => 'admin'], function() {
    Route::resource('news', __NAMESPACE__.'\Controllers\AdminController',
        ['except' => array('show')]
    );
});
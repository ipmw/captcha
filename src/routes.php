<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

$middleware = Config::get('captcha.middleware');

if ($middleware) {

    // 注册路由
    Route::get(Config::get('captcha.route', '/captcha'), 'Vicens\\Captcha\Controller\CaptchaController@image')
        ->middleware($middleware)
        ->name('route');
}
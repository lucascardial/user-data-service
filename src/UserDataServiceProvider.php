<?php

/**
 *  *  * Created by Agência CCM.
 * Author: Lucas Cardial <luccascardial@gmail.com>
 * Date: 31/01/2019
 * Time: 10:25
 */

namespace LucasCardial\UserDataService;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use LucasCardial\UserDataService\Middleware\UserDataMiddleware;

class UserDataServiceProvider extends ServiceProvider
{
    public function boot(Route $route)
    {
        $route->middleware([
            'userdata' => UserDataMiddleware::class
        ]);
    }
}
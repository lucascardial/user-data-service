<?php

/**
 *  *  * Created by Agência CCM.
 * Author: Lucas Cardial <luccascardial@gmail.com>
 * Date: 31/01/2019
 * Time: 10:22
 */

namespace LucasCardial\UserDataService\Middleware;


use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;
use LucasCardial\Contracts\IUserData;

class UserDataMiddleware
{
    private $context;

    /**
     * ContextMiddleware constructor.
     * @param $context
     */

    public function __construct(IUserData $context)
    {
        $this->context = $context;
    }

    public function handle(Request $request, Closure $next)
    {
        if (is_null($request->header('Authenticated-User')))
            abort(Response::HTTP_FORBIDDEN, 'No user specified');

        $this->context->setUser($request->header('Authenticated-User'));

        return $next($request);
    }
}
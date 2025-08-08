<?php

namespace Middlewares;

use EssentialMVC\App;
use EssentialMVC\Contracts\MiddlewareInterface;

class MaintenanceMiddleware implements MiddlewareInterface
{

    public function exec(App $app)
    {
        if (env('MAINTENANCE') === 'true' && $app->request->getRequestPath() !== '/coming-soon') {
            $app->response->redirect('/coming-soon');
        }
    }
}

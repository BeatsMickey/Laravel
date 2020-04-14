<?php

namespace App\Http\Middleware;

use App\Model\RoutesNameForCKeditor;
use Closure;


class CKeditorView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $routes = (new RoutesNameForCKeditor())->routes;
        foreach ($routes as $value) {
            if($request->fullUrl() === route($value)) {
                \View::share('ckeditor', true);
                return $next($request);
            };
        }
        \View::share('ckeditor', false);
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App;
use Closure;

class Localization
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
        $locale = session()->get('locale');
        if (session()->has('locale')) {
            App::setlocale($locale);
        } else {
            $locale = App::getLocale();
        }
        view()->share('locale', $locale);
        return $next($request);
    }
}

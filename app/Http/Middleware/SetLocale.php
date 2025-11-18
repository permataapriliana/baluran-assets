<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', config('app.locale', 'en'));
        App::setLocale($locale);
        Log::info('SetLocale middleware aktif: ' . $locale);
        return $next($request);
    }
}

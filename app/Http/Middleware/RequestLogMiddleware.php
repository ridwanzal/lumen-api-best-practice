<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class RequestLogMiddleware
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
        // Log request details
      Log::info('Request Logged:', [
          'method' => $request->getMethod(),
          'url' => $request->fullUrl(),
          'headers' => $request->header(),
          'body' => $request->all()
      ]);

      return $next($request);
    }
}

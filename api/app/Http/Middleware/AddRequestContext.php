<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

final class AddRequestContext
{
    public function handle(Request $request, Closure $next): Response
    {
        $requestId = Str::uuid()->toString();

        Context::add([
            'url' => $request->fullUrl(),
            'request-id' => $requestId,
        ]);

        // Log::info('Incoming request');

        $response = $next($request);

        $response->headers->set('X-Request-Id', $requestId);

        return $response;
    }
}

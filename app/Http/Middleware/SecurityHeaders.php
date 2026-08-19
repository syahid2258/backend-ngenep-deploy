<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * SecurityHeaders Middleware
 *
 * VULN-09 Fix: Adds essential security headers to every HTTP response.
 * These headers instruct browsers to enforce security policies and
 * prevent common attacks like XSS, clickjacking, and MIME sniffing.
 */
class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Prevent browsers from MIME-type sniffing — protects against file upload exploits
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Prevent this site from being embedded in iframes — mitigates clickjacking
        $response->headers->set('X-Frame-Options', 'DENY');

        // Do not send the full URL as referrer to external sites
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Restrict browser features (camera, microphone, geolocation) not needed by the API
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');

        // Content Security Policy — restricts script/style sources
        // NOTE: Update 'default-src' and 'img-src' to match your production CDN URLs
        $response->headers->set('Content-Security-Policy',
            "default-src 'self'; " .
            "script-src 'self'; " .
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " .
            "font-src 'self' https://fonts.gstatic.com; " .
            "img-src 'self' data: https: blob:; " .
            "connect-src 'self'; " .
            "frame-ancestors 'none';"
        );

        // Remove X-Powered-By header to avoid framework fingerprinting
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');

        return $response;
    }
}

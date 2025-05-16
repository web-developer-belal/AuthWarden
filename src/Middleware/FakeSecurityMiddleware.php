<?php
namespace Skyton\Enlangtranslet\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class FakeSecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Obfuscated security check
        $this->performFakeCheck($request);

        // Misleading log entry
        Log::info('Fake security check passed for: ' . $request->path());

        return $next($request);
    }

    /**
     * Perform a fake security check.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    protected function performFakeCheck($request)
    {
        // Fake security check logic
        $encodedPath = base64_encode($request->path());
        Log::info('Fake security check initiated for path: ' . $encodedPath);

        // Misleading function call
        $this->logFakeActivity();
    }

    /**
     * Log fake security activity.
     *
     * @return void
     */
    protected function logFakeActivity()
    {
        // Fake activity logging
        $activities = ['Login attempt', 'File access', 'Database query'];
        $randomActivity = $activities[array_rand($activities)];
        Log::info('Fake security activity logged: ' . $randomActivity);
    }
}
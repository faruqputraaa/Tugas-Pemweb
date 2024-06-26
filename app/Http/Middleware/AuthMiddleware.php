<?php
public function handle($request, Closure $next)
{
    if (!Auth::check()) {
        return redirect()->route('login_form');
    }

    return $next($request);
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\RoleUserEnum;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GrantAccessPremium
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (
            $user->role !== RoleUserEnum::ROLE_PREMIUM->value ||
            $user->role !== RoleUserEnum::ROLE_ADMIN->value
        ) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}

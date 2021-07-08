<?php

namespace App\Http\Middleware;

use App\Helpers\AppHelper;
use Closure;
use Illuminate\Http\Request;

class Subscribed {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next) {
		if ($request->user() && !$request->user()->isAdmin() && !$request->user()->team->subscribed('default')) {
			// This user is not a paying customer...
			return redirect('subscription');
		}

		return $next($request);
	}
}

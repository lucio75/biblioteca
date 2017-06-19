<?php

namespace App\Http\Middleware;

use Closure;

class ilCarrelloPieno
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
        $carrello=new \App\Models\Carrello;

        if ($carrello && $carrello->ePieno())
        {
            return $next($request);
        }
        return redirect('/');
    }
}

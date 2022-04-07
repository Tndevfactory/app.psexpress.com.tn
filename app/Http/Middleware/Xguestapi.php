<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;

class Xguestapi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $output = new ConsoleOutput();
        $output->writeln('ch debug xauthapi middleware');
        $output->writeln(cache()->get('user'));

       

        if(cache()->get('user')){

            return redirect()->route('home', cache()->get('language'));
            
        };

        return $next($request);
    }
}

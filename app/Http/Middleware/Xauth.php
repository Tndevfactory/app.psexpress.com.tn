<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;
class Xauth
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
  $output->writeln('ch debug xauth middleware');
  
  $output->writeln($request->all());
  $output->writeln(Auth::check());
  $output->writeln(auth()->user());
  $output->writeln(cache()->get('user'));

        if(!Auth::check()){

            return redirect()->route('login-init', $request->language);
            
        };
        return $next($request);
    }
}

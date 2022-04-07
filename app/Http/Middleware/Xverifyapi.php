<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;

class Xverifyapi
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


        $user=cache()->get('user');

        $output = new ConsoleOutput();
        $output->writeln('ch debug xverify middleware');
        $output->writeln($user);
        $output->writeln('email_verified_at');
        $output->writeln(!!$user->email_verified_at);
        // !!$u->email_verified_at


        if(is_null($user->email_verified_at)){

            return redirect()->route('verify', cache()->get('language'));
            // return view('verify');
            
        };

        return $next($request);
    }
}

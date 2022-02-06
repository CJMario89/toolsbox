<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\guest;
use Jenssegers\Agent\Agent;


class guestMiddleware
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
        $agent =new Agent();
        $task = $agent->platform();
        $br =$agent->browser();
        $dd = $agent->device();
        $ss ='';
        $robot ='';
        if ($agent->isRobot()) {
            $robot = '-'.$agent->robot();
            $data['isRobot']=1;
        }else if ($agent->isPhone()) {
            $ss ='-mobile';
            $data['isPhone']=1;
        }else{
            $data['isPC']=1;
        }
        $device = $task.'_'.$br.'-'.$dd.$ss.$robot;
        $data['url']=$request->url();
        $data['ip']=$request->ip();
        $data['device']=$device;
        guest::create($data);
        return $next($request);
    }
}

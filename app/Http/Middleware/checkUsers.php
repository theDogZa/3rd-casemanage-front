<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckUsers
{
    
/**
     
* Handle an incoming request.
     
*
     
* @param  \Illuminate\Http\Request  $request
     
* @param  \Closure  $next
     
* @return mixed
     
*/
    
    public function handle($request , Closure $next)   
    {
  
        if(!Session::get('user')){
            $userid = @$_REQUEST['userid'];
            $path =  storage_path() . "/json/users.json";
            $users = json_decode(file_get_contents($path), true); 
            if(@$users[$userid]){
                 Session::put('user', $users[$userid]);
            }
        }else{
            if(@$_REQUEST['userid'] != Session::get('user.id')){
                if(@$_REQUEST['userid']){
                    $userid = @$_REQUEST['userid'];
                    $path =  storage_path() . "/json/users.json";
                    $users = json_decode(file_get_contents($path), true); 
                    if(@$users[$userid]){
                        Session::put('user', $users[$userid]);
                    }else{
                        $request->session()->flush();
                        Session::forget('user');
                    }
                }
            }
        }

        if( Session::get('user') ){
            return $next($request);       
        }else{
            $request->session()->flush();
            Session::forget('user');
            return redirect()->to('login');
        }    
    }
}
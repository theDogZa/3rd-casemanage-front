<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Users extends Model
{
    
    public function scopeUser(){
        
        if(Session::get('user')){
            return  Session::get('user');
        }else{
            return 'null';
        }
        
    }

    public function scopeid(){
        if(Session::get('user')){
            return  Session::get('user.id');
        }else{
            return 'null';
        }
    }

    public function scopecheck(){
        if(Session::get('user')){
            return  true;
        }else{
            return false;
        }
    }
}

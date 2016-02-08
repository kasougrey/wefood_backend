<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test(){
        echo "test";
/*        return User::create([
            'name' => 'test',
            'email' => 'test1@ksren.com',
            'password' => bcrypt('wyyfinale'),
            'remember_token'=>'test',
        ]);*/

        $flight = User::find(1);
        $flight->name = 'New Flight Name';
        $flight->save();
    }
}

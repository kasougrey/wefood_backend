<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index(){
        $users = DB::table('users')->where('name','sdaf')->lists('name');

        dump($users);
    }
    public function create(){
        dump(class_basename('Foo\Bar\Baz'));
        dump(asset('img/photo.jpg'));
        dump(csrf_token());
        return 'create';
    }
}

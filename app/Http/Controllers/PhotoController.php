<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index(){
        return 'index';
    }
    public function create(){
        return 'create';
    }
}
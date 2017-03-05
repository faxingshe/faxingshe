<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category as Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function lists(){

    }


    public function test(){
        return view('test.test2');
    }
}

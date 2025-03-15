<?php

namespace App\Http\Controllers;

use App\Models\tests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $test = tests::paginate(5); //all();


        return view("tests.index", ['tests' => $test]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test() {
        return view('testPage');
        }

    public function test2() {
        $alltest = \App\Models\Test::all();
        return response($alltest);
    }
}

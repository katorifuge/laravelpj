<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index() {
        $data = [
            'index' => 2,
        ];
        return view('test',$data);
    }
}

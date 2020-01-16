<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request){
        $data = [
            'data' => 'data1',
        ];
        return $this->renderPage($request, 'test.index', $data);
    }

    public function test1(Request $request){
        $data = [
            'data' => 'data1',
        ];
        return $this->renderPage($request, 'test.test1', $data);
    }

    public function test2(Request $request){
        $data = [
            'data' => 'data1',
        ];
        return $this->renderPage($request, 'test.test2', $data);
    }
}

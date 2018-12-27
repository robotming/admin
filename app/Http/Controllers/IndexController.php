<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * 首页
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {

        return view('index.index');
    }
}

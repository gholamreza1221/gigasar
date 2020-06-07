<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }
}

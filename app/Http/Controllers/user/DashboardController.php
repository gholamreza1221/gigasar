<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Controllers\site\BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function eatingGig()
    {
        return view('user.eatingGig');
    }

    public function proposal()
    {
        return view('user.propoal');
    }
}

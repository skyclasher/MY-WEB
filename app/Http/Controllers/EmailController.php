<?php

namespace App\Http\Controllers;

use View;
use App\Models;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class EmailController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function email_hdl()
    {
        return view('home');
    }
}

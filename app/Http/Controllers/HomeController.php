<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $planData = DB::table('plans')->get();
        return view('web.home', compact('planData'));
    }
}

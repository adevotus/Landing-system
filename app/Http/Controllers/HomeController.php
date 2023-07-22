<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function generalinformation(){
        return view('user.userdeskhelp.generalInformation');
    }

    public function howtoapplyjob(){
        return view('user.userdeskhelp.howtoapply');
    }

    public function interview(){
        return view('user.userdeskhelp.interview');
    }
    public function viewjob()
    {
        return view('viewjob');
    }
    public function postdeatail()
    {
        return view('postdetails');
    }


}

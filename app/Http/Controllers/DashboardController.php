<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
    // $data['companies'] = Company::orderBy('id','desc')->paginate(5);
    // return view('companies.index', $data);
        return view('dashboard');
    }

    // public function index()
    // {
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    //
    public  function create()
    {
        # code...
        return view('loan.create');
    }
 
}

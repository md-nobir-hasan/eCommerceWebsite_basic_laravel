<?php

namespace App\Http\Controllers;
use App\Models\model1;
use Illuminate\Http\Request;

class db2uiController extends Controller
{
    function show()
    {


            $product2home = model1::all();;
            return view('home',compact('product2home'));


    }

}

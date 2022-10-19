<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function getData(Request $request, $name)
    {
        $a = 'xin 1 chao';
        echo "" . $a . $name;
        echo "<br>" . $request->url();
        dd($request);
    }
}
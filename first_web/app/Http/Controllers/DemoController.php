<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class DemoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function upload(Request $request)
    {
        $filename = time()."-kazi.".$request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('public/upload',$filename);
    }


    public function data()
    {
        return member::with('getGroup')->get();

    }
}

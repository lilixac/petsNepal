<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
   
    public function index()
    {
        $title = "Pets Nepal Homepage";
        return view("pages.index")->with('title',$title);
    }
}

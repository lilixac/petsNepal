<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
   
    public function index()
    {
        $title = "Pets Nepal Homepage";
        return view("pages.index")->with('title',$title);
    }

    public function about()
    {
        $title = "About Pets Nepal";

    }

    public function blog()
    {
        $title = "Blog | Pets Nepal";
        return view("pages.index")->with('title',$title);
    }

    public function contactus()
    {
        $title = "Contact us | Pets Nepal";
        return view('pages.contactus')->with('title',$title);
    }
}

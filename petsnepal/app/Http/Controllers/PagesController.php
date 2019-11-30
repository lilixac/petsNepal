<?php

namespace App\Http\Controllers;
use DB;

class PagesController extends Controller
{
   
    public function index()
    {
        $title = "Pets Nepal Homepage";
        return view("pages.index")->with('title',$title);
    }

    public function aboutus()
    {
        $title = "About Pets Nepal";
        return view("pages.aboutus")->with('title',$title);

    }

    public function blogs()
    {
        $title = "Blogs | Pets Nepal";
    
        return view("pages.blogs")->with('title',$title);
    }

    public function addblog()
    {
        $title = "Add Blog | Pets Nepal";
        return view('pages.addblog')->with('title',$title);
    }

    public function insertblog()
    {
        $name = $_GET["title"];
        $email = $_GET["description"];

        DB::insert("insert into blogs values(?,?,now())",[$title,$description]);

        return redirect("/blogs");
    }

    public function contactus()
    {
        $title = "Contact us | Pets Nepal";
        return view('pages.contactus')->with('title',$title);
    }

    public function adoption()
    {
        $title = "Adoption | Pets Nepal";
        return view('pages.adoption')->with('title',$title);
    }

    public function sendmsg()
    {

        $name = $_GET["name"];
        $email = $_GET["email"];
        $location = $_GET["location"];
        $message = $_GET["message"];

        DB::insert("insert into messages values(?,?,?,?)",[$name,$email,$location,$message]);

        return redirect("/contactus");
    }
    
    public function dashboard()
    {
        $title = "Dashboard | Pets Nepal";
        return view('pages.dashboard')->with('title',$title);
    }

    public function cpanel()
    {
        $username = $_GET["email"];
        $password = $_GET["password"];

        if($username=="petsnepal" && $password=="12345")
        {
            return view("pages.addblogs")->with("title","Add Blogs");
        }
        else
        {
            echo "Incorrect credentials.";
        }
    }

    public function marketplace()
    {
        $title = "Marketplace | Pets Nepal";
        return view('pages.marketplace')->with('title',$title);

    }
}

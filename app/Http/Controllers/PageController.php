<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Index()
    {
        $title='Welcome To Laravel!!';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $title="About";
        return view('pages.about')->with('title',$title);
    }
    public function services()
    {
        $data=array(
            'title' => 'Services',
            'services' => ['web designing','programing','SEO']
        );
        return view('pages.services')->with($data);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $products1 = DB::table("projects")->get();
        return view('pages.projects.projects',['pr1'=>$products1]);
    }
    public function adminindex()
    {
        $products1 = DB::table("projects")->get();
        return view('pages.admin.projects.projects',['pr1'=>$products1]);
    }
    public function adminshow($id)
    {
        $products1 = DB::table("projects")->where("id","=",$id)->get();
        return view('pages.admin.projects.projects_show',['pr1'=>$products1]);
    }
}
